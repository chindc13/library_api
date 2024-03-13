<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'library_id', 'is_available'];

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'borrowings')->withPivot('borrowed_at', 'returned_at');
    }
}
