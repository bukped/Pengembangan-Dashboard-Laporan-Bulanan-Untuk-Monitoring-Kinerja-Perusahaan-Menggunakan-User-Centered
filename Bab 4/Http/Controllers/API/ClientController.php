<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function login(Request $request)
    {
        $request = Http::asForm()->post('https://apis.pupuk-kujang.co.id/demplon/hrdmobile/app/login-v3/', [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);
        return $request->json();
    }
}
