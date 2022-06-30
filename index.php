<?php 

/*
Plugin Name: consumindo api
Plugin URI: 
Description: 
Version: 1.0
Author: 
Author URI: 
License: GLPV2
Text Domain: segundo plugin
*/

function consumindo_api(){
    $url = "https://api.giphy.com/v1/gifs/trending?api_key=pLURtkhVrUXr3KG25Gy5IvzziV5OrZGa";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $result = json_decode(curl_exec($ch));
          
        // echo"<pre>";
        //     print_r($result->data);
        // echo"</pre>";

        foreach($result->data as $get_result){
         echo"<pre>";             
            print_r(substr($get_result->images->downsized_large->url,0,-5));
        echo"</pre>";

            // echo '<img  width="200px" height="200px" src="'.substr($get_result->images->downsized_large->url,0,-5).'"><br>';
        //   echo $get_result
        //         $get_result->url 
        //     $get_result->slug 
        //         $get_result->username               
        }
        
    // foreach($result->data[0] as $total){
    //     echo"<pre>";
    //         print_r($total);
    //     echo"</pre>";

        // foreach($total->images as $image){
        //     echo"<pre>";
        //         print_r($image);            
        //     echo"</pre>";
        // }

    // }

    // foreach($resultado->results as $ator){
            
    //     echo 'nome '. $ator->name . '<br>';
    //     echo 'nome '. $ator->height . '<br>';
    //     echo '<hr>';
    // }
}
add_action('wp_head','consumindo_api');