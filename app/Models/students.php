<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $primaryKey = 'student_id';
    public $incrementing = false;

    public function books()
    {
        return $this->belongsToMany(books::class, 'book_students');
        
    }

    public function readingLists()
    {
        return $this->belongsToMany(books::class, 'reading_lists');
    }

}
