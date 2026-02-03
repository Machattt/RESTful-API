<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class coffeResource extends JsonResource
{
    public $status;
    public $message;


    public function __construct($status, $message, $resource)
    {
        // return parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
        return parent:: __construct($resource);
    }



    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
{

    return [
        'status'      => $this->status,
        'message'     => $this->message,
        'data' => $this->resource
        //'data' => [] 
    ];
}

}
