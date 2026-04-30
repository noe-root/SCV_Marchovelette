<?php
require_once __DIR__ . '/BaseController.php';

class EvenementsController extends BaseController {

    public function index(): void {
        $prochains = [
            ['nom' => 'Critérium de Fernelmont',    'date' => '2025-05-04', 'lieu' => 'Fernelmont',  'type' => 'Critérium',   'distance' => '90 km'],
            ['nom' => 'Tour de Namur Juniors',       'date' => '2025-05-11', 'lieu' => 'Namur',       'type' => 'Route',       'distance' => '120 km'],
            ['nom' => 'Grand Prix de Wallonie U19',  'date' => '2025-05-18', 'lieu' => 'Liège',       'type' => 'Route',       'distance' => '145 km'],
            ['nom' => 'Kermesse de Franc-Waret',     'date' => '2025-06-01', 'lieu' => 'Franc-Waret', 'type' => 'Kermesse',    'distance' => '75 km'],
            ['nom' => 'Circuit des Ardennes',        'date' => '2025-06-15', 'lieu' => 'Bastogne',    'type' => 'Route',       'distance' => '180 km'],
        ];

        $passes = [
            ['nom' => 'Circuit de Wallonie',         'date' => '2025-04-20', 'lieu' => 'Charleroi',   'resultat' => '1er — Mathieu Leclercq'],
            ['nom' => 'Kermesse de Gesves',          'date' => '2025-04-06', 'lieu' => 'Gesves',      'resultat' => '3e — Lucas Dupont'],
            ['nom' => 'Grand Prix du Printemps U19', 'date' => '2025-03-23', 'lieu' => 'Namur',       'resultat' => '2e — Antoine Renard'],
        ];

        $this->render('evenements', [
            'prochains' => $prochains,
            'passes'    => $passes,
        ], 'Événements — SCV Marchovelette');
    }
}