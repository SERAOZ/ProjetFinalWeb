<?php
/**
 * İstekleri uygun controller metodlarına yönlendirecek 
 * Genellikle merkezi bir işleyici olarak görev yapar ve hangi controller'ın 
 * hangi HTTP isteğine yanıt vereceğine karar verir. 
 */
class Router {
    private $request;
    private $response;
    private $routes = [];

    public function __construct($request, $response) {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback) {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path] ?? null;

        if (!$callback) {
            // Yol bulunamadıysa 404 dön
            return $this->response->setStatus(404)->send('Sayfa bulunamadı');
        }

        call_user_func($callback, $this->request, $this->response);
    }
}

?>