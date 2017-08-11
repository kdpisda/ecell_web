<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    // protected $visible = [
    //     'id', 'title','slug','body'
    // ];

    protected $hidden = [
        'created_at'
    ];
}
