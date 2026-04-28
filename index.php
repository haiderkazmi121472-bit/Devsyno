<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modern Website Studio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --orange:#ff914d;
      --orange-deep:#ff7a2b;
      --paper:#fafaf7;
      --ink:#161616;
      --line:#e8e8e6;
      --font-display:'Poppins',sans-serif;
      --font-body:'Poppins',sans-serif;
    }

    *{ box-sizing:border-box; }

    body{
      margin:0;
      font-family:var(--font-body);
      background:var(--paper);
      color:var(--ink);
      line-height:1.55;
    }

    section{
      width:min(1120px,92%);
      margin:0 auto;
      padding:72px 0;
    }

    .hero h1{
      font-family:var(--font-display);
      font-size:clamp(2rem,4vw,3.6rem);
      line-height:1.1;
      margin:0 0 14px;
    }

    .hero p{
      max-width:760px;
      font-size:1.1rem;
      color:#3a3a3a;
    }

    /* Reveal Animation */
    .reveal{
      opacity:0;
      transform:translateY(40px) scale(.98);
      transition:opacity .8s ease, transform .8s ease;
    }
    .reveal.in{
      opacity:1;
      transform:none;
    }

    .services-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
      gap:20px;
      margin-top:20px;
    }

    .service{
      border:1px solid var(--line);
      border-radius:18px;
      background:#fff;
      padding:22px;
      box-shadow:0 10px 26px rgba(0,0,0,.04);
    }

    .service .vector{
      width:60px;
      height:60px;
      object-fit:contain;
      margin-bottom:8px;
    }

    .pill-wrap{
      display:flex;
      flex-wrap:wrap;
      gap:8px;
      margin-top:10px;
    }

    .pill{
      font-size:.86rem;
      border:1px solid var(--line);
      border-radius:999px;
      padding:5px 11px;
      background:#fff8f2;
    }

    .portfolio-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
      gap:20px;
      margin-top:20px;
    }

    .work{
      background:#fff;
      border:1px solid var(--line);
      border-radius:16px;
      overflow:hidden;
      box-shadow:0 10px 24px rgba(0,0,0,.05);
    }

    .work img{
      width:100%;
      height:220px;
      object-fit:cover;
      display:block;
    }

    .work h4{ margin:14px 16px 16px; }

    .contact-box{
      background:#fff;
      border:1px solid var(--line);
      border-radius:18px;
      padding:24px;
      box-shadow:0 10px 24px rgba(0,0,0,.04);
    }

    /* CF7 Styling */
    .wpcf7 input,
    .wpcf7 textarea,
    .wpcf7 select{
      width:100%;
      padding:14px;
      border:1px solid var(--line);
      border-radius:10px;
      margin:0 0 12px;
      font:inherit;
    }

    .wpcf7-submit{
      background:var(--orange);
      color:#fff;
      border:none;
      padding:14px 24px;
      border-radius:999px;
      cursor:pointer;
      font-weight:600;
      transition:.25s;
    }

    .wpcf7-submit:hover{ background:var(--orange-deep); }

    footer{
      text-align:center;
      border-top:1px solid var(--line);
      padding:22px 10px 32px;
      color:#555;
    }
  </style>
</head>
<body>
  <section class="hero">
    <h1 class="reveal">We build <span style="color:#ff914d;">modern</span> websites</h1>
    <p class="reveal">
      We design high-converting WordPress, Webflow, and Square Space Website experiences for growth-focused brands.
    </p>
  </section>

  <section class="services">
    <h2 class="reveal">Services</h2>
    <div class="services-grid">
      <div class="service reveal">
        <img class="vector" src="https://www.svgrepo.com/show/452228/html-5.svg" alt="Website vector icon">
        <h3>High-Performance Websites</h3>
        <p>Fast, scalable websites built for growth-focused brands.</p>
        <div class="pill-wrap">
          <span class="pill">WordPress</span>
          <span class="pill">Webflow</span>
          <span class="pill">Square Space Website</span>
        </div>
      </div>

      <div class="service reveal">
        <img class="vector" src="https://www.svgrepo.com/show/478224/mobile.svg" alt="Mobile app vector icon">
        <h3>Mobile Apps</h3>
        <p>iOS &amp; Android apps with smooth UX.</p>
      </div>

      <div class="service reveal">
        <img class="vector" src="https://www.svgrepo.com/show/428559/marketing-bullhorn-promotion.svg" alt="Branding vector icon">
        <h3>Brand Systems</h3>
        <p>Identity that stands out.</p>
      </div>

      <div class="service reveal">
        <img class="vector" src="https://www.svgrepo.com/show/448218/design.svg" alt="UI UX vector icon">
        <h3>UI/UX Design</h3>
        <p>Conversion-focused design systems.</p>
      </div>

      <div class="service reveal">
        <img class="vector" src="https://www.svgrepo.com/show/284458/e-commerce-shopping.svg" alt="Ecommerce vector icon">
        <h3>E-Commerce</h3>
        <p>Shopify &amp; custom stores that convert.</p>
      </div>
    </div>
  </section>

  <section class="portfolio">
    <h2 class="reveal">Portfolio</h2>
    <div class="portfolio-grid">
      <div class="work reveal">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80" alt="Finance website project">
        <h4>Finance Website</h4>
      </div>

      <div class="work reveal">
        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1200&q=80" alt="Healthcare website project">
        <h4>Healthcare Website</h4>
      </div>

      <div class="work reveal">
        <img src="https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=1200&q=80" alt="Business website project">
        <h4>Business Website</h4>
      </div>
    </div>
  </section>

  <section class="contact">
    <h2 class="reveal">Let's Talk</h2>
    <div class="contact-box reveal">
      <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); ?>
    </div>
  </section>

  <footer>
    <p>© 2026</p>
  </footer>

  <script>
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){
          e.target.classList.add('in')
        }
      })
    }, { threshold: 0.15 });

    document.querySelectorAll('.reveal').forEach(el=>io.observe(el));
  </script>
</body>
</html>
