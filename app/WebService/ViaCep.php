<?php

namespace App\WebService;

Class ViaCep {


    /**
     * Método responsável por consultar um CEP no ViaCEP
     * @param String $cep
     * @return array
     */

    public static function consultarCEP($cep) {
        //INICIA O CURL
        $curl = curl_init();

        //CONFIGURAÇÃO DO CURL
        curl_setopt_array($curl,[
            CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST =>'GET'
        ]);

        //RESPONSE
        $response = curl_exec($curl);

        curl_close($curl);

      //CONVERTE O JASON PARA ARRAY

      $array = json_decode($response, true);

      //RETORNAR O CONTEÚDO EM ARRAY

      return isset ($array['cep']) ? $array : null;

    }
}

