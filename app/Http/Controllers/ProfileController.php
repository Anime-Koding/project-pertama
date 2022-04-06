<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Award;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\FeatureGroup;
use App\Models\Interest;
use App\Models\Language;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Reference;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Visitor;
use App\Traits\HasAssign;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        // dd(request()->session()->get('visitor'));
        $public = $this->getFirstPublicByIdUser($user->id);
        $ft = FeatureGroup::findOrFail($public);
        if ($ft->layout_id == null) return redirect()->route("setlayout")->with("info", "silahkan pilih tema public resume");
        if (request()->session()->get('visitor') !== null) {
            $v = request()->session()->get('visitor');
            // check visitor exist or not
            $ch = Visitor::where("user_id", $user->id)->where("id", $v->id)->first();
            request()->session()->forget('visitor');
            if ($ch !== null) {
                // refresh visitor
                $f = Visitor::findOrFail($v->id);
                $public = $f->group[0]->id;
                request()->session()->put('visitor', $f);
            }
        }

        $experiences = Experience::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->select("job_title", "company_name", "from_date", "to_date", "detail")->where("user_id", $user->id)->orderBy("from_date", "asc")->where("status", 1)->get();

        $educations = Education::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->select("degree_name", "institution_name", "from_date", "to_date", "detail")->where("user_id", $user->id)->orderBy("from_date", "asc")->where("status", 1)->get();

        $references = Reference::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->select("name", "phone", "email", "details")->where("user_id", $user->id)->orderBy("order", "asc")->where("status", 1)->get();


        $clients = Client::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->select("client_name", "url", "image")->where("user_id", $user->id)->where("status", 1)->get();

        $languages = Language::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->select("title", "level", "order")->where("user_id", $user->id)->where("status", 1)->get();

        $category_portfolio = PortfolioCategory::WhereHas("portfolios.group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->where("status", 1)->where("user_id", $user->id)->get();

        $portfolio = Portfolio::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })
            ->whereHas("portfolio_category", function ($v) {
                $v->where("status", 1);
            })
            ->with("portfolio_category")->where("user_id", $user->id)->where("status", 1)->orderBy("order", 'asc')->get();

        $interest = Interest::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->where("user_id", $user->id)->where("status", 1)->orderBy("order", 'asc')->get();

        $award = Award::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->where("user_id", $user->id)->where("status", 1)->orderBy("order", 'asc')->get();

        $service = Service::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->where("user_id", $user->id)->where("status", 1)->get();

        $blog = Blog::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })
            ->whereHas("blog_categories", function ($v) {
                $v->where("status", 1);
            })
            ->with("blog_categories")->where("user_id", $user->id)->get();

        $testimonial = Testimonial::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->where("user_id", $user->id)->where("status", 1)->get();

        $skill = Skill::whereHas("group_feature", function ($v) use ($public) {
            $v->where("feature_group_id", $public);
        })->where("skill_level", null)->orderBy('order', 'asc')->where("user_id", $user->id)->where("status", 1)->with("skill")->whereHas("skill", function ($q) {
            $q->where("status", 1);
            $q->orderBy("order", 'asc');
        })->get();

        return view("profile", compact("user", "experiences", "educations", "references", "clients", "category_portfolio", "portfolio", "award", "service", "interest", "blog", "testimonial", "skill", "languages"));
    }

    public function visitor(Request $request, User $user)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'whatapp' => 'required'
        ]);
        $visitor = Visitor::where($validated)->first();
        if ($visitor == null) {
            $model = new Visitor();
            $visitor = $model->firstOrNew($validated + ["user_id" => $user->id]);
            $visitor->nama = $validated["nama"];
            $visitor->whatapp = $validated["whatapp"];
            $visitor->user_id = $user->id;
            $visitor->save();
            $public = $this->getFirstPublicByIdUser($user->id);
            $visitor->group()->attach($public);
        }

        request()->session()->put('visitor', $visitor);
        return redirect()->route("profile", $user->username);
    }

    public function contact(User $user, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);
        $contact = new Contact($validated);
        $user->contacts()->save($contact);
        return redirect()->route("profile", $user->username)->with("success", "thanks for send message :)");
    }

    public function appointment(User $user, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'email' => 'required|email',
            'book_date' => 'required',
            'book_time_start' => 'required',
            'book_time_end' => 'required',
        ]);

        $appointment = new Appointment($validated);
        $user->appointments()->save($appointment);
        return redirect()->route("profile", $user->username)->with("success", "thanks for send appointment :)");
    }
}
