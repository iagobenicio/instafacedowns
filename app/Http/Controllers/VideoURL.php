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
    public function FInstaIMG(){
        $cl = new Client();
        $urlr = "https://www.facebook.com/GODcsgod/photos/a.1064521007066118/1470973979754150/?type=3&eid=ARBCvqGDBb_9Hy1wUjy45b8mVZpUp6qmuOrvfmwD6kR7PesK3KcJzCGf5nCtVZu_4wq5w6XCycqodYy1&__xts__%5B0%5D=68.ARCzCP9g9sGwf3wh4wi6f5TgfoDQAojOaocDAVsSU35B7HpqgqZeJll4jwkQIKmWeClUj3l0DF_ZLX7Ke-7H_XqfXAgKWBuALPj6HV73AsCoUqKchE9ciTssLF5ArLCkjiVvmSuNfBV9AM1APmyjPi_aotEocff4eyar1iQECGhkzq4rPSMltu6kT5QTzbMcjvTdw17WKC2xnSIXIsbnhG8Z9MjEsiYuOtFyZG1mry1Gpe6wdVJxDAnVpFSymWCN_l7AOc7dkiC1cLjb9fEihtoqp9AKUtxMSuHXFUc5Q5yy_UBtAaP0lT_mMax-yMSoFwL_p25DcUHl-bbFre5wD3IUWWXlepSp6Z5SSrVV4QHZEi_ob_m2bX9IJw&__tn__=EEHH-R";
        $craw = $cl->request('GET',$urlr);
        $res = $craw->filterXpath('//meta[@property="og:image"]')->attr('content');
        $ar = array('urlback' => $res);
        return json_encode($ar,JSON_UNESCAPED_SLASHES);
    }
}
