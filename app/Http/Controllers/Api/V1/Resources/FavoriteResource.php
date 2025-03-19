<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteResource extends JsonResource
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
            'user_id' => $this->user_id,
            'sign_id' => $this->sign_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'sign' => [
                'id' => $this->sign->id,
                'title' => $this->sign->title,
                'description' => $this->sign->description,
                'image' => $this->sign->image,
                'video' => asset('storage/videos/' . $this->sign->video),
            ],
        ];
    }
}
