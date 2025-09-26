<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fusion 2025 – 24HR Hackathon</title>
    <!-- Bootstrap + FontAwesome + Google Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --black: #070A13;
            --dark-blue: #142153;
            --electric-blue: #2a4eed;
            --glow-blue: #2638fa;
            --accent-blue: #00bfff;
            --white: #f6f8fa;
        }
        body {
            font-family: 'Rajdhani', sans-serif;
            background: var(--black);
            color: var(--white);
        }
        .bg-animated {
            position: fixed;
            top:0; left:0; width:100vw; height:100vh;
            z-index: -2;
            background: linear-gradient(115deg, var(--black) 60%, var(--dark-blue) 100%);
            animation: darkShine 18s linear infinite alternate;
        }
        @keyframes darkShine {
            0% { filter: brightness(1);}
            100% { filter: brightness(1.12);}
        }
        /* Animated Hero Text */
        .fusion-hero-title {
            font-family: 'Orbitron', monospace;
            font-size: 5rem;
            font-weight: 900;
            letter-spacing: 2px;
            background: linear-gradient(270deg, var(--electric-blue), var(--accent-blue), var(--dark-blue), var(--electric-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 0 50px var(--accent-blue));
            animation: fusionTitleAnim 4s cubic-bezier(.68,-0.55,.27,1.55) infinite alternate;
            cursor: pointer;
        }
        @keyframes fusionTitleAnim {
            0% { filter: brightness(0.9) drop-shadow(0 0 24px var(--accent-blue)); }
            50%{ filter: brightness(1.7) drop-shadow(0 0 50px var(--electric-blue)); }
            100%{ filter: brightness(1.15) drop-shadow(0 0 28px var(--accent-blue)); }
        }
        .fusion-hero-title:hover {
            background: linear-gradient(90deg,var(--accent-blue),var(--electric-blue),var(--white));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 0 80px var(--electric-blue));
            animation: shakeTitle 0.5s;
        }
        @keyframes shakeTitle {
            0% { transform:translate(0,0);}
            20%{ transform:translate(-6px,3px);}
            60%{ transform:translate(8px,-5px);}
            100%{ transform:translate(0,0);}
        }
        .fusion-hero-subtitle {
            font-family:'Rajdhani',sans-serif;letter-spacing:1px;
            font-size:1.5rem; color: var(--accent-blue);
            font-weight: 600; margin-bottom:1rem;
            animation: fadeInUp 1s;
        }
        @keyframes fadeInUp {
            from {opacity:0;transform:translateY(30px);}
            to {opacity:1;transform:translateY(0);}
        }
        .fusion-hero-desc {
            font-size:1.1rem; color:var(--white); opacity:0.90; margin-bottom:2rem;
            animation: fadeInUp 1.2s 0.2s both;
        }
        .btn-glow {
            background: linear-gradient(90deg,var(--accent-blue),var(--electric-blue));
            color: var(--white);
            border: none; font-weight:700;font-size:1.2rem;
            padding:1rem 2.2rem; border-radius:50px; transition: all 0.3s;
            box-shadow: 0 0 24px var(--accent-blue);
            position: relative;
            overflow: hidden;
        }
        .btn-glow:hover {
            box-shadow: 0 0 45px var(--electric-blue);
            transform: translateY(-4px) scale(1.05);
        }
        .btn-glow::before {
            content:'';
            position:absolute;top:0;left:0;width:100%;height:100%;
            background:radial-gradient(circle at 20% 80%,var(--accent-blue) 0%,transparent 80%);
            pointer-events:none;opacity:.18;
            transition:opacity .3s;
        }
        .btn-glow:hover::before { opacity:.33; }
        /* Stats Cards */
        .fusion-card {
            background: rgba(32,50,100,0.15);
            border: 1.5px solid var(--accent-blue);
            border-radius:18px;padding:2rem;text-align:center;
            transition:all .24s; box-shadow:0 6px 18px rgba(32,50,100,0.18);
        }
        .fusion-card:hover {
            backdrop-filter:blur(12px);
            border-color:var(--electric-blue);
            transform:scale(1.04);
            box-shadow: 0 14px 28px var(--electric-blue);
        }
        .stats-number {
            font-family:'Orbitron',monospace;font-size:2.8rem;font-weight:900;
            color:var(--accent-blue);margin-bottom:.5rem;
            animation: countPulse 2s cubic-bezier(.68,-0.55,.27,1.55) infinite alternate;
        }
        @keyframes countPulse{
            0%{filter:brightness(1);}
            100%{filter:brightness(1.5);}
        }
        /* Problem Domain Cards */
        .domain-card {
            background: rgba(32,50,100,0.22); border:1px solid var(--electric-blue);
            border-radius:12px; padding:1.2rem;text-align:center; transition:all .2s;
            cursor:pointer; box-shadow:0 2px 10px rgba(32,50,120,.08);
        }
        .domain-card:hover {
            background:rgba(32,50,220,0.18); border-color:var(--accent-blue);
            transform:scale(1.06) rotate(2deg);
            box-shadow:0 4px 16px var(--electric-blue);
        }
        .domain-icon {
            font-size:2.2rem;color:var(--accent-blue);
            margin-bottom:.6rem;
            transition:color .19s;
        }
        .domain-card:hover .domain-icon {
            color:var(--electric-blue);
            text-shadow:0 0 12px var(--accent-blue);
        }
        /* Floating Glow Particles */
        .particles-fusion {
            position: fixed; top:0; left:0; width:100vw; height:100vh; pointer-events:none;
            z-index:-1;
        }
        .particle-fusion {
            position: absolute;
            width: 6px; height: 6px; background: var(--accent-blue);
            border-radius: 50%; opacity: 0.4; box-shadow: 0 0 18px var(--accent-blue);
            animation: fusionFloat 7s cubic-bezier(.28,.84,.42,.98) infinite;
        }
        @keyframes fusionFloat {
            0%,100%{transform:translateY(0) rotate(0deg);opacity:0.2;}
            50%{transform:translateY(-70px) rotate(270deg);opacity:0.8;}
        }
        /* Section Titles */
        .section-title-fusion {
            font-family:'Orbitron',monospace;
            font-size:2.4rem;font-weight:800;text-align:center;
            margin-bottom:2.4rem;
            background: linear-gradient(90deg,var(--electric-blue), var(--accent-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>
    <div class="bg-animated"></div>
    <div class="particles-fusion" id="particlesFusion"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background:rgba(17,17,34, 0.93);border-bottom:2px solid var(--accent-blue);">
    <div class="container">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home" style="color: var(--accent-blue) !important;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#domains" style="color: var(--accent-blue) !important;">Tracks</a></li>
                <li class="nav-item"><a class="nav-link" href="#about" style="color: var(--accent-blue) !important;">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#rules" style="color: var(--accent-blue) !important;">Rules</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" style="color: var(--accent-blue) !important;">Timeline</a></li>
                <li class="nav-item"><a class="nav-link" href="#prizes" style="color: var(--accent-blue) !important;">Prizes</a></li>
                <li class="nav-item"><a class="nav-link" href="#sponsors" style="color: var(--accent-blue) !important;">Sponsors</a></li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Hero Section -->
    <section id="home" style="min-height: 100vh; display: flex; align-items: center;">
  <div class="container pt-5">
    <div class="row align-items-center pt-5">
     <div class="col-lg-6 d-flex justify-content-center mb-4 mb-lg-0">
    <img id="fusionLogoImg" src="./assets/images/Fusion_2025_logos-removebg-preview.png" alt="Fusion 2025 Logo"
        style="max-width: 350px; max-height: 350px; cursor: pointer; filter: drop-shadow(0 0 15px var(--accent-blue)); transition: transform 0.4s ease, filter 0.4s ease;"
        tabindex="0" aria-label="Fusion 2025 Logo">
</div>

      <div class="col-lg-6">
        <h2 class="fusion-hero-subtitle" style="animation: fadeInUp 1s ease forwards; opacity: 0;">24-Hour Innovation Marathon</h2>
        <p class="fusion-hero-desc" style="animation: fadeInUp 1.2s ease forwards; opacity: 0;">
          Welcome to <span style="color:var(--electric-blue)">Fusion 2025!</span> <br>
          The battlefield where dark tech meets brilliance. Build, code, and solve in electrifying team challenges. Are you ready for exponential creativity?
        </p>
        <div class="d-flex flex-wrap gap-3" style="animation: fadeInUp 1.4s ease forwards; opacity: 0;">
          <button class="btn btn-glow" onclick="scrollToSection('register')">
            <i class="fas fa-flask me-2"></i>Register Now
          </button>
          <button class="btn btn-outline-primary btn-lg" style="border-radius: 50px; border-color: var(--accent-blue); color: var(--accent-blue)">
            <i class="fas fa-play me-2"></i>Watch Trailer
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Animate Fade In Up */
  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(30px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  /* Logo hover & focus animation */
  #fusionLogoImg:hover,
  #fusionLogoImg:focus {
    transform: scale(1.12) rotate(-5deg);
    filter: drop-shadow(0 0 30px var(--electric-blue));
  }
</style>

    <!-- Stats Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="fusion-card">
                        <div class="stats-number">24</div>
                        <div class="stats-label">Hours of Coding</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="fusion-card">
                        <div class="stats-number">200+</div>
                        <div class="stats-label">Expected Participants</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="fusion-card">
                        <div class="stats-number">₹1.5L+</div>
                        <div class="stats-label">Prize Pool</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="fusion-card">
                        <div class="stats-number">5+</div>
                        <div class="stats-label">Problem Tracks</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Problem Domains -->
    <section id="domains" class="py-5">
    <div class="container">
        <h2 class="section-title-fusion">Tracks & Domains</h2>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="domain-card h-100">
                    <div class="domain-icon mb-2"><i class="fas fa-robot"></i></div>
                    <h5 class="mb-1">AI / Machine Learning (AI/ML)</h5>
                    <p style="font-size:0.98rem;">Intelligent automation, generative AI, predictive analytics</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="domain-card h-100">
                    <div class="domain-icon mb-2"><i class="fas fa-link"></i></div>
                    <h5 class="mb-1">Web3 & Blockchain</h5>
                    <p style="font-size:0.98rem;">Decentralized apps, digital ownership, trustless systems</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="domain-card h-100">
                    <div class="domain-icon mb-2"><i class="fas fa-shield-alt"></i></div>
                    <h5 class="mb-1">Cybersecurity & Privacy</h5>
                    <p style="font-size:0.98rem;">Secure systems, identity protection, threat detection, zero-trust</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="domain-card h-100">
                    <div class="domain-icon mb-2"><i class="fas fa-coins"></i></div>
                    <h5 class="mb-1">FinTech & Digital Economy</h5>
                    <p style="font-size:0.98rem;">Payments, banking, DeFi, financial inclusion</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="domain-card h-100">
                    <div class="domain-icon mb-2"><i class="fas fa-heartbeat"></i></div>
                    <h5 class="mb-1">HealthTech & Biotech</h5>
                    <p style="font-size:0.98rem;">Digital health, remote monitoring, AI diagnostics, wellness tools</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <h2 class="section-title-fusion">Powered By</h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="fusion-card d-flex align-items-center gap-3">
                    <div style="flex-shrink:0; width: 120px; height: 120px; overflow: hidden; border-radius: 15px; box-shadow: 0 0 30px var(--electric-blue);">
                        <img src="path_to_ecell_image.jpg" alt="E-Cell Logo/Image" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div>
                        <div style="font-size:2.5rem; color:var(--electric-blue); margin-bottom: 8px;">
                            <img src="path_to_ecell_logo.png" alt="E-Cell Logo" style="width: 40px; height: 40px; vertical-align: middle; margin-left: 10px;">
                        </div>
                        <h3>E-Cell</h3>
                        <h5 style="color:var(--accent-blue);" class="mb-3">Innovation Hub</h5>
                        <p>
                            The Entrepreneurship Cell sparks creative energy for startups. 500+ members.<br>
                            Building ideas into future-ready businesses with network, events, and mentorship.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="fusion-card d-flex align-items-center gap-3">
                    <div style="flex-shrink:0; width: 120px; height: 120px; overflow: hidden; border-radius: 15px; box-shadow: 0 0 30px var(--accent-blue);">
                        <img src="path_to_sknisb_image.jpg" alt="SKNISB Logo/Image" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div>
                        <div style="font-size:2.5rem; color:var(--accent-blue); margin-bottom: 8px;">
                            <img src="path_to_sknisb_logo.png" alt="SKNISB Logo" style="width: 40px; height: 40px; vertical-align: middle; margin-left: 10px;">
                        </div>
                        <h3>SKNISB</h3>
                        <h5 style="color:var(--accent-blue);" class="mb-3">Tech Excellence</h5>
                        <p>
                            SKNISB drives technical innovation. Projects, research, and hands-on solving.<br>
                            Shaping solutions for real-world problems, leading the way in technical excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Rules Section -->
    <section id="rules" class="py-5">
        <div class="container">
            <h2 class="section-title-fusion">Rules & Guidelines</h2>
            <div class="fusion-card mx-auto" style="max-width:680px;background:rgba(20,33,83, 0.29);">
                <ul style="text-align:left;">
                    <li>The hackathon lasts <b>24 hours continuously</b></li>
                    <li>Teams: 2–4 members.</li>
                    <li>All code/design must be new, built during event.</li>
                    <li>Open-source tools allowed (credit required).</li>
                    <li>No plagiarism/prebuilt projects.</li>
                    <li>Must carry college ID; stay at venue.</li>
                    <li>Respect all participants & mentors.</li>
                    <li>Wi-Fi, power & workspace provided. Bring your own gear.</li>
                    <li>Food/refreshments at fixed times.</li>
                    <li>Submit project before deadline.</li>
                    <li>Judging: innovation, implementation, usefulness, presentation.</li>
                    <li>No alcohol, drugs, smoking, or prohibited items.</li>
                    <li>Participants responsible for belongings.</li>
                    <li>Organizers' decision is final.</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Timeline -->
    <section id="timeline" class="py-5">
        <div class="container">
            <h2 class="section-title-fusion">Event Timeline</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="domain-card mb-3"><h5>Registration Opens</h5><p>Dec 15, 2024</p></div>
                    <div class="domain-card mb-3"><h5>Problem Statements Released</h5><p>Jan 10, 2025</p></div>
                    <div class="domain-card mb-3"><h5>Hackathon Start</h5><p>Jan 25, 2025 – 6:00PM</p></div>
                    <div class="domain-card mb-3"><h5>Final Presentations</h5><p>Jan 26, 2025 – 4:00PM</p></div>
                    <div class="domain-card mb-3"><h5>Award Ceremony</h5><p>Jan 26, 2025 – 6:00PM</p></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Prizes -->
    <section id="prizes" class="py-5">
        <div class="container">
            <h2 class="section-title-fusion">Prizes</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="fusion-card">
                        <div><i class="fas fa-crown" style="font-size:2.2rem; color:gold;"></i></div>
                        <h4>Champion</h4>
                        <div class="stats-number" style="font-size:1.7rem;">₹50,000</div>
                        <p>+ Internship + Goodies</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="fusion-card">
                        <div><i class="fas fa-medal" style="font-size:2.2rem;color:silver;"></i></div>
                        <h4>Runner Up</h4>
                        <div class="stats-number" style="font-size:1.6rem;">₹30,000</div>
                        <p>+ Mentorship + Goodies</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="fusion-card">
                        <div><i class="fas fa-award" style="font-size:2.2rem;color:#cd7f32;"></i></div>
                        <h4>Third Place</h4>
                        <div class="stats-number" style="font-size:1.5rem;">₹20,000</div>
                        <p>+ Special Recognition + Goodies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- Sponsors -->
<section id="sponsors" class="py-5">
    <div class="container">
        <h2 class="section-title-fusion">Sponsors</h2>
        <div class="row justify-content-center g-4">
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <div class="sponsor-logo floating-logo">
                    <img src="path_to_techcorp_logo.png" alt="TechCorp Logo" style="max-width:100%; max-height:80px;">
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <div class="sponsor-logo floating-logo">
                    <img src="path_to_innovatelab_logo.png" alt="InnovateLab Logo" style="max-width:100%; max-height:80px;">
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <div class="sponsor-logo floating-logo">
                    <img src="path_to_startuphub_logo.png" alt="StartupHub Logo" style="max-width:100%; max-height:80px;">
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <div class="sponsor-logo floating-logo">
                    <img src="path_to_codemaster_logo.png" alt="CodeMaster Logo" style="max-width:100%; max-height:80px;">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .sponsor-logo {
        background: rgba(0, 191, 255, 0.1);
        border-radius: 15px;
        padding: 1rem 2rem;
        box-shadow: 0 0 15px rgba(0, 191, 255, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }
    .sponsor-logo:hover {
        transform: translateY(-12px);
        box-shadow: 0 0 40px rgba(0, 191, 255, 0.8);
    }
    @keyframes floatUpDown {
        0%, 100% { transform: translateY(0) }
        50% { transform: translateY(-15px) }
    }
    .floating-logo {
        animation: floatUpDown 4s ease-in-out infinite;
    }
</style>
 <!-- Register/CTA -->
    <section id="register" class="py-5">
        <div class="container text-center">
            <h2 class="section-title-fusion">Ready for Fusion?</h2>
            <p class="lead mb-4">Secure your spot in the electrifying hackathon—register your team now!</p>
<button class="btn btn-glow btn-lg me-3" data-bs-toggle="modal" data-bs-target="#teamRegisterModal">
                <i class="fas fa-user-plus me-2"></i>Register Your Team
            </button>
            <button class="btn btn-outline-primary btn-lg" style="border-radius:50px;border-color:var(--accent-blue);color:var(--accent-blue)">
                <i class="fas fa-download me-2"></i>Download Brochure
            </button>
        </div>
    </section>
    <!-- Registration Modal -->
<div class="modal fade" id="teamRegisterModal" tabindex="-1" aria-labelledby="teamRegisterModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="background: #101a33; color: #fff; border: 1.5px solid #00bfff;">
      <div class="modal-header">
        <h5 class="modal-title" id="teamRegisterModalLabel">Team Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #00bfff;"></button>
      </div>
      <div class="modal-body">
        <form id="teamRegistrationForm" novalidate>
          <h6 class="mb-3">Team Leader Information</h6>
          <div class="row g-3 mb-4">
            <div class="col-md-6">
              <label class="form-label" for="leaderName">Name</label>
              <input type="text" class="form-control" id="leaderName" name="leaderName" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="leaderPhone">Contact Number</label>
              <input type="tel" class="form-control" id="leaderPhone" name="leaderPhone" required pattern="[0-9]{10}">
            </div>
            <div class="col-md-6">
              <label class="form-label" for="leaderEmail">Email</label>
              <input type="email" class="form-control" id="leaderEmail" name="leaderEmail" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="leaderCollege">College Name</label>
              <input type="text" class="form-control" id="leaderCollege" name="leaderCollege" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label" for="teamSizeSelect">Number of Team Members (including leader)</label>
            <select id="teamSizeSelect" class="form-select" name="teamSize" required>
              <option value="" disabled selected>Select team size</option>
              <option value="2">2 Members</option>
              <option value="3">3 Members</option>
              <option value="4">4 Members</option>
            </select>
          </div>

          <div id="teamMembersContainer" class="mb-3">
            <!-- Dynamic member input groups will be injected here -->
          </div>

          <button type="submit" class="btn btn-glow w-100 mt-3">Proceed to Payment</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  const teamSizeSelect = document.getElementById('teamSizeSelect');
  const membersContainer = document.getElementById('teamMembersContainer');

  function createMemberInputs(index) {
    return `
      <fieldset class="border p-3 mb-3 rounded">
        <legend class="w-auto px-2">Member ${index} Information</legend>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label" for="memberName${index}">Name</label>
            <input type="text" class="form-control" id="memberName${index}" name="memberName${index}" required>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="memberPhone${index}">Contact Number</label>
            <input type="tel" class="form-control" id="memberPhone${index}" name="memberPhone${index}" required pattern="[0-9]{10}">
          </div>
          <div class="col-md-6">
            <label class="form-label" for="memberEmail${index}">Email</label>
            <input type="email" class="form-control" id="memberEmail${index}" name="memberEmail${index}" required>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="memberCollege${index}">College Name</label>
            <input type="text" class="form-control" id="memberCollege${index}" name="memberCollege${index}" required>
          </div>
        </div>
      </fieldset>
    `;
  }

  teamSizeSelect.addEventListener('change', function() {
    let count = parseInt(this.value, 10);
    // Remove previous member inputs
    membersContainer.innerHTML = '';
    // Leader is member 1, so start from 2
    for (let i = 2; i <= count; i++) {
      membersContainer.insertAdjacentHTML('beforeend', createMemberInputs(i));
    }
  });

  // Optional: form validation and submission logic here
</script>
    <!-- Footer -->
    <footer id="contact" style="background:var(--dark-blue);border-top:1.5px solid var(--accent-blue);padding:2rem 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contact Us</h4>
                    <p><i class="fas fa-envelope me-2"></i> fusion@ecellsknisb.com</p>
                    <p><i class="fas fa-phone me-2"></i> +91 98765 43210</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> E-Cell × SKNISB Campus</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h4>Follow Us</h4>
                    <div>
                        <a href="#" class="me-3" style="color:var(--accent-blue);font-size:2rem;"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3" style="color:var(--accent-blue);font-size:2rem;"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="me-3" style="color:var(--accent-blue);font-size:2rem;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3" style="color:var(--accent-blue);font-size:2rem;"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
            <hr style="border-color:var(--accent-blue);margin:2rem 0;">
            <div class="text-center">
                <p>&copy; 2025 Fusion Hackathon - Sinhgad Institute. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Floating Glow Particles Animation
        function createParticlesFusion() {
            const container = document.getElementById('particlesFusion');
            for (let i = 0; i < 44; i++) {
                const p = document.createElement('div');
                p.className = 'particle-fusion';
                p.style.left = Math.random()*100 + '%';
                p.style.top = Math.random()*100 + '%';
                p.style.animationDelay = Math.random()*7 + 's';
                p.style.animationDuration = (Math.random()*3+4) + 's';
                container.appendChild(p);
            }
        }
        createParticlesFusion();

        // Smooth scroll nav
        function scrollToSection(id) {
            const sec = document.getElementById(id);
            if(sec){ sec.scrollIntoView({behavior:'smooth'});}
        }
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                scrollToSection(targetId);
            });
        });

        // Interactive Fusion Logo
        const fusionLogo = document.getElementById('fusionLogo');
        if(fusionLogo){
            fusionLogo.addEventListener('click',()=>{ fusionLogo.style.transform='scale(1.1) rotate(-3deg)'; setTimeout(()=>fusionLogo.style.transform='', 600); });
            fusionLogo.addEventListener('mouseover',()=>fusionLogo.setAttribute('aria-label','Let’s Fuse Ideas!'));
            fusionLogo.addEventListener('mouseout',()=>fusionLogo.setAttribute('aria-label','Fusion Event'));
        }
        // Animated stats on view (optional)
        document.addEventListener('DOMContentLoaded', function() {
            // Could add counter animations or other interactive stuff here
        });
    </script>
</body>
</html>
 