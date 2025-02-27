<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../main/top.css">    
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
    <!-- Header -->
    <header>
        <div class="container">
            <a href="../homepage/homepage.html" class="logo"><img src="../assests/logo.png" alt="" ></a>
            <nav>
                <i class="fa-solid fa-bars"></i>
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="../StudentResidences/StudentResidences.php">Student Residences</a></li>
                    <li><a href="../addpage/index.php">Add Houses</a></li>
                    <li><a href="../Contact/Contact.php" class="active">Contact Us</a></li>
                    <?php include '../Main/loginValidation.php'; ?>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="txt">
                <h1>Student Residences</h1>
                <p class="description">
                    Uninist offers flexible student accommodation, specializing in short-term options.
                    From studios to ensuite and shared rooms, Uninist manages properties that cater to diverse 
                    student needs, ensuring safety and convenience in university life.
                </p>
            </div>
            <p class="breadcrumb">
                <a href="/">Home</a> &gt; <a href="#">Student Residence</a>
            </p>
        </div>  
    </section>
     <!-- About Section -->
     <section class="about-section fade-in-up">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>À propos de nous</h2>
                    <p class="subtitle">Trouvez facilement un logement étudiant adapté à vos besoins</p>
                    <div class="about-description">
                        <p>Nous savons que trouver un logement étudiant peut être un défi. Notre plateforme vous connecte avec des propriétaires proposant des logements adaptés aux étudiants, que ce soit pour une courte ou longue durée.</p>
                        <p>Grâce à notre système, vous pouvez explorer différentes options, comparer les offres et contacter directement les propriétaires en toute simplicité.</p>
                    </div>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <span class="stat-number">Ajout de propriétés</span>
                            <span class="stat-label">Les utilisateurs peuvent ajouter des propriétés</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">gratuite et facile</span>
                            <span class="stat-label">Profitez d'une recherche gratuite et intuitive pour trouver des logements adaptés </span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Accès instantané aux nouvelles annonces</span>
                            <span class="stat-label">Recevez les nouvelles annonces en temps réel </span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Support</span>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="../images/home2.jpg" alt="Students studying together">
                    
                </div>
            </div>
            <div class="values-grid">
                <div class="value-item">
                    <h3>Our Mission</h3>
                    <p>To provide students with safe, comfortable, and inspiring living spaces that support their academic success and personal growth.</p>
                </div>
                <div class="value-item">
                    <h3>Our Vision</h3>
                    <p>To be the leading provider of student accommodation, known for excellence in service and community building.</p>
                </div>
                <div class="value-item">
                    <h3>Our Values</h3>
                    <p>Safety, Community, Innovation, and Student Success drive everything we do at .</p>
                </div>
            </div>
        </div>
    </section>


    

    <!-- Benefits Section -->
    <section class="benefits-section fade-in-up">
        <div class="container">
            <h2>Pourquoi choisir ces résidences ?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">🏠</div>
                    <h3>Emplacements variés</h3>
                    <p>Des logements proposés par différents propriétaires, situés près des universités et des commodités.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🔑</div>
                    <h3>Des annonces vérifiées</h3>
                    <p>Nous mettons en avant des logements avec des informations détaillées pour une meilleure transparence.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🛏</div>
                    <h3>Différents types de logements</h3>
                    <p>Studios, chambres en colocation ou appartements, il y en a pour tous les besoins.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">💰</div>
                    <h3>Prix adaptés aux étudiants</h3>
                    <p>Des logements à différents budgets pour répondre aux besoins des étudiants.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
                <h2>What Our Residents Say</h2>
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-content">
                            <p>"The perfect place for students! Great amenities and super friendly staff. Couldn't ask for better accommodation during my studies."</p>
                            <div class="student-info">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3" alt="Sarah" class="student-photo">
                                <div>
                                    <h4>Sarah Johnson</h4>
                                    <p>Medical Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-content">
                            <p>"Living here has made my university experience so much better. The community is amazing and the facilities are top-notch!"</p>
                            <div class="student-info">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3" alt="Michael" class="student-photo">
                                <div>
                                    <h4>Michael Chen</h4>
                                    <p>Engineering Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Find Your Perfect Student Home?</h2>
            <p>Book a viewing today and join our vibrant student community!</p>
            <div class="cta-buttons">
                <button class="secondary-btn" onclick="window.location.href='contact.html'">Contact Us</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>📍  University EST</p>
                <p>📞 +212 66323262</p>
                <p>✉️ info@gmail.com</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#" class="social-icon">Facebook</a>
                    <a href="#" class="social-icon">Instagram</a>
                    <a href="#" class="social-icon">Twitter</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Student Residences. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../homepage/homepage.js"></script>
    <script src="../Main/header.js"></script>
</body>
</html>