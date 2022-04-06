<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PortfolioCategory extends Model
{
    use HasFactory;
    protected $fillable = ["user_id","category_name","status"];

    /**
     * Get all of the portfolios for the PortfolioCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class);
    }
}
