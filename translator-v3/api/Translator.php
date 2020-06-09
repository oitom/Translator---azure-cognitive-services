<?php
/**
 * # Translator 
 * Classe base para api translator usando cURL + Azure cognitive-services
 * @author https://github.com/wcostale
 */
Class Translator {
    /**
     * ## getHeader
     * Gera o cabeçalho para requisição
     * @author https://github.com/wcostale
     * @return array header
    */
    public static function translate($text) { 
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => ENPOINT . PATH . LANGUAGE_TO,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_CONNECTTIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode(array(array("text" => $text))),
        CURLOPT_HTTPHEADER => array(
            "Ocp-Apim-Subscription-Key:". KEY,
            "Ocp-Apim-Subscription-Region: ". LOCATION,
            "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);
        
        if ($err)
            return json_encode(array("code"=> 0, "msg"=> $err));
        else 
            return json_encode(array("code" => 1, "msg"=> json_decode($response, TRUE)));
    }
}

