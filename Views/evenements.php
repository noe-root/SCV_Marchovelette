<!-- PAGE HEADER -->
<section class="page-hero">
    <div class="page-hero__content">
        <span class="section-tag">Agenda</span>
        <h1 class="page-hero__title">Nos <em>Événements</em></h1>
        <p class="page-hero__sub">Toutes les courses et résultats de la saison.</p>
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

<!-- PROCHAINES COURSES -->
<section class="section section--dark">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">À venir</span>
            <h2 class="section-title">Prochaines <em>courses</em></h2>
        </div>

        <div class="table-wrap" style="overflow-x:auto;">
            <table class="events-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Course</th>
                        <th>Lieu</th>
                        <th>Type</th>
                        <th>Distance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prochains as $ev): ?>
                    <?php $d = new DateTime($ev['date']); ?>
                    <tr>
                        <td>
                            <span style="font-family:var(--font-heading);font-weight:700;color:var(--yellow);">
                                <?= $d->format('d/m/Y') ?>
                            </span>
                        </td>
                        <td><strong><?= htmlspecialchars($ev['nom']) ?></strong></td>
                        <td><?= htmlspecialchars($ev['lieu']) ?></td>
                        <td><span class="event-type-badge"><?= htmlspecialchars($ev['type']) ?></span></td>
                        <td><?= htmlspecialchars($ev['distance']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- COURSES PASSÉES -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Résultats</span>
            <h2 class="section-title">Courses <em>passées</em></h2>
        </div>

        <div class="past-events-list">
            <?php foreach ($passes as $i => $ev): ?>
            <?php $d = new DateTime($ev['date']); ?>
            <div class="past-event reveal" style="--delay:<?= $i * 0.08 ?>s">
                <div>
                    <div class="past-event__name"><?= htmlspecialchars($ev['nom']) ?></div>
                    <div class="past-event__date">
                        <?= $d->format('d/m/Y') ?> &nbsp;·&nbsp; <?= htmlspecialchars($ev['lieu']) ?>
                    </div>
                </div>
                <div class="past-event__result"><?= htmlspecialchars($ev['resultat']) ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
