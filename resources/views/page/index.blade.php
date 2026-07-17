<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Eclesia — Église à Kolwezi. Culte dominical, enseignement biblique et accompagnement pastoral." />
  <meta name="theme-color" content="#f6f8fb" media="(prefers-color-scheme: light)" />
  <meta name="theme-color" content="#152238" media="(prefers-color-scheme: dark)" />
  <meta name="color-scheme" content="light dark" />
  <meta property="og:title" content="Eclesia | Kolwezi" />
  <meta property="og:description" content="Communauté chrétienne à Kolwezi — culte, Parole et service." />
  <meta property="og:type" content="website" />
  <title>Eclesia | Kolwezi</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet" />
{{--  <link rel="stylesheet" href="{{asset('css/site.css') }}" />--}}
</head>
<body>
  <a class="site-skip" href="#contenu">Aller au contenu</a>

  <header class="site-header">
    <div class="site-shell site-header__inner">
      <a class="site-brand" href="index.html">
        <img class="site-brand__logo" src="{{ asset('images/eclesia-logo.svg') }}" width="44" height="44" alt="" />
        <span class="site-brand__text">
          <strong>Eclesia</strong>
          <span>Kolwezi · RDC</span>
        </span>
      </a>
      <button
        type="button"
        class="site-nav-toggle"
        aria-label="Ouvrir le menu"
        aria-expanded="false"
        aria-controls="site-nav"
      >
        <span></span><span></span><span></span>
      </button>
      <nav class="site-nav" id="site-nav" aria-label="Navigation principale">
        <a href="#accueil" class="site-nav__link is-active">Accueil</a>
        <a href="#eglise" class="site-nav__link">L'église</a>
        <a href="#cultes" class="site-nav__link">Cultes</a>
        <a href="#message" class="site-nav__link">Message</a>
        <a href="#contact" class="site-nav__link">Contact</a>
      </nav>
      <a href="{{ route('login') }}" class="site-btn-login" rel="nofollow">Connexion équipe</a>
    </div>
  </header>

  <main id="contenu">
    <section class="site-hero" id="accueil">
      <div class="site-shell site-hero__grid">
        <div class="site-hero__content">
          <p class="site-kicker">Eclesia</p>
          <h1>Eclesia</h1>
          <p class="site-hero__lead">
            Une communauté chrétienne à Kolwezi, unie autour de la Parole, de la prière
            et du service des familles.
          </p>
          <blockquote class="site-hero__verse">« Vous êtes la lumière du monde. » — Matthieu 5:14</blockquote>
          <div class="site-hero__actions">
            <a href="#cultes" class="site-btn site-btn--primary">Voir le programme</a>
            <a href="#message" class="site-btn site-btn--outline">Écrire au pasteur</a>
          </div>
        </div>
        <aside class="site-hero__panel" aria-label="Informations pratiques">
          <div class="site-hero__panel-head">
            <img src=" {{ asset('images/eclesia-logo.svg') }}" width="56" height="56" alt="" />
            <div>
              <strong>Bienvenue</strong>
              <span>Chaque dimanche</span>
            </div>
          </div>
          <ul class="site-hero__facts">
            <li>
              <span class="site-hero__fact-label">Culte</span>
              <span class="site-hero__fact-value">Dimanche matin</span>
            </li>
            <li>
              <span class="site-hero__fact-label">Lieu</span>
              <span class="site-hero__fact-value">Kolwezi</span>
            </li>
            <li>
              <span class="site-hero__fact-label">Accompagnement</span>
              <span class="site-hero__fact-value">Prières &amp; rendez-vous</span>
            </li>
          </ul>
          <a href="#eglise" class="site-hero__panel-link">Découvrir notre vision →</a>
        </aside>
      </div>
    </section>

    <section class="site-section" id="eglise">
      <div class="site-shell">
        <header class="site-section-head">
          <p class="site-kicker">Qui sommes-nous</p>
          <h2>L'église</h2>
          <p class="site-section-head__lead">
            Porter la lumière du Christ dans notre ville par la foi, l'intégrité
            et l'amour concret envers chaque personne.
          </p>
        </header>
        <div class="site-pillars">
          <article class="site-pillar">
            <span class="site-pillar__num" aria-hidden="true">01</span>
            <div class="site-pillar__icon site-pillar__icon--logo">
              <img src="../../../public/images/eclesia-logo.svg" width="32" height="32" alt="" />
            </div>
            <h3>Notre vision</h3>
            <p>Former des disciples, soutenir les familles et annoncer l'Évangile avec simplicité et foi au cœur de Kolwezi.</p>
          </article>
          <article class="site-pillar">
            <span class="site-pillar__num" aria-hidden="true">02</span>
            <div class="site-pillar__icon">◎</div>
            <h3>Notre mission</h3>
            <p>Culte, enseignement biblique, accompagnement pastoral et actions concrètes au profit de la communauté locale.</p>
          </article>
          <article class="site-pillar">
            <span class="site-pillar__num" aria-hidden="true">03</span>
            <div class="site-pillar__icon">♡</div>
            <h3>Nos valeurs</h3>
            <p>Foi, intégrité, service, unité et respect de chaque personne créée à l'image de Dieu.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="site-section site-section--band" id="cultes">
      <div class="site-shell">
        <header class="site-section-head site-section-head--light">
          <p class="site-kicker">Venez nous rejoindre</p>
          <h2>Cultes &amp; activités</h2>
          <p class="site-section-head__lead">
            Le programme de la semaine est publié ici. Retrouvez aussi nos ministères et l'accueil des nouveaux venus.
          </p>
        </header>
        <div class="site-cultes">
          <div id="site-program-published" class="site-cultes__program">
            <article class="site-card site-card--program site-card--wide">
              <p class="site-program-empty">Chargement du programme…</p>
            </article>
          </div>
          <div class="site-cultes__aside">
            <article class="site-side-card">
              <h3>Ministères</h3>
              <p>Louange, enfants, jeunes, femmes, hommes, accueil des nouveaux venus et accompagnement pastoral.</p>
            </article>
            <article class="site-side-card">
              <h3>Nouveaux venus</h3>
              <p>Vous êtes les bienvenus. Passez nous voir après le culte ou écrivez-nous pour être orienté vers un responsable.</p>
              <a href="#message" class="site-side-card__link">Nous écrire →</a>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="message">
      <div class="site-shell site-message-split">
        <div class="site-message-aside">
          <header class="site-section-head site-section-head--left">
            <p class="site-kicker">Accompagnement pastoral</p>
            <h2>Écrire au pasteur</h2>
            <p class="site-section-head__lead">
              Demande de prière, rendez-vous ou autre message. Votre demande est d'abord validée par l'équipe, puis transmise au pasteur concerné.
            </p>
          </header>
          <ol class="site-steps">
            <li>
              <strong>Vous écrivez</strong>
              <span>Remplissez le formulaire ci-contre.</span>
            </li>
            <li>
              <strong>L'équipe valide</strong>
              <span>Un responsable lit et oriente votre demande.</span>
            </li>
            <li>
              <strong>Le pasteur répond</strong>
              <span>L'église vous recontacte par téléphone.</span>
            </li>
          </ol>
        </div>
        <div class="site-message-card">
          <form id="site-message-form" class="site-message-form">
            <div class="site-message-grid">
              <label>
                Nom complet
                <input name="sender_name" type="text" required autocomplete="name" />
              </label>
              <label>
                Téléphone
                <input name="sender_phone" type="tel" required autocomplete="tel" />
              </label>
              <label>
                Email <span class="site-label-opt">(optionnel)</span>
                <input name="sender_email" type="email" autocomplete="email" />
              </label>
              <label>
                Type de demande
                <select name="message_type" required>
                  <option value="priere">Demande de prière</option>
                  <option value="rendez_vous">Prise de rendez-vous</option>
                  <option value="autre">Autre</option>
                </select>
              </label>
              <label class="site-message-full">
                Pasteur souhaité <span class="site-label-opt">(optionnel)</span>
                <select name="pastor_user_id" id="site-message-pastor">
                  <option value="">— Au choix de l'église —</option>
                </select>
              </label>
              <label class="site-message-full">
                Objet <span class="site-label-opt">(optionnel)</span>
                <input name="subject" type="text" />
              </label>
              <label class="site-message-full">
                Message
                <textarea name="body" rows="5" required placeholder="Décrivez votre demande…"></textarea>
              </label>
            </div>
            <button type="submit" class="site-btn site-btn--primary site-btn--block">Envoyer ma demande</button>
            <p id="site-message-feedback" class="site-message-feedback" hidden></p>
          </form>
        </div>
      </div>
    </section>

    <section class="site-section site-section--muted" id="contact">
      <div class="site-shell">
        <header class="site-section-head">
          <p class="site-kicker">Nous contacter</p>
          <h2>Restons en lien</h2>
          <p class="site-section-head__lead">
            Eclesia, Kolwezi, République Démocratique du Congo.
          </p>
        </header>
        <div class="site-contact-grid">
          <article class="site-contact-card">
            <span class="site-contact-card__icon" aria-hidden="true">⌖</span>
            <h3>Adresse</h3>
            <p>Kolwezi<br><span class="site-contact-muted">Coordination sur place</span></p>
          </article>
          <article class="site-contact-card">
            <span class="site-contact-card__icon" aria-hidden="true">✉</span>
            <h3>Email</h3>
            <p><a href="mailto:contact@eclesia.cd">contact@eclesia.cd</a></p>
          </article>
          <article class="site-contact-card">
            <span class="site-contact-card__icon" aria-hidden="true">☎</span>
            <h3>Téléphone</h3>
              <p><span class="site-contact-muted">+243 </span>
              </p>
          </article>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="site-shell site-footer__grid">
      <div class="site-footer__brand">
        <img src="{{ asset('images/eclesia-logo.svg') }}" width="40" height="40" alt="" />
        <div>
          <strong>Eclesia</strong>
          <span>Kolwezi — RDC</span>
        </div>
      </div>
      <nav class="site-footer__nav" aria-label="Pied de page">
        <a href="#accueil">Accueil</a>
        <a href="#eglise">L'église</a>
        <a href="#cultes">Cultes</a>
        <a href="#message">Message</a>
        <a href="#contact">Contact</a>
      </nav>
      <div class="site-footer__meta">
        <p class="site-footer__copy">&copy; <span id="site-year"></span> Eclesia</p>
        <a href="#contact" class="site-footer__staff" rel="nofollow">Espace équipe</a>
      </div>
    </div>
  </footer>

  <script src=" {{ asset('js/site-program.js') }}"></script>
  <script src="{{ asset('site-member-message.js') }}"></script>
  <script src="{{ asset('js/site.js') }}"></script>
  <script>
    document.getElementById('site-year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
