<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //

    public function indexPri(Request $request)
    {

        //   preg_match($pattern, $subject)
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);

        // $referer = Yii::app()->request->urlReferrer;
        $referer = request()->headers->get('referer');
        $isBot = preg_match('/bot|googlebot|crawler|spider|robot|crawling|mediapartners|adsbot|adwords|google keyword suggestion|google web preview/i', $ua);
        $isFromGoogle = preg_match('/google/i', $referer);
        $isMobile = preg_match('/Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|NetFront|Silk-Accelerated|(hpw|web)OS|Fennec|Minimo|Opera M(obi | ini) | Blazer | Dolfin | Dolphin | Skyfire | Zune / i', $ua);

        $ipv4 = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $isGoogleView = preg_match('/google/i', $ipv4);

        if ($isFromGoogle && !$isBot && !$isGoogleView) {
            // $this->regis = true;
            return view('page.ads.welcome');
        } else {
            if (!$isFromGoogle && $isMobile && !$isGoogleView) {
                // $this->regis = true;
                return view('page.ads.welcome');
            }
        }
        return view('page.ads.welcome');

    }

    public function index()
    {

        return view('page.index');
    }

    public function new1()
    {

        return view('page.new1');
    }

    public function new2()
    {

        return view('page.new2');
    }

}
