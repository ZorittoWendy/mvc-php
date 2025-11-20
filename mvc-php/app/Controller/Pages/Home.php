<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Controller\Entity;

class Home extends Page{
    /**
     * Método resposável por retornar o conteúdo (view) da nossa home 
     * @return string
     */
    public static function getHome() {
        $content = View::render('pages/home',[
            'name' => 'zoritto-DEV',
            'description' => 'Canal do youtube: https://www.youtube.com/watch?v=Hq6OHPH_lwU',
            'site' => 'https://youtube.com.br'
        ]);
        //RETORNA A VIEW DA PAGINA
        return parent::getPage('zoritto - dev -HOME',$content );
    }
}