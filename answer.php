<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    const answer_true = 'acceptable_answer';
    const answer_false  = 'Unacceptable_answer';
    const CREATED_AT = 'CreationDate';


    protected $fillable = [
        'answerBody'];
}
