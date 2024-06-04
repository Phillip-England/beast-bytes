<?php

class Http {

    public static function getRawPath(): string {
        return strtok($_SERVER["REQUEST_URI"], '?');
    }

    public static function getRawPathAndMethod(): string {
        return $_SERVER["REQUEST_METHOD"] . " " . self::getRawPath();
    }

}

?>