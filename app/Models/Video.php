<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ItemsController;

class Video extends Model

{
    protected $fillable = [
        'title',
        'url',
        'description',
        
    ];
    use HasFactory;

/* kto dodal film */

    public function user ()
    {
        return $this-> belongsTo('App\Models\User');
    }

}



