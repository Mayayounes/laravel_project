<?php

namespace App\Http\Resources;

use App\Http\Resources\PostStatusResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ,
            'Post title' => $this->title,
            'Body' => $this->body,
            'Post Status' => PostStatusResource::make($this->post_status),
            'comments'=> CommentResource::collection($this -> comments),
            'reaction' => ReactionResource::collection($this ->reactions),
        ];
    }
}
