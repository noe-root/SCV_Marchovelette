<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<!-- HERO ──────────────────────────────────────────────────────────────────── -->
<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<section class="hero">
    <div class="hero__bg">
        <div class="hero__gradient"></div>
        <div class="hero__grid"></div>
        <!-- Roue décorative SVG animée -->
        <svg class="hero__wheel-deco" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
            <circle cx="200" cy="200" r="190" fill="none" stroke="#f5c400" stroke-width="1" opacity="0.08"/>
            <circle cx="200" cy="200" r="140" fill="none" stroke="#f5c400" stroke-width="0.5" opacity="0.06"/>
            <circle cx="200" cy="200" r="80"  fill="none" stroke="#f5c400" stroke-width="0.5" opacity="0.06"/>
            <?php for ($i = 0; $i < 18; $i++): ?>
                <?php $angle = $i * 20; $rad = deg2rad($angle); ?>
                <line x1="200" y1="200"
                      x2="<?= round(200 + 190 * cos($rad)) ?>"
                      y2="<?= round(200 + 190 * sin($rad)) ?>"
                      stroke="#f5c400" stroke-width="0.5" opacity="0.05"/>
            <?php endfor; ?>
            <circle cx="200" cy="200" r="12" fill="#f5c400" opacity="0.15"/>
        </svg>
    </div>

    <div class="hero__content">
        <div class="hero__tag reveal">CLUB CYCLISTE · FERNELMONT · NAMUR</div>
        <h1 class="hero__title reveal reveal--delay-1">
            <span class="hero__title-scv">SCV</span>
            <span class="hero__title-name">Marchovelette</span>
        </h1>
        <p class="hero__subtitle reveal reveal--delay-2">
            La passion du vélo depuis 1978.<br>
            Rejoignez nos coureurs sur les routes de Wallonie.
        </p>
        <div class="hero__actions reveal reveal--delay-3">
            <a href="<?= SITE_URL ?>/index.php?page=club" class="btn btn--primary">Découvrir le club</a>
            <a href="<?= SITE_URL ?>/index.php?page=evenements" class="btn btn--outline">Prochaines courses →</a>
        </div>
    </div>

    <!-- Stats rapides -->
    <div class="hero__stats reveal reveal--delay-4">
        <div class="hero__stat">
            <span class="hero__stat-num" data-count="46">0</span>
            <span class="hero__stat-label">Coureurs</span>
        </div>
        <div class="hero__stat">
            <span class="hero__stat-num" data-count="1978">0</span>
            <span class="hero__stat-label">Fondé en</span>
        </div>
        <div class="hero__stat">
            <span class="hero__stat-num" data-count="312">0</span>
            <span class="hero__stat-label">Victoires</span>
        </div>
        <div class="hero__stat">
            <span class="hero__stat-num" data-count="5">0</span>
            <span class="hero__stat-label">Catégories</span>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<!-- PROCHAINES COURSES ─────────────────────────────────────────────────────── -->
<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<section class="section section--dark">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Agenda</span>
            <h2 class="section-title">Prochaines <em>courses</em></h2>
        </div>

        <div class="races-list">
            <?php foreach ($prochainsCourses as $i => $course): ?>
            <?php
                $dateObj = new DateTime($course['date']);
                $jour    = $dateObj->format('d');
                $mois    = strtoupper(strftime('%b', $dateObj->getTimestamp()));
            ?>
            <div class="race-item reveal" style="--delay: <?= $i * 0.1 ?>s">
                <div class="race-item__date">
                    <span class="race-item__day"><?= $jour ?></span>
                    <span class="race-item__month"><?= $mois ?></span>
                </div>
                <div class="race-item__info">
                    <h3 class="race-item__name"><?= htmlspecialchars($course['nom']) ?></h3>
                    <span class="race-item__lieu">📍 <?= htmlspecialchars($course['lieu']) ?></span>
                </div>
                <div class="race-item__arrow">→</div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="section-cta">
            <a href="<?= SITE_URL ?>/index.php?page=evenements" class="btn btn--primary">Voir tous les événements</a>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<!-- ACTUALITÉS ─────────────────────────────────────────────────────────────── -->
<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">News</span>
            <h2 class="section-title">Dernières <em>actualités</em></h2>
        </div>

        <div class="news-grid">
            <?php foreach ($actualites as $i => $actu): ?>
            <article class="news-card reveal" style="--delay: <?= $i * 0.15 ?>s">
                <div class="news-card__img">
                    <div class="news-card__img-placeholder">
                        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="32" cy="32" r="28" stroke="#f5c400" stroke-width="1.5" opacity="0.3"/>
                            <circle cx="32" cy="32" r="14" stroke="#f5c400" stroke-width="1.5" opacity="0.3"/>
                            <circle cx="32" cy="32" r="4" fill="#f5c400" opacity="0.5"/>
                        </svg>
                    </div>
                    <div class="news-card__number"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></div>
                </div>
                <div class="news-card__body">
                    <time class="news-card__date"><?= (new DateTime($actu['date']))->format('d/m/Y') ?></time>
                    <h3 class="news-card__title"><?= htmlspecialchars($actu['titre']) ?></h3>
                    <p class="news-card__excerpt"><?= htmlspecialchars($actu['extrait']) ?></p>
                    <a href="#" class="news-card__link">Lire la suite →</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<!-- BAND CTA ───────────────────────────────────────────────────────────────── -->
<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<section class="band">
    <div class="band__track" aria-hidden="true">
        <span>SCV Marchovelette</span><span>·</span>
        <span>Fernelmont</span><span>·</span>
        <span>Club Cycliste</span><span>·</span>
        <span>Namur</span><span>·</span>
        <span>SCV Marchovelette</span><span>·</span>
        <span>Fernelmont</span><span>·</span>
        <span>Club Cycliste</span><span>·</span>
        <span>Namur</span><span>·</span>
        <span>SCV Marchovelette</span><span>·</span>
        <span>Fernelmont</span><span>·</span>
        <span>Club Cycliste</span><span>·</span>
        <span>Namur</span><span>·</span>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<!-- REJOINDRE ──────────────────────────────────────────────────────────────── -->
<!-- ═══════════════════════════════════════════════════════════════════════════ -->
<section class="section section--accent">
    <div class="container container--narrow">
        <div class="join-block reveal">
            <h2 class="join-block__title">Rejoignez<br><em>le SCV</em></h2>
            <p class="join-block__text">
                Que vous soyez débutant ou coureur confirmé, le SCV Marchovelette vous accueille.
                Entraînements collectifs, sorties de club et compétitions toute l'année.
            </p>
            <a href="<?= SITE_URL ?>/index.php?page=contact" class="btn btn--dark">Nous contacter →</a>
        </div>
    </div>
</section>