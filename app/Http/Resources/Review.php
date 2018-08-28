<?php

namespace App\Http\Resources;
use App\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Review extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
    	return [
            
            'reviews' => $this->collection,
            'relationships' => [
                // 'teacher' => Teacher::collection($this->teacher),User::find($this->user_id)
                'user' => new UserResource($this->whenLoaded('user')),
            ]
			// 'links' => [
			// 	'self' => 'link-value',
			// ],
		];
    }
}
