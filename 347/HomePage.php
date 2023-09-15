<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Accident Detection & Alarming</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
   <!-- Include Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
      /* Your custom CSS styles */
      body {
         font-family: Arial, sans-serif;
         background-color: #f5f5f5;
         margin: 0;
         padding: 0;
      }

      .header {
         background-image: url('166185-bmw-vision-efficientdynamics-concept-748x499.jpg');
         background-size: cover;
         background-position: center;
         height: 100vh;
         color: #fff;
         position: relative;
      }

      .navbar {
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 20px;
         background-color: rgba(0, 0, 0, 0.6);
      }

      .nav-logo img {
         width: 60px;
         height: auto;
      }

      .nav-links li {
         margin-right: 20px;
      }

      .nav-links a {
         text-decoration: none;
         color: #fff;
         font-weight: bold;
         transition: color 0.3s;
      }

      .nav-links a:hover {
         color: #007bff;
      }

      .text-box {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         text-align: center;
      }

      .text-box h1 {
         font-size: 3rem;
         margin-bottom: 20px;
         color: whitesmoke;
         font-weight: bold; /* Add this line to make the text bold */
      }

      .text-box p {
         font-size: 1.2rem;
         margin-bottom: 30px;
         color: #f0f0f0;
      }

      .hero-btn {
         display: inline-block;
         padding: 10px 20px;
         background-color: #007bff;
         color: #fff;
         border-radius: 5px;
         text-decoration: none;
         transition: background-color 0.3s;
      }

      .hero-btn:hover {
         background-color: red;
      }

      .fa-bars,
      .fa-times {
         font-size: 24px;
         cursor: pointer;
      }

      .fa-times {
         display: none;
      }

      .map-container {
         text-align: center;
         position: relative;
         margin-top: 50px;
      }

      iframe.map-iframe {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 500px;
      }

      /* Section styles */
      .section {
         padding: 50px 0;
         text-align: center;
      }

      .section h2 {
         font-size: 2.5rem;
         margin-bottom: 20px;
         color: #007bff;
      }

      .section p {
         font-size: 1.2rem;
         color: #555;
         margin-bottom: 30px;
      }

      /* CTA Button styles */
      .cta-button {
         display: inline-block;
         padding: 10px 20px;
         background-color: #007bff;
         color: #fff;
         border-radius: 5px;
         text-decoration: none;
         transition: background-color 0.3s;
         font-size: 1.2rem;
      }

      .cta-button:hover {
         background-color: #0056b3;
      }

      /* Footer styles */
      footer {
         background-color: #333;
         color: #fff;
         padding: 20px 0;
         text-align: center;
      }

      footer p {
         margin: 0;
      }

       .log-out a {
         background-color: #007bff;
         color: #fff;
         padding: 10px 10px;
         border-radius: 5px;
         text-decoration: none;
         transition: background-color 0.3s;
      }

      .log-out a:hover {
         background-color: #0056b3;
      }


      /* Add this submenu style */
      .submenu {
   display: none;
   position: absolute;
   background-color: rgba(0, 0, 0, 0.6);
   border-radius: 5px;
   padding: 10px;
   z-index: 1;
}

.submenu a {
   display: block;
   color: #fff;
   text-decoration: none;
   margin-bottom: 5px;
}

/* Show submenu on hover */
.nav-links li:hover .submenu {
   display: block;
}


   </style>
</head>
<body>
   <section class="header">
      <div class="log-out">
         <a href="logout.php">Log Out</a>
      </div>
      <nav class="navbar">
         <div class="nav-logo">
            <a href="HomePage.php"><img src="car-accident.png" alt="Logo"></a>
         </div>
         <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
               <li><a href="HomePage.php">Home</a></li>
               <li><a href="aboutus.html">About</a></li>
               <li>
                  <a href="#">Services</a>
                  <!-- Add submenu here -->
                  <ul class="submenu">
                     <li><a href="service.html">Service 1</a></li>
                     <li><a href="services.html">Service 2</a></li>
                  </ul>
               </li>
               <li><a href="contact.php">Contact Us</a></li>
            </ul>
         </div>
         <!--<i class="fa fa-bars" onclick="showMenu()"></i>-->
      </nav>
      <div class="text-box">
         <h1>Accident Detection And Alarming</h1>
         <p>Accident Detection is designed to detect severe car crashes—such as front-impact, side-impact, and rear-end collisions, and rollovers—involving sedans, minivans, SUVs, pickup trucks, and other passenger cars.</p>
         <a href="location.html" class="hero-btn">Emergency Help Button</a>
         <a href="login_admin.php" class="hero-btn">Log in as admin</a>
      </div>
   </section>
   <!-- Your other content here -->
   <section class="map-container">
      <h1>Google Map</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.406205905648!2d90.42292967420768!3d23.768545288081594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7892dcf0001%3A0x853ad729be4edc71!2sEast%20West%20University!5e0!3m2!1sen!2sbd!4v1693636415105!5m2!1sen!2sbd" width="1600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </section>
    
   <!--<script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
         navLinks.classList.add("show-menu");
      }

      function hideMenu() {
         navLinks.classList.remove("show-menu");
      }
   </script>-->
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="service.css">
    <title>Services</title>
    <style>
        /* Custom CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: blue; /* Set the background color to sky blue */
            color: #fff;
            text-align: center;
            padding: 60px 0;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
        }

        header p {
            font-size: 18px;
        }

        .services {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .service-card {
    background-color: #f5f5f5; /* Use a lighter background color */
    border: 2px solid #007bff; /* Add a solid border with a primary color */
    border-radius: 10px; /* Increase border-radius for rounded corners */
    padding: 30px; /* Add more padding for spacing */
    text-align: center;
    margin: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Enhance the box shadow */
    transition: transform 0.2s, box-shadow 0.2s; /* Add smooth hover effect */
}

.service-card:hover {
    transform: translateY(-5px); /* Add a slight lift on hover */
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2); /* Improve box shadow on hover */
}

