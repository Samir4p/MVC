<?php

namespace App\Controller\Pages;

use \App\Utils\Views;

class Page
{
    ////metodo responsavel pelo renderizar o topo da pagina
    private static function getHeader()
    {
       return Views::render('pages/header');
    }

    ////metodo responsavel pelo renderizar o rodapé da pagina da pagina
    private static function getFooter()
    {
       return Views::render('pages/footer');
    }

    /**
     * metodo resposanvel por retornar o conteudo da home
     */

        ////variaveis que renderizaram a pagina
     public static function getPage($title, $content)
     {
         return Views::render('pages/page', 
         [
             'title'=> $title,
             'header'=>self::getHeader(),
             'content'=>$content,
             'footer'=>self::getFooter(),

         ]);
     }

    }





