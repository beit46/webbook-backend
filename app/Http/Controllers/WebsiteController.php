<?php

namespace App\Http\Controllers;

use App\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller {

    public function getAll() {

        return Website::all();
    }

    public function create($request) {

        $website = new Website();
        $website->fill($request);
        $website->save();

        return response('CREATED', 201);
    }
}
