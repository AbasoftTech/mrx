<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Post extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title','seo_title','excerpt','body','slug','meta_description','meta_keywords'];
}
