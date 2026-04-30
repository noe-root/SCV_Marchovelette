<?php
abstract class BaseController {

    protected function render(string $view, array $data = [], string $title = SITE_NAME): void {
        // Rendre les données disponibles dans la vue
        extract($data);
        $pageTitle = $title;
        $currentPage = $_GET['page'] ?? 'home';

        // Inclure le template de base
        require_once __DIR__ . '/../Views/base.php';
    }

    protected function redirect(string $page, string $action = 'index'): void {
        header("Location: " . SITE_URL . "/index.php?page={$page}&action={$action}");
        exit;
    }
}