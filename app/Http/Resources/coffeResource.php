<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class coffeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
{
    return [
        'id'          => $this->_id,
        'hourday'     => $this->hour_of_day,
        'cashtype'    => $this->cash_type,    
        'money'       => $this->money,        
        'coffeename'  => $this->coffee_name,  
        'timeday'     => $this->Time_of_Day, 
        'weekday'     => $this->Weekday,
        'monthname'   => $this->Month_name,
        'weekdaysort' => $this->Weekdaysort,
        'monthsort'   => $this->Monthsort,
        'date'        => $this->Date,
        'time'        => $this->Time
    ];
}
}
