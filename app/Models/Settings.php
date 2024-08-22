<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable = [
        "first_english_name",
        "first_greek_name",
        "last_name",
        "job_title",
        "location",
        "phone",
        "email",
        "languages",
        "birth_date",
        "github_url",
        "stack_overflow_url",
        "linkedin_url",
        "google_play_url"
    ];
}
