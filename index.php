<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EUREKA 2025 - 24HR Hackathon</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #00d4ff;
            --dark-blue: #0066cc;
            --electric-blue: #1e90ff;
            --neon-blue: #00ffff;
            --black: #000000;
            --dark-gray: #111111;
            --light-gray: #333333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Rajdhani', sans-serif;
            background: var(--black);
            color: white;
            overflow-x: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(45deg, #000000, #001133, #000000);
            background-size: 400% 400%;
            animation: gradientShift 10s ease infinite;
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%2300d4ff" stroke-width="0.5" opacity="0.3"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            animation: gridMove 20s linear infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(10px, 10px); }
        }

        /* Floating particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--primary-blue);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.3; }
            50% { transform: translateY(-100px) rotate(180deg); opacity: 1; }
        }

        /* Header */
        .navbar {
            background: rgba(0, 0, 0, 0.9) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--primary-blue);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-family: 'Orbitron', monospace;
            font-weight: 900;
            font-size: 1.8rem;
            background: linear-gradient(45deg, var(--primary-blue), var(--neon-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 20px var(--primary-blue);
        }

        .nav-link {
            color: white !important;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary-blue) !important;
            text-shadow: 0 0 10px var(--primary-blue);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-blue);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-title {
            font-family: 'Orbitron', monospace;
            font-size: 4.5rem;
            font-weight: 900;
            background: linear-gradient(45deg, var(--primary-blue), var(--neon-blue), var(--electric-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 50px var(--primary-blue);
            animation: glow 2s ease-in-out infinite alternate;
            margin-bottom: 1rem;
        }

        @keyframes glow {
            from { filter: drop-shadow(0 0 20px var(--primary-blue)); }
            to { filter: drop-shadow(0 0 40px var(--electric-blue)); }
        }

        .hero-subtitle {
            font-size: 1.8rem;
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 1.5rem;
            animation: slideInUp 1s ease-out 0.5s both;
        }

        .hero-description {
            font-size: 1.2rem;
            line-height: 1.6;
            opacity: 0.9;
            margin-bottom: 2rem;
            animation: slideInUp 1s ease-out 1s both;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-neon {
            background: linear-gradient(45deg, var(--primary-blue), var(--electric-blue));
            border: none;
            color: white;
            font-weight: 700;
            font-size: 1.2rem;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 0 30px var(--primary-blue);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-neon:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 40px var(--primary-blue);
            color: white;
        }

        .btn-neon::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }

        .btn-neon:hover::before {
            left: 100%;
        }

        /* Stats Section */
        .stats-card {
            background: rgba(0, 212, 255, 0.1);
            border: 1px solid var(--primary-blue);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .stats-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 212, 255, 0.3);
        }

        .stats-number {
            font-size: 3rem;
            font-weight: 900;
            color: var(--primary-blue);
            font-family: 'Orbitron', monospace;
        }

        .stats-label {
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: 0.5rem;
        }

        /* Timeline */
        .timeline-item {
            background: rgba(17, 17, 17, 0.8);
            border: 1px solid var(--primary-blue);
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .timeline-item:hover {
            background: rgba(0, 212, 255, 0.1);
            transform: translateX(10px);
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            background: var(--primary-blue);
            border-radius: 50%;
            box-shadow: 0 0 20px var(--primary-blue);
        }

        /* Sponsors */
        .sponsor-logo {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-weight: bold;
            color: var(--dark-gray);
        }

        .sponsor-logo:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.5);
        }

        /* Section Headers */
        .section-title {
            font-family: 'Orbitron', monospace;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, var(--primary-blue), var(--neon-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Footer */
        footer {
            background: var(--dark-gray);
            border-top: 1px solid var(--primary-blue);
            padding: 3rem 0;
        }

        .social-links a {
            color: var(--primary-blue);
            font-size: 2rem;
            margin: 0 1rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: var(--neon-blue);
            text-shadow: 0 0 20px var(--neon-blue);
            transform: translateY(-5px);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-subtitle {
                font-size: 1.3rem;
            }
            .hero-description {
                font-size: 1rem;
            }
            .btn-neon {
                font-size: 1rem;
                padding: 0.8rem 2rem;
            }
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation"></div>
    
    <!-- Particles -->
    <div class="particles" id="particles"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div class="logo-container">
                <div class="org-logo interactive-element" data-tooltip="E-Cell">
                    <i class="fas fa-rocket"></i>
                </div>
                <div class="logo-separator">×</div>
                <div class="org-logo interactive-element" data-tooltip="SKNISB">
                    <i class="fas fa-brain"></i>
                </div>
                <span class="navbar-brand ms-3">
                    <i class="fas fa-lightbulb"></i> EUREKA 2025
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link interactive-element" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link interactive-element" href="#domains">Domains</a></li>
                    <li class="nav-item"><a class="nav-link interactive-element" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link interactive-element" href="#rules">Rules</a></li>
                    <li class="nav-item"><a class="nav-link interactive-element" href="#timeline">Timeline</a></li>
                    <li class="nav-item"><a class="nav-link interactive-element" href="#prizes">Prizes</a></li>
                    <li class="nav-item"><a class="nav-link interactive-element" href="#sponsors">Sponsors</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-title">EUREKA 2025</h1>
                    <h2 class="hero-subtitle">24-Hour Innovation Marathon</h2>
                    <p class="hero-description">
                        Join the ultimate coding battlefield where brilliant minds collide! 
                        Organized by E-Cell × SKNISB, this 24-hour hackathon challenges you to 
                        build innovative solutions that can change the world. Are you ready to make history?
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-neon" onclick="scrollToSection('register')">
                            <i class="fas fa-rocket me-2"></i>Register Now
                        </button>
                        <button class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-play me-2"></i>Watch Trailer
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="hologram-effect" style="font-size: 12rem; color: var(--primary-blue); opacity: 0.7;">
                        <i class="fas fa-lightbulb interactive-element"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="stats-card fade-in">
                        <div class="stats-number">24</div>
                        <div class="stats-label">Hours of Coding</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stats-card fade-in">
                        <div class="stats-number">500+</div>
                        <div class="stats-label">Participants Expected</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stats-card fade-in">
                        <div class="stats-number">₹1L+</div>
                        <div class="stats-label">Prize Pool</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stats-card fade-in">
                        <div class="stats-number">10+</div>
                        <div class="stats-label">Problem Tracks</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Domains Section -->
    <section id="domains" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Challenge Domains</h2>
            <p class="text-center mb-5 fade-in">Choose your battlefield and unleash your creativity across these exciting problem domains</p>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="domain-card fade-in interactive-element">
                        <div class="domain-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h4>AI & ML</h4>
                        <p>Artificial Intelligence & Machine Learning solutions</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="domain-card fade-in interactive-element">
                        <div class="domain-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>Web Tech</h4>
                        <p>Full-stack web applications & platforms</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="domain-card fade-in interactive-element">
                        <div class="domain-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Mobile</h4>
                        <p>iOS, Android & cross-platform apps</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="domain-card fade-in interactive-element">
                        <div class="domain-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Cybersecurity</h4>
                        <p>Security tools & ethical hacking solutions</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="domain-card fade-in interactive-element">
                        <div class="domain-icon">
                            <i class="fas fa-link"></i>
                        </div>
                        <h4>Blockchain</h4>
                        <p>Decentralized applications & crypto solutions</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="domain-card fade-in interactive-element">
                        <div class="domain-icon">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h4>IoT</h4>
                        <p>Internet of Things & embedded systems</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Organizations Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Powered By Innovation</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="org-card fade-in">
                        <div class="org-logo-large">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>E-Cell</h3>
                        <h5 class="text-primary mb-3">Entrepreneurship Cell</h5>
                        <p>
                            The Entrepreneurship Cell is the driving force behind startup culture and innovation. 
                            We nurture entrepreneurial mindsets, organize startup events, and connect students 
                            with industry mentors. Our mission is to transform ideas into impactful businesses.
                        </p>
                        <div class="mt-3">
                            <i class="fas fa-users text-primary me-2"></i> 500+ Members
                            <i class="fas fa-trophy text-primary me-2 ms-3"></i> 50+ Events
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="org-card fade-in">
                        <div class="org-logo-large">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>SKNISB</h3>
                        <h5 class="text-primary mb-3">Technical Excellence Hub</h5>
                        <p>
                            SKNISB stands at the forefront of technical innovation and skill development. 
                            We focus on cutting-edge technology, research projects, and creating solutions 
                            for real-world problems. Excellence in technology is our core mission.
                        </p>
                        <div class="mt-3">
                            <i class="fas fa-code text-primary me-2"></i> Tech Focus
                            <i class="fas fa-lightbulb text-primary me-2 ms-3"></i> Innovation Hub
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rules Section -->
    <section id="rules" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Rules & Regulations</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="rules-container fade-in">
                        <div class="rule-item">
                            <span class="rule-number">1.</span> The hackathon duration is <strong>24 hours continuous</strong>.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">2.</span> Teams can have <strong>2–4 members</strong>.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">3.</span> All work (code/design) must be done <strong>during the hackathon</strong>.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">4.</span> Using open-source libraries, APIs, and tools is allowed (with proper credit).
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">5.</span> <strong>Plagiarism or pre-built projects are not allowed</strong>.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">6.</span> Participants must carry their <strong>college ID</strong> and be present at the venue throughout.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">7.</span> Respect fellow participants, mentors, and organizers – <strong>no misconduct tolerated</strong>.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">8.</span> Wi-Fi, power, and workspace will be provided; bring your <strong>own laptops & accessories</strong>.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">9.</span> Food and refreshments will be arranged by organizers at fixed times.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">10.</span> Teams must <strong>submit their project before the deadline</strong>.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">11.</span> Final judging will be based on <strong>innovation, implementation, usefulness, and presentation</strong>.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">12.</span> Alcohol, drugs, smoking, and any prohibited items are <strong>strictly not allowed</strong>.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">13.</span> Participants are responsible for their own belongings.
                        </div>
                        <div class="rule-item">
                            <span class="rule-number">14.</span> The organizers' decision will be <strong>final and binding</strong>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="timeline" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Event Timeline</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="timeline-item fade-in">
                        <h4><i class="fas fa-calendar-alt me-2"></i>Registration Opens</h4>
                        <p>December 15, 2024 - Start your journey by registering your team</p>
                    </div>
                    <div class="timeline-item fade-in">
                        <h4><i class="fas fa-lightbulb me-2"></i>Problem Statements Released</h4>
                        <p>January 10, 2025 - Get ready to tackle exciting challenges</p>
                    </div>
                    <div class="timeline-item fade-in">
                        <h4><i class="fas fa-flag me-2"></i>Hackathon Begins</h4>
                        <p>January 25, 2025, 6:00 PM - Let the coding marathon begin!</p>
                    </div>
                    <div class="timeline-item fade-in">
                        <h4><i class="fas fa-trophy me-2"></i>Final Presentations</h4>
                        <p>January 26, 2025, 4:00 PM - Showcase your innovative solutions</p>
                    </div>
                    <div class="timeline-item fade-in">
                        <h4><i class="fas fa-medal me-2"></i>Award Ceremony</h4>
                        <p>January 26, 2025, 6:00 PM - Celebrate the winners!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prizes Section -->
    <section id="prizes" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Exciting Prizes Await</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="stats-card fade-in">
                        <div class="mb-3">
                            <i class="fas fa-crown" style="font-size: 3rem; color: gold;"></i>
                        </div>
                        <h3>1st Place</h3>
                        <div class="stats-number" style="font-size: 2rem;">₹50,000</div>
                        <p>+ Internship Opportunities + Goodies</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="stats-card fade-in">
                        <div class="mb-3">
                            <i class="fas fa-medal" style="font-size: 3rem; color: silver;"></i>
                        </div>
                        <h3>2nd Place</h3>
                        <div class="stats-number" style="font-size: 2rem;">₹30,000</div>
                        <p>+ Mentorship Program + Goodies</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="stats-card fade-in">
                        <div class="mb-3">
                            <i class="fas fa-award" style="font-size: 3rem; color: #cd7f32;"></i>
                        </div>
                        <h3>3rd Place</h3>
                        <div class="stats-number" style="font-size: 2rem;">₹20,000</div>
                        <p>+ Special Recognition + Goodies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section id="sponsors" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Our Sponsors</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="sponsor-logo fade-in interactive-element">
                        <strong>TechCorp</strong>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="sponsor-logo fade-in interactive-element">
                        <strong>InnovateLab</strong>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="sponsor-logo fade-in interactive-element">
                        <strong>StartupHub</strong>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="sponsor-logo fade-in interactive-element">
                        <strong>CodeMaster</strong>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="sponsor-logo fade-in interactive-element">
                        <strong>DevForce</strong>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="sponsor-logo fade-in interactive-element">
                        <strong>AIVentures</strong>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="sponsor-logo fade-in interactive-element">
                        <strong>BlockChain Inc</strong>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="sponsor-logo fade-in interactive-element">
                        <strong>Future Tech</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="register" class="py-5">
        <div class="container">
            <div class="text-center fade-in">
                <h2 class="section-title">Ready to Innovate?</h2>
                <p class="lead mb-4">
                    Join EUREKA 2025 and be part of the most exciting 24-hour innovation marathon! 
                    Register now and turn your ideas into reality.
                </p>
                <button class="btn btn-neon btn-lg me-3">
                    <i class="fas fa-user-plus me-2"></i>Register Your Team
                </button>
                <button class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-download me-2"></i>Download Brochure
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contact Us</h4>
                    <p><i class="fas fa-envelope me-2"></i> eureka@ecellsknisb.com</p>
                    <p><i class="fas fa-phone me-2"></i> +91 98765 43210</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> E-Cell × SKNISB Campus</p>
                </div>-alt me-2"></i> Sinhgad Institute, Pune</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
            <hr style="border-color: var(--primary-blue); margin: 2rem 0;">
            <div class="text-center">
                <p>&copy; 2025 CodeStorm - Sinhgad Institute. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (Math.random() * 3 + 3) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Smooth scroll function
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Scroll animations
        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }

        // Navbar scroll effect
        function handleNavbarScroll() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(0, 0, 0, 0.95)';
            } else {
                navbar.style.background = 'rgba(0, 0, 0, 0.9)';
            }
        }

        // Initialize everything
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            handleScrollAnimations();
            
            window.addEventListener('scroll', function() {
                handleScrollAnimations();
                handleNavbarScroll();
            });

            // Smooth scrolling for nav links
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    scrollToSection(targetId);
                });
            });
        });
    </script>
</body>
</html>