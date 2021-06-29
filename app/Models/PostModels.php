<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessListModel extends Model
{

    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'content'
    ];

    public function commentsInfo()
    {
        return $this->hasMany('App\Models\CommentModel', 'id', 'post_id');
    }
}