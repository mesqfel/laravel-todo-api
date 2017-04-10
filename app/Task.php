<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'day', 'finished'
    ];

    public function getDayAttribute($value)
    {
        return ucfirst($value);
    }

    public function setDayAttribute($value)
    {
        $this->attributes['day'] = strtolower($value);
    }

}
