<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageModel extends Model
{
    protected $table="message_models";

 	protected $fillable = [
        'name','phone','email'
    ];
}
