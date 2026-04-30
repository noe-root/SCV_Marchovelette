<!-- PAGE HEADER -->
<section class="page-hero">
    <div class="page-hero__content">
        <span class="section-tag">Nous contacter</span>
        <h1 class="page-hero__title">Dites-nous <em>bonjour</em></h1>
        <p class="page-hero__sub">Une question, une inscription ? On vous répond rapidement.</p>
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

<!-- CONTACT -->
<section class="section">
    <div class="container">
        <div class="contact-layout">

            <!-- Infos -->
            <div class="contact-info reveal">
                <span class="section-tag" style="margin-bottom:1.5rem;">Informations</span>
                <h2 class="section-title" style="margin-bottom:2rem;">Où nous <em>trouver</em></h2>

                <div class="contact-info__item">
                    <div class="contact-info__icon">📍</div>
                    <div>
                        <div class="contact-info__label">Adresse</div>
                        <div class="contact-info__value">Fernelmont, Province de Namur<br>Belgique</div>
                    </div>
                </div>

                <div class="contact-info__item">
                    <div class="contact-info__icon">📧</div>
                    <div>
                        <div class="contact-info__label">E-mail</div>
                        <div class="contact-info__value">contact@scv-marchovelette.be</div>
                    </div>
                </div>

                <div class="contact-info__item">
                    <div class="contact-info__icon">📞</div>
                    <div>
                        <div class="contact-info__label">Téléphone</div>
                        <div class="contact-info__value">+32 81 00 00 00</div>
                    </div>
                </div>

                <div class="contact-info__item">
                    <div class="contact-info__icon">🕐</div>
                    <div>
                        <div class="contact-info__label">Permanence</div>
                        <div class="contact-info__value">Mardi &amp; Jeudi · 18h–20h</div>
                    </div>
                </div>
            </div>

            <!-- Formulaire -->
            <div class="reveal reveal--delay-1">
                <div class="contact-form">
                    <h3 style="font-family:var(--font-heading);font-weight:700;font-size:1.375rem;text-transform:uppercase;letter-spacing:0.05em;margin-bottom:1.75rem;">
                        Envoyer un <span style="color:var(--yellow);">message</span>
                    </h3>

                    <?php if ($message): ?>
                    <div class="form-alert form-alert--success"><?= htmlspecialchars($message) ?></div>
                    <?php endif; ?>
                    <?php if ($error): ?>
                    <div class="form-alert form-alert--error"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>

                    <form method="POST" action="<?= SITE_URL ?>/index.php?page=contact" novalidate>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom">Nom *</label>
                                <input type="text" id="nom" name="nom"
                                       placeholder="Votre nom"
                                       value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail *</label>
                                <input type="email" id="email" name="email"
                                       placeholder="votre@email.com"
                                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sujet">Sujet</label>
                            <select id="sujet" name="sujet">
                                <option value="">Sélectionnez un sujet</option>
                                <option value="Inscription" <?= (($_POST['sujet'] ?? '') === 'Inscription') ? 'selected' : '' ?>>Inscription au club</option>
                                <option value="Information" <?= (($_POST['sujet'] ?? '') === 'Information') ? 'selected' : '' ?>>Demande d'information</option>
                                <option value="Partenariat" <?= (($_POST['sujet'] ?? '') === 'Partenariat') ? 'selected' : '' ?>>Partenariat</option>
                                <option value="Autre" <?= (($_POST['sujet'] ?? '') === 'Autre') ? 'selected' : '' ?>>Autre</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message"
                                      placeholder="Votre message…"
                                      required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                        </div>

                        <button type="submit" class="btn btn--primary" style="width:100%;">
                            Envoyer le message →
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
