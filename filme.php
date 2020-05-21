<?php 
function getAddress(){


if (isset ($_POST['nomefilme'])){
    $filme = $_POST['nomefilme'];
    
  return $address;
}

var_dump($address);

function addressEmpty(){
    return (object)[
        'Title' => '',
        'Year' => '',
        'Genre' => '',
        'Runtime' => '',
        'Director' => '',
        'Poster' => ''
       
    
    ];
}


}

function getAddressomdbapi(String $filme){
    $url = "http://www.omdbapi.com/?s={$filme}&apikey=7a6ed400";
    return json_decode(file_get_contents($url));
}

