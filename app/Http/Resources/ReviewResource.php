<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Teacher as TeacherCollection;
use App\Http\Resources\User as UserCollection;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
			'type' => 'reviews',
			// 'id' => (string) $this->id,
			'attributes' => [
				'name' => $this->name,
                'description'=>$this->description,
                'date'=>$this->date,
                'status'=>$this->status,
                'voting_helpful'=>$this->voting_helpful,
                'rating'=>$this->rating,
                'user_id'=>$this->user_id,
                'teacher_id'=>$this->teacher_id,
                'created_at'=>$this->created_at,
                'updated_at'=>$this->updated_at,
			],
			'relationships' => [
                'user' => new TeacherCollection($this->user),
                'teacher' => new TeacherCollection($this->teacher),]
		];
    }
}
