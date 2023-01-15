<?php
namespace app\libraries;

use Controller;
use Users;

class Application
{
    public string $userClass;
    public static Application $app;
    
   
    public ?Controller $controller = null;
    public ?Users $user;


    public function __construct($rootPath, array $config)
    {
  

        
    }

  

  

  
    public static function isGuest()
    {
        return !self::$app->user;
    }
}
