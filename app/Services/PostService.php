<?php

namespace App\Services;

use App\Models\PostModels;
use App\Models\CommentModels;
use App\Services\BaseService;

class MemberInteractionService extends BaseService
{
    
    public function insertPostData($title, $content, $messages)
    {
        $postData = [
            'title' => $title,
            'content' => $content
        ];
        $postData = PostModels::insert($postData);

        if (empty($postData)) {
            return false;
        }

        $commentsArray = [];
        foreach ($messages as $message) {
            if (!empty($message)) {
                $commentsArray[] = [
                    'post_id'   => $postData->id,
                    'messages'  => $message
                ];
            }
        }
        $commentData = CommentModels::insert($commentsArray);

        if (empty($commentData)) {
            return false; 
        } 
        return true;
    }
}