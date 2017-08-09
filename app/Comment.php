<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    protected $fillable = ['comment' ];


    public function comment_id() {
        return $this->belongsTo('App\TicketDetails');
    }

}
