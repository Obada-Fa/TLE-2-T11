<?php

namespace App\Http\Controllers\Api\V1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SignCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($sign) {
                return [
                    'id' => $sign->id,
                    'title' => $sign->title, // Of andere velden die relevant zijn
                    '_links' => [ 'self' => url("/api/signs/{$sign->id}") ],
                ];
            }),
            '_links' => [
                'self' => url('/signs/'), // Link naar de verzameling
            ],
        ];
    }
}
