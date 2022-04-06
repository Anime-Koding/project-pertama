<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;
    protected $connection = 'auth_db';
    protected $fillable = ["user_id", "first_name", "last_name", "phone", "thumb", "designation", "about_me", "province", "city", "address", "skype", "whatapp", "facebook", "twitter", "linkedin", "instagram", "resume", "country_id"];

    /**
     * Get the country that owns the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
