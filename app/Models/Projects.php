<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        "project_name",
        "project_description",
        "project_image",
        "keywords",
        "github_url",
        "google_play_url"
    ];
}
