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
        "project_image_url",
        "keywords",
        "github_icon_url",
        "google_play_icon_url",
        "github_url",
        "google_play_url",
    ];
}
