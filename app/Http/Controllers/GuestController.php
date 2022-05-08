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

class GuestController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('terms');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function help()
    {
        return view('help');
    }

}
