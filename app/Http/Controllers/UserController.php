<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function show (Request $req, string $id, string $content) {
        return 'hello '.$id.' content: '.$content;
    }
};
