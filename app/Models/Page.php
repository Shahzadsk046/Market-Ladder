<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function default_page()
    {
        return $this->hasMany(DefaultPage::class);
    }
    public function internal_page()
    {
        return $this->hasMany(InternalPage::class);
    }
    public function static_page()
    {
        return $this->hasMany(StaticPage::class);
    }
}
