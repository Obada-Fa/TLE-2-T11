<?php

namespace App\Http\Controllers\Api\V1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssignmentResource extends JsonResource
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
            'name' => $this->name,
            'categories' => $this->categories->map
            (function ($category) {
                return [
                    'id' => $category->id,
                    'name' => $category->name,
                    'signs' => $category->signs->map(function ($sign) {
                        return [
                            'id' => $sign->id,
                            'name' => $sign->name,
                        ];
                    })
                    ,
                ];
            })
        ];
    }
}
