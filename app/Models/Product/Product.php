<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
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
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function media()
    {
        return $this->hasMany(ProductMedia::class);
    }

    public function posts_trans()
    {
        return $this->hasOne(ProductTranslation::class);
    }

    public function setTranslation($data){

        $data = Arr::add($data,'post_id',$this->getKey());
        ProductTranslation::create($data);
    }

    public function updateTranslation($data){

        // dd($data);
        $data = Arr::add($data,'product_id',$this->getKey());
        $item=ProductTranslation::where('product_id','=',$this->getKey())
            ->where('lang','=','en')
            ->where('translatable_attribute','=',$data['translatable_attribute'])
            ->first();
        $item->update($data);
    }
}

