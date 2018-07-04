<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $fillable = [
        'name', 'admin_id', 'category_id', 'brand_id', 'price', 'old_price', 'availability', 'quick_overview', 'detail', 'quantity',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin');
    }
    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }
    public function brand()
    {
    	return $this->belongsTo('App\Models\Brand');
    }
    public function images()
    {
        return $this->hasMany('App\Models\Productphoto');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
