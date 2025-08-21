<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProject extends Model
{
    protected $table = 'project_categories';

    protected $fillable = [
        'name',
        'description',
    ];

    function projects()
    {
        return $this->belongsToMany(Project::class, 'project_category_project', 'category_id', 'project_id');
    }
}
