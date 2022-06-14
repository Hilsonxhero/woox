<?php

namespace App\Models;

use App\Traits\HasMeta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory, SoftDeletes, Sluggable, HasMeta;

    protected $fillable = [
        'title',
        'link',
        'description',
        'parent_id',
        'media_id',
        'status'
    ];

    const PUBLISHED_STATUS = 'published';
    const UNPUBLISHED_STATUS = 'unpublished';

    static $statuses = [self::PUBLISHED_STATUS, self::UNPUBLISHED_STATUS];

    protected $appends  = ['icon'];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('children');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    public function meta()
    {
        return $this->morphMany(Meta::class, 'metable');
    }



    public function getIconAttribute()
    {
        if (!is_null($this->media)) return $this->media->thumb();

        return "";
    }

    /**
     * Return the metable configuration for this model.
     *
     * @return bool
     */

    public function hasMeta($key)
    {
        $meta = $this->meta;

        foreach ($meta as $item) :
            if ($item->name == $key) return true;
        endforeach;

        return false;
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
