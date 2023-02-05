<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CandidateProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'user_id',
        'email',
        'dob',
        'phone_number',
        'about',
        'key_skills',
        'work_exp_range_from',
        'work_exp_range_to',
        'salary_currency',
        'expected_salary',
        'location',
        'is_willing_to_relocate',
        'industry',
        'functional_area',
        'address',
        'resume',
        'current_company',
        'current_department',
        'is_enabled',
    ];

    protected $casts = [
        'key_skills' => 'array'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
