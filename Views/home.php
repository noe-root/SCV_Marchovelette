<!-- PAGE HEADER -->
<section class="page-hero">
    <div class="page-hero__content">
        <span class="section-tag">Qui sommes-nous</span>
        <h1 class="page-hero__title">Le <em>Club</em></h1>
        <p class="page-hero__sub">46 coureurs. Une passion. Fernelmont.</p>
    </div>
    <div class="page-hero__deco" aria-hidden="true">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <circle cx="100" cy="100" r="90" fill="none" stroke="#6366f1" stroke-width="1" opacity="0.15"/>
            <circle cx="100" cy="100" r="55" fill="none" stroke="#6366f1" stroke-width="0.8" opacity="0.1"/>
            <circle cx="100" cy="100" r="6"  fill="#6366f1" opacity="0.3"/>
            <?php for ($i = 0; $i < 12; $i++): ?>
                <?php $a = $i * 30; $r = deg2rad($a); ?>
                <line x1="100" y1="100"
                      x2="<?= round(100 + 90 * cos($r)) ?>"
                      y2="<?= round(100 + 90 * sin($r)) ?>"
                      stroke="#6366f1" stroke-width="0.6" opacity="0.1"/>
            <?php endfor; ?>
        </svg>
    </div>
</section>

<!-- HISTOIRE -->
<section class="section">
    <div class="container">
        <div class="two-col">
            <div class="two-col__text reveal">
                <span class="section-tag">Histoire</span>
                <h2 class="section-title">Depuis <em>1978</em></h2>
                <p>Le Sporting Club Vélo Marchovelette voit le jour en 1978 dans le village de Fernelmont, au cœur de la province de Namur. Fondé par une poignée de passionnés, le club grandit rapidement pour devenir l'un des clubs cyclistes de référence en Wallonie.</p>
                <p>Au fil des décennies, le SCV Marchovelette a formé de nombreux coureurs de talent, certains atteignant le niveau professionnel, d'autres restant fidèles aux couleurs du club pendant toute leur carrière.</p>
                <p>Aujourd'hui, le club compte <strong>46 licenciés</strong> répartis dans cinq catégories et participe chaque saison à plus de <strong>60 épreuves</strong> sur le territoire belge et dans les régions frontalières.</p>
            </div>
            <div class="two-col__visual reveal reveal--delay-1">
                <div class="history-card">
                    <div class="history-card__year">1978</div>
                    <div class="history-card__label">Fondation</div>
                    <div class="history-card__line"></div>
                    <div class="history-card__stat"><span>312</span> Victoires</div>
                    <div class="history-card__stat"><span>46</span> Licenciés</div>
                    <div class="history-card__stat"><span>5</span> Catégories</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COUREURS -->
<section class="section section--dark">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Équipe</span>
            <h2 class="section-title">Nos <em>coureurs</em></h2>
        </div>

        <!-- Filtres par catégorie -->
        <div class="filters">
            <button class="filter-btn filter-btn--active" data-filter="all">Tous</button>
            <button class="filter-btn" data-filter="Élite">Élite</button>
            <button class="filter-btn" data-filter="U23">U23</button>
            <button class="filter-btn" data-filter="U19">U19</button>
            <button class="filter-btn" data-filter="U17">U17</button>
            <button class="filter-btn" data-filter="Masters">Masters</button>
        </div>

        <div class="riders-grid" id="ridersGrid">
            <?php foreach ($coureurs as $i => $coureur): ?>
            <div class="rider-card reveal" style="--delay: <?= $i * 0.08 ?>s" data-categorie="<?= htmlspecialchars($coureur['categorie']) ?>">
                <div class="rider-card__number"><?= str_pad($coureur['numero'], 2, '0', STR_PAD_LEFT) ?></div>
                <div class="rider-card__avatar">
                    <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="22" r="11" stroke="#6366f1" stroke-width="1.5"/>
                        <path d="M10 52c0-11 9-20 20-20s20 9 20 20" stroke="#6366f1" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="rider-card__info">
                    <h3 class="rider-card__name"><?= htmlspecialchars($coureur['nom']) ?></h3>
                    <span class="rider-card__cat"><?= htmlspecialchars($coureur['categorie']) ?></span>
                </div>
                <div class="rider-card__wins">
                    <span class="rider-card__wins-num"><?= $coureur['victoires'] ?></span>
                    <span class="rider-card__wins-label">victoires</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- STAFF -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Direction</span>
            <h2 class="section-title">Le <em>staff</em></h2>
        </div>
        <div class="staff-grid">
            <?php foreach ($staff as $i => $membre): ?>
            <div class="staff-card reveal" style="--delay: <?= $i * 0.1 ?>s">
                <div class="staff-card__icon">
                    <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="14" r="7" stroke="#6366f1" stroke-width="1.5"/>
                        <path d="M6 36c0-7.7 6.3-14 14-14s14 6.3 14 14" stroke="#6366f1" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="staff-card__name"><?= htmlspecialchars($membre['nom']) ?></h3>
                <span class="staff-card__role"><?= htmlspecialchars($membre['role']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>