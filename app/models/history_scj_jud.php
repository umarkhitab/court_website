<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class history_scj_jud extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_of_officer', 'from', 'to',
    ];
}
