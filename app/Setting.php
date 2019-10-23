<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        
        'name', 'email', 'description', 'key_words', 'icon', 'status', 'message_maintenance'
    

];
}
