<?php

namespace App\Http;

class Response{
    /**
     * Codigo de Status HTTP
     * @var integer
     */
    private $httpCode = 200;

    /**
     * Cabecalho do Response
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteudo que sendo retornado
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Conteudo do Response
     * @var mixed
     */
    private $content;

    /** 
     * Metodo responsavel por iniciar a classe e definir valores
     * @param integer $httpCode
     * @param mixed $content
     * @param string $ContentType
     */
    public function __construct($httpCode,$content,$contentType = 'text/html') {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    /**
     * Metodo responsavel por alterar o content type da response
     * @param string $contentType
     */
    public function setContentType($contentType) {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type',$contentType);
    }

    /**
     * Metodo responsavel por adicionar um registro no cabecalho
     * @param string $key
     * @param string $value
     */
    public function addHeader($key,$value) {
        $this->headers[$key] = $value;
    }


}