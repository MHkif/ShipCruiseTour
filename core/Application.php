<?php

namespace app\core;

use app\models\User;
// use View;

class Application
{
    public string $userClass;
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public Session $session;
    public static string $ROOT_DIR;
    public ?Controller $controller = null;
    public ?DbModel $user;

    public Database $db;

    public function __construct($rootPath, array $config)
    {
        $this->userClass = $config['userClass'] ?? '';
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);

        
        $this->db = new Database($config['db']);

        $primaryValue = $this->session->get('AdminKey');
        if ($primaryValue) {
            $primaryKey = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
        } else {
            $this->user = null;
        }
    }

    public function run()
    {
        try {
            echo $this->router->resolve();
        } catch (\Exception $exception) {
            $code = is_int($exception->getCode()) ? $exception->getCode() : 500;
            self::$app->response->setStatusCode($code);
            echo self::$app->router->renderView(
                'error',
                [
                    'exception' => $exception
                ]
            );
        }
    }

    public function login(DbModel $user)
    {
        $this->user = $user;
        // taking the primKey , whatever is primKey to the user
        $primaryKey = $user::primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('AdminKey', $primaryValue);
        return true;
    }

    public function logout()
    {
        $this->user = null;
        $this->session->remove('AdminKey');
    }


    public static function isGuest()
    {
        return !self::$app->user;
    }
    // public static function adminName()
    // {
    //     return self::$app->user->getDisplayName();
    // }
}
