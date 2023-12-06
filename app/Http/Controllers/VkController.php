<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vk;

class VkController extends Controller
{
    public function index() {

        function check_mobile_device() {
            $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
            $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
            // var_dump($agent);exit;
            foreach ($mobile_agent_array as $value) {
                if (strpos($agent, $value) !== false) return true;
            }
            return false;
        }

        $is_mobile_device = check_mobile_device();
        if($is_mobile_device){
            return view('mobile-vk');

        }else{
            return view('vk');
        }

    }
}
