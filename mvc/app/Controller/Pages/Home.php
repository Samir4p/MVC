<?php

namespace App\Controller\Pages;

use \App\Utils\Views;
use \App\Model\Entity\Organization;

class Home extends Page
{
    /**
     * metodo resposanvel por retornar o conteudo da home
     */
     public static function getHome()
     {

        $obOrganization = new Organization;
    ///    echo "<pre>";
       /// print_r($obOrganization);
      ///  echo"</pre>"; exit;

         ////retorna a view da Home 
         $content = Views::render('pages/home', 
         [
             'name' =>  $obOrganization->name,
             'description'=>  $obOrganization->description,
             'site'=>  $obOrganization->site,
             'text'=> $obOrganization->text,
         ]);

         ////retorna a view da pagina
         return parent::getPage('start4p-Home', $content);
     }

    }





