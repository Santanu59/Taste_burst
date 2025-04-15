<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  <link rel="stylesheet" href="./about.css">
  <style>
    .footer {
	padding-block: 50px;
	padding-bottom: 25px;
	background-color: #151515;
	color: #666873;
    font-family: 'Quicksand', sans-serif;

	/* Margin-top: auto; for demo use only */
	margin-top: auto;
}
.footer__container {
	max-width: 1160px;
	margin: auto;
	padding: 0 15px;
}

.footer-logo img {
  max-width: 100px; /* Adjust the size as needed */

}

.footer__top {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	row-gap: 20px;
}
.footer__title {
	font-size: 18px;
	color: #fff;
	font-weight: 500;
	margin-bottom: 20px;
}
.footer__list {
	display: flex;
	flex-direction: column;
    
}





.footer__list-link {
	transition: color 0.25s;
    color: #ffa200;
}

.footer__list-link:hover {
	color: #fff;
}


.footer__divider {
	margin-block: 25px;
	border: none;
	border-top: 1px solid rgba(252, 255, 255, 0.1);
}
.footer__bottom {
	display: flex;
	justify-content: space-between;
  padding-right: 15px;
	gap: 20px;
	flex-wrap: wrap;
}
.footer__list--bottom {
	flex-direction: row;
    color: #ffa200;
}
  </style>
</head>
<body>

<section class="about" id="about">
        
        <nav>
            <div class="logo">
                <img src="./images/Logo.png" alt="Tasteburst">
                <h1> Tasteburst <span> With Us </span> </h1> 
                <!-- You should use span when you want to style a particular part of your content differently or manipulate it with JavaScript. You can also use it as a container for inline elements. -->
            </div>
              <ul>
                <li><a href="../../home.html">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="../Contact Us/Contact.php">Contact Us</a></li>                
              </ul>
        </nav>
        
		
		    <br><h2>Our Story</h2>
        <p>
          Welcome to our food ordering website! We started this venture with a passion for delivering delicious and freshly prepared meals right to your doorstep. Our mission is to provide a seamless and delightful food ordering experience for all our customers.
          From the finest ingredients to our experienced chefs, we take pride in every dish we serve. Your satisfaction is our top priority, and we're committed to maintaining the highest standards of quality and taste.
        </p>
	
      <div class="team">
            <h1>Our Chefs</h1>

          <div class="team_box">
                <div class="profile">
                    <img src="./images/Chef1.png" alt="Chef 1">
                </div>

                <div class="profile">
                    <img src="./images/Chef2.png" alt="Chef 2">
                </div>

                <div class="profile">
                    <img src="./images/Chef3.png" alt="Chef 3">
                </div>

                <div class="profile">
                    <img src="./images/Chef4.png" alt="Chef 4">
                </div>

                <!-- Repeat the above profile structure for other chefs -->
            </div>
      </div>

      
      
        
    </section>

    

    <section class="staff" id="staff" style="background-color: #f0f0f0; padding-top: 30px;">

    <div class="team">
            <h1>Our Staffs</h1>

          <div class="team_box">
                <div class="profile">
                    <img src="./images/Staff1.png" alt="Chef 1">
                </div>

                <div class="profile">
                    <img src="./images/Staff2.png" alt="Chef 2">
                </div>

                <div class="profile">
                    <img src="./images/Staff3.png" alt="Chef 3">
                </div>

                <div class="profile">
                    <img src="./images/Staff4.png" alt="Chef 4">
                </div>

                <!-- Repeat the above profile structure for other chefs -->
            </div>
      </div>



    </section>
   
    <section class="team-members" style="background-color: #f0f0f0; padding-top: 30px;" >
      <h1>Our Team Members</h1>
      <div class="container">
      <div class="box">
              <div class="imgBox">
                <img src="./images/Santanu Gope.jpg" alt="">
              </div>
              <div class="content">
                <h2>Santanu Gope</br>
                  <span>CEO, Founder and Director </span>
                  <!-- <p>(Fullstack Developer)</p> -->
                </h2>
              </div>
            </div>
            <div class="box">
              <div class="imgBox">
                <img src="./images/Abhigyan.jpg" alt="">
              </div>
              <div class="content">
                <h2>Abhigyan Maji</br>
                  <span>CEO and Founder</span>
                </h2>
              </div>
            </div>
            <div class="box">
              <div class="imgBox">
                <img src="./images/Pranab.jpg" alt="">
              </div>
              <div class="content">
                <h2>Pranab Singh</br>
                  <span>CEO and Co-Founder</span>
                </h2>
              </div>
            </div>
        
            
           
            <div class="box">
              <div class="imgBox">
                <img src="./images/Tridev.jpg" alt="">
              </div>
              <div class="content">
                <h2>Tridev Baran Kotal</br>
                  <span>Frontend Developer</span>
                </h2>
              </div>
            </div>
            <div class="box">
              <div class="imgBox">
                <img src="./images/Souvik Ghose.jpg" alt="">
              </div>
              <div class="content">
                <h2>Souvik Ghose</br>
                  <span> Frontend Developer </span>
                </h2>
              </div>
            </div>

            <div class="box">
              <div class="imgBox">
                <img src="./images/Suraj.jpg" alt="">
              </div>
              <div class="content">
                <h2>Suraj Kumar</br>
                  <span>Frontend Developer</span>
                </h2>
              </div>
            </div>
        </div>
    </section>

    <footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <div style="padding-left: 30px;">
                <br><br><br>
                <img src="./images/Logo.png" alt="" style="height: 65%; width: 65%; padding-left: 30px; padding-top: 10px;">
                
            </div>
            <div>
                <br><br><br>
                <h6 class="footer__title">Categories</h6>
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Vegeterian</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Non-Vegeterian</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Cakes and Bakes</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Drinks</a>
                    </li>

                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Others</a>
                    </li>
                </ul>
            </div>
            <div>
                <br><br><br>
                <h6 class="footer__title">Business</h6>
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <a href="home.html" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Home</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/About Us/About.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">About Us</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/Contact Us/Contact.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Contact Us</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="#" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="footer__divider">
        <div class="footer__bottom">
            <span class="copyright" style="padding-left: 450px;">&copy; Copyright &copy; 2023 All Rights Reserved by 
                <a href="#" style= "color: #ffa200; text-decoration: none;"> Taste Burst</a>.
            </span>

            <ul class="footer__list footer__list--bottom" style="padding-left: 50px;">
                <li class="footer__list-item">
                    <a href="#" class="footer__list-link">
                        <i class="fa fa-facebook" style="padding-right: 40px;"></i>
                    </a>
                </li>
                <li class="footer__list-item">
                    <a href="#" class="footer__list-link">
                        <i class="fa fa-instagram" style="padding-right: 40px;"></i>
                    </a>
                </li>
                <li class="footer__list-item">
                    <a href="#" class="footer__list-link">
                        <i class="fa fa-twitter" style="padding-right: 40px;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>



</body>
</html>
