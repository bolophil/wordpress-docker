<?php get_header(); ?>

<section class="hero">
  <div class="hero-title">Hi, I’m Alex Chau Nguyen.</div>
  <div class="hero-subtitle">
    I build secure, scalable systems across PKI, DevOps, HPC, and SCADA—turning complexity into clean automation.
  </div>
  <div class="hero-buttons">
    <a href="#portfolio" class="btn btn-primary">View Portfolio</a>
    <a href="#contact" class="btn">Contact Me</a>
  </div>
</section>

<section id="about">
  <h2>About Me</h2>
  <p>I’m a systems & software engineer specializing in:</p>
  <ul>
    <li>🛡 PKI & Certificate Lifecycle Automation (Venafi, OpenSSL)</li>
    <li>⚙️ DevOps Pipelines (Docker, Ansible, CI/CD)</li>
    <li>🖥 HPC + Linux (Slurm, Rocky/RHEL, GPU compute)</li>
    <li>🎨 UI/UX for internal engineering tools (React, D3.js)</li>
  </ul>
</section>

<section id="portfolio">
  <h2>Selected Projects</h2>
  <div class="cards-grid">

    <article class="card">
      <h3>PKI Certificate Lifecycle Visualizer</h3>
      <p>A D3.js tool that maps certificates and simulates renewal flows.</p>
    </article>

    <article class="card">
      <h3>DevOps CI/CD Portfolio API</h3>
      <p>Automated Docker builds + Ansible deployment pipeline.</p>
    </article>

    <article class="card">
      <h3>Smartwatch Text Input Experiment</h3>
      <p>Interactive Processing prototype using Fitts’ Law.</p>
    </article>

    <article class="card">
      <h3>UI Pattern Lab</h3>
      <p>React + TypeScript component library with theme switch.</p>
    </article>

    <article class="card">
      <h3>SCADA Endpoint Mapping</h3>
      <p>Automation of SCADA endpoint discovery and certificate checks.</p>
    </article>

  </div>
</section>

<section id="contact">
  <h2>Contact</h2>
  <p>Email: <a href="mailto:alex.c.nguyen93@gmail.com">alex.c.nguyen93@gmail.com</a></p>
  <p>LinkedIn: <a href="https://www.linkedin.com/in/alex-nguyen-788844236/">linkedin.com/in/alex-nguyen-788844236</a></p>
</section>

<?php get_footer(); ?>
