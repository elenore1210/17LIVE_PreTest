<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessListModel extends Model
{

    protected $table = 'comments';

    protected $primaryKey = 'id';

    protected $fillable = [
        'messages'
    ];

    public function postInfo()
    {
        return $this->belongsTo('App\Models\PostModel', 'post_id', 'id');
    }
}