<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketDetails extends Model {
	protected $fillable = [ 'os', 'issue'];

	public function user () {
        return $this->belongsTo('App\UserInformation');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }


}
