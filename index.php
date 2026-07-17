<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>

<style>
    /* ===========================================================
   ASHER'S PLACE COMMUNITY HOMES — DESIGN SYSTEM
   Signature motif: "The Arch" — residential doorway/window arch
   used as an image-frame throughout, echoing threshold & welcome.
   =========================================================== */

    :root {
        --navy: #14304D;
        --navy-dark: #0D2238;
        --navy-soft: #1D4166;
        --forest: #2F5A46;
        --forest-light: #3E7259;
        --gold: #C9973F;
        --gold-light: #E0BA71;
        --cream: #FCFBF9;
        --gray-bg: #F2F1EC;
        --charcoal: #232A2E;
        --charcoal-soft: #58636B;
        --border-soft: rgba(35, 42, 46, 0.09);

        --font-display: 'Plus Jakarta Sans', 'Inter', sans-serif;
        --font-body: 'Inter', sans-serif;

        --container: 1220px;
        --radius-card: 22px;
        --shadow-soft: 0 20px 50px -20px rgba(20, 48, 77, 0.18);
        --shadow-lift: 0 30px 60px -22px rgba(20, 48, 77, 0.28);
        --ease: cubic-bezier(.22, 1, .36, 1);
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    @media (prefers-reduced-motion: reduce) {
        html {
            scroll-behavior: auto;
        }

        * {
            animation-duration: 0.001ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.001ms !important;
            scroll-behavior: auto !important;
        }
    }

    body {
        margin: 0;
        font-family: var(--font-body);
        color: var(--charcoal);
        background: var(--cream);
        line-height: 1.65;
        -webkit-font-smoothing: antialiased;
        overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    h4 {
        font-family: var(--font-display);
        color: var(--navy);
        line-height: 1.15;
        margin: 0 0 .5em;
        letter-spacing: -0.01em;
    }

    p {
        margin: 0 0 1em;
        color: var(--charcoal-soft);
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    img {
        max-width: 100%;
        display: block;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    button {
        font-family: inherit;
        cursor: pointer;
    }

    input,
    textarea,
    select {
        font-family: inherit;
        font-size: 1rem;
    }

    :focus-visible {
        outline: 2.5px solid var(--gold);
        outline-offset: 3px;
        border-radius: 4px;
    }

    .container {
        max-width: var(--container);
        margin: 0 auto;
        padding: 0 clamp(20px, 4vw, 40px);
    }

    .eyebrow {
        display: inline-block;
        font-family: var(--font-display);
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--forest);
        margin-bottom: 14px;
        position: relative;
        padding-left: 28px;
    }

    .eyebrow::before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        width: 20px;
        height: 2px;
        background: var(--gold);
        transform: translateY(-50%);
    }

    .eyebrow-light {
        color: var(--gold-light);
    }

    .campaign-status-badge {
        display: inline-block;
        font-family: var(--font-display);
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--navy-dark);
        background: var(--gold-light);
        padding: 7px 16px;
        border-radius: 999px;
        margin-bottom: 16px;
    }

    .section-title {
        font-size: clamp(1.9rem, 3.2vw, 2.7rem);
        max-width: 18ch;
    }

    .section-title--light {
        color: var(--cream);
    }

    .section-lede {
        max-width: 56ch;
        font-size: 1.08rem;
    }

    .section-head {
        max-width: 720px;
        margin-bottom: 56px;
    }

    .section-head--light p,
    .section-head--light h2 {
        color: var(--cream);
    }

    .section-head--split {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 24px;
        max-width: none;
    }

    /* ---------- Buttons ---------- */
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 15px 30px;
        border-radius: 100px;
        font-family: var(--font-display);
        font-weight: 600;
        font-size: 0.95rem;
        border: 1.5px solid transparent;
        transition: transform .35s var(--ease), box-shadow .35s var(--ease), background .35s var(--ease), color .35s var(--ease);
        white-space: nowrap;
    }

    .btn:hover {
        transform: translateY(-3px);
    }

    .btn-navy {
        background: var(--navy);
        color: #fff;
        box-shadow: var(--shadow-soft);
    }

    .btn-navy:hover {
        background: var(--navy-dark);
        box-shadow: var(--shadow-lift);
    }

    .btn-gold {
        background: var(--gold);
        color: var(--navy-dark);
        box-shadow: 0 16px 34px -14px rgba(201, 151, 63, 0.55);
    }

    .btn-gold:hover {
        background: var(--gold-light);
    }

    .btn-cream {
        background: var(--cream);
        color: var(--navy);
    }

    .btn-cream:hover {
        background: #fff;
    }

    .btn-ghost {
        border-color: rgba(20, 48, 77, 0.25);
        color: var(--navy);
    }

    .btn-ghost:hover {
        border-color: var(--navy);
        background: rgba(20, 48, 77, 0.04);
    }

    .btn-ghost-dark {
        border-color: rgba(255, 255, 255, 0.3);
        color: #fff;
    }

    .btn-outline-light {
        border-color: rgba(255, 255, 255, 0.55);
        color: #fff;
    }

    .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.12);
    }

    .text-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: var(--font-display);
        font-weight: 600;
        color: var(--navy);
        border-bottom: 1.5px solid transparent;
        padding-bottom: 2px;
        transition: border-color .3s var(--ease), gap .3s var(--ease), color .3s var(--ease);
    }

    .text-link:hover {
        border-color: var(--gold);
        gap: 12px;
    }

    .text-link--light {
        color: var(--cream);
    }

    .text-link--light:hover {
        border-color: var(--gold-light);
    }

    /* ---------- Arch signature frame ---------- */
    .arch-frame {
        position: relative;
        overflow: hidden;
        border-radius: 300px 300px 20px 20px;
        aspect-ratio: 4/5;
        box-shadow: var(--shadow-lift);
        isolation: isolate;
    }

    .arch-frame--tall {
        aspect-ratio: 3/4;
    }

    .arch-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 1.1s var(--ease);
    }

    .arch-frame:hover img {
        transform: scale(1.06);
    }

    /* ===========================================================
   HEADER
   =========================================================== */
    .site-header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 500;
        padding: 22px 0;
        transition: background .4s var(--ease), padding .4s var(--ease), box-shadow .4s var(--ease);
    }

    .site-header.is-scrolled {
        background: rgba(252, 251, 249, 0.92);
        backdrop-filter: blur(14px);
        padding: 12px 0;
        box-shadow: 0 4px 30px -10px rgba(20, 48, 77, 0.15);
    }

    .header-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #fff;
        transition: color .4s var(--ease);
    }

    .site-header.is-scrolled .brand {
        color: var(--navy);
    }

    .brand-mark {
        display: flex;
        color: var(--gold-light);
        flex-shrink: 0;
    }

    .site-header.is-scrolled .brand-mark {
        color: var(--gold);
    }

    .brand-text {
        display: flex;
        flex-direction: column;
        font-family: var(--font-display);
        font-weight: 700;
        font-size: 1.12rem;
        line-height: 1.2;
    }

    .brand-text em {
        font-style: normal;
        font-family: var(--font-body);
        font-weight: 500;
        font-size: 0.66rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        opacity: .75;
    }

    .main-nav {
        display: flex;
        align-items: center;
        gap: 34px;
    }

    .main-nav a {
        color: #fff;
        font-weight: 500;
        font-size: 0.85rem;
        position: relative;
        padding: 4px 0;
        transition: color .4s var(--ease);
    }

    .site-header.is-scrolled .main-nav a {
        color: var(--charcoal);
    }

    .main-nav a::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 1.5px;
        background: var(--gold);
        transition: width .3s var(--ease);
    }

    .main-nav a:hover::after {
        width: 100%;
    }

    .header-actions {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .site-header:not(.is-scrolled) .btn-ghost {
        border-color: rgba(255, 255, 255, 0.5);
        color: #fff;
    }

    .site-header:not(.is-scrolled) .btn-ghost:hover {
        background: rgba(255, 255, 255, 0.12);
    }

    .nav-toggle {
        display: none;
        flex-direction: column;
        gap: 5px;
        background: none;
        border: none;
        padding: 8px;
    }

    .nav-toggle span {
        width: 22px;
        height: 2px;
        background: currentColor;
        color: #fff;
        transition: transform .3s, opacity .3s;
    }

    .site-header.is-scrolled .nav-toggle span {
        color: var(--navy);
    }

    .mobile-nav {
        position: fixed;
        inset: 0 0 0 auto;
        width: min(86vw, 380px);
        background: var(--navy-dark);
        z-index: 600;
        padding: 100px 32px 40px;
        transform: translateX(100%);
        transition: transform .45s var(--ease);
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .mobile-nav.is-open {
        transform: translateX(0);
    }

    .mobile-nav a {
        color: rgba(255, 255, 255, 0.9);
        font-family: var(--font-display);
        font-weight: 600;
        font-size: 1.15rem;
        padding: 14px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .mobile-nav-cta {
        display: flex;
        gap: 12px;
        margin-top: 28px;
    }

    /* ===========================================================
   HERO
   =========================================================== */
    .hero {
        position: relative;
        min-height: 100svh;
        display: flex;
        align-items: flex-end;
        color: #fff;
        overflow: hidden;
        padding-bottom: 90px;
    }

    .hero-media {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .hero-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1.08);
        animation: heroZoom 16s var(--ease) forwards;
    }

    @keyframes heroZoom {
        to {
            transform: scale(1);
        }
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background:
            linear-gradient(180deg, rgba(13, 34, 56, 0.55) 0%, rgba(13, 34, 56, 0.35) 35%, rgba(13, 34, 56, 0.88) 100%);
    }

    .hero-inner {
        position: relative;
        z-index: 2;
        padding-top: 140px;
    }

    .hero-title {
        font-size: clamp(2.4rem, 5.4vw, 4.4rem);
        color: #fff;
        max-width: 16ch;
        margin-bottom: 22px;
    }

    .hero-sub {
        color: rgba(255, 255, 255, 0.86);
        font-size: 1.15rem;
        max-width: 52ch;
        margin-bottom: 36px;
    }

    .hero-actions {
        display: flex;
        gap: 18px;
        flex-wrap: wrap;
        margin-bottom: 56px;
    }

    .trust-badges {
        display: flex;
        gap: 44px;
        flex-wrap: wrap;
        border-top: 1px solid rgba(255, 255, 255, 0.22);
        padding-top: 28px;
    }

    .trust-badge {
        display: flex;
        flex-direction: column;
    }

    .trust-badge strong {
        font-family: var(--font-display);
        font-size: 1.7rem;
        font-weight: 700;
        color: var(--gold-light);
    }

    .trust-badge span {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.75);
    }

    .scroll-cue {
        position: absolute;
        bottom: 28px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
        width: 26px;
        height: 42px;
        border: 1.5px solid rgba(255, 255, 255, 0.55);
        border-radius: 20px;
    }

    .scroll-cue span {
        position: absolute;
        top: 8px;
        left: 50%;
        width: 4px;
        height: 8px;
        background: var(--gold-light);
        border-radius: 4px;
        transform: translateX(-50%);
        animation: scrollDot 1.8s infinite;
    }

    @keyframes scrollDot {
        0% {
            opacity: 1;
            top: 8px;
        }

        70% {
            opacity: 0;
            top: 22px;
        }

        100% {
            opacity: 0;
            top: 8px;
        }
    }

    /* reveal-on-scroll base state */
    .reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity .8s var(--ease), transform .8s var(--ease);
    }

    .reveal.in-view {
        opacity: 1;
        transform: none;
    }

    .hero .reveal {
        transition-delay: calc(var(--d, 0) * 90ms);
    }

    .hero .eyebrow {
        --d: 0;
    }

    .hero .hero-title {
        --d: 1;
    }

    .hero .hero-sub {
        --d: 2;
    }

    .hero .hero-actions {
        --d: 3;
    }

    .hero .trust-badges {
        --d: 4;
    }

    /* ===========================================================
   ABOUT
   =========================================================== */
    .about {
        padding: 140px 0 100px;
        position: relative;
    }

    .about-grid {
        display: grid;
        grid-template-columns: 0.85fr 1.15fr;
        gap: clamp(40px, 6vw, 90px);
        align-items: center;
    }

    .about-media {
        position: relative;
    }

    .about-media-badge {
        position: absolute;
        left: -10%;
        bottom: -30px;
        background: #fff;
        border-radius: 18px;
        padding: 20px 24px;
        box-shadow: var(--shadow-lift);
        max-width: 220px;
        border-left: 4px solid var(--gold);
    }

    .about-media-badge strong {
        display: block;
        font-family: var(--font-display);
        color: var(--navy);
        font-size: 1.05rem;
    }

    .about-media-badge span {
        font-size: 0.85rem;
        color: var(--charcoal-soft);
    }

    .values-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 26px;
        margin: 34px 0;
    }

    .value-item h3 {
        font-size: 1.05rem;
        margin-bottom: 4px;
    }

    .value-item p {
        font-size: 0.92rem;
        margin: 0;
    }

    .value-icon {
        display: inline-flex;
        width: 42px;
        height: 42px;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--gray-bg);
        color: var(--forest);
        margin-bottom: 10px;
    }

    .value-icon svg {
        width: 20px;
        height: 20px;
    }

    .timeline-wrap {
        margin-top: 100px;
    }

    .timeline {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        border-top: 2px solid var(--border-soft);
        padding-top: 34px;
        position: relative;
    }

    .timeline-item {
        position: relative;
        padding-left: 22px;
        border-left: 2px solid var(--gold);
    }

    .timeline-year {
        display: block;
        font-family: var(--font-display);
        font-weight: 800;
        color: var(--navy);
        font-size: 1.3rem;
        margin-bottom: 6px;
    }

    .timeline-item p {
        font-size: 0.92rem;
        margin: 0;
    }

    /* ===========================================================
   SERVICES — What We Do
   =========================================================== */
    .services {
        padding: 100px 0;
        background: var(--gray-bg);
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 26px;
    }

    .service-card {
        background: #fff;
        border-radius: var(--radius-card);
        padding: 34px 30px;
        position: relative;
        box-shadow: 0 12px 30px -18px rgba(20, 48, 77, 0.15);
        transition: transform .45s var(--ease), box-shadow .45s var(--ease);
        border: 1px solid rgba(20, 48, 77, 0.06);
    }

    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lift);
    }

    .service-num {
        position: absolute;
        top: 26px;
        right: 28px;
        font-family: var(--font-display);
        font-weight: 800;
        font-size: 0.85rem;
        color: var(--gold);
        letter-spacing: 0.05em;
    }

    .service-icon {
        display: inline-flex;
        width: 52px;
        height: 52px;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
        background: var(--navy);
        color: var(--gold-light);
        margin-bottom: 20px;
    }

    .service-icon svg {
        width: 24px;
        height: 24px;
    }

    .service-card h3 {
        font-size: 1.18rem;
        margin-bottom: 8px;
    }

    .service-card p {
        font-size: 0.94rem;
        margin: 0;
    }

    /* ===========================================================
   STATS — Why Choose Us
   =========================================================== */
    .stats {
        background: linear-gradient(160deg, var(--navy-dark), var(--navy) 55%, var(--forest) 130%);
        padding: 110px 0;
        position: relative;
        overflow: hidden;
    }

    .stats::before {
        content: "";
        position: absolute;
        inset: 0;
        opacity: .08;
        pointer-events: none;
        background-image: radial-gradient(circle at 20% 20%, #fff 0, transparent 45%), radial-gradient(circle at 85% 75%, #fff 0, transparent 40%);
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        position: relative;
    }

    .stat-item {
        text-align: center;
        border-left: 1px solid rgba(255, 255, 255, 0.15);
        padding: 10px 12px;
    }

    .stat-item:first-child {
        border-left: none;
    }

    .stat-number {
        font-family: var(--font-display);
        font-weight: 800;
        font-size: clamp(2.2rem, 4vw, 3.4rem);
        color: var(--gold-light);
    }

    .stat-plus {
        font-family: var(--font-display);
        font-weight: 800;
        font-size: clamp(1.6rem, 3vw, 2.4rem);
        color: var(--gold-light);
    }

    .stat-label {
        display: block;
        color: rgba(255, 255, 255, 0.78);
        font-size: 0.95rem;
        margin-top: 6px;
    }

    /* ===========================================================
   FEATURED PROGRAMS (alternating)
   =========================================================== */
    .programs {
        padding: 130px 0 60px;
    }

    .program-row {
        display: grid;
        grid-template-columns: 0.85fr 1.15fr;
        gap: clamp(40px, 6vw, 90px);
        align-items: center;
        max-width: var(--container);
        margin: 0 auto 110px;
        padding: 0 clamp(20px, 4vw, 40px);
    }

    .program-row--reverse {
        direction: rtl;
    }

    .program-row--reverse>* {
        direction: ltr;
    }

    .program-tag {
        display: inline-block;
        font-family: var(--font-display);
        font-weight: 700;
        font-size: 0.78rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--gold);
        background: rgba(201, 151, 63, 0.12);
        padding: 6px 14px;
        border-radius: 100px;
        margin-bottom: 16px;
    }

    .program-content h3 {
        font-size: clamp(1.5rem, 2.4vw, 2rem);
        margin-bottom: 14px;
    }

    .program-list {
        margin: 20px 0 28px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .program-list li {
        position: relative;
        padding-left: 28px;
        font-size: 0.95rem;
        color: var(--charcoal);
    }

    .program-list li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 6px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: var(--forest);
    }

    .program-list li::after {
        content: "";
        position: absolute;
        left: 5px;
        top: 9.5px;
        width: 6px;
        height: 3px;
        border-left: 2px solid #fff;
        border-bottom: 2px solid #fff;
        transform: rotate(-45deg);
    }

    /* ===========================================================
   SUCCESS STORIES
   =========================================================== */
    .stories {
        padding: 90px 0 130px;
        background: var(--gray-bg);
    }

    .story-slider {
        position: relative;
        max-width: 880px;
        margin: 0 auto;
    }

    .story-track {
        display: flex;
        transition: transform .6s var(--ease);
    }

    .story-card {
        flex: 0 0 100%;
        background: #fff;
        border-radius: 28px;
        padding: 56px clamp(28px, 6vw, 72px);
        box-shadow: var(--shadow-lift);
        position: relative;
        margin: 0 4px;
    }

    .story-quote-mark {
        font-family: var(--font-display);
        font-size: 5rem;
        color: var(--gold);
        opacity: .35;
        line-height: 0;
        display: block;
        margin-bottom: 10px;
    }

    .story-card blockquote {
        margin: 0 0 30px;
        font-size: 1.2rem;
        color: var(--navy);
        font-family: var(--font-display);
        font-weight: 500;
        line-height: 1.55;
    }

    .story-card figcaption {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .story-avatar {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: var(--font-display);
        font-weight: 700;
        color: #fff;
        font-size: 1.2rem;
        background: linear-gradient(135deg, var(--c1), var(--c2));
        flex-shrink: 0;
    }

    .story-card figcaption strong {
        display: block;
        color: var(--navy);
        font-family: var(--font-display);
    }

    .story-card figcaption span {
        font-size: 0.86rem;
        color: var(--charcoal-soft);
    }

    .story-controls {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 22px;
        margin-top: 34px;
    }

    .story-btn {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        border: 1.5px solid rgba(20, 48, 77, 0.2);
        background: #fff;
        color: var(--navy);
        font-size: 1.1rem;
        transition: background .3s, color .3s, transform .3s;
    }

    .story-btn:hover {
        background: var(--navy);
        color: #fff;
        transform: translateY(-2px);
    }

    .story-dots {
        display: flex;
        gap: 8px;
    }

    .story-dots button {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(20, 48, 77, 0.25);
        border: none;
        padding: 0;
        transition: background .3s, transform .3s;
    }

    .story-dots button.active {
        background: var(--gold);
        transform: scale(1.3);
    }

    /* ===========================================================
   MEET THE FACES OF ASHER'S PLACE — team slider
   =========================================================== */
    .team-section {
        padding: 100px 0;
        background: var(--gray-bg);
    }

    .team-slider {
        max-width: 980px;
        margin: 0 auto;
        overflow: hidden;
    }

    .team-track {
        display: flex;
        transition: transform .6s var(--ease);
    }

    .team-slide {
        min-width: 100%;
        display: grid;
        grid-template-columns: minmax(220px, 320px) 1fr;
        gap: clamp(24px, 4vw, 44px);
        align-items: center;
        padding: 0 8px;
    }

    .team-media {
        display: flex;
        justify-content: center;
    }

    .team-photo {
        width: min(100%, 280px);
        aspect-ratio: 1;
        margin: 0;
        border-radius: 24px;
        overflow: hidden;
        border: 3px solid var(--gold);
        box-shadow: var(--shadow-soft);
    }

    .team-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .team-card {
        text-align: left;
    }

    .team-card h3 {
        font-size: 1.28rem;
        margin-bottom: 10px;
    }

    .team-role {
        display: block;
        font-size: 0.96rem;
        line-height: 1.7;
        color: var(--charcoal-soft);
    }

    .team-controls {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
        margin-top: 28px;
    }

    .team-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 1px solid rgba(20, 48, 77, 0.16);
        background: #fff;
        color: var(--navy);
        cursor: pointer;
        transition: transform .3s var(--ease), background .3s var(--ease);
    }

    .team-btn:hover {
        transform: translateY(-2px);
        background: var(--gold);
        color: var(--navy-dark);
    }

    .team-dots {
        display: flex;
        gap: 8px;
    }

    .team-dots button {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        border: none;
        background: rgba(20, 48, 77, 0.25);
        padding: 0;
        transition: background .3s, transform .3s;
    }

    .team-dots button.active {
        background: var(--gold);
        transform: scale(1.25);
    }

    @media (max-width: 720px) {
        .team-slide {
            grid-template-columns: 1fr;
            text-align: center;
            padding: 0 4px;
        }

        .team-card {
            text-align: center;
        }

        .team-photo {
            width: min(100%, 240px);
        }
    }

    /* ===========================================================
   OUR COMMUNITY — masonry gallery
   =========================================================== */
    .community {
        padding: 100px 0 120px;
    }

    .gallery-masonry {
        max-width: var(--container);
        margin: 0 auto;
        padding: 0 clamp(20px, 4vw, 40px);
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-auto-rows: 130px;
        gap: 18px;
    }

    .gallery-item {
        position: relative;
        border: none;
        padding: 0;
        border-radius: 20px;
        overflow: hidden;
        background: var(--navy);
        cursor: pointer;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .6s var(--ease), filter .4s;
    }

    .gallery-item:hover img {
        transform: scale(1.08);
    }

    .gallery-item::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 55%, rgba(13, 34, 56, 0.55));
        opacity: 0;
        transition: opacity .4s;
    }

    .gallery-item:hover::after {
        opacity: 1;
    }

    .gi-1 {
        grid-column: span 2;
        grid-row: span 3;
    }

    .gi-2 {
        grid-column: span 1;
        grid-row: span 2;
    }

    .gi-3 {
        grid-column: span 1;
        grid-row: span 2;
    }

    .gi-4 {
        grid-column: span 1;
        grid-row: span 2;
    }

    .gi-5 {
        grid-column: span 1;
        grid-row: span 2;
    }

    .gi-6 {
        grid-column: span 2;
        grid-row: span 2;
    }

    .gallery-item--pattern {
        background: linear-gradient(135deg, var(--forest), var(--navy));
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px !important;
        cursor: default;
    }

    .pattern-quote {
        color: #fff;
        font-family: var(--font-display);
        font-weight: 600;
        font-size: 0.95rem;
        text-align: center;
        line-height: 1.4;
    }

    .lightbox {
        position: fixed;
        inset: 0;
        z-index: 900;
        background: rgba(13, 34, 56, 0.92);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px;
        opacity: 0;
        visibility: hidden;
        transition: opacity .35s var(--ease);
    }

    .lightbox.is-open {
        opacity: 1;
        visibility: visible;
    }

    .lightbox img {
        max-width: 90vw;
        max-height: 86vh;
        border-radius: 16px;
        box-shadow: 0 40px 80px rgba(0, 0, 0, 0.4);
    }

    .lightbox-close {
        position: absolute;
        top: 28px;
        right: 34px;
        background: none;
        border: none;
        color: #fff;
        font-size: 2.4rem;
        line-height: 1;
    }

    /* ===========================================================
   NEWS & UPDATES
   =========================================================== */
    .news {
        padding: 110px 0;
        background: var(--cream);
    }

    .news-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .news-card {
        background: #fff;
        border-radius: var(--radius-card);
        overflow: hidden;
        box-shadow: 0 12px 30px -18px rgba(20, 48, 77, 0.15);
        transition: transform .45s var(--ease), box-shadow .45s var(--ease);
        display: flex;
        flex-direction: column;
    }

    .news-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lift);
    }

    .news-card--featured {
        grid-column: span 1;
    }

    .news-media {
        position: relative;
        aspect-ratio: 16/10;
        overflow: hidden;
    }

    .news-media-fallback {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--navy), var(--forest));
    }

    .news-media-fallback--alt {
        background: linear-gradient(135deg, var(--forest), var(--navy-soft));
    }

    .news-media-fallback--gold {
        background: linear-gradient(135deg, var(--gold), var(--navy));
    }

    .news-badge {
        position: absolute;
        top: 16px;
        left: 16px;
        background: var(--gold);
        color: var(--navy-dark);
        font-family: var(--font-display);
        font-weight: 700;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        padding: 6px 14px;
        border-radius: 100px;
    }

    .news-body {
        padding: 26px 26px 30px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        flex: 1;
    }

    .news-meta {
        font-size: 0.8rem;
        color: var(--forest);
        font-weight: 600;
        letter-spacing: 0.03em;
    }

    .news-body h3 {
        font-size: 1.15rem;
        margin: 4px 0 6px;
    }

    .news-body p {
        font-size: 0.92rem;
        flex: 1;
    }

    /* ===========================================================
   GET INVOLVED
   =========================================================== */
    .get-involved {
        position: relative;
        padding: 130px 0;
        overflow: hidden;
        color: #fff;
    }

    .gi-media {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .gi-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .gi-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(120deg, rgba(13, 34, 56, 0.94) 30%, rgba(47, 90, 70, 0.75) 100%);
    }

    .gi-inner {
        position: relative;
        z-index: 1;
    }

    .gi-lede {
        font-size: 1.15rem;
        color: rgba(255, 255, 255, 0.86);
        max-width: 56ch;
        margin-bottom: 50px;
    }

    .gi-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 26px;
        margin-bottom: 50px;
    }

    .gi-card {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.16);
        border-radius: 20px;
        padding: 30px 26px;
        backdrop-filter: blur(6px);
        transition: transform .4s var(--ease), background .4s var(--ease);
    }

    .gi-card:hover {
        transform: translateY(-6px);
        background: rgba(255, 255, 255, 0.1);
    }

    .gi-card h3 {
        color: #fff;
        font-size: 1.2rem;
        margin-bottom: 8px;
    }

    .gi-card p {
        color: rgba(255, 255, 255, 0.78);
        font-size: 0.92rem;
        margin-bottom: 16px;
    }

    .gi-btn {
        font-size: 1.02rem;
        padding: 17px 38px;
    }

    /* ===========================================================
   CONTACT
   =========================================================== */
    .contact {
        padding: 130px 0;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        gap: clamp(40px, 6vw, 90px);
    }

    .contact-list {
        margin: 34px 0;
        display: flex;
        flex-direction: column;
        gap: 22px;
    }

    .contact-list li {
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .contact-icon {
        width: 44px;
        height: 44px;
        flex-shrink: 0;
        border-radius: 50%;
        background: var(--gray-bg);
        color: var(--forest);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contact-icon svg {
        width: 20px;
        height: 20px;
    }

    .contact-list strong {
        display: block;
        color: var(--navy);
        font-family: var(--font-display);
        margin-bottom: 2px;
    }

    .contact-list span {
        font-size: 0.92rem;
        color: var(--charcoal-soft);
    }

    .map-placeholder {
        height: 220px;
        border-radius: 20px;
        background:
            repeating-linear-gradient(45deg, var(--gray-bg) 0 12px, #fff 12px 24px);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--charcoal-soft);
        font-family: var(--font-display);
        font-weight: 600;
        letter-spacing: 0.04em;
        border: 1px solid var(--border-soft);
    }

    .contact-form {
        background: #fff;
        border-radius: 28px;
        padding: 44px;
        box-shadow: var(--shadow-lift);
    }

    .contact-form h3 {
        margin-bottom: 24px;
        font-size: 1.3rem;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .field {
        margin-bottom: 20px;
    }

    .field label {
        display: block;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--navy);
        margin-bottom: 8px;
    }

    .field input,
    .field textarea,
    .field select {
        width: 100%;
        padding: 13px 16px;
        border-radius: 12px;
        border: 1.5px solid rgba(20, 48, 77, 0.15);
        background: var(--gray-bg);
        color: var(--charcoal);
        transition: border-color .3s, background .3s;
    }

    .field input:focus,
    .field textarea:focus,
    .field select:focus {
        border-color: var(--gold);
        background: #fff;
        outline: none;
    }

    .form-submit {
        width: 100%;
        margin-top: 6px;
    }

    /* ===========================================================
   FOOTER
   =========================================================== */
    .site-footer {
        background: var(--navy-dark);
        color: rgba(255, 255, 255, 0.75);
        padding-top: 90px;
    }

    .footer-top {
        display: grid;
        grid-template-columns: 1.6fr 1fr 1fr 1fr 1.2fr;
        gap: 34px;
        padding-bottom: 60px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .brand--footer {
        color: #fff;
        margin-bottom: 16px;
    }

    .footer-brand p {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.92rem;
        max-width: 32ch;
    }

    .social-icons {
        display: flex;
        gap: 12px;
        margin-top: 18px;
    }

    .social-icons a {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background .3s, border-color .3s;
    }

    .social-icons svg {
        width: 16px;
        height: 16px;
    }

    .social-icons a:hover {
        background: var(--gold);
        border-color: var(--gold);
        color: var(--navy-dark);
    }

    .footer-col h4 {
        color: #fff;
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        margin-bottom: 18px;
    }

    .footer-col a {
        display: block;
        font-size: 0.92rem;
        padding: 6px 0;
        color: rgba(255, 255, 255, 0.68);
        transition: color .3s, transform .3s;
    }

    .footer-col a:hover {
        color: var(--gold-light);
        transform: translateX(4px);
    }

    .footer-newsletter p {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.88rem;
        margin-bottom: 16px;
    }

    .newsletter-form {
        display: flex;
        border-radius: 100px;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .newsletter-form input {
        flex: 1;
        background: none;
        border: none;
        padding: 12px 18px;
        color: #fff;
    }

    .newsletter-form input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .newsletter-form button {
        background: var(--gold);
        color: var(--navy-dark);
        border: none;
        width: 44px;
        font-weight: 700;
    }

    .footer-bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 26px 0;
        font-size: 0.85rem;
        gap: 20px;
    }

    .footer-legal {
        display: flex;
        gap: 20px;
    }

    .footer-legal a:hover {
        color: var(--gold-light);
    }

    .back-to-top {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #fff;
        transition: background .3s, transform .3s;
    }

    .back-to-top:hover {
        background: var(--gold);
        color: var(--navy-dark);
        transform: translateY(-4px);
    }

    /* ===========================================================
   RESPONSIVE
   =========================================================== */
    @media (max-width: 1080px) {
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .news-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .news-card--featured {
            grid-column: span 2;
        }

        .gi-cards {
            grid-template-columns: 1fr;
        }

        .footer-top {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 900px) {
        .main-nav {
            display: none;
        }

        .header-actions .btn-ghost {
            display: none;
        }

        .nav-toggle {
            display: flex;
        }

        .about-grid,
        .contact-grid {
            grid-template-columns: 1fr;
        }

        .about-media-badge {
            left: 20px;
        }

        .program-row,
        .program-row--reverse {
            grid-template-columns: 1fr;
            direction: ltr;
        }

        .program-media {
            order: -1;
        }

        .values-grid {
            grid-template-columns: 1fr 1fr;
        }

        .timeline {
            grid-template-columns: 1fr 1fr;
        }

        .stats-grid {
            grid-template-columns: 1fr 1fr;
        }

        .stat-item:nth-child(3) {
            border-left: none;
        }

        .gallery-masonry {
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: 150px;
        }

        .gi-1 {
            grid-column: span 2;
            grid-row: span 2;
        }

        .gi-6 {
            grid-column: span 2;
        }

        .form-row {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 640px) {
        .hero {
            padding-bottom: 60px;
        }

        .hero-inner {
            padding-top: 120px;
        }

        .trust-badges {
            gap: 28px;
        }

        .values-grid {
            grid-template-columns: 1fr;
        }

        .timeline {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }

        .news-grid {
            grid-template-columns: 1fr;
        }

        .news-card--featured {
            grid-column: span 1;
        }

        .stats-grid {
            grid-template-columns: 1fr 1fr;
            gap: 20px 10px;
        }

        .stat-item {
            border-left: none;
        }

        .footer-top {
            grid-template-columns: 1fr;
        }

        .footer-bottom {
            flex-direction: column;
            text-align: center;
        }

        .contact-form {
            padding: 30px 24px;
        }

        .section-head--split {
            flex-direction: column;
            align-items: flex-start;
            gap: 14px;
        }
    }

    .map-container {
        height: 220px;
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid var(--border-soft);
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        display: block;
    }

    .founder-footnote {
        background: var(--navy-dark);
        color: rgba(255, 255, 255, 0.85);
        padding: 80px 0;
    }

    .founder-footnote__inner {
        display: grid;
        grid-template-columns: 220px 1fr;
        gap: 44px;
        align-items: flex-start;
        max-width: 900px;
        margin: 0 auto;
    }

    .founder-footnote__media {
        width: 220px;
        height: 220px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid var(--gold);
        flex-shrink: 0;
    }

    .founder-footnote__media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .founder-footnote__content p {
        margin-bottom: 16px;
    }

    .founder-footnote__quote {
        font-style: italic;
        font-size: 1.05rem;
        color: rgba(255, 255, 255, 0.85);
    }

    .founder-footnote__name {
        color: #fff;
        font-family: var(--font-display);
        font-weight: 700;
        margin: 0;
    }

    .founder-footnote__role {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.9rem;
        margin: 0;
    }

    @media (max-width: 720px) {
        .founder-footnote {
            padding: 60px 0;
        }

        .founder-footnote__inner {
            grid-template-columns: 1fr;
            gap: 24px;
            justify-items: center;
            text-align: center;
        }

        .founder-footnote__media {
            width: 180px;
            height: 180px;
        }

        .founder-footnote__quote {
            font-size: 1rem;
        }
    }
</style>

<main id="home">

    <!-- ============ HERO ============ -->
    <section class="hero">
        <div class="hero-media">
            <img src="assets/images/banner.png" alt="A warm, modern community housing building with balconies bathed in daylight" loading="eager">
            <div class="hero-overlay"></div>
        </div>
        <div class="container hero-inner">
            <p class="eyebrow eyebrow-light reveal">Community Housing &amp; Support Services</p>
            <h1 class="hero-title reveal">Dignified Supportive Living. Guaranteed Stability. Fast-Tracking Affordable Housing.</h1>
            <p class="hero-sub reveal">We bypass construction delays through an innovative master-lease model, creating supportive, furnished, clustered communities for low- and median-income earners in Ontario.</p>
            <div class="hero-actions reveal">
                <a href="partner.php" class="btn btn-cream">Partner With Us (Landlords)</a>
                <a href="donate.php" class="btn btn-outline-light">Support Our Mission (Lenders &amp; Donors)</a>
            </div>
            <div class="trust-badges reveal">
                <div class="trust-badge"><strong>20</strong><span>Unit Campaign Target</span></div>
                <div class="trust-badge"><strong>12-Hr</strong><span>Daily Mobile Support</span></div>
                <div class="trust-badge"><strong>8</strong><span>Ontario Communities Served</span></div>
            </div>
        </div>
        <a href="#about" class="scroll-cue" aria-label="Scroll to learn more"><span></span></a>
    </section>

    <!-- ============ OUR MODEL — HOW IT WORKS ============ -->
    <section class="giving-options" id="our-model">
        <div class="container">
            <div class="section-head reveal">
                <p class="eyebrow">Our Model</p>
                <h2 class="section-title">Housing Reimagined for Rapid Social Impact</h2>
                <p class="section-lede">Traditional affordable housing development takes years and millions in capital. We can&rsquo;t wait that long. Our NGO solves the housing crisis today through a secure, self-sustaining framework:</p>
            </div>
            <div class="giving-grid reveal">
                <div class="giving-card">
                    <span class="giving-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <path d="M14 7a4 4 0 10-3.86 4.99L4 18v2h2l6.14-6.14A4 4 0 0014 7z" stroke="currentColor" stroke-width="1.6" />
                            <path d="M15.5 9.5L18 12M17 7.5L19.5 10" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>The Master Lease</h3>
                    <p>We sign long-term (4-year) corporate leases directly with private landlords for clustered houses and apartments.</p>
                </div>
                <div class="giving-card">
                    <span class="giving-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 3l9 5-9 5-9-5 9-5z" stroke="currentColor" stroke-width="1.6" />
                            <path d="M3 13l9 5 9-5M3 8l9 5 9-5" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>The Subsidy Stack</h3>
                    <p>We integrate reliable government housing benefits (COHB, ODSP, OW, CPP) to cover 100% of market rent.</p>
                </div>
                <div class="giving-card">
                    <span class="giving-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 21s-7-4.35-9.5-9C.5 8 2 4 6 4c2.2 0 3.6 1.2 4.5 2.4C11.4 5.2 12.8 4 15 4c4 0 5.5 4 3.5 8-2.5 4.65-9.5 9-9.5 9z" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>The Support System</h3>
                    <p>We sub-lease units to verified tenants and wrap them in localized, bi-weekly case management and social care.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ 20-UNIT CAMPAIGN ============ -->
    <section class="stats" id="campaign">
        <div class="container">
            <div class="section-head section-head--light">
                <span class="campaign-status-badge reveal">Ongoing Project Presently: 20 Units</span>
                <p class="eyebrow eyebrow-light reveal">The 20-Unit Housing Campaign</p>
                <h2 class="section-title section-title--light reveal">Our 20-Unit Housing Campaign</h2>
                <p class="reveal" style="color:rgba(255,255,255,0.78)">We are on an urgent mission to secure and launch 20 dedicated apartment units across Southern Ontario's high-demand urban corridors&mdash;including Milton, Brampton, Mississauga, Toronto, Pickering, Brantford, Kitchener, and Waterloo. By bypassing heavy infrastructure development and leveraging existing community rentals, every dollar raised moves low-to-moderate acuity individuals directly out of the shelter system and into stable, supported independent living.</p>
                <p class="reveal" style="color:rgba(255,255,255,0.78)">This campaign is only the beginning. <strong style="color:#fff;">Our target doesn't end at 20 units</strong> &mdash; our long-term goal is to provide permanent, affordable, supportive housing to <strong style="color:#fff;">2,500 individuals by 2030.</strong></p>
            </div>
            <div class="stats-grid reveal">
                <div class="stat-item">
                    <span class="stat-number" data-count="20">0</span>
                    <span class="stat-label">Target Units</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="8">0</span>
                    <span class="stat-label">Regions: Milton, Brampton, Mississauga, Toronto, Pickering, Brantford, Kitchener &amp; Waterloo</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="4">0</span>
                    <span class="stat-label">Year Minimum Landlord Lease</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="12">0</span>
                    <span class="stat-label">Hour Daytime Support Window</span>
                </div>
            </div>
            <p class="reveal" style="color:rgba(255,255,255,0.6); font-size:0.85rem; margin-top:20px;">Progress: Funding initial setup toward our target of 20 units.</p>
        </div>
    </section>

    <!-- ============ ROADMAP TO WINTER ============ -->
    <section class="giving-options" id="roadmap">
        <div class="container">
            <div class="section-head reveal">
                <p class="eyebrow">Our Impact Metrics &amp; Goals</p>
                <h2 class="section-title">The Roadmap to Winter</h2>
                <p class="section-lede">We build small, highly efficient, clustered community settings that maximize administrative dollars and optimize local care.</p>
            </div>
            <div class="giving-grid reveal">
                <div class="giving-card">
                    <span class="giving-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <path d="M4 21V10l8-6 8 6v11" stroke="currentColor" stroke-width="1.6" />
                            <path d="M9 21v-6h6v6" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>4 Rooms</h3>
                    <p>Immediate pilot active and locked-in.</p>
                </div>
                <div class="giving-card">
                    <span class="giving-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="4" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.6" />
                            <path d="M3 9h18M8 3v3M16 3v3" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>20 Units</h3>
                    <p>Our target for full deployment across the region by this Winter.</p>
                </div>
                <div class="giving-card">
                    <span class="giving-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.6" />
                            <path d="M8.5 12.5l2.3 2.3L16 10" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>100% Direct Pay</h3>
                    <p>Every single unit is structurally backed by secure, direct-pay provincial and federal housing benefits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ ABOUT ============ -->
    <section class="about" id="about">
        <div class="container about-grid">
            <div class="about-media reveal">
                <div class="arch-frame arch-frame--tall">
                    <img src="assets/images/who-we-are.png" alt="Warm, sunlit living space representing the comfort of a stable home" loading="lazy">
                </div>
                <div class="about-media-badge">
                    <strong>Ontario Non-Profit</strong>
                    <span>Incorporated to bridge shelter and stability</span>
                </div>
            </div>

            <div class="about-content">
                <p class="eyebrow reveal">Who We Are &amp; Our Why</p>
                <h2 class="section-title reveal">The Heart Behind Asher's Place</h2>
                <p class="reveal">Founded as a proactive response to Ontario's visible housing crisis, Asher's Place Community Homes is an incorporated provincial non-profit organization. Our Why is simple: many people experiencing homelessness&mdash;whether stuck in emergency shelter systems or coming out of mental health rehabilitation&mdash;possess the daily living skills needed to thrive independently, yet they experience recurring housing failures simply due to a lack of structured daytime stabilization, baseline accountability, and targeted care.</p>
                <p class="reveal"><strong>Our Mission:</strong> To bridge the critical gap between homelessness&mdash;including emergency shelter dependency&mdash;and permanent independence by providing stable, affordable housing coupled with targeted, daytime mobile support and case management.</p>
                <p class="reveal"><strong>Our Vision:</strong> A future where temporary vulnerability does not lead to permanent homelessness, and where community-based, public-private partnerships create sustainable paths to lifelong housing stability.</p>
                <div class="dei-block reveal">
          <h3 class="dei-title">Our Commitment to Diversity, Equity, and Inclusion (DEI)</h3>
          <p>At Asher&rsquo;s Place Community Homes, DEI is not a policy checkbox&mdash;it is the operational foundation of our housing model. True housing stability cannot exist without cultural safety and absolute equity. We recognize that systemic barriers disproportionately push marginalized communities into housing insecurity.</p>
          <p>We actively dismantle these barriers through three core commitments:</p>
          <ul class="dei-list">
            <li><strong>Equitable Care Delivery:</strong> Our 12-Hour Daytime Mobile Support model is explicitly tailored to respect individual cultural backgrounds, gender identities, and lived experiences. We deliver trauma-informed care that honors the unique identity of every resident.</li>
            <li><strong>Inclusive Field Frameworks:</strong> We strictly cultivate a workforce and volunteer network that reflects the rich diversity of the Halton, Peel, Toronto, and Durham regions we serve.</li>
            <li><strong>Accessible Systems:</strong> We continually optimize our physical setups, documentation, and communication pathways to ensure our housing environments are welcoming and accessible to individuals of all abilities and backgrounds.</li>
          </ul>
        </div>

                <div class="values-grid reveal">
                    <div class="value-item">
                        <span class="value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 21s-7-4.35-9.5-9C.5 8 2 4 6 4c2.2 0 3.6 1.2 4.5 2.4C11.4 5.2 12.8 4 15 4c4 0 5.5 4 3.5 8-2.5 4.65-9.5 9-9.5 9z" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <h3>Immediate Rehousing</h3>
                        <p>Move 20 low-to-moderate acuity individuals into dignified, scattered-site, or clustered apartment units this year.</p>
                    </div>
                    <div class="value-item">
                        <span class="value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 3l7 3v6c0 4.97-3.13 8.99-7 9-3.87-.01-7-4.03-7-9V6l7-3z" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <h3>Fiduciary &amp; Risk Integrity</h3>
                        <p>Maintain strict, dual-signatory financial controls and PHIPA-compliant data networks to protect our participants, lenders, and community partners.</p>
                    </div>
                    <div class="value-item">
                        <span class="value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="8" r="3" stroke="currentColor" stroke-width="1.6" />
                                <path d="M5 20c0-3.87 3.13-6 7-6s7 2.13 7 6" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <h3>Systemic Alleviation</h3>
                        <p>Actively collaborate with regional municipal governments to systematically reduce the strain on local emergency shelter infrastructures.</p>
                    </div>
                    <div class="value-item">
                        <span class="value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <path d="M4 19h16M6 19V9l6-5 6 5v10" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <h3>Community Partnership</h3>
                        <p>Build lasting public-private partnerships with landlords, lenders, and neighbors that create sustainable paths to lifelong housing stability.</p>
                    </div>
                </div>

                <a href="services.php" class="text-link reveal">See our supportive living model <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </section>

    <!-- ============ FOUNDER'S WELCOME NOTE ============ -->
    <section class="founder-footnote" id="founders-note">
        <div class="container founder-footnote__inner">
            <div class="founder-footnote__media">
                <img src="assets/images/nancy.jpeg" alt="Founder of Asher's Place Community Homes" loading="lazy">
            </div>
            <div class="founder-footnote__content">
                <p class="eyebrow eyebrow-light">A Note From Our Founder</p>
                <p class="founder-footnote__quote">"Homelessness is a massive crisis, but the solution can be built one apartment, one life, and one daytime check-in at a time. Thank you for standing with us to open doors and rebuild lives."</p>
                <p class="founder-footnote__name">Nancy Audu </p>
                <p class="founder-footnote__role">Founder &amp; Initial Director, Asher's Place Community Homes</p>
            </div>
        </div>
    </section>
    <section class="stories" id="stories">
        <div class="container">
            <div class="section-head">
                <p class="eyebrow reveal">A Message From Our Founder</p>
                <h2 class="section-title reveal">Dear Neighbors, Partners, and Friends,</h2>
            </div>
            <div class="reveal" style="max-width:760px;">
                <p>Every single night across Ontario, thousands of individuals lay their heads down in emergency shelter beds. But if you look closer, you will find a hidden truth: many of these individuals do not need permanent, institutional care. They possess the skills, the desire, and the capacity to live independently in our communities. Yet, they find themselves caught in a cycle of housing failure simply because the bridge between the shelter and the real world lacks a safety net.</p>
                <p>I founded <strong>Asher's Place Community Homes</strong> to be that exact bridge.</p>
                <p>Our mission isn't just about putting roofs over heads&mdash;it is about restoring baseline human dignity. By wrapping independent community apartments in a structured, 12-hour mobile daytime support staff framework, we provide the precise amount of care needed to ensure long-term housing stability. We manage medication, we build real-world life skills, and we enforce strict behavioral accountability, all while allowing our participants to reclaim their independence.</p>
                <p>We are launching an urgent campaign to secure our first 20 housing units across Milton, Peel, Toronto, Durham, Brantford, and the Waterloo Region. We cannot do this in isolation. We need landlords willing to partner on stable leases, social lenders ready to invest in systemic change, and community members willing to lend their financial and material support.</p>
                <p>Homelessness is a massive crisis, but the solution can be built one apartment, one life, and one daytime check-in at a time. Thank you for standing with us to open doors and rebuild lives.</p>
                <p>With deep gratitude,<br><strong>Nancy Audu</strong><br><strong>Founder &amp; Initial Director</strong><br>Asher's Place Community Homes</p>
            </div>
        </div>
    </section>

    <!-- ============ MEET THE FACES OF ASHER'S PLACE ============ -->
    <section class="team-section" id="team">
        <div class="container">
            <div class="section-head" style="text-align:center; max-width:640px; margin-left:auto; margin-right:auto;">
                <p class="eyebrow reveal" style="justify-content:center;">The People Behind The Mission</p>
                <h2 class="section-title reveal">Meet the Faces of Asher's Place</h2>
                <p class="section-lede reveal" style="margin-left:auto; margin-right:auto;">The team dedicated every day to bridging the gap between homelessness and permanent independence.</p>
            </div>
            <div class="team-slider reveal">
                <div class="team-track" id="teamTrack">
                    <article class="team-slide">
                        <div class="team-media">
                            <div class="team-photo">
                                <img src="assets/images/founders/1.jpeg" alt="Founder &amp; Initial Director of Asher's Place Community Homes" loading="lazy">
                            </div>
                        </div>
                        <div class="team-card">
                            <h3>Director Board</h3>
                            <span class="team-role">Guiding Asher's Place with a mission rooted in dignity, stability, and practical housing solutions for those facing homelessness.</span>
                        </div>
                    </article>
                    <article class="team-slide">
                        <div class="team-media">
                            <div class="team-photo">
                                <img src="assets/images/founders/2.jpg" alt="Community partnerships leader at Asher's Place Community Homes" loading="lazy">
                            </div>
                        </div>
                        <div class="team-card">
                            <h3>Board Director</h3>
                            <span class="team-role">Building lasting relationships with landlords, funders, and local partners to expand safe, supportive housing opportunities across Ontario.</span>
                        </div>
                    </article>
                    <article class="team-slide">
                        <div class="team-media">
                            <div class="team-photo">
                                <img src="assets/images/founders/3.jpg" alt="Support services team member at Asher's Place Community Homes" loading="lazy">
                            </div>
                        </div>
                        <div class="team-card">
                            <h3>Director , Community engagement team</h3>
                            <span class="team-role">Delivering responsive case management, housing navigation, and day-to-day support that helps residents build a stable path forward.</span>
                        </div>
                    </article>
                    <article class="team-slide">
                        <div class="team-media">
                            <div class="team-photo">
                                <img src="assets/images/founders/4.jpeg" alt="Operations and housing team member at Asher's Place Community Homes" loading="lazy">
                            </div>
                        </div>
                        <div class="team-card">
                            <h3>Operations &amp; Housing Team</h3>
                            <span class="team-role">Coordinating the practical details that sustain safe, well-managed homes and keep residents connected to the care they need.</span>
                        </div>
                    </article>
                    <article class="team-slide">
                        <div class="team-media">
                            <div class="team-photo">
                                <img src="assets/images/founders/5.jpeg" alt="Community engagement team member at Asher's Place Community Homes" loading="lazy">
                            </div>
                        </div>
                        <div class="team-card">
                            <h3>Support service Team</h3>
                            <span class="team-role">Connecting neighbors, volunteers, and advocates so the mission can grow from local care into long-term housing impact.</span>
                        </div>
                    </article>
                </div>
                <div class="team-controls">
                    <button type="button" class="team-btn" id="teamPrev" aria-label="Previous team member">&larr;</button>
                    <div class="team-dots" id="teamDots"></div>
                    <button type="button" class="team-btn" id="teamNext" aria-label="Next team member">&rarr;</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ WHAT WE DO ============ -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-head">
                <p class="eyebrow reveal">What We Do</p>
                <h2 class="section-title reveal">Independent Living, Wrapped in Professional Care</h2>
                <p class="section-lede reveal">Asher's Place does not operate traditional, institutional 24/7 group homes. Instead, we empower our participants to live independently in scattered or clustered community apartments. We protect this environment by deploying a specialized 12-Hour Daytime Mobile Support Framework (8:00 AM to 8:00 PM).</p>
            </div>

            <div class="services-grid">
                <article class="service-card reveal">
                    <span class="service-num">01</span>
                    <span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <path d="M9 6h11M9 12h11M9 18h11" stroke="currentColor" stroke-width="1.6" />
                            <circle cx="4.5" cy="6" r="1.4" fill="currentColor" />
                            <circle cx="4.5" cy="12" r="1.4" fill="currentColor" />
                            <circle cx="4.5" cy="18" r="1.4" fill="currentColor" />
                        </svg></span>
                    <h3>Daily Check-Ins</h3>
                    <p>Intensive daytime case management.</p>
                </article>
                <article class="service-card reveal">
                    <span class="service-num">02</span>
                    <span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 3a4 4 0 014 4c0 1.9-1 3-2 4l-.5 3h-3L10 11c-1-1-2-2.1-2-4a4 4 0 014-4z" stroke="currentColor" stroke-width="1.6" />
                            <path d="M9.5 19h5" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>Health Focus</h3>
                    <p>Coordinated medication tracking.</p>
                </article>
                <article class="service-card reveal">
                    <span class="service-num">03</span>
                    <span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <path d="M4 10a8 8 0 0116 0v1H4v-1z" stroke="currentColor" stroke-width="1.6" />
                            <path d="M4 15h16M8 19h8" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>Meal Provision</h3>
                    <p>One hot meal provided every day for our participants.</p>
                </article>
                <article class="service-card reveal">
                    <span class="service-num">04</span>
                    <span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="4" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6" />
                            <path d="M8 21h8M12 18v3" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>Life Skills</h3>
                    <p>Financial literacy and employment readiness.</p>
                </article>
                <article class="service-card reveal">
                    <span class="service-num">05</span>
                    <span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 21s-7-4.6-7-11a7 7 0 1114 0c0 6.4-7 11-7 11z" stroke="currentColor" stroke-width="1.6" />
                            <circle cx="12" cy="10" r="2.4" stroke="currentColor" stroke-width="1.6" />
                        </svg></span>
                    <h3>Risk Mitigation</h3>
                    <p>Comprehensive, PHIPA-compliant data tracking.</p>
                </article>
            </div>

            <div class="section-head" style="margin-top:56px;">
                <p class="eyebrow reveal">Accessing Our Supportive Housing Pipeline</p>
                <h2 class="section-title reveal">How to Get Our Accommodation</h2>
                <p class="section-lede reveal">To ensure complete community alignment and safety, Asher's Place does not accept walk-in or self-referred emergency applications at our administrative address. Our incoming tenant pipeline is strictly managed through regional municipal intake channels.</p>
            </div>
            <div class="steps-grid reveal">
                <div class="step-item">
                    <span class="step-num">1</span>
                    <h3>Regional Referral</h3>
                    <p>Candidates must be pre-screened and referred directly through local Coordinated Access lists (e.g., SSHA Toronto, Peel Coordinated Access, Halton Housing, or Durham Housing Services).</p>
                </div>
                <div class="step-item">
                    <span class="step-num">2</span>
                    <h3>Acuity Filtering</h3>
                    <p>Our mobile staff administers a standardized SPDAT assessment to confirm the applicant falls into a low-to-moderate acuity range compatible with independent overnight living.</p>
                </div>
                <div class="step-item">
                    <span class="step-num">3</span>
                    <h3>Emergency Sync</h3>
                    <p>Approved participants sign an Emergency Inter-Agency Consent Form, linking them directly to regional crisis networks (like COAST Halton or Gerstein Centre) for absolute overnight peace of mind.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ WHY CHOOSE US ============ -->
    <section class="stats" id="why-us">
        <div class="container">
            <div class="section-head section-head--light">
                <p class="eyebrow eyebrow-light reveal">Why Choose Us</p>
                <h2 class="section-title section-title--light reveal">Impact you can measure. Trust you can feel.</h2>
            </div>
            <div class="section-head section-head--light">
                <p class="eyebrow eyebrow-light reveal">Why Landlords Partner With Us</p>
                <h2 class="section-title section-title--light reveal">Your Property. Our Guarantee. Zero Headaches.</h2>
                <p class="reveal" style="color:rgba(255,255,255,0.78)">Partnering with our NGO means turning your rental property into a secure social impact asset without taking on operational risk.</p>
            </div>
            <div class="stats-grid reveal">
                <div class="stat-item">
                    <span class="stat-label"><strong style="color:#fff; display:block; font-family:var(--font-display); font-size:1.1rem; margin-bottom:6px;">Guaranteed Rental Income</strong>Rent is paid to you automatically, directly, and on time every single month out of our corporate reserves and provincial shelter streams. Rents are strictly set at 30% of each household's income under the Rent-Geared-to-Income (RGI) framework, making your income guaranteed regardless of participant circumstances.</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label"><strong style="color:#fff; display:block; font-family:var(--font-display); font-size:1.1rem; margin-bottom:6px;">Professional Daily Inspections</strong>Our mobile case managers are on-site daily, conducting regular unit hygiene checks and behavioral safety enforcement.</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label"><strong style="color:#fff; display:block; font-family:var(--font-display); font-size:1.1rem; margin-bottom:6px;">$15,000 Mitigation Fund</strong>A locked cash escrow account pays for accidental tenant damage out-of-pocket, bypassing Landlord &amp; Tenant Board delays completely.</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label"><strong style="color:#fff; display:block; font-family:var(--font-display); font-size:1.1rem; margin-bottom:6px;">Zero Vacancy Risk</strong>We hold a 4-year master lease, so even during tenant transitions your income never stops&mdash;zero vacancy rates, zero turnover costs, zero collection friction for a minimum of 48 months.</span>
                </div>
            </div>
            <p class="reveal" style="text-align:center; margin-top:34px; display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
                <a href="partner.php" class="btn btn-gold">Partner as a Landlord</a>
                <a href="mailto:partnerships@ashersplace.ca?subject=Landlord%20Info%20Package%20Request" class="btn btn-outline-light">Download Our Landlord Info Package</a>
            </p>
        </div>
    </section>

    <!-- ============ FEATURED PROGRAMS ============ -->
    <section class="programs" id="programs">
        <div class="container">
            <div class="section-head">
                <p class="eyebrow reveal">Explore Asher's Place</p>
                <h2 class="section-title reveal">Three ways to move this mission forward.</h2>
            </div>
        </div>

        <div class="program-row reveal">
            <div class="program-media">
                <div class="arch-frame">
                    <img src="assets/images/what-we-do.png" alt="Case managers and residents collaborating around a table" loading="lazy">
                </div>
            </div>
            <div class="program-content">
                <span class="program-tag">What We Do</span>
                <h3>Independent Living, Wrapped in Professional Care</h3>
                <p>Our specialized 12-Hour Daytime Mobile Support Framework (8:00 AM to 8:00 PM) empowers participants to live independently in scattered or clustered community apartments — without institutional, 24/7 group-home care.</p>
                <ul class="program-list">
                    <li>Daily check-ins &amp; intensive case management</li>
                    <li>Coordinated medication tracking</li>
                    <li>A hot meal provided every day</li>
                    <li>Financial literacy &amp; employment readiness</li>
                </ul>
                <a href="services.php" class="btn btn-navy">See Our Supportive Living Model</a>
            </div>
        </div>

        <div class="program-row program-row--reverse reveal">
            <div class="program-media">
                <div class="arch-frame">
                    <img src="assets/images/partner-with-us.png" alt="A modern, clean multi-unit apartment corridor" loading="lazy">
                </div>
            </div>
            <div class="program-content">
                <span class="program-tag">Partner With Us</span>
                <h3>Join the Ontario Government &amp; Asher's Place to Alleviate Homelessness</h3>
                <p>We are actively seeking private property owners, developers, and affordable housing providers who can offer a 4-year minimum lease on clustered or multi-unit residential spaces, backed by rock-solid financial protections.</p>
                <p>In partnership with an established, affordable supportive-living NGO, Asher's Place welcomes new landlords as partners in this mission. Become a landlord partner today.</p>
                <ul class="program-list">
                    <li>Guaranteed rental income, paid automatically</li>
                    <li>$15,000 landlord mitigation fund</li>
                    <li>Professional daily inspections</li>
                </ul>
                <a href="partner.php" class="btn btn-navy">Become a Landlord Partner</a>
            </div>
        </div>

        <div class="program-row reveal">
            <div class="program-media">
                <div class="arch-frame">
                    <img src="assets/images/careers.png" alt="Modern supportive housing building exterior with balconies" loading="lazy">
                </div>
            </div>
            <div class="program-content">
                <span class="program-tag">Careers</span>
                <h3>Join Our Mobile Care Team</h3>
                <p>At Asher's Place Community Homes, we believe that dignified support transforms lives. We are building a mobile team of compassionate, highly organized, and clinically sound professionals dedicated to field-based case management.</p>
                <ul class="program-list">
                    <li>Mobile Supportive Housing Worker (Full-Time / Part-Time)</li>
                    <li>Administrative and PHIPA Compliance Assistant</li>
                    <li>Volunteer &amp; pro-bono talent pool always open</li>
                </ul>
                <a href="careers.php" class="btn btn-navy">View Careers</a>
            </div>
        </div>
    </section>

    <!-- ============ OUR COMMUNITY ============ -->
    <section class="community" id="community">
        <div class="container">
            <div class="section-head">
                <p class="eyebrow reveal">Our Community</p>
                <h2 class="section-title reveal">Moments from life at Asher's Place.</h2>
            </div>
        </div>
        <div class="gallery-masonry reveal" id="galleryMasonry">
            <button class="gallery-item gi-1" data-full="assets/images/banner.png">
                <img src="assets/images/banner.png" alt="Community housing building exterior" loading="lazy">
            </button>
            <button class="gallery-item gi-2" data-full="assets/images/what-we-do.png">
                <img src="assets/images/what-we-do.png" alt="Staff and residents collaborating together" loading="lazy">
            </button>
            <button class="gallery-item gi-3" data-full="assets/images/partner-with-us.png">
                <img src="assets/images/partner-with-us.png" alt="A couple celebrating moving into their new home" loading="lazy">
            </button>
            <button class="gallery-item gi-4" data-full="assets/images/careers.png">
                <img src="assets/images/careers.png" alt="A warm, sunlit living space" loading="lazy">
            </button>
            <button class="gallery-item gi-5 gallery-item--pattern" data-full="">
                <span class="pattern-quote">"Homelessness is a massive crisis, but the solution can be built one apartment at a time."</span>
            </button>
            <button class="gallery-item gi-6" data-full="assets/images/who-we-are.png">
                <img src="assets/images/who-we-are.png" alt="Residential architecture detail" loading="lazy">
            </button>
        </div>
        <div class="lightbox" id="lightbox">
            <button class="lightbox-close" id="lightboxClose" aria-label="Close">&times;</button>
            <img id="lightboxImg" src="" alt="">
        </div>
    </section>

    <!-- ============ NEWS & UPDATES ============ -->
    <section class="news" id="news">
        <div class="container">
            <div class="section-head section-head--split reveal">
                <div>
                    <p class="eyebrow">News &amp; Updates</p>
                    <h2 class="section-title">Building momentum for the 20-Unit Campaign.</h2>
                </div>
                <a href="news.php" class="text-link">View all news <span aria-hidden="true">&rarr;</span></a>
            </div>

            <div class="news-grid">
                <article class="news-card news-card--featured reveal">
                    <div class="news-media">
                        <div class="news-media-fallback"></div><span class="news-badge">Featured</span>
                    </div>
                    <div class="news-body">
                        <span class="news-meta">Announcement · 2026</span>
                        <h3>Asher's Place launches its 20-Unit Housing Campaign</h3>
                        <p>We're on an urgent mission to secure 20 dedicated apartment units across Milton, Brampton, Mississauga, Toronto, Pickering, Brantford, Kitchener, and Waterloo — moving people directly out of the shelter system.</p>
                        <a href="news.php" class="text-link">Read the announcement <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </article>
                <article class="news-card reveal">
                    <div class="news-media">
                        <div class="news-media-fallback news-media-fallback--alt"></div>
                    </div>
                    <div class="news-body">
                        <span class="news-meta">Partnership Call · 2026</span>
                        <h3>Seeking landlords for a 4-year clustered lease framework</h3>
                        <p>We're inviting private property owners and affordable housing providers to partner with us on secure, risk-mitigated master leasing.</p>
                        <a href="partner.php" class="text-link">Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </article>
                <article class="news-card reveal">
                    <div class="news-media">
                        <div class="news-media-fallback news-media-fallback--gold"></div>
                    </div>
                    <div class="news-body">
                        <span class="news-meta">Careers · 2026</span>
                        <h3>Now building our Mobile Care Team</h3>
                        <p>We're hiring compassionate, clinically sound professionals for field-based case management across our service regions.</p>
                        <a href="careers.php" class="text-link">Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============ GET INVOLVED ============ -->
    <section class="get-involved" id="donate">
        <div class="gi-media">
            <img src="assets/images/partner-with-us.png" alt="A couple celebrating the joy of moving into a new home" loading="lazy">
            <div class="gi-overlay"></div>
        </div>
        <div class="container gi-inner">
            <p class="eyebrow eyebrow-light reveal">Get Involved</p>
            <h2 class="section-title section-title--light reveal">Fuel the Movement: Support Asher's Place</h2>
            <p class="gi-lede reveal">We need your community support, philanthropic capital, and corporate sponsorships to successfully clear initial startup setups and unlock our social finance leverage. Your generosity directly purchases tenant welcome packs, emergency unit kits, and funds our frontline mobile case managers.</p>

            <div class="gi-cards reveal">
                <div class="gi-card">
                    <h3>Financial Giving</h3>
                    <p>Click to donate online via our secure portal, linked to our FundRazr, GoFundMe, or primary Church Partner's donation gateway.</p>
                    <a href="contact.php" class="text-link text-link--light">Donate online <span aria-hidden="true">&rarr;</span></a>
                </div>
                <div class="gi-card">
                    <h3>In-Kind Corporate Donations</h3>
                    <p>Support us by donating brand-new apartment kits — cookware, bedframes, mattresses, linens, and baseline household cleaning supplies.</p>
                    <a href="contact.php" class="text-link text-link--light">Donate items <span aria-hidden="true">&rarr;</span></a>
                </div>
                <div class="gi-card">
                    <h3>Faith-Based Mobilization</h3>
                    <p>Is your church looking to make a direct impact on local homelessness? Contact our board to discuss project-delivery alignment opportunities.</p>
                    <a href="contact.php" class="text-link text-link--light">Start a conversation <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <a href="contact.php" class="btn btn-gold gi-btn">Support Our Mission</a>
        </div>
    </section>

    <!-- ============ BUILD TOGETHER CTA ============ -->
    <section class="stats" id="build-together">
        <div class="container">
            <div class="section-head section-head--light">
                <h2 class="section-title section-title--light reveal">Let&rsquo;s Build a Stronger Community Together</h2>
                <p class="reveal" style="color:rgba(255,255,255,0.78); max-width:700px; margin-left:auto; margin-right:auto;">Are you a social financier, a community organization, or a local landlord with properties to lease? Get in touch with our team today.</p>
            </div>
            <p class="reveal" style="text-align:center; display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
                <a href="mailto:info@ashersplacecommunityhomes.ca" class="btn btn-cream">info@ashersplacecommunityhomes.ca</a>
                <a href="tel:+18888493319" class="btn btn-outline-light">+1 888 849 3319</a>
            </p>
            <p class="reveal" style="text-align:center; color:rgba(255,255,255,0.55); font-size:0.85rem; margin-top:20px;">Corporate Registration: Ontario Non-Profit Corporation &middot; Federal Charitable Registration: In Queue / Pending</p>
        </div>
    </section>

    <!-- ============ CONTACT ============ -->
    <section class="contact" id="contact">
        <div class="container contact-grid">
            <div class="contact-info reveal">
                <p class="eyebrow">Contact Us</p>
                <h2 class="section-title">We're here to help — reach out any time.</h2>
                <p class="section-lede">Please note: Asher's Place does not accept walk-in or self-referred emergency housing applications. Our tenant pipeline is managed through regional Coordinated Access channels. For all other inquiries, our team responds within one business day.</p>

                <ul class="contact-list">
                    <li>
                        <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 21s-7-4.6-7-11a7 7 0 1114 0c0 6.4-7 11-7 11z" stroke="currentColor" stroke-width="1.6" />
                                <circle cx="12" cy="10" r="2.4" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <div><strong>Serving</strong><span>Milton (Halton) &middot; Brampton &amp; Mississauga (Peel)<br>Toronto &middot; Pickering (Durham)<br>Brantford (Brant) &middot; Kitchener &amp; Waterloo (Waterloo Region)</span></div>
                    </li>
                    <li>
                        <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6" />
                                <path d="M3 7l9 6 9-6" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <div><strong>General Inquiries</strong><span>info@ashersplacecommunityhomes.ca</span></div>
                    </li>
                    <li>
                        <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <path d="M4 5h4l2 5-2.5 1.5a11 11 0 005 5L14 14l5 2v4a2 2 0 01-2 2C9.6 22 2 14.4 2 7a2 2 0 012-2z" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <div><strong>Partnership Inquiries</strong><span>partnerships@ashersplace.ca</span></div>
                    </li>
                    <li>
                        <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.95.36 1.88.68 2.77a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.31-1.25a2 2 0 012.11-.45c.9.32 1.83.55 2.77.68A2 2 0 0122 16.92z" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <div><strong>Telephone</strong><span>+1 888 849 3319</span></div>
                    </li>
                    <li>
                        <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 21s-7-4.6-7-11a7 7 0 1114 0c0 6.4-7 11-7 11z" stroke="currentColor" stroke-width="1.6" />
                                <circle cx="12" cy="10" r="2.4" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <div><strong>Administrative Office</strong><span>71 Rosedale, Building B, Unit #B12<br>Brampton, ON L6X 1K4</span></div>
                    </li>
                    <li>
                        <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.6" />
                                <path d="M12 7v5l3.5 2" stroke="currentColor" stroke-width="1.6" />
                            </svg></span>
                        <div><strong>Daytime Support Window</strong><span>8:00 AM &ndash; 8:00 PM daily<br>12-Hour Mobile Support Framework</span></div>
                    </li>
                </ul>

                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps?q=71+Rosedale+Building+B+Unit+B12,+Brampton,+ON+L6X+1K4&z=15&output=embed"
                        width="100%"
                        height="220"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        aria-label="Map showing Asher's Place location at 71 Rosedale, Building B, Unit B12, Brampton, ON L6X 1K4">
                    </iframe>
                </div>
            </div>

            <form class="contact-form reveal" aria-label="Contact form">
                <h3>Send us a message</h3>
                <div class="form-row">
                    <div class="field">
                        <label for="fname">First name</label>
                        <input type="text" id="fname" name="fname" required>
                    </div>
                    <div class="field">
                        <label for="lname">Last name</label>
                        <input type="text" id="lname" name="lname" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="field">
                        <label for="phone">Phone (optional)</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                </div>
                <div class="field">
                    <label for="reason">I'm reaching out about</label>
                    <select id="reason" name="reason">
                        <option>Landlord partnership</option>
                        <option>Donations &amp; corporate sponsorship</option>
                        <option>Careers &amp; volunteering</option>
                        <option>Faith-based mobilization</option>
                        <option>Media inquiry</option>
                        <option>Something else</option>
                    </select>
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-navy form-submit">Send Message</button>
            </form>
        </div>
    </section>

</main>

<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>