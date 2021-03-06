<?php

namespace App\Support\Commands\HelperCommands;

class HelperCommand
{
    public static function getFileController($filename, $controller_name)
    {
        $file = dirname(dirname(__FILE__)) .'/HelperCommands/Templates/Controllers/' . $filename .'.php';

        if(file_exists($file)){
            $plaintext    = file_get_contents($file);
            $t_explode    = explode('/', $controller_name);
            $replace      = end($t_explode);
            $search       = 'ControllerName';
            $plaintext   = str_replace($search, $replace, $plaintext);
            return $plaintext;
        }else{
            return 'File Does not exists!';
        }
    }

    public function getFileModel($filename, $model_name)
    {
        $file = dirname(dirname(__FILE__)) .'/HelperCommands/Templates/Models/' . $filename .'.php';

        if(file_exists($file)){
            $plaintext    = file_get_contents($file);
            $t_explode    = explode('/', $model_name);
            $replace      = end($t_explode);
            $search       = 'ModelName';
            $plaintext   = str_replace($search, $replace, $plaintext);
            return $plaintext;
        }else{
            return 'File Does not exists!';
        }
    }

    public static function getHelp($helper)
    {
        $help_file = dirname(dirname(__FILE__)) .'/HelperCommands/Helpers/Controllers/' . $helper .'.php';

        if(file_exists($help_file)){
            return file_get_contents($help_file);
        }else{
            return 'Helper File Does not exists!';
        }
    }

    public static function getFileMiddleware($filename, $middleware_name)
    {
        $file = dirname(dirname(__FILE__)) .'/HelperCommands/Templates/Middleware/' . $filename .'.php';
        
                if(file_exists($file)){
                    $plaintext    = file_get_contents($file);
                    $t_explode    = explode('/', $middleware_name);
                    $replace      = end($t_explode);
                    $search       = 'MiddlewareName';
                    $plaintext   = str_replace($search, $replace, $plaintext);
                    return $plaintext;
                }else{
                    return 'File Does not exists!';
                }
    }
}