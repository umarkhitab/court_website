<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class judicial_officers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_of_judges', 'desgination_judge','jud_officers_id'
    ];
}
