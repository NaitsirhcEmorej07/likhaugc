<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UgcCreatorProfile extends Model
{
    protected $table = 'ugc_creator_profiles';

    protected $fillable = [
        // STEP 1
        'full_name',
        'username',
        'email',
        'niches',
        'bio',
        'avatar',
        'tiktok',
        'instagram',
        'facebook',
        'youtube',

        // STEP 2
        'primary_color',
        'secondary_color',
        'font_style',
        'button_radius',

        // STEP 3
        'portfolio_sections',
        'drive_link',

        // STEP 4
        'contact_email',
        'mobile_number',
        'additional_notes',
        'status',

    ];

    protected $casts = [

        'niches' => 'array',

        'portfolio_sections' => 'array',

    ];
}
