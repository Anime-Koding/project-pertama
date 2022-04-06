<?php

namespace App\Models;

use App\Traits\HasFeatures;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory, HasFeatures;
    protected $fillable = ["nama","whatapp","user_id"];

    public function group()
    {
        return $this->belongsToMany(FeatureGroup::class);
    }
}
