<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Category extends Model
{
    protected $fillable = ['name','status'];
    public function Post()
    {
        $this->hasMany(Post::class);
    }
}