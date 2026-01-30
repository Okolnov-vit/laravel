<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'description', 'price', 'image'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
  /*
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (request()->hasFile('image')) {
                // В этом месте Laravel-Admin сам обработает загрузку
            } elseif (request()->has('image') && empty(request()->get('image'))) {
                // Можно оставить поле пустым или его очистить
            }
        });
    }
        */
}
