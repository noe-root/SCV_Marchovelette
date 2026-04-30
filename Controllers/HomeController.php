<?php
require_once __DIR__ . '/BaseController.php';

class HomeController extends BaseController {

    public function index(): void {
        // Données statiques pour la démo (à remplacer par des appels DB)
        $actualites = [
            [
                'titre'   => 'Victoire de Mathieu au Circuit de Wallonie !',
                'date'    => '2025-04-20',
                'extrait' => 'Une belle performance de notre coureur qui s\'impose en solitaire après 180 km de course.',
                'image'   => 'Assets/images/news1.jpg',
            ],
            [
                'titre'   => 'Stage d\'entraînement en Ardennes',
                'date'    => '2025-04-10',
                'extrait' => 'Le groupe élite s\'est retrouvé pour 3 jours d\'entraînement intensif dans les côtes ardennaises.',
                'image'   => 'Assets/images/news2.jpg',
            ],
            [
                'titre'   => 'Recrutement : rejoignez le SCV !',
                'date'    => '2025-03-28',
                'extrait' => 'Le club ouvre ses portes aux nouvelles recrues pour la saison 2025. Toutes catégories bienvenues.',
                'image'   => 'Assets/images/news3.jpg',
            ],
        ];

        $prochainsCourses = [
            ['nom' => 'Critérium de Fernelmont',   'date' => '2025-05-04', 'lieu' => 'Fernelmont'],
            ['nom' => 'Tour de Namur Juniors',      'date' => '2025-05-11', 'lieu' => 'Namur'],
            ['nom' => 'Grand Prix de Wallonie U19',  'date' => '2025-05-18', 'lieu' => 'Liège'],
        ];

        $this->render('home', [
            'actualites'      => $actualites,
            'prochainsCourses' => $prochainsCourses,
        ], 'Accueil — SCV Marchovelette');
    }

    public function notFound(): void {
        http_response_code(404);
        $this->render('404', [], '404 — Page introuvable');
    }
}