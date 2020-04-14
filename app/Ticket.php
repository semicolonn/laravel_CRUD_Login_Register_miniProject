<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Ticket as Authenticatable;

class Ticket extends Model
{
	protected $table = 'tickets'; 

    protected $fillable=['title','content','slug','status','user_id'];

}
