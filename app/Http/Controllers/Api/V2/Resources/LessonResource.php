<?php

namespace App\Http\Controllers\Api\V2\Resources;

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
        return [
            'id' => $this->id,
            'name' => $this->name,
            'total_signs' => $this->assignments->sum
            (function ($assignment) {
                return $assignment->categories->sum
                (function ($category) {
                    return $category->signs->count();
                });
            }),
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
