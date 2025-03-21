<?php

namespace App\Http\Controllers\Api\V2\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategorySignResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // $this output een de category resource wat gekoppeld is aan de model
        // In de model heb je relaties en daarmee koppel je dus de signs tabel opnieuw
        // Deze map je zodat je alles weer kan zien.
        //dd($this->signs);


        return [
            'id' => $this->id,
            'name' => $this->name,
            'message' => 'Gebruik de map functie svp op de lessons',
            'lessons' => $this->assignments->map
            (function ($assignment) {
                return $assignment->lesson ? [
                    'id' => $assignment->lesson->id,
                    'name' => $assignment->lesson->name,
                ] : null;
            }),
            'signs' => $this->signs->map
            (function ($sign) {
                return [
                    'id' => $sign->id,
                    'title' => $sign->title,
                    'description' => $sign->description,
                    'image' => $sign->image,
                    'video' => asset('storage/videos/' . $sign->video)
                ];
            })];
    }
}
