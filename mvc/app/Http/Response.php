<?php

namespace App\Http;

///instanciar a class response
class response
{
    ///código status http
    private $httpCode = 200;

    ////cabeçalho do response array
    private $headers = [];

    ///conteudo que está sendo retornado
    private $contentType = 'text/html';

    ///conteudo do response
    private $content;

   ////contrutor recebe alguns parametros, responsavel por iniciar as classes e definir valores
   public function __construct($httpCode, $content,$contentType = 'text/html')
   {
       $this->httpCode = $httpCode;
       $this->content = $content;
       $this->setContentType($contentType);
       
   }
    ////reposnsanvel por altera o content type do response
   public function setContentType($contentType)
   {
        $this->contentType = $contentType;
        $this->addHeader('content-Type',$contentType);

   }

    /////reposnsavel por adionar um resgistro no response
    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    /////reposnsavel por envia os metodos pro navegador
    public function sendHeaders()
    {
        ///status
        http_response_code($this->httpCode);

        foreach($this->headers as $key=>$value)
        {
            header($key.': '.$value);
        }
    }

    public function sendResponse()
    {////envia headers
        $this->sendHeaders();

        ///imprime conteudo
        switch ($this->contentType) {
            case 'text/html':
              echo $this->content;
              exit;
        }
    }

}