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
  <link rel="stylesheet" href="{{asset('css/site.css') }}" />

    <style>
        /* Site public — Eclesia Kolwezi */

        :root {

            --site-bg: #f6f8fb;
            --site-surface: #ffffff;
            --site-muted-bg: #eef2f7;
            --site-band: #152238;
            --site-text: #0f172a;
            --site-text-soft: #334155;
            --site-muted: #64748b;
            --site-gold: #c9a227;
            --site-gold-light: #f5e6b8;
            --site-blue: #1e3a5f;
            --site-blue-deep: #152238;
            --site-border: #e2e8f0;
            --site-max: 1140px;
            --site-font: 'Cormorant Garamond', Georgia, serif;
            --site-font-ui: 'Plus Jakarta Sans', system-ui, sans-serif;
            --site-radius: 14px;
            --site-radius-sm: 10px;
            --site-shadow: 0 4px 24px rgba(15, 23, 42, 0.06);
            --site-shadow-lg: 0 20px 50px rgba(15, 23, 42, 0.12);
        }

        *, *::before, *::after { box-sizing: border-box; }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 5rem;
        }

        body {
            margin: 0;
            font-family: var(--site-font-ui);
            font-size: 1rem;
            line-height: 1.65;
            color: var(--site-text);
            background: var(--site-bg);
            -webkit-font-smoothing: antialiased;
        }

        a { color: var(--site-blue); text-decoration: none; }
        a:hover { text-decoration: underline; }

        .site-shell {
            max-width: var(--site-max);
            margin: 0 auto;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .site-skip {
            position: absolute;
            left: -9999px;
            z-index: 200;
            padding: 0.5rem 1rem;
            background: var(--site-blue-deep);
            color: #fff;
            font-weight: 600;
        }
        .site-skip:focus { left: 1rem; top: 1rem; }

        /* —— Typographie —— */
        .site-kicker {
            margin: 0 0 0.5rem;
            font-family: var(--site-font-ui);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--site-gold);
        }

        .site-section-head {
            text-align: center;
            max-width: 640px;
            margin: 0 auto 2.75rem;
        }

        .site-section-head--left {
            text-align: left;
            margin-left: 0;
            margin-right: 0;
            max-width: none;
        }

        .site-section-head--light .site-kicker { color: var(--site-gold-light); }
        .site-section-head--light h2 { color: #fff; }
        .site-section-head--light .site-section-head__lead { color: rgba(255, 255, 255, 0.78); }

        .site-section-head h2 {
            margin: 0 0 0.75rem;
            font-family: var(--site-font);
            font-size: clamp(2rem, 4vw, 2.75rem);
            font-weight: 600;
            line-height: 1.15;
            color: var(--site-blue-deep);
        }

        .site-section-head__lead {
            margin: 0;
            font-size: 1.05rem;
            color: var(--site-muted);
            font-weight: 500;
            line-height: 1.7;
        }

        /* —— En-tête —— */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--site-border);
            transition: box-shadow 0.2s ease;
        }

        .site-header.is-scrolled {
            box-shadow: 0 4px 20px rgba(15, 23, 42, 0.06);
        }

        .site-header__inner {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding-top: 0.85rem;
            padding-bottom: 0.85rem;
        }

        .site-brand {
            display: flex;
            align-items: center;
            gap: 0.7rem;
            color: inherit;
            text-decoration: none;
            flex-shrink: 0;
        }
        .site-brand:hover { text-decoration: none; }

        .site-brand__logo {
            width: 44px;
            height: 44px;
            border-radius: var(--site-radius-sm);
            box-shadow: 0 4px 14px rgba(21, 34, 56, 0.18);
        }

        .site-brand__text strong {
            display: block;
            font-size: 1rem;
            font-weight: 800;
            color: var(--site-blue-deep);
            line-height: 1.2;
        }

        .site-brand__text span {
            font-size: 0.72rem;
            color: var(--site-muted);
            font-weight: 500;
        }

        .site-nav {
            display: flex;
            align-items: center;
            gap: 0.15rem;
            margin-left: auto;
        }

        .site-nav__link {
            padding: 0.5rem 0.85rem;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--site-text-soft);
            text-decoration: none;
            border-radius: var(--site-radius-sm);
            transition: color 0.15s, background 0.15s;
        }
        .site-nav__link:hover {
            color: var(--site-blue-deep);
            background: rgba(21, 34, 56, 0.05);
            text-decoration: none;
        }
        .site-nav__link.is-active {
            color: var(--site-blue-deep);
            background: rgba(201, 162, 39, 0.14);
        }

        .site-btn-login {
            flex-shrink: 0;
            padding: 0.5rem 1.1rem;
            background: var(--site-blue-deep);
            color: #fff;
            font-weight: 700;
            font-size: 0.82rem;
            border-radius: var(--site-radius-sm);
            text-decoration: none;
            transition: background 0.15s, transform 0.15s;
        }
        .site-btn-login:hover {
            background: var(--site-blue);
            color: #fff;
            text-decoration: none;
            transform: translateY(-1px);
        }

        .site-nav-toggle {
            display: none;
            width: 42px;
            height: 42px;
            padding: 0;
            margin-left: auto;
            border: 1px solid var(--site-border);
            border-radius: var(--site-radius-sm);
            background: #fff;
            cursor: pointer;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        .site-nav-toggle span {
            display: block;
            width: 18px;
            height: 2px;
            background: var(--site-blue-deep);
            transition: transform 0.2s, opacity 0.2s;
        }
        body.site-nav-open .site-nav-toggle span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        body.site-nav-open .site-nav-toggle span:nth-child(2) { opacity: 0; }
        body.site-nav-open .site-nav-toggle span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        /* —— Hero —— */
        .site-hero {
            background:
                radial-gradient(ellipse 80% 60% at 100% 0%, rgba(201, 162, 39, 0.12), transparent 55%),
                linear-gradient(160deg, #1a2f4d 0%, var(--site-blue-deep) 55%, #0d1520 100%);
            color: #fff;
            padding: 4.5rem 0 5rem;
        }

        .site-hero__grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 3rem;
            align-items: center;
        }

        .site-hero__content h1 {
            margin: 0 0 1rem;
            font-family: var(--site-font);
            font-size: clamp(2.5rem, 5vw, 3.75rem);
            font-weight: 600;
            line-height: 1.08;
            color: #fff;
        }

        .site-hero .site-kicker { color: var(--site-gold-light); }

        .site-hero__lead {
            margin: 0 0 1.25rem;
            font-size: 1.08rem;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.88);
            max-width: 520px;
        }

        .site-hero__verse {
            margin: 0 0 2rem;
            padding: 0;
            border: none;
            font-family: var(--site-font);
            font-size: 1.15rem;
            font-style: italic;
            color: var(--site-gold-light);
            opacity: 0.95;
        }

        .site-hero__actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .site-hero__panel {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: var(--site-radius);
            padding: 1.5rem;
            backdrop-filter: blur(8px);
        }

        .site-hero__panel-head {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.25rem;
            padding-bottom: 1.25rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .site-hero__panel-head img {
            border-radius: var(--site-radius-sm);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
        }

        .site-hero__panel-head strong {
            display: block;
            font-size: 1.05rem;
            font-weight: 700;
        }

        .site-hero__panel-head span {
            font-size: 0.82rem;
            opacity: 0.75;
        }

        .site-hero__facts {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .site-hero__facts li {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            padding: 0.65rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 0.9rem;
        }
        .site-hero__facts li:last-child { border-bottom: none; }

        .site-hero__fact-label {
            color: rgba(255, 255, 255, 0.65);
            font-weight: 500;
        }

        .site-hero__fact-value {
            font-weight: 700;
            text-align: right;
        }

        .site-hero__panel-link {
            display: inline-block;
            margin-top: 1.25rem;
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--site-gold-light);
            text-decoration: none;
        }
        .site-hero__panel-link:hover { text-decoration: underline; color: #fff; }

        /* —— Boutons —— */
        .site-btn {
            display: inline-block;
            padding: 0.72rem 1.45rem;
            font-family: var(--site-font-ui);
            font-size: 0.9rem;
            font-weight: 700;
            border-radius: var(--site-radius-sm);
            text-decoration: none;
            border: 2px solid transparent;
            cursor: pointer;
            transition: transform 0.15s, box-shadow 0.15s, background 0.15s;
        }
        .site-btn:hover { text-decoration: none; transform: translateY(-1px); }

        .site-btn--primary {
            background: var(--site-gold);
            color: #1a1206;
            box-shadow: 0 6px 20px rgba(201, 162, 39, 0.3);
        }
        .site-btn--primary:hover { background: #ddb42e; color: #1a1206; }

        .site-btn--outline {
            background: transparent;
            color: #fff;
            border-color: rgba(255, 255, 255, 0.35);
        }
        .site-btn--outline:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .site-btn--block {
            width: 100%;
            text-align: center;
        }

        /* —— Sections —— */
        .site-section {
            padding: 5rem 0;
        }

        .site-section--band {
            background: var(--site-band);
            color: #fff;
        }

        .site-section--muted {
            background: var(--site-muted-bg);
        }

        /* —— Piliers (église) —— */
        .site-pillars {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .site-pillar {
            position: relative;
            padding: 2rem 1.75rem 1.75rem;
            background: var(--site-surface);
            border: 1px solid var(--site-border);
            border-radius: var(--site-radius);
            box-shadow: var(--site-shadow);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .site-pillar:hover {
            transform: translateY(-3px);
            box-shadow: var(--site-shadow-lg);
        }

        .site-pillar__num {
            position: absolute;
            top: 1.25rem;
            right: 1.25rem;
            font-family: var(--site-font);
            font-size: 2rem;
            font-weight: 600;
            color: rgba(21, 34, 56, 0.06);
            line-height: 1;
        }

        .site-pillar__icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: 1rem;
            border-radius: var(--site-radius-sm);
            background: rgba(21, 34, 56, 0.06);
            color: var(--site-blue-deep);
            font-size: 1.1rem;
        }

        .site-pillar__icon--logo {
            background: transparent;
            width: 3rem;
            height: 3rem;
        }
        .site-pillar__icon--logo img {
            width: 100%;
            height: 100%;
            border-radius: 8px;
        }

        .site-pillar h3 {
            margin: 0 0 0.6rem;
            font-family: var(--site-font);
            font-size: 1.45rem;
            font-weight: 600;
            color: var(--site-blue-deep);
        }

        .site-pillar p {
            margin: 0;
            font-size: 0.95rem;
            color: var(--site-text-soft);
            line-height: 1.65;
        }

        /* —— Cultes —— */
        .site-cultes {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 1.5rem;
            align-items: start;
        }

        .site-cultes__aside {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .site-side-card {
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--site-radius);
            transition: background 0.2s;
        }
        .site-side-card:hover { background: rgba(255, 255, 255, 0.09); }

        .site-side-card h3 {
            margin: 0 0 0.5rem;
            font-family: var(--site-font);
            font-size: 1.3rem;
            font-weight: 600;
            color: #fff;
        }

        .site-side-card p {
            margin: 0;
            font-size: 0.92rem;
            color: rgba(255, 255, 255, 0.78);
            line-height: 1.6;
        }

        .site-side-card__link {
            display: inline-block;
            margin-top: 0.85rem;
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--site-gold-light);
            text-decoration: none;
        }
        .site-side-card__link:hover { text-decoration: underline; }

        /* —— Cartes programme (JS) —— */
        .site-card {
            padding: 1.5rem;
            background: var(--site-surface);
            border: 1px solid var(--site-border);
            border-radius: var(--site-radius);
            box-shadow: var(--site-shadow);
        }

        .site-card--wide { grid-column: 1 / -1; }

        .site-card--program {
            background: #fff;
            border-color: rgba(255, 255, 255, 0.15);
            box-shadow: var(--site-shadow-lg);
        }

        .site-section--band .site-card--program {
            border: none;
        }

        .site-card--program h3 {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.5rem 0.75rem;
            margin: 0 0 0.5rem;
            font-family: var(--site-font);
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--site-blue-deep);
        }

        .site-program-badge {
            display: inline-block;
            padding: 0.2rem 0.65rem;
            font-family: var(--site-font-ui);
            font-size: 0.65rem;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #1a1206;
            background: var(--site-gold-light);
            border-radius: 999px;
        }

        .site-program-week {
            margin: 0 0 1rem;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--site-blue);
        }

        .site-program-note {
            margin: 1rem 0 0;
            padding: 0.9rem 1rem;
            border-left: 3px solid var(--site-gold);
            background: rgba(201, 162, 39, 0.08);
            font-size: 0.92rem;
            color: var(--site-text-soft);
            border-radius: 0 var(--site-radius-sm) var(--site-radius-sm) 0;
            white-space: pre-wrap;
        }

        .site-program-empty {
            margin: 0;
            color: var(--site-muted);
            font-weight: 500;
        }

        .site-schedule {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .site-schedule li {
            display: grid;
            grid-template-columns: 7.5rem 1fr;
            gap: 0.75rem 1rem;
            padding: 0.8rem 0;
            border-bottom: 1px solid var(--site-border);
            font-size: 0.95rem;
            align-items: start;
        }
        .site-schedule li:last-child { border-bottom: none; }

        .site-schedule strong {
            color: var(--site-blue-deep);
            font-weight: 800;
            font-size: 0.88rem;
        }

        .site-schedule--program em {
            display: block;
            margin-top: 0.2rem;
            font-size: 0.85rem;
            color: var(--site-muted);
            font-style: normal;
        }

        /* —— Message pasteur —— */
        .site-message-split {
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            gap: 3rem;
            align-items: start;
        }

        .site-steps {
            list-style: none;
            margin: 2rem 0 0;
            padding: 0;
            counter-reset: step;
        }

        .site-steps li {
            position: relative;
            padding: 0 0 1.5rem 3rem;
            counter-increment: step;
        }
        .site-steps li:last-child { padding-bottom: 0; }

        .site-steps li::before {
            content: counter(step);
            position: absolute;
            left: 0;
            top: 0;
            width: 2rem;
            height: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.82rem;
            font-weight: 800;
            color: var(--site-blue-deep);
            background: rgba(21, 34, 56, 0.07);
            border-radius: 50%;
        }

        .site-steps li strong {
            display: block;
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--site-blue-deep);
            margin-bottom: 0.2rem;
        }

        .site-steps li span {
            font-size: 0.9rem;
            color: var(--site-muted);
        }

        .site-message-card {
            padding: 2rem;
            background: var(--site-surface);
            border: 1px solid var(--site-border);
            border-radius: var(--site-radius);
            box-shadow: var(--site-shadow-lg);
        }

        .site-message-form label {
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
            font-size: 0.84rem;
            font-weight: 700;
            color: var(--site-text);
        }

        .site-label-opt {
            font-weight: 500;
            color: var(--site-muted);
            font-size: 0.78rem;
        }

        .site-message-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.25rem;
        }

        .site-message-full { grid-column: 1 / -1; }

        .site-message-form input,
        .site-message-form select,
        .site-message-form textarea {
            font: inherit;
            font-weight: 500;
            padding: 0.7rem 0.9rem;
            border: 1px solid var(--site-border);
            border-radius: var(--site-radius-sm);
            background: var(--site-bg);
            color: var(--site-text);
            transition: border-color 0.15s, box-shadow 0.15s;
        }

        .site-message-form input:focus,
        .site-message-form select:focus,
        .site-message-form textarea:focus {
            outline: none;
            border-color: var(--site-blue);
            box-shadow: 0 0 0 3px rgba(30, 58, 95, 0.1);
            background: #fff;
        }

        .site-message-form textarea { resize: vertical; min-height: 120px; }

        .site-message-feedback {
            margin: 1rem 0 0;
            padding: 0.85rem 1rem;
            border-radius: var(--site-radius-sm);
            font-weight: 600;
            font-size: 0.92rem;
        }

        .site-message-feedback--ok {
            background: rgba(34, 160, 107, 0.1);
            color: #166534;
            border: 1px solid rgba(34, 160, 107, 0.2);
        }

        .site-message-feedback--err {
            background: rgba(229, 72, 77, 0.08);
            color: #991b1b;
            border: 1px solid rgba(229, 72, 77, 0.2);
        }

        /* —— Contact —— */
        .site-contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
        }

        .site-contact-card {
            padding: 1.75rem;
            background: var(--site-surface);
            border: 1px solid var(--site-border);
            border-radius: var(--site-radius);
            box-shadow: var(--site-shadow);
            text-align: center;
            transition: transform 0.2s;
        }
        .site-contact-card:hover { transform: translateY(-2px); }

        .site-contact-card__icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            margin-bottom: 0.75rem;
            border-radius: 50%;
            background: rgba(21, 34, 56, 0.06);
            color: var(--site-blue-deep);
            font-size: 1.1rem;
        }

        .site-contact-card h3 {
            margin: 0 0 0.5rem;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--site-muted);
        }

        .site-contact-card p {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
            color: var(--site-text);
            line-height: 1.5;
        }

        .site-contact-card a { font-weight: 700; }

        .site-contact-muted {
            font-weight: 500;
            color: var(--site-muted);
            font-size: 0.9rem;
        }

        /* —— Pied de page —— */
        .site-footer {
            padding: 3rem 0;
            background: var(--site-blue-deep);
            color: rgba(255, 255, 255, 0.8);
        }

        .site-footer__grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr 1fr;
            gap: 2rem;
            align-items: start;
        }

        .site-footer__brand {
            display: flex;
            align-items: center;
            gap: 0.85rem;
        }

        .site-footer__brand img {
            border-radius: var(--site-radius-sm);
            opacity: 0.95;
        }

        .site-footer__brand strong {
            display: block;
            font-size: 1rem;
            color: #fff;
        }

        .site-footer__brand span {
            font-size: 0.78rem;
            opacity: 0.7;
        }

        .site-footer__nav {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
        }

        .site-footer__nav a {
            color: rgba(255, 255, 255, 0.85);
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
        }
        .site-footer__nav a:hover {
            color: var(--site-gold-light);
            text-decoration: none;
        }

        .site-footer__meta {
            text-align: right;
        }

        .site-footer__copy {
            margin: 0 0 0.5rem;
            font-size: 0.82rem;
            opacity: 0.65;
        }

        .site-footer__staff {
            font-size: 0.78rem;
            color: rgba(255, 255, 255, 0.45);
            text-decoration: none;
        }
        .site-footer__staff:hover {
            color: var(--site-gold-light);
            text-decoration: none;
        }

        /* —— Responsive —— */
        @media (max-width: 960px) {
            .site-hero__grid,
            .site-cultes,
            .site-message-split,
            .site-pillars {
                grid-template-columns: 1fr;
            }

            .site-hero__panel { order: -1; }

            .site-contact-grid {
                grid-template-columns: 1fr;
            }

            .site-footer__grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .site-footer__brand { justify-content: center; }
            .site-footer__nav { align-items: center; }
            .site-footer__meta { text-align: center; }
        }

        @media (max-width: 768px) {
            .site-header__inner {
                flex-wrap: wrap;
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
            }

            .site-nav-toggle { display: flex; }

            .site-btn-login {
                order: 2;
                margin-left: 0.5rem;
            }

            .site-nav {
                order: 4;
                flex-basis: 100%;
                flex-direction: column;
                align-items: stretch;
                margin-left: 0;
                max-height: 0;
                overflow: hidden;
                opacity: 0;
                transition: max-height 0.3s ease, opacity 0.25s ease, margin 0.25s;
            }

            body.site-nav-open .site-nav {
                max-height: 320px;
                opacity: 1;
                margin-top: 0.5rem;
                padding-top: 0.5rem;
                border-top: 1px solid var(--site-border);
            }

            .site-nav__link {
                padding: 0.75rem 0.5rem;
                text-align: center;
            }

            body.site-nav-open { overflow: hidden; }

            .site-section { padding: 3.5rem 0; }

            .site-message-grid { grid-template-columns: 1fr; }

            .site-schedule li { grid-template-columns: 1fr; gap: 0.2rem; }
        }

        @media (max-width: 480px) {
            .site-shell { padding-left: 1rem; padding-right: 1rem; }
            .site-brand__text span { display: none; }
            .site-message-card { padding: 1.25rem; }
        }

    </style>
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
      <a href="{{ route('login') }}" class="site-btn-login" rel="nofollow">Administration</a>
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
