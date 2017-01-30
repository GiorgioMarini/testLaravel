<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User'); //stabilisce una relazione
    }
    
    public function getTitle()
    {
        return $this->title; //accede ai contenuti del database
    }
}
