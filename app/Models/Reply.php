<?php

namespace App\Models;

// app/Models/Reply.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = ['message_id', 'admin_id', 'reply'];

    public function message()
    {
        return $this->belongsTo(Message::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}

