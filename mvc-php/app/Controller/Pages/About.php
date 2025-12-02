<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class About extends Page
{
    /**
     * Método resposável por retornar o conteúdo (view) da nossa home 
     * @return string
     */
    public static function getHome()
    {
        //ORGANIZACAO
        $obOrganization = new Organization;

        $content = View::render('pages/about', [
            'name' => $obOrganization->name,
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);
        //RETORNA A VIEW DA PAGINA
        return parent::getPage('SOBRE > ZORITTO', $content);
    }
}
