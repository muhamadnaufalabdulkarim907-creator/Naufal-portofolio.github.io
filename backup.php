<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naufal - Front End Developer</title>
    <link rel="shortcut icon" href="asset/image/bussiness-man.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4e54c8;
            --secondary-color: #8f94fb;
            --accent-orange: #ffae00;
            --accent-blue: #1197d4;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f8f9fa, #ffffff);
            color: #333;
            overflow-x: hidden;
        }
        
        /* Navbar Styles */
        .navbar {
            background: linear-gradient(90deg, var(--accent-orange) 0%, var(--accent-blue));
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 0;
            transition: var(--transition);
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.6rem;
            color: white !important;
        }
        
        .navbar-brand img {
            transition: var(--transition);
            border-radius: 50%;
            padding: 3px;
            background: rgba(255, 255, 255, 0.2);
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            margin: 0 0.3rem;
            padding: 0.6rem 1rem !important;
            border-radius: 8px;
            transition: var(--transition);
        }
        
        .nav-link:hover, .nav-link.active {
            background: rgba(255, 255, 255, 0.15);
            color: white !important;
            transform: translateY(-2px);
        }
        
        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 100px 0 60px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-bg {
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(135deg, var(--accent-blue) 0%, var(--accent-orange));
            clip-path: polygon(100% 0, 100% 100%, 25% 100%);
            z-index: 1;
        }
        
        .hero-image {
            position: relative;
            z-index: 2;
            animation: float 4s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        .hero-title {
            font-size: 4.5rem;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 1rem;
            line-height: 1.1;
        }
        
        .hero-highlight {
            color: var(--accent-orange);
            position: relative;
            display: inline-block;
        }
        
        .hero-highlight::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 15px;
            background: rgba(17, 151, 212, 0.2);
            z-index: -1;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--accent-blue);
            margin-bottom: 1.5rem;
        }
        
        .hero-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 2.5rem;
            max-width: 90%;
        }
        
        /* Buttons */
        .btn-primary-custom {
            background: linear-gradient(45deg, var(--accent-orange), var(--accent-blue));
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            color: white;
        }
        
        .btn-outline-custom {
            border: 2px solid var(--accent-blue);
            color: var(--accent-blue);
            background: transparent;
            padding: 10px 28px;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .btn-outline-custom:hover {
            background: var(--accent-blue);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Social Icons */
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 2rem;
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: white;
            color: var(--accent-blue);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            font-size: 1.2rem;
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
            color: white;
            background: linear-gradient(45deg, var(--accent-orange), var(--accent-blue));
        }
        
        /* Section Styles */
        .section {
            padding: 100px 0;
        }
        
        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            color: var(--dark-color);
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--accent-orange), var(--accent-blue));
            border-radius: 2px;
        }
        
        /* Skills Section */
        .skills-section {
            background: white;
        }
        
        .skill-item {
            text-align: center;
            padding: 25px 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            background: white;
            height: 100%;
        }
        
        .skill-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .skill-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
            background: linear-gradient(45deg, rgba(255, 174, 0, 0.1), rgba(17, 151, 212, 0.1));
            font-size: 2rem;
            color: var(--accent-blue);
        }
        
        .skill-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark-color);
        }
        
        /* About Section */
        .about-section {
            background: linear-gradient(to bottom, #f9fafb, #ffffff);
        }
        
        .feature-box {
            padding: 30px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            height: 100%;
        }
        
        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--accent-blue);
            background: linear-gradient(45deg, rgba(255, 174, 0, 0.1), rgba(17, 151, 212, 0.1));
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }
        
        .feature-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        /* Projects Section */
        .projects-section {
            background: white;
        }
        
        .project-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            height: 100%;
            background: white;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .project-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
        
        .project-content {
            padding: 25px;
        }
        
        .project-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark-color);
        }
        
        /* Testimonials */
        .testimonial-section {
            background: linear-gradient(45deg, var(--accent-blue), var(--accent-orange));
            color: white;
        }
        
        .testimonial-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            margin: 20px 0;
            transition: var(--transition);
        }
        
        .testimonial-card:hover {
            transform: scale(1.03);
            background: rgba(255, 255, 255, 0.15);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.7;
        }
        
        /* Contact Section */
        .contact-section {
            background: #f9fafb;
        }
        
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .form-control {
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            transition: var(--transition);
        }
        
        .form-control:focus {
            border-color: var(--accent-blue);
            box-shadow: 0 0 0 3px rgba(17, 151, 212, 0.2);
        }
        
        /* Footer */
        .footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: white;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--accent-orange), var(--accent-blue));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 3.5rem;
            }
            
            .hero-bg {
                width: 60%;
                opacity: 0.7;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .hero-subtitle {
                font-size: 1.3rem;
            }
            
            .hero-description {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .hero-bg {
                width: 100%;
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
                opacity: 0.2;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.3rem;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .btn-primary-custom, .btn-outline-custom {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="asset/image/bussiness-man.png" width="40" class="me-2" alt="Logo"> Naufal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Keahlian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php"><i class="fas fa-user me-1"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h6 class="hero-subtitle">Halo, Saya</h6>
                        <h1 class="hero-title">Naufal</h1>
                        <h2 class="hero-subtitle"><span class="hero-highlight">Frontend Developer</span></h2>
                        <p class="hero-description">
                            Saya adalah Frontend Developer dengan keahlian membangun website responsif dan user-friendly menggunakan HTML, CSS, JavaScript, dan Bootstrap. Berbekal latar belakang desain visual, saya menggabungkan estetika dan fungsionalitas untuk menciptakan pengalaman digital yang modern dan menarik.
                        </p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="#projects" class="btn btn-primary-custom">Lihat Proyek</a>
                            <a href="#contact" class="btn btn-outline-custom">Hubungi Saya</a>
                        </div>
                        <div class="social-icons">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-dribbble"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="hero-image text-center">
                        <img src="asset/image/coy.png" alt="Naufal - Frontend Developer" class="img-fluid" style="max-width: 80%;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section about-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Mengapa Memilih Saya?</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="feature-title">Desain Berkualitas Tinggi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ea neque enim. Quia ducimus consequuntur fugiat eaque officiis.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="feature-title">Pengerjaan Tepat Waktu</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ea neque enim. Quia ducimus consequuntur fugiat eaque officiis.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3 class="feature-title">Dukungan 24/7</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ea neque enim. Quia ducimus consequuntur fugiat eaque officiis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section skills-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Keahlian Saya</h2>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="asset/image/new-php-logo.png" alt="PHP" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <h4 class="skill-name">PHP</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="asset/image/Laravel.svg.png" alt="Laravel" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <h4 class="skill-name">Laravel</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="asset/image/css-3.png" alt="CSS" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <h4 class="skill-name">CSS</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="asset/image/bootstrap.png" alt="Bootstrap" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <h4 class="skill-name">Bootstrap</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="asset/image/pngwing.com.png" alt="JavaScript" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <h4 class="skill-name">JavaScript</h4>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="fade-up" data-aos-delay="350">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <img src="asset/image/React-icon.svg.png" alt="React" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <h4 class="skill-name">React</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section projects-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Proyek Terbaru</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-card">
                        <img src="asset/image/2024-Formula1-Aston-Martin-AMR24-008-2000.jpg" alt="Project 1" class="project-img">
                        <div class="project-content">
                            <h3 class="project-title">Website E-Commerce</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <a href="#" class="btn btn-outline-custom btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-card">
                        <img src="asset/image/2024-Formula1-Aston-Martin-AMR24-008-2000.jpg" alt="Project 2" class="project-img">
                        <div class="project-content">
                            <h3 class="project-title">Aplikasi Dashboard</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <a href="#" class="btn btn-outline-custom btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="project-card">
                        <img src="asset/image/2024-Formula1-Aston-Martin-AMR24-008-2000.jpg" alt="Project 3" class="project-img">
                        <div class="project-content">
                            <h3 class="project-title">Platform Edukasi</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <a href="#" class="btn btn-outline-custom btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="section-title text-white" data-aos="fade-up">Apa Kata Klien?</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card text-center">
                        <p class="testimonial-text">"Naufal adalah developer yang sangat profesional dan berbakat. Dia menyelesaikan proyek kami tepat waktu dan dengan kualitas yang luar biasa. Sangat recomended!"</p>
                        <h5 class="text-white">Ahmad Rizki</h5>
                        <p class="text-light">CEO TechSolutions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Hubungi Saya</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" placeholder Alamat Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Subjek" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary-custom">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="footer-title">Naufal</h3>
                    <p>Frontend Developer yang passionate dalam menciptakan pengalaman digital yang menarik dan fungsional.</p>
                    <div class="footer-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h3 class="footer-title">Tautan</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#skills">Keahlian</a></li>
                        <li><a href="#projects">Proyek</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h3 class="footer-title">Layanan</h3>
                    <ul class="footer-links">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Frontend Development</a></li>
                        <li><a href="#">Responsive Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h3 class="footer-title">Kontak</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Jakarta, Indonesia</li>
                        <li><i class="fas fa-envelope me-2"></i> naufal@example.com</li>
                        <li><i class="fas fa-phone me-2"></i> +62 812 3456 7890</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Naufal. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = "0.5rem 0";
                navbar.style.boxShadow = "0 4px 20px rgba(0, 0, 0, 0.1)";
            } else {
                navbar.style.padding = "0.8rem 0";
                navbar.style.boxShadow = "0 4px 20px rgba(0, 0, 0, 0.1)";
            }
        });

        // Back to top button
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });
        
        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>