<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketDetails extends Model {
	protected $fillable = [ 'os', 'issue', 'status'];

    protected $table = 'ticket_details';

	public function user () {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }


}
