<?php

namespace App\Http\Controllers\Api\V1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SignResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'image' => $this->image,
            'video' => asset('storage/videos/' . $this->video),
            'description' => $this->description,
            'categoryId' => $this->category_id,
        ];
    }
}
