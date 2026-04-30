<?php
// Helpers
function placeClass(int $p): string {
    if ($p === 1) return 'place-badge--1';
    if ($p === 2) return 'place-badge--2';
    if ($p === 3) return 'place-badge--3';
    return 'place-badge--other';
}
?>

<!-- PAGE HEADER -->
<section class="page-hero">
    <div class="page-hero__content">
        <span class="section-tag">Résultats</span>
        <h1 class="page-hero__title">Palmarès <em>SCV</em></h1>
        <p class="page-hero__sub">Nos meilleurs résultats saison après saison.</p>
    </div>
    <div class="page-hero__deco" aria-hidden="true">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <circle cx="100" cy="100" r="90" fill="none" stroke="#f5c400" stroke-width="1" opacity="0.15"/>
            <circle cx="100" cy="100" r="55" fill="none" stroke="#f5c400" stroke-width="0.8" opacity="0.1"/>
            <circle cx="100" cy="100" r="6"  fill="#f5c400" opacity="0.3"/>
            <?php for ($i = 0; $i < 12; $i++): ?>
                <?php $a = $i * 30; $r = deg2rad($a); ?>
                <line x1="100" y1="100"
                      x2="<?= round(100 + 90 * cos($r)) ?>"
                      y2="<?= round(100 + 90 * sin($r)) ?>"
                      stroke="#f5c400" stroke-width="0.6" opacity="0.1"/>
            <?php endfor; ?>
        </svg>
    </div>
</section>

<!-- PALMARES PAR ANNÉE -->
<section class="section">
    <div class="container">
        <?php foreach ($palmares as $annee => $resultats): ?>
        <div class="palmares-year reveal">
            <div class="palmares-year__heading"><?= $annee ?></div>
            <table class="palmares-table">
                <thead>
                    <tr>
                        <th>Place</th>
                        <th>Course</th>
                        <th>Coureur</th>
                        <th>Catégorie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultats as $r): ?>
                    <tr>
                        <td>
                            <span class="place-badge <?= placeClass($r['place']) ?>">
                                <?= $r['place'] ?>
                            </span>
                        </td>
                        <td><?= htmlspecialchars($r['course']) ?></td>
                        <td><strong><?= htmlspecialchars($r['coureur']) ?></strong></td>
                        <td><span class="event-type-badge"><?= htmlspecialchars($r['categorie']) ?></span></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endforeach; ?>
    </div>
</section>
