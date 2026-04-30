<?php
require_once __DIR__ . '/BaseController.php';

class ClubController extends BaseController {

    public function index(): void {
        $coureurs = [
            ['nom' => 'Mathieu Leclercq',  'categorie' => 'Élite',   'numero' => 1,  'victoires' => 12],
            ['nom' => 'Lucas Dupont',       'categorie' => 'U23',     'numero' => 7,  'victoires' => 5],
            ['nom' => 'Antoine Renard',     'categorie' => 'U19',     'numero' => 14, 'victoires' => 3],
            ['nom' => 'Pierre Marchal',     'categorie' => 'U19',     'numero' => 21, 'victoires' => 2],
            ['nom' => 'Jules Fontaine',     'categorie' => 'U17',     'numero' => 33, 'victoires' => 1],
            ['nom' => 'Théo Bernard',       'categorie' => 'Masters', 'numero' => 44, 'victoires' => 8],
        ];

        $staff = [
            ['nom' => 'Jean-Pierre Collin',   'role' => 'Président'],
            ['nom' => 'Marc Dubois',           'role' => 'Directeur Sportif'],
            ['nom' => 'Sophie Lejeune',        'role' => 'Trésorière'],
            ['nom' => 'Didier Wathelet',       'role' => 'Entraîneur Principal'],
        ];

        $this->render('club', [
            'coureurs' => $coureurs,
            'staff'    => $staff,
        ], 'Le Club — SCV Marchovelette');
    }
}