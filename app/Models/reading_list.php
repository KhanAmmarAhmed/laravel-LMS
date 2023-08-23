<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reading_list extends Model
{
    use HasFactory;

    protected $table = 'reading_lists';

    public $timestamps = false;


    protected $primaryKey = 'bookmark_id';

    protected $fillable = ['book_id', 'student_id'];

    public function students()
    {
        return $this->belongsTo(students::class, 'student_id');
    }

    public function books()
    {
        return $this->belongsTo(books::class, 'book_id');
    }
    
}
