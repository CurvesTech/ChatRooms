<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $guarded = false;
    /** @use HasFactory<\Database\Factories\MessageFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room() 
    {
        return $this->belongsTo(Room::class);
    }

    public function createdAtHuman(): string
    {
        $day = match(true) {
            $this->created_at->isToday() => 'Today',
            $this->created_at->isYesterday() => 'Yesterday',
            default => $this->created_at->toDateString()
        };

        return $day . ' ' . $this->created_at->toTimeString('minute');
    }
}
