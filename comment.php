<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    const CREATED_AT = 'CreationDate';

    protected $fillable = [
        'score' ,'text'];
}
