<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    use HasFactory;
    protected $table = 'admins';

    protected $primaryKey = 'admin_id';
    public $incrementing = false;
    public function books()
    {
        return $this->hasMany(books::class, 'book_id');
    }
}
