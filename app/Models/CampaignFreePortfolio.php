<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignFreePortfolio extends Model
{
    protected $table = 'campaign_free_portfolios';

    protected $fillable =
    [
        'full_name',
        'email',
        'facebook_link',
        'social_link',
        'why_need',
        'why_deserve',
    ];
}
