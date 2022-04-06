<?php

namespace App\Traits;

use App\Models\Award;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Education;
use App\Models\Feature;
use App\Models\FeatureGroup;
use App\Models\Experience;
use App\Models\Interest;
use App\Models\Language;
use App\Models\Portfolio;
use App\Models\Reference;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Support\Arr;

trait HasAssign
{
    public function attach_modul($request, $data_modul, $model)
    {
        try {
            $group = isset($request["group"]) ? $request["group"] : [];
            $modul = $this->Getmodul($data_modul, $model);
            $modul["modul"]->group_feature()->attach($group, ["type" => $modul["type"]]);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function sync_modul($request, $data_modul, $model)
    {
        try {
            $group = isset($request["group"]) ? $request["group"] : [];
            $modul = $this->Getmodul($data_modul, $model);
            // $modul["modul"]->group_feature()->wherePivot("type",$modul["type"])->syncWithPivotValues($group,['type' => $modul["type"]]);
            $modul["modul"]->group_feature()->syncWithPivotValues($group, ['type' => $modul["type"]]);
            return true;
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function detach_modul($modul)
    {
        try {
            $modul->group_feature()->detach();
            return true;
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function GetGroupActive()
    {
        $group = FeatureGroup::where(["user_id" => auth()->user()->id, "active" => 1])->get();
        return $group;
    }

    public function getFirstPublic()
    {
        $collection = collect($this->GetGroupActive())->first(function ($value, $key) {
            return $value->name == "public";
        });
        return $collection->id;
    }

    public function getFirstPublicByIdUser($userId)
    {
        $group = FeatureGroup::where(["user_id" => $userId, "active" => 1])->get();
        $collection = collect($group)->first(function ($value, $key) {
            return $value->name == "public";
        });

        return optional($collection)->id;
    }

    public function getGroupModul($model)
    {
        $groupModulData = $model->group_feature->pluck("id")->toArray();
        return $groupModulData;
    }

    private function Getmodul($data_modul, $model)
    {
        switch ($model) {
            case 'experience':
                $modul["modul"] = Experience::findOrFail($data_modul);
                $modul["type"] = 1;
                break;
            case 'education':
                $modul["modul"] = Education::findOrFail($data_modul);
                $modul["type"] = 2;
                break;
            case 'skill':
                $modul["modul"] = Skill::findOrFail($data_modul);
                $modul["type"] = 3;
                break;
            case 'service':
                $modul["modul"] = Service::findOrFail($data_modul);
                $modul["type"] = 4;
                break;
            case 'portfolio':
                $modul["modul"] = Portfolio::findOrFail($data_modul);
                $modul["type"] = 5;
                break;
            case 'interest':
                $modul["modul"] = Interest::findOrFail($data_modul);
                $modul["type"] = 6;
                break;
            case 'award':
                $modul["modul"] = Award::findOrFail($data_modul);
                $modul["type"] = 7;
                break;
            case 'language':
                $modul["modul"] = Language::findOrFail($data_modul);
                $modul["type"] = 8;
                break;
            case 'post':
                $modul["modul"] = Blog::findOrFail($data_modul);
                $modul["type"] = 9;
                break;
            case 'client':
                $modul["modul"] = Client::findOrFail($data_modul);
                $modul["type"] = 10;
                break;
            case 'testimonial':
                $modul["modul"] = Testimonial::findOrFail($data_modul);
                $modul["type"] = 11;
                break;
            case 'reference':
                $modul["modul"] = Reference::findOrFail($data_modul);
                $modul["type"] = 12;
                break;
        }
        return $modul;
    }
}
