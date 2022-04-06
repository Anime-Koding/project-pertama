<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Feature;
use App\Models\FeatureGroup;
use App\Traits\HasAssign;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use HasAssign;
    public function index()
    {
        $countries = Country::all();
        $feature = Feature::whereIn("id", [5, 14])->get();
        $group = null;

        if ($this->group()) {
            $group = $this->group()->features->whereIn("id", [5, 14])->pluck("id");
        }
        return view('dashboard', compact("countries", "feature", "group"));
    }

    public function update_public(Request $request)
    {
        $validated = $request->validate([
            'feature' => 'nullable',
            'feature.*' => 'nullable',
        ]);
        $feature = isset($validated["feature"]) ? $validated["feature"] : [];
        $group = $this->group();
        $group->features()->sync($feature);
        return redirect()->route("dashboard")->with("success", "berhasil update public");
    }

    public function group()
    {
        $data = $this->getFirstPublicByIdUser(auth()->user()->id);
        $group = FeatureGroup::find($data);
        return $group;
    }
}
