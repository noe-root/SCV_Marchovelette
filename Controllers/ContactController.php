<?php
require_once __DIR__ . '/BaseController.php';

class ContactController extends BaseController {

    public function index(): void {
        $message = null;
        $error   = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom     = htmlspecialchars(trim($_POST['nom'] ?? ''));
            $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
            $sujet   = htmlspecialchars(trim($_POST['sujet'] ?? ''));
            $texte   = htmlspecialchars(trim($_POST['message'] ?? ''));

            if (empty($nom) || empty($email) || empty($texte)) {
                $error = 'Veuillez remplir tous les champs obligatoires.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = 'Adresse e-mail invalide.';
            } else {
                // Ici : envoi mail ou insertion en DB
                // mail('contact@scv-marchovelette.be', $sujet, $texte);
                $message = 'Votre message a bien été envoyé. Nous vous répondrons dans les meilleurs délais.';
            }
        }

        $this->render('contact/index', [
            'message' => $message,
            'error'   => $error,
        ], 'Contact — SCV Marchovelette');
    }
}