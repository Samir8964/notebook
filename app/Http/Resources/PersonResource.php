<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
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
            'name'=>$this->name,
            'surname'=>$this->surname,
            'thirdname'=>$this->thirdname,
            'company'=>$this->company,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'birthday'=>$this->birthday,
            'avatar'=>$this->avatar,
            'created_at' => $this->created_at->format('d-m-Y'),
        ];
    }
}
