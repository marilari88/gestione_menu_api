<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecurrenceResource extends JsonResource
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
           'name'=>$this->name,
           'date'=>$this->date,
           'menus'=>MenuResource::collection($this->menus),
           'created_at'=>$this->created_at
       ];
    }
}
