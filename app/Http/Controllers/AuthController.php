<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {

    public function me() {
        return [
            "nis" => 3103118015,
            "name" => "Alya Umi Zakiyyah",
            "gender" => "Perempuan",
            "phone" => 62898173849284,
            "class" => "XII RPL 1"
        ];
    }
}