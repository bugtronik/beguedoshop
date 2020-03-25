<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'texte',
        'email',
        'ad_id',
    ];

    /**
     * Get the ad that owns the message
     */
    public function ad () {
        return $this->belongsTo(Ad::class);
    }
}
