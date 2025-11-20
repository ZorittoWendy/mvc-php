<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page{
    /**
     * Método resposável por retornar o conteúdo (view) da nossa home 
     * @return string
     */
    public static function getPage($title, $content) {
        return View::render('pages/page',[
          'title' => $title,
          'content' => $content
        ]);
    }
}