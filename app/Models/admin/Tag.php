<?php

namespace App\Models\admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    use Sluggable;

    public $timestamps = false;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = ['title', 'color', 'title_ru'];

    public function items()
    {
        return $this->belongsToMany(
            Item::class,
            'items_tags',
            'tag_id',
            'item_id'
        );
    }

}
