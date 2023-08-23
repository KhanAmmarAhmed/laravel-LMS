<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $primaryKey = 'book_id';
    public $incrementing = false;
    public function admins()
    {
        return $this->belongsTo(admins::class, 'admin_id');
    }
    public function students()
    {
        return $this->belongsToMany(students::class, 'book_students');


    }

    public function readingLists()
    {
        return $this->belongsToMany(students::class, 'reading_lists');
    }
}
