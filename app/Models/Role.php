<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $guarded = [];


    public static $ADMIN =2;
    public static $USER =1;


    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }

}
