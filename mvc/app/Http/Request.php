<?php

    namespace App\Http;

    class Request
    {
        ////metodo de requisisção
        private $httpMethod;
        /////Metodo uri da pagina
        private $uri;
        private$queryParams = [];
        private $postVars = [];
        private $headers = [];


        public function __construct()
        {
          $this->queryParams = $_GET ?? [];            
          $this->postVars = $_POST ?? [];            
          $this->headers = getallheaders();           
          $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';           
          $this->uri = $_SERVER['REQUEST_URI'] ?? '' ;           

        }
            /////reposnsavel por retonar http
        public function getHttpMethod()
        {
            return $this->httpMethod;
        }

        /////reposnsavel por retonar uri
        public function getUri()
        {
            return $this->uri;
        }


        /////reposnsavel por retonar headers da requisição
        public function getHeaders()
        {
            return $this->headers;
        }

         /////reposnsavel por retonar queryParamts da requisição
        public function getQueryParams()
        {
            return $this->queryParams;
        }

        /////reposnsavel por retonar http
        public function getPostVars()
        {
            return $this->postVars;
        }



    }


