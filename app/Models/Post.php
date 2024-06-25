<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table='posts';//table name

     public $primaryKey='id';
     public $timetable=true;

     //     * relationships between user and post.User can have many post  but a post belongs to one user #user_id is the primary key in user #id is the foreign key in user but primary key in post



        public function user()
        {
            return $this->belongsTo(User::class, 'id', 'user_id');
        }

}

