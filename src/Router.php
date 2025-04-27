<?php
namespace App;

use App\Security\ForbiddenException;


class Router{
    /**
     * @var string
     */
    private $view_path;

    /**
     * @var AltoRouter
     */
    private $router;

    public function __construct(string $view_path)
    {
        $this->view_path = $view_path;
        $this->router = new \AltoRouter();

    }


    public function get(string $target_url, string $file_path, ?string $name_route = null):self
    {
        $this->router->map('GET', $target_url, $file_path, $name_route);
        return $this;
    }

    public function post(string $target_url, string $file_path, ?string $name_route = null):self
    {
        $this->router->map('POST', $target_url, $file_path, $name_route);
        return $this;
    }

    public function match(string $target_url, string $file_path, ?string $name_route = null):self
    {
        $this->router->map('POST|GET', $target_url, $file_path, $name_route);
        return $this;
    }


    /**
     * GET formated url
     * @param string $route_name
     * @param array $parameters like id, slug ...
     */
    public function url(string $route_name, array $parameters = []): string 
    {
        return $this->router->generate($route_name, $parameters);
    }


    public function run()
    {
        $match = $this->router->match();
        if($match !== false){
            $view = $match['target'];
            $params = $match['params'];
        }else{
            $view = 'e404';
        }
        $router = $this;
        
        ob_start();
        require $this->view_path . DIRECTORY_SEPARATOR . $view . '.php';
        $content = ob_get_clean();
        require $this->view_path . DIRECTORY_SEPARATOR . 'layout.php';
        return $this;
    }

}