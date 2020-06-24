<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = "survey";
    public $fillable = [
        "name",
        "email",
        "telephone",
        "feedback"
    ];
}
