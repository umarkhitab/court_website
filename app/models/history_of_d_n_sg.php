<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class history_of_d_n_sg extends Model
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
