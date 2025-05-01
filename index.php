<?php
$basePath = '/tweet_web';
$requestUri = str_replace($basePath, '', $_SERVER['REQUEST_URI']);
$url = trim(parse_url($requestUri, PHP_URL_PATH), '/');

$routes = [
    '' => 'pages/home.php',
    // 'about' => 'routes/about.php',
    // 'contact' => 'routes/contact.php',
];

if (isset($routes[$url])) {
    include $routes[$url];
} else {
    http_response_code(404);
    echo "404 Page Not Found";
}