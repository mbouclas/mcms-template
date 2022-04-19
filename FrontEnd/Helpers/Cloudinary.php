<?php

namespace FrontEnd\Helpers;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class Cloudinary
{
    public function __construct()
    {
        Configuration::instance([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                "api_secret" => env('CLOUDINARY_API_SECRET')
            ]
        ]);
/*        BaseCloudinary::config(array(
            "cloud_name" => env('CLOUDINARY_CLOUD_NAME'),
            "api_key" => env('CLOUDINARY_API_KEY'),
            "api_secret" => env('CLOUDINARY_API_SECRET')
        ));*/
    }

    public function upload($imagePath, $options=[])
    {
        return (new UploadApi())->upload($imagePath, $options);
    }
}