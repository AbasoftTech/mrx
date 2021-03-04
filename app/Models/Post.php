<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Traits\Translatable;

class Post extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title','seo_title','excerpt','body','slug','meta_description','meta_keywords'];

    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
