<?php

// Global PHP vars
// Set the default (EN) page language
if(!isset($_COOKIE["lang"])) {
    setcookie("lang", "en", time() + (86400 * 30), "/");
    $lang = "en";
} else {
    $lang = $_COOKIE["lang"];
}

// PHP helper functions

// srt_ends_with
if (! function_exists('str_ends_with')) {
    function str_ends_with(string $haystack, string $needle): bool
    {
        $needle_len = strlen($needle);
        return ($needle_len === 0 || 0 === substr_compare($haystack, $needle, - $needle_len));
    }
}

// based on original work from the PHP Laravel framework
if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

// Set the path for the root directory.
$parts  = explode('/', $_SERVER[REQUEST_URI]);
array_pop($parts);
$uri = implode('/', $parts);

?>