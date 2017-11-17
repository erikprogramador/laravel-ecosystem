<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function getTwitterTagAttribute()
    {
        return '@' . str_replace('https://twitter.com/', '', $this->attributes['twitter']);
    }

    public function getGithubTagAttribute()
    {
        return str_replace('https://github.com/', '', $this->attributes['github']);
    }
}
