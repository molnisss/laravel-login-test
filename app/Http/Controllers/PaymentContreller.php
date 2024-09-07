<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class PaymentContreller extends Controller
{

    public function getDataFromApi(Request $request)
    {
        $userId = $request->input('user_id');
        return redirect()->route('data.view', ['user_id' => $userId]);
    }
    public function passDataToView($userId)
    {
        Log::info('userId: ' . $userId);
        return view('welcome', ['userId' => $userId]);
    }
}
