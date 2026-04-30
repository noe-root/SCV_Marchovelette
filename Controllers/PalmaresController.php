<?php
require_once __DIR__ . '/BaseController.php';

class PalmaresController extends BaseController {

    public function index(): void {
        $palmares = [
            2025 => [
                ['course' => 'Circuit de Wallonie',          'coureur' => 'Mathieu Leclercq',  'place' => 1, 'categorie' => 'Élite'],
                ['course' => 'Kermesse de Gesves',           'coureur' => 'Lucas Dupont',       'place' => 3, 'categorie' => 'U23'],
                ['course' => 'Grand Prix du Printemps U19',  'coureur' => 'Antoine Renard',     'place' => 2, 'categorie' => 'U19'],
            ],
            2024 => [
                ['course' => 'Tour de Namur',                'coureur' => 'Mathieu Leclercq',  'place' => 1, 'categorie' => 'Élite'],
                ['course' => 'Circuit des Ardennes',         'coureur' => 'Mathieu Leclercq',  'place' => 2, 'categorie' => 'Élite'],
                ['course' => 'Kermesse de Franc-Waret',      'coureur' => 'Théo Bernard',      'place' => 1, 'categorie' => 'Masters'],
                ['course' => 'Grand Prix de Wallonie U19',   'coureur' => 'Antoine Renard',    'place' => 3, 'categorie' => 'U19'],
            ],
            2023 => [
                ['course' => 'Critérium de Fernelmont',      'coureur' => 'Marc Lecocq',       'place' => 1, 'categorie' => 'Élite'],
                ['course' => 'Tour des Flandres Amateurs',   'coureur' => 'Mathieu Leclercq',  'place' => 5, 'categorie' => 'Élite'],
            ],
        ];

        $this->render('palmares', [
            'palmares' => $palmares,
        ], 'Palmarès — SCV Marchovelette');
    }
}