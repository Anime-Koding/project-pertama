<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "name", "phone", "email", "details", "order", "status"];

    public function group_feature()
    {
        return $this->belongsToMany(FeatureGroup::class, "feature_group_modul_feature", "modul_feature_id", "feature_group_id")->wherePivot("type", 12);
    }

    public function referenceable()
    {
        return $this->morphTo();
    }
}
