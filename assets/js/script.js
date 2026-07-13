(function () {
  "use strict";

  /* ---------- Sticky header on scroll ---------- */
  var header = document.getElementById("siteHeader");
  function onScroll() {
    if (window.scrollY > 40) header.classList.add("is-scrolled");
    else header.classList.remove("is-scrolled");
  }
  document.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  /* ---------- Mobile nav toggle ---------- */
  var navToggle = document.getElementById("navToggle");
  var mobileNav = document.getElementById("mobileNav");
  var mobileNavClose = document.getElementById("mobileNavClose");
  function closeMobileNav() {
    if (mobileNav) mobileNav.classList.remove("is-open");
    if (navToggle) navToggle.classList.remove("is-open");
    if (navToggle) navToggle.setAttribute("aria-expanded", "false");
  }
  if (navToggle) {
    navToggle.addEventListener("click", function () {
      var open = mobileNav.classList.toggle("is-open");
      navToggle.classList.toggle("is-open", open);
      navToggle.setAttribute("aria-expanded", open ? "true" : "false");
    });
  }
  if (mobileNav) {
    mobileNav.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", closeMobileNav);
    });
  }
  if (mobileNavClose) {
    mobileNavClose.addEventListener("click", closeMobileNav);
  }

  /* ---------- Back to top ---------- */
  var backToTop = document.getElementById("backToTop");
  if (backToTop) {
    backToTop.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  /* ---------- Footer year ---------- */
  var yearEl = document.getElementById("year");
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  /* ---------- Reveal on scroll ---------- */
  var revealEls = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("in-view");
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: "0px 0px -60px 0px" }
    );
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add("in-view"); });
  }

  /* ---------- Animated stat counters ---------- */
  var statNumbers = document.querySelectorAll(".stat-number");
  function animateCount(el) {
    var target = parseInt(el.getAttribute("data-count"), 10) || 0;
    var duration = 1600;
    var start = null;
    function step(ts) {
      if (!start) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.floor(eased * target).toLocaleString();
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = target.toLocaleString();
    }
    requestAnimationFrame(step);
  }
  if ("IntersectionObserver" in window && statNumbers.length) {
    var statIo = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCount(entry.target);
            statIo.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );
    statNumbers.forEach(function (el) { statIo.observe(el); });
  }

  /* ---------- Success story slider ---------- */
  var track = document.getElementById("storyTrack");
  var dotsWrap = document.getElementById("storyDots");
  var prevBtn = document.getElementById("storyPrev");
  var nextBtn = document.getElementById("storyNext");
  if (track) {
    var cards = track.querySelectorAll(".story-card");
    var current = 0;

    cards.forEach(function (_, i) {
      var dot = document.createElement("button");
      dot.setAttribute("aria-label", "Go to story " + (i + 1));
      if (i === 0) dot.classList.add("active");
      dot.addEventListener("click", function () { goTo(i); });
      dotsWrap.appendChild(dot);
    });
    var dots = dotsWrap.querySelectorAll("button");

    function goTo(index) {
      current = (index + cards.length) % cards.length;
      track.style.transform = "translateX(-" + current * 100 + "%)";
      dots.forEach(function (d, i) { d.classList.toggle("active", i === current); });
    }
    prevBtn.addEventListener("click", function () { goTo(current - 1); });
    nextBtn.addEventListener("click", function () { goTo(current + 1); });

    var autoplay = setInterval(function () { goTo(current + 1); }, 7000);
    track.closest(".story-slider").addEventListener("mouseenter", function () { clearInterval(autoplay); });
  }

  /* ---------- Team member slider ---------- */
  var teamTrack = document.getElementById("teamTrack");
  var teamDots = document.getElementById("teamDots");
  var teamPrev = document.getElementById("teamPrev");
  var teamNext = document.getElementById("teamNext");
  if (teamTrack && teamDots) {
    var teamSlides = teamTrack.querySelectorAll(".team-slide");
    var teamCurrent = 0;

    function goToTeam(index) {
      if (!teamSlides.length) return;
      teamCurrent = (index + teamSlides.length) % teamSlides.length;
      teamTrack.style.transform = "translateX(-" + teamCurrent * 100 + "%)";
      teamDots.querySelectorAll("button").forEach(function (dot, i) {
        dot.classList.toggle("active", i === teamCurrent);
      });
    }

    teamSlides.forEach(function (_, i) {
      var dot = document.createElement("button");
      dot.setAttribute("aria-label", "Go to team member " + (i + 1));
      if (i === 0) dot.classList.add("active");
      dot.addEventListener("click", function () { goToTeam(i); });
      teamDots.appendChild(dot);
    });

    if (teamPrev) teamPrev.addEventListener("click", function () { goToTeam(teamCurrent - 1); });
    if (teamNext) teamNext.addEventListener("click", function () { goToTeam(teamCurrent + 1); });

    setInterval(function () { goToTeam(teamCurrent + 1); }, 6000);
  }

  /* ---------- Gallery lightbox ---------- */
  var lightbox = document.getElementById("lightbox");
  var lightboxImg = document.getElementById("lightboxImg");
  var lightboxClose = document.getElementById("lightboxClose");
  document.querySelectorAll(".gallery-item[data-full]").forEach(function (btn) {
    var full = btn.getAttribute("data-full");
    if (!full) return;
    btn.addEventListener("click", function () {
      lightboxImg.src = full;
      lightboxImg.alt = btn.querySelector("img") ? btn.querySelector("img").alt : "";
      lightbox.classList.add("is-open");
    });
  });
  function closeLightbox() { lightbox.classList.remove("is-open"); lightboxImg.src = ""; }
  if (lightboxClose) lightboxClose.addEventListener("click", closeLightbox);
  if (lightbox) {
    lightbox.addEventListener("click", function (e) { if (e.target === lightbox) closeLightbox(); });
    document.addEventListener("keydown", function (e) { if (e.key === "Escape") closeLightbox(); });
  }

  /* ---------- Contact form (client-side stub) ---------- */
  var contactForm = document.querySelector(".contact-form");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();
      var btn = contactForm.querySelector(".form-submit");
      var original = btn.textContent;
      btn.textContent = "Message Sent";
      btn.style.opacity = "0.75";
      setTimeout(function () {
        btn.textContent = original;
        btn.style.opacity = "1";
        contactForm.reset();
      }, 2600);
    });
  }

  /* ---------- Newsletter form (client-side stub) ---------- */
  var newsletterForm = document.querySelector(".newsletter-form");
  if (newsletterForm) {
    newsletterForm.addEventListener("submit", function (e) {
      e.preventDefault();
      var btn = newsletterForm.querySelector("button");
      btn.textContent = "✓";
      setTimeout(function () { btn.innerHTML = "&rarr;"; newsletterForm.reset(); }, 2400);
    });
  }
})();
