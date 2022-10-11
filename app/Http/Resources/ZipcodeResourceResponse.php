<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZipcodeResourceResponse extends JsonResource
{
    public static $wrap = '';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $head = $this->first();
        return [
            'zip_code' => str_pad($head->zipcode, 5, '0', STR_PAD_LEFT),
            'locality' => $head->municipality,
            'federal_entity' => [
                'key' => $head->state_key,
                'name' => $head->state,
                'code' => null,
            ],
            'settlements' => $this->map(function($zipcode) {
                return [
                    'key' => $zipcode->key,
                    'name' => $zipcode->settlement,
                    'zone_type' => $zipcode->zone_type,
                    'settlement_type' => [
                        'name' => $zipcode->settlement_type
                    ],
                ];
            }),
            'municipality' => [
                'key' => $head->municipality_key,
                'name' => $head->municipality

            ]
        ];
    }
}
