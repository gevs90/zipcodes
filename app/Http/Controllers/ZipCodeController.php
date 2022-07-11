<?php

namespace App\Http\Controllers;

use App\Http\Resources\ZipcodeResourceResponse;
use App\Models\Zipcode;
use Illuminate\Http\Request;

class ZipCodeController extends Controller
{

    public function __constructor() {

    }
    /**
     * @param $zipcode
     * @return mixed
     */
    public function zipcode($zip_code)
    {
        $zipcodes = Zipcode::whereZipcode($zip_code)->get();
        return new ZipcodeResourceResponse($zipcodes);
    }
}
