<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign;

class DatabaseUser extends Model
{
    use HasFactory;
    protected $table = 'database_users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'entry_date',
        'respondent_code',
        'respondent_name',
        'province',
        'district',
        'districts',
        'ward',
        'address',
        'phone',
        'email',
        'gender',
        'age',
        'marital_status',
        'family_members',
        'education',
        'occupation',
        'expense',
        'source_water',
        'source_energy',
        'filename',
        'status',
        'created_at',
        'updated_at',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'id', 'id');
    }
}
