<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'slug',
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
