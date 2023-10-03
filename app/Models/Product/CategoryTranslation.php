<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    protected $fillable=['name','slug','description','meta_title','meta_description','category_id','language_id'];
    use HasFactory;
}
