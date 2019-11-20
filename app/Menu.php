<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded=[];
    public function hasParent()
    {
        return $this->hasOne(Menu::class, 'parent', 'id');
    }
    public function submenu()
    {
        return $this->hasMany(Menu::class, 'parent');
    }
}
