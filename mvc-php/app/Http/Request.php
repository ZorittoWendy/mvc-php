<?php

namespace App\Http;

class Request{
    /** Método HTTP de requisiação
     * @var string 
     */
    private $httpMethod;

    /**
     * URI da pagina
     * @var string
     */
    private $uri;

    /**
     * Parametros da URL ($_GET)
     * @var array
     */
    private $queryParams = [];

    /** 
     * Variáveis recebidas no POST da página ($_POST)
     * @var array
     */
    private $postVars = [];

    /** 
     * cabecalho da requisao
     * @var array
     */
    private $headers = [];

    /**
     * Construtor da classe
     */
    public function __construct() {
        $this->queryParams   = $_GET ?? [];
        $this->postVars      = $_POST ?? [];
        $this->headers       = getallheaders();
        $this->httpMethod    = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri           = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Método responsável por retorna Metodo HTTP da Requisicao 
     * @return string
     */
    public function  getHttpMethod()  {
        return $this->httpMethod;
    }

    /**
     * Método responsável por retorna URI da Requisicao 
     * @return string
     */
    public function  getUri()  {
        return $this->uri;
    }

    /**
     * Método responsável por retorna headers da Requisicao 
     * @return string
     */
    public function  getHeaders()  {
        return $this->headers;
    }

    /**
     * Método responsável por retorna parametros da URL da Requisicao 
     * @return string
     */
    public function  getQueryParams()  {
        return $this->queryParams;
    }

    /**
     * Método responsável por retorna URI da Requisicao 
     * @return string
     */
    public function  getPostVars()  {
        return $this->postVars;
    }
}