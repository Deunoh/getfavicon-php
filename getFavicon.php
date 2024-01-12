<?php


function getFavicon($url){
    $components = parse_url($url);

    if (isset($components['host'])) {
        $domainParts = explode('.', $components['host']);
        $domain = $domainParts[count($domainParts) - 2] . '.' . $domainParts[count($domainParts) - 1];
        $nouveauLien = $domain . '/favicon.ico';
    
       return $nouveauLien;
    
    
    } else {
        return "Invalid URL";
    }


}


getFavicon("https://mywebsite.com/qgqignbqdkqnbdbtrr");

 //echo "Celui là plus simple : " . $components['host'] . "/favicon.ico"; //celui là plus simple et realisable 



