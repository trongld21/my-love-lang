<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'teacher_id' => $this->teacher_id,
            'student_id' => $this->student_id,
            'number_of_members' => $this->number_of_members,
            'total_of_not_started' => $this->total_of_not_started,
            'total_of_under_construction' => $this->total_of_under_construction,
            'total_of_completion' => $this->total_of_completion,
            'total_books' => $this->total_books,
            'total_pdf' => $this->total_pdf,
            'complete_flag' => $this->complete_flag,
            'order_flag' => $this->order_flag,
            'deadline' => Carbon::parse($this->deadline)->format('Y.m.d'),
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}