<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Student Residences</title>
    <link rel="stylesheet" href="../main/top.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="../homepage/homepage.css">
    
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <a href="../homepage/homepage.html" class="logo"><img src="../assests/logo.png" alt="" ></a>
            <nav>
                <i class="fa-solid fa-bars"></i>
                <ul>
                    <li><a href="../homepage/homepage.php">Home</a></li>
                    <li><a href="../StudentResidences/StudentResidences.php">Student Residences</a></li>
                    <li><a href="../addpage/index.php">Add Houses</a></li>
                    <li><a href="Contact.php" class="active">Contact Us</a></li>
                    <?php include '../Main/loginValidation.php'; ?>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="contact-hero-content">
            <h1>Get in Touch</h1>
            <p>We're here to help you find your perfect student accommodation</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <!-- Contact Information -->
            <div class="contact-info">
                <h2>Contact Information</h2>
                <div class="info-items">
                    <div class="info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-content">
                            <h3>Visit Us</h3>
                            <p>Agdir<br>........ City </p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">📞</div>
                        <div class="info-content">
                            <h3>Call Us</h3>
                            <p>+212 65213126<br>Mon-Fri, 9:00-18:00</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">✉️</div>
                        <div class="info-content">
                            <h3>Email Us</h3>
                            <p>info@gmail.com<br>support@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="social-connect">
                    <h3>Connect With Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon">Facebook</a>
                        <a href="#" class="social-icon">Instagram</a>
                        <a href="#" class="social-icon">Twitter</a>
                        
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-container">
                <h2>Send Us a Message</h2>
                <form id="contactForm" class="contact-form">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="booking">Accommodation Booking</option>
                            <option value="inquiry">General Inquiry</option>
                            <option value="support">Support</option>
                            <option value="feedback">Feedback</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>What are your office hours?</h3>
                    <p>Our office is open Monday through Friday, 9:00 AM to 6:00 PM. We also offer 24/7 emergency support for current residents.</p>
                </div>
                <div class="faq-item">
                    <h3>How can I book a viewing?</h3>
                    <p>You can book a viewing by filling out our contact form, calling us directly, or using our online booking system on the residences page.</p>
                </div>
                <div class="faq-item">
                    <h3>What is the response time?</h3>
                    <p>We aim to respond to all inquiries within 24 hours during business days. Emergency requests are handled immediately.</p>
                </div>
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
            
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Student Residences. All rights reserved.</p>
    </div>
</footer>
    <script src="Contact.js"></script>
    <script src="../StudentResidences/StudentResidences.js"></script>
</body>
</html>