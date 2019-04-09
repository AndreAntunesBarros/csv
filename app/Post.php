<?php

namespace csv_creator;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','body','user_id'
    ];
}
