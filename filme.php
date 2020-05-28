<?php 
function getAddress(){


if (isset ($_POST['nomefilme'])){
    $filme = $_POST['nomefilme'];
    
    $address = getAddressomdbapi($filme);
 
}else {
    $address = addressEmpty();

}

return $address;
}

function addressEmpty(){
    return (object)[
        'Title' => '',
        'Year' => '',
        'Type' => '',
        'Poster' => ''
    ];
}

function getAddressomdbapi(String $filme){
    $url = "https://www.omdbapi.com/?s={$filme}&apikey=7a6ed400";
    return json_decode(file_get_contents($url));

  
}