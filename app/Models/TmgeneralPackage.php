<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TmgeneralPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'n_title',
        'n_detail',
        'i_entry'
    ];

    protected $hidden =[];
}
