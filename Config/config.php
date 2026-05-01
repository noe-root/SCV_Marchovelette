<?php
// ─── Configuration Base de données ───────────────────────────────────────────
define('DB_HOST', 'localhost');
define('DB_NAME', 'scv_marchovelette');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// ─── Configuration du site ────────────────────────────────────────────────────
define('SITE_NAME', 'SCV Marchovelette');
define('SITE_URL', 'http://localhost:3000');
define('BASE_PATH', __DIR__ . '/..');

// ─── Autoload simple ──────────────────────────────────────────────────────────
spl_autoload_register(function ($class) {
    $dirs = ['Controllers', 'Models'];
    foreach ($dirs as $dir) {
        $file = __DIR__ . '/../' . $dir . '/' . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});