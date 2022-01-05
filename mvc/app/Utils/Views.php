<?php

    namespace  App\Utils;

    class Views
    {
            /**
         * metodo responsavel por retornar o conteudo de uma view
         * @param string
         * @return string
         */
        private static function getContentView($view)
        {

            $file = __DIR__.'/../../resources/views/'.$view.'.html';
            return file_exists($file) ? file_get_contents($file) : '';
        }

        /**
         * metodo responsavel por retornar o conteudo de uma renderizado view
         * @param string
         * @param array $vars (string/numericos)
         * @return string ////retorna o nome da views
         */

         public static function render($view, $vars = [])
         {
             $contentView = self::getContentView($view);
             
                         //Chaves do array de variaveis
                         $keys = array_keys($vars);
                         $keys = array_map(function($item){
                            return '{{'.$item.'}}';
                         }, $keys);

                         
            ////debug
                 //        echo"<pre>";
                   //  print_r($vars);
                     //    echo"</pre>"; exit;
            
             ////retorna conteudo renderizado 
             return str_replace($keys,array_values($vars),$contentView);

         }
    }