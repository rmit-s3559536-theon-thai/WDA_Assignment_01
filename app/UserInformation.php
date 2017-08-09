<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    protected $fillable = [ 'email', 'fname', 'lname', 'studentno' ];

    public function ticket_number() {
        return $this->hasMany('App\TicketDetails');
    }
}
