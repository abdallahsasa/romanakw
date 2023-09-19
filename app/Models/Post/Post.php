<?php

namespace App\Models\Post;

use App\models\ProductTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    use HasFactory;
    public $translatable = ['title', 'description', 'excerpt', 'meta_title', 'meta_description'];

    protected $fillable = [
        'title',
        'slug',
        'description',
        'excerpt',
        'category_id',
        'featured_image_name',
        'featured_image_url',
        'status',
        'video_link',
        'meta_title',
        'meta_description',
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    public function tags()
    {
        return $this->hasMany(PostTags::class);
    }

    public function views()
    {
        return $this->hasMany(PostView::class);
    }

    public function likes()
    {
        return $this->hasMany(PostLike::class);
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }
    public function posts_trans()
    {
        return $this->hasOne('App\models\Post\PostTranslation');
    }

    public function setTranslation($data){

        $data = Arr::add($data,'post_id',$this->getKey());
        PostTranslation::create($data);
    }

    public function updateTranslation($data){

        // dd($data);
        $data = Arr::add($data,'product_id',$this->getKey());
        $item=PostTranslation::where('product_id','=',$this->getKey())
            ->where('lang','=','en')
            ->where('translatable_attribute','=',$data['translatable_attribute'])
            ->first();
        $item->update($data);
    }
}

