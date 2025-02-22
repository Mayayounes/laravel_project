<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Comment' => $this->comment,
            'by' => UserResource::make($this -> user),
            'reply' => ReplyResource::collection($this ->replies)
        ];
    }
}
