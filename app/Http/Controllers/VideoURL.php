<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class VideoURL extends Controller
{
    public function FInstaVD(Request $req){
        $cl = new Client();
        $urlr = $req->url;
        $craw = $cl->request('GET',$urlr);
        $res = $craw->filterXpath('//meta[@property="og:video"]')->attr('content');
        $ar = array('urlbakc' => $res);
        return json_encode($ar,JSON_UNESCAPED_SLASHES);
    }
    public function FInstaIMG(Request $req){
        $cl = new Client();
        $urlr = $req->url;
        $craw = $cl->request('GET',$urlr);
        $res = $craw->filterXpath('//meta[@property="og:image"]')->attr('content');
        $ar = array('urlbakc' => $res);
        return json_encode($ar,JSON_UNESCAPED_SLASHES);
    }
}
