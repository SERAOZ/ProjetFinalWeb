<?php
/**
 * Request HTTP istek ve yanıtlarını temsil eder 
 */
class Request {
    
    public function getPath() {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
    
        if ($position !== false) {
            $path = substr($path, 0, $position);
        }return $path;}
        
    public function getMethod() {
    return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    public function get($key, $default = null) {
    return $_GET[$key] ?? $default;
    }
        
    public function post($key, $default = null) {
    return $_POST[$key] ?? $default;
    }
    
    

   
}
?>