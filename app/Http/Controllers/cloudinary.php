<?php

namespace App\Http\Controllers;

use Cloudinary\Api\ApiUtils;
use Cloudinary\Configuration\CloudConfig;
use Illuminate\Http\Request;

class cloudinary extends Controller
{
    public function getsignature(){
        $cloudinaryConfig = new CloudConfig([
            "cloud_name" => "dxn7gskyn",
            "api_key" => "296547854239657",
            "api_secret" => "ikkwQSDc0p6WlyFvidFN36H0Ecw"
        ]);
        $timestamp=time();
        $params =
            [
                "timestamp" => time(),
                "folder" => 'books'
            ];
        $data = ['signature' => ApiUtils::signParameters($params, $cloudinaryConfig->apiSecret), 'timestamp' => $timestamp];
        return $data;
    }
}
