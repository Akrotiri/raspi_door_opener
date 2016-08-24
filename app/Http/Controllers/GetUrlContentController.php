<?php

namespace App\Http\Controllers;

class GetUrlContentController extends Controller
{
    public function index()
    {
        //$html = $this->getContent('url?id=1&bd=2');
        $url = 'localhost:8000/url';
        //?id=1&bd=2
        $html = $this->curl_get($url, ['id' => 1, 'bd' => 5]);

        return $html;
    }

    public function getContent($url)
    {
        header('Content-type:application/json;charset=utf-8');
        # Use the Curl extension to query Google and get back a page of results
        $url = 'www.localhost:8000//' . $url;
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $html = curl_exec($ch);
        curl_close($ch);
        return $html;
    }

    /**
     * Send a GET requst using cURL
     * @param string $url to request
     * @param array $get values to send
     * @param array $options for cURL
     * @return string
     */
    function curl_get($url, array $get = null, array $options = array())
    {
        $defaults = array(
            CURLOPT_URL => $url . (strpos($url, '?') === FALSE ? '?' : '') . http_build_query($get),
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 4
        );

        $ch = curl_init();
        curl_setopt_array($ch, ($options + $defaults));
        if (!$result = curl_exec($ch)) {
            trigger_error(curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }
}