.service-card h3 {
    font-size: 1.5rem; /* Increase font size for the heading */
    color: #007bff; /* Use the primary color for headings */
    margin-bottom: 10px;
}

.service-card p {
    font-size: 1.2rem; /* Slightly increase font size for the content */
    color: #333; /* Use a darker text color */
}

.service-card a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
    font-size: 1.2rem;
    margin-top: 15px; /* Add spacing between content and button */
}

.service-card a:hover {
    background-color: #0056b3; /* Darken button color on hover */
}


        .service-icon img {
            max-width: 220px;
            margin-bottom: 15px;
        }

        .service-card h2 {
            font-size: 24px;
            margin: 10px 0;
        }

        .service-card p {
            font-size: 16px;
        }

        /* General styles */
.customer-reviews,
.add-review {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #e0e0e0; /* Use a softer border color */
    border-radius: 10px; /* Round the corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
}

/* Review styles */
.customer-review {
    margin: 20px 0;
    padding: 20px; /* Add padding for separation and aesthetics */
    border: 1px solid #e0e0e0; /* Add a border to each review */
    border-radius: 10px; /* Round the corners of each review */
}

.customer-review h3 {
    font-size: 24px; /* Increase font size for headings */
    margin: 0;
    color: #007bff; /* Use a primary color for headings */
    margin-bottom: 10px;
}

/* Add review form styles */
label {
    font-size: 18px;
    color: #333; /* Use a darker text color */
}

textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    resize: vertical;
    margin-top: 10px; /* Add spacing above the textarea */
}

button {
    background-color: #007bff; /* Use the primary color for the button */
    color: #fff;
    padding: 12px 24px; /* Increase padding for the button */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 18px;
    margin-top: 15px; /* Add spacing between textarea and button */
}

button:hover {
    background-color: #0056b3; /* Darken button color on hover */
}



    </style>
</head>
<body>
    <header>
        <h1>About Our Services </h1>
        <p>Your trusted partner in times of need.</p>
    </header>

    <section class="services">
          <div class="service-card">
            <div class="service-icon">
                <img src="ecalls.png" alt="Emergency Calls">
            </div>
            <h2>Emergency Calls</h2>
            <p>We provide quick and superfast calls on our provided number to know more details about your accident conditions.</p>
            <p><h3>Emergency Contact: 01756473367</h3></p>
          </div>

         <div class="service-card">
            <div class="service-icon">
                <img src="ambulance.jpg" alt="Dispatch EMS Team">
            </div>
            <h2>Dispatch EMS Team</h2>
            <p>We have highly qualified and expert emergency teams who can handle your post and pre-accidental situations and can reach your location as fast as possible.</p>
         </div>

         <div class="service-card">
            <div class="service-icon">
                <img src="customer support.png" alt="Customer Support">
            </div>
            <h2>Customer Support</h2>
            <p>Our expert customer support can suggest you the nearest hospital and also suggest doctors by hearing your needs. You can take our service 24 hours.</p>
         </div>
            
            <div class="service-card">
                <div class="service-icon">
                <img src="ambulance-workers-in-red-with-patient.jpg" alt="Ambulance Car">
               </div>
              <h2>Ambulance Car</h2>
               <p>Our ambulance service is dedicated to providing rapid response and professional medical assistance during emergencies. With a fleet of well-equipped ambulances and highly trained medical personnel, we ensure swift and efficient care for individuals in critical situations. Your safety and well-being are our top priorities, and we're here to deliver immediate medical support when you need it most.</p>

               <div class="read-more">
                    <a href="ambulance_service.html">Read More</a>
                </div>
           </div>
            
        

         <div class="service-card">
            <div class="service-icon">
                <img src="hospital.jpg" alt="Hospital Admit Service">
            </div>
            <h2>Hospital Admit Service</h2>
            <p>Our hospital admission service offers a seamless and expedited process for individuals in need of emergency medical care. We understand that during critical situations, time is of the essence. Our dedicated team works diligently to ensure swift admission to a reputable medical facility, ensuring that patients receive the necessary treatment and attention without unnecessary delays, providing peace of mind during challenging times.</p>

            <div class="read-more">
                    <a href="hospital.html">Fill up the form for hospital admit</a>
                </div>
         </div>

         <div class="service-card">
            <div class="service-icon">
                <img src="nurse-with-elder-paitent-768x497.jpg" alt="Medical Escort">
            </div>
            <h2>Medical Escort</h2>
            <p>Our medical escort service provides a vital lifeline for individuals requiring medical assistance during travel. Whether it's a routine medical appointment or a long-distance journey, our trained medical professionals accompany and assist patients, ensuring their safety and well-being throughout the trip. We prioritize comfort, security, and timely access to medical care, making travel possible for those with unique healthcare needs.</p>
        </div>

    </section>

    <section class="section">
      <h2>About Us</h2>
      <p>Learn more about our company and our mission to provide top-quality accident detection and alarming solutions.</p>
      <a href="aboutus.html" class="cta-button">Read More</a>
   </section>
   
   <section class="section">
      <h2>Contact Us</h2>
      <p>Have questions or need assistance? Contact our team for support. We're here to help.</p>
      <a href="contact.php" class="cta-button">Contact Us</a>
   </section>
   

   <footer>
      <p>&copy; 2023 Accident Detection & Alarming</p>
   </footer>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

