<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowLog extends Model
{
    protected $fillable = ['book_id', 'user_id', 'is_returned'];

    /**
     * Relasi Many-to-One dengan Book
     * @return Book
     */
    public function book()
    {
        return $this->belongsTo('App\Book');
    }

    /**
     * Relasi Many-to-One dengan User
     * @return User
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}