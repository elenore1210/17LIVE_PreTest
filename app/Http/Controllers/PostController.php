<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use App\Services\CommentService;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    $this->postService = new PostService();

    public function add(Request $request)
    { 
        $content  = isset($request->content) ? $request->content : null;
        $title    = isset($request->title) ? $request->title : null;
        $messages = isset($request->messages) ? $request->messages : null;

        if (is_null($content) || is_null($mobile) || is_null($messages)) {
            return response()->json('error');
        }

        $result = $this->postService->sendSmsByMobile($title, $content, $messages);

        if (!isset($result->status) || $result->status != 'success') {
            return response()->json('error');
        }

        return response()->json('success');
    }
}
