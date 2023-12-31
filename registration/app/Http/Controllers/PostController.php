<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');

        // Send data to the other system's API
        $client = new Client();
        $response = $client->post('https://intern.qr.my/receiver/public/api/get_user', [
            'form_params' => [
                'name' => $name,
                'phone' => $phone,
            ]
        ]);

        // Handle the API response
        if ($response->getStatusCode() == 200) {
            session()->flash('success');
            return view('/response_yes');
        } else {
            return view('/response_no');
        }
    }
}
