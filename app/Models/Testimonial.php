<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = ["image","user_id","feedback_title","feedback","status","client_name","thumb"];

    public function group_feature()
    {
        return $this->belongsToMany(FeatureGroup::class,"feature_group_modul_feature","modul_feature_id","feature_group_id")->wherePivot("type",11);
    }
}
