<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>
<!-- ============ PAGE HERO ============ -->
<main>

  <section class="page-hero">
    <div class="page-hero-decor" aria-hidden="true"></div>
    <div class="container page-hero-inner">
      <p class="eyebrow eyebrow-light reveal">Contact</p>
      <h1 class="page-hero-title reveal">We're here to help — reach out any time.</h1>
      <p class="page-hero-lede reveal">Landlord partnerships, donations, careers, or media — our team responds within one business day.</p>
    </div>
  </section>

  <!-- ============ CONTACT ============ -->
  <section class="contact" id="contact">
    <div class="container contact-grid">
      <div class="contact-info reveal">
        <p class="eyebrow">Contact Us</p>
        <h2 class="section-title">Reach the right team, fast.</h2>
        <p class="section-lede">Please note: Asher's Place does not accept walk-in or self-referred emergency housing applications. Our tenant pipeline is managed through regional Coordinated Access channels.</p>

        <ul class="contact-list">
          <li>
            <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-4.6-7-11a7 7 0 1114 0c0 6.4-7 11-7 11z" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="10" r="2.4" stroke="currentColor" stroke-width="1.6"/></svg></span>
            <div><strong>Serving</strong><span>Milton (Halton) &middot; Brampton &amp; Mississauga (Peel)<br>Toronto &middot; Pickering (Durham)<br>Brantford (Brant) &middot; Kitchener &amp; Waterloo (Waterloo Region)</span></div>
          </li>
          <li>
            <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M3 7l9 6 9-6" stroke="currentColor" stroke-width="1.6"/></svg></span>
            <div><strong>General Inquiries</strong><span>info@ashersplace.ca</span></div>
          </li>
          <li>
            <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M4 5h4l2 5-2.5 1.5a11 11 0 005 5L14 14l5 2v4a2 2 0 01-2 2C9.6 22 2 14.4 2 7a2 2 0 012-2z" stroke="currentColor" stroke-width="1.6"/></svg></span>
            <div><strong>Partnership Inquiries</strong><span>partnerships@ashersplace.ca</span></div>
          </li>
          <li>
            <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-4.6-7-11a7 7 0 1114 0c0 6.4-7 11-7 11z" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="10" r="2.4" stroke="currentColor" stroke-width="1.6"/></svg></span>
            <div><strong>Administrative Office</strong><span>71 Rosedale, Building B, Unit #B12<br>Brampton, ON L6X 1K4</span></div>
          </li>
          <li>
            <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.6"/><path d="M12 7v5l3.5 2" stroke="currentColor" stroke-width="1.6"/></svg></span>
            <div><strong>Daytime Support Window</strong><span>8:00 AM &ndash; 8:00 PM daily<br>12-Hour Mobile Support Framework</span></div>
          </li>
          <li>
            <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M8 21h8M12 18v3" stroke="currentColor" stroke-width="1.6"/></svg></span>
            <div><strong>Careers</strong><span>careers@ashersplace.ca</span></div>
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