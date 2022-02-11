<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Brand extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'title', 'link', 'description', 'category_id', 'media_id', 'status'
    ];

    protected $appends  = ['icon'];

    const STATUS_ACCEPTED = 'accepted';
    const STATUS_REJECTED = 'rejected';
    const STATUS_PENDING = 'pending';

    static $statuses = [self::STATUS_ACCEPTED, self::STATUS_REJECTED, self::STATUS_PENDING];


    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function getIconAttribute()
    {
        if (!is_null($this->media)) return $this->media->thumb();

        return "";
    }


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
