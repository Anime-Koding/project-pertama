<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = ["user_id","skill_id","skill_name","slug","skill_level","order","status"];

    /**
     * Get the skill that owns the Skill
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skill()
    {
        return $this->hasMany(Skill::class);
    }

    public function group_feature()
    {
        return $this->belongsToMany(FeatureGroup::class,"feature_group_modul_feature","modul_feature_id","feature_group_id")->wherePivot("type",3);
    }
}
