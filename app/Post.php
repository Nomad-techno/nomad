<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;
class Post extends Model
{
    protected $fillable = ['name','banner','status'];
    public function Category()
    {
        $this->belongsTo(Category::class);
    }
    public function User()
    {
        $this->hasMany(User::class);
    }
}
