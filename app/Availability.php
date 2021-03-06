<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $fillable = ['availability'];

    protected $primaryKey = 'candidateId';
    public function user() {
        return $this->belongsTo('App\User', 'userId', 'userId');
    }

    public function candidate() {
        return $this->belongsTo('App\Candidate', 'candidateId', 'candidateId');
    }
}
