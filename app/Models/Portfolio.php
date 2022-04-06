<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ["user_id","portfolio_category_id","project_name","project_url","from_date","to_date","image","thumbnail","details","order","status"];

    /**
     * Get the portfolio_category that owns the Portfolio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portfolio_category(): BelongsTo
    {
        return $this->belongsTo(PortfolioCategory::class);
    }

    public function group_feature()
    {
        return $this->belongsToMany(FeatureGroup::class,"feature_group_modul_feature","modul_feature_id","feature_group_id")->wherePivot("type",5);
    }
}
