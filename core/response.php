<?php
/**
 * Response, HTTP istek ve yanıtlarını temsil eder 
 */
class Response {
    public function setStatus($code) {
        // HTTP yanıt kodunu ayarla
        return $this;
    }

    public function send($content) {
        // İçeriği gönder
        echo $content;
    }

    // Gerekli diğer metodlar...
}
?>