<?php

declare(strict_types=1);

if (!function_exists('bashPath')) {
    function bashPath(string $path): string
    {
        return dirname(__DIR__) . '/' . $path;
    }
}

if(!function_exists('mix')) {
    function mix(string $path)
    {
//        if (!file_exists(bashPath('/../../public/mix-manifest.json'))) {
//            throw new RuntimeException('mix-manifest.json not found');
//        }

        $content = file_get_contents(__DIR__ . '/../../public/mix-manifest.json');
        $content = json_decode($content, true);

        return $content[$path] ?? '';
    }
}