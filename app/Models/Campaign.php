<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $table = 'campaigns';
    protected $primaryKey = 'id';
    protected $fillable = [
        'campaign_name',
        'client_name',
        'setup_domicile',
        'setup_age_start',
        'setup_age_end',
        'setup_gender',
        'setup_profession',
        'setup_martial_status',
        'setup_age_married',
        'setup_total_respondent',
        'setup_respondent_blacklist',
        'message',
        'status',
        'total_blasting',
        'blasting_endtime',
        'created_at',
        'updated_at',
    ];
}
