<?php

require_once __DIR__ . '/../src/config/site.php';

$routes = [
    'home' => 'home.php',
    'funcionalidades' => 'funcionalidades.php',
    'beneficios' => 'beneficios.php',
    'modelos' => 'modelos.php',
    'acesso' => 'acesso.php',
    'login' => 'login.php',
    'contato' => 'contato.php',
    'politica-privacidade' => 'politica-privacidade.php',
    'codigo-compliance' => 'codigo-compliance.php',
    '404' => '404.php',
];

$pageTitles = [
    'home' => 'Home',
    'funcionalidades' => 'Funcionalidades',
    'beneficios' => 'Benefícios',
    'modelos' => 'Modelos',
    'acesso' => 'Crie seu acesso',
    'login' => 'Login',
    'contato' => 'Contato',
    'politica-privacidade' => 'Política de privacidade',
    'codigo-compliance' => 'Código de compliance',
    '404' => 'Página não encontrada',
];

$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
$basePath = ($scriptDir === '/' || $scriptDir === '.') ? '' : rtrim($scriptDir, '/');

$urlFor = static function (string $slug = 'home') use ($basePath): string {
    if ($slug === 'home') {
        return ($basePath === '' ? '' : $basePath) . '/';
    }

    return ($basePath === '' ? '' : $basePath) . '/' . ltrim($slug, '/');
};

$assetFor = static function (string $assetPath) use ($basePath): string {
    return ($basePath === '' ? '' : $basePath) . '/assets/' . ltrim($assetPath, '/');
};

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';

if ($basePath !== '' && str_starts_with($requestPath, $basePath)) {
    $requestPath = substr($requestPath, strlen($basePath));
    $requestPath = $requestPath === '' ? '/' : $requestPath;
}

$requestPath = '/' . ltrim($requestPath, '/');
if ($requestPath === '/index.php') {
    $requestPath = '/';
}

$slugFromPath = trim($requestPath, '/');
$currentPage = $slugFromPath !== '' ? $slugFromPath : ($_GET['page'] ?? 'home');

if (!array_key_exists($currentPage, $routes)) {
    http_response_code(404);
    $currentPage = '404';
}

$pageTitle = $pageTitles[$currentPage] ?? $pageTitles['404'];

require_once __DIR__ . '/../src/layout/header.php';
require_once __DIR__ . '/../src/pages/' . $routes[$currentPage];
require_once __DIR__ . '/../src/layout/footer.php';
