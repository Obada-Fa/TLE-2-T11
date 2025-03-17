<?php

namespace App\Http\Controllers\Api\V1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            // De les heeft ook een opdrachten kolom,
            // Dit zorgt ervoor dat alle informatie gelijk wordt mee gestuurd naar de detail pagina.
            'assignments' => $this->assignments->map
            (function ($assignment) {
                return [
                    'id' => $assignment->id,
                    'name' => $assignment->name
                ];
            })
        ];
    }
}
