<?php

$hostname = "localhost";

$username = "id3204915_admin";

$password = "password";

$db = "id3204915_db1";


    function httpPost($url,$params)
    {
    $postData = '';
    //create name value pairs seperated by &
    foreach($params as $k => $v)
    {
        $postData .= $k . '='.$v.'&';
    }
    $postData = rtrim($postData, '&');

    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, count($postData));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    $output=curl_exec($ch);

    curl_close($ch);
    return $output;

}
    function showrecentviews(){
        if(isset($_COOKIE['recentviews'])){
            $recentviews= unserialize($_COOKIE['recentviews']);
            foreach($recentviews as $value){
                echo "$value <br />";
            }
        }else{
            echo "Nothing recently viewed";
        }
        
    }
    
    function addrecentviews($product){
        if(array_key_exists('recentviews', $_COOKIE)){
                $cookie = $_COOKIE['recentviews'];
                $cookie = unserialize($cookie);
        }else{
                 $cookie = array(); //create new array
        }
        
        if(count($cookie) == 5 && !in_array($product, $cookie)){ //if array is full and product not found
            array_shift($cookie);
            $cookie[] = $product;
            $cookie = serialize($cookie);
            setcookie('recentviews', $cookie, time()+4800);
        }
        
        if(count($cookie) <= 4){ //cookie array has space and product not in array
            if(!in_array($product, $cookie)){
                $cookie[] = $product;
                $cookie = serialize($cookie);
                setcookie('recentviews', $cookie, time()+4800);
            }
                
        }
    }
?>