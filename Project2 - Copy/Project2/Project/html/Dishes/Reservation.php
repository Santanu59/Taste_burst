<?php
session_start();
$user = $_SESSION['user_name'];
if($user == true){

}
else{
    header('location:../../home.html');
}
$count = 0;

// Check if the 'cart' session variable is set
if (isset($_SESSION['cart'])) {
    // Count the number of items in the cart
    $count = count($_SESSION['cart']);
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Table Reservation</title>
	<meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/2ca0a3c5a3.js" crossorigin="anonymous"></script>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;700&family=Dancing+Script:wght@400;500;600;700&display=swap');

		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: 'Alegreya', serif;


		}

		body {
			height: 100vh;
			display: grid;
			align-items: center;
			font-family: 'Poppins', sans-serif;
			background: url("background.png");
		}
         /* ----------header---------- */
		 h1,
        h2,
        h3,
        h4,
        h5 {
            color:rgb(246, 249, 254);
        }


        .content-wrapper {
            width: auto;
            margin-left: 6%;
            margin-right: 6%;
        }

        .content-wrapper.error {
            padding: 40px 0
        }

        header {
            position: relative;
            border-bottom: 1px solid #eee;
            /* height:39px; */
        }

        header .content-wrapper {
            display: flex
        }

        header h1,
        header img {
            display: flex;
            flex-grow: 1;
			color:rgb(246, 249, 254);
            flex-basis: 0;
            font-size: 20px;
            margin: 0;
            padding: 24px 0
        }

        header nav {
            display: flex;
            flex-grow: 1;
            flex-basis: 0;
            justify-content: center;
            align-items: center
        }

        header nav a {
            white-space: nowrap;
            text-decoration: none;
            color: #555;
            padding: 10px;
            margin: 0 10px;
			color:rgb(246, 249, 254);
        }

        header nav a:hover {
            border-bottom: 1px solid #d9d9d9
        }

        header .link-icons {
            display: flex;
            flex-grow: 1;
            flex-basis: 0;
            justify-content: flex-end;
            align-items: center;
            position: relative
        }


        header .link-icons a {
            position: relative;
            text-decoration: none;
            color: #394352;
            padding: 9px;
            border-radius: 50%;
            margin-left: 5px
        }

        header .link-icons a:hover {
            background-color: #f2f2f2
        }

        header .link-icons a i {
            font-size: 18px
        }


        .content-wrapper h1 {
            font-size: 34px;
            font-weight: 400;
            margin: 0;
            padding: 20px 0 10px;
            text-align: center;
        }

        .products-header{
            padding-top: 30px;
        }

        .products-wrapper {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding-top: 40px;
        }

      
        
   
        .crtSection {
 cursor: pointer;
  position: relative;
  display: block;
  /* width: 28px; */
  /* background-color:red; */
  /* padding: 10px; */
  height: 25px;
  height: auto;
  overflow: hidden;
		}
  .material-icons {
    position: relative;
    top: 4px;
    z-index: 1;
    font-size: 24px;
    color: white;
    /* background-color:red; */
  }
  .count {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    font-size: 11px;
    border-radius: 50%;
    background: #d60b28;
    /* background: rgb(255, 174, 0); */
    width: 16px;
    height: 16px;
    line-height:16px;
    display: block;
    text-align: center;
    color: white;
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
  }

.crt{
   border-radius:5px;
    border:none; 
    cursor:pointer;
    background: rgb(255, 174, 0);
	color: white;
    padding:7px;
    width:80%;
    margin:auto;
    font-weight:bold;
}
.crt:hover{
    background: rgb(200, 120, 0);
}

.tab{
    background-color:;
}
		 /* ----------------------------- */
		.container {
			width: 100%;
			background: black;
			align-items: center;
			max-width: 650px;
			padding: 20px;
			justify-content: center;
			margin-top: 4px;
			margin-bottom: 20px;
			text-align: center;
			border-radius: 10px;
			box-shadow: 1px 1px 50px grey;
			margin-left: 345px;
		}

		form {
			display: flex;
			flex-direction: column;

		}

		.form-title {
			font-size: 26px;
			font-weight: 600;
			text-align: center;
			padding-bottom: 6px;
			color: brown;
			text-shadow: 1px 1px 1px brown;
			font-family: Baskerville Old Face;
		}

		.main-user-info {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			padding: 20px 0;
		}

		.user-input-box:nth-child(2n) {
			justify-content: end;
		}

		.user-input-box {
			display: flex;
			flex-wrap: wrap;
			width: 50%;
			
		}

		.user-input-box label {
			width: 90%;
			color: white;
			font-size: 20px;
			font-weight: 400;
			margin: 4px 0;
			padding-right: 167px;
			

		}

		.user-input-box input {
			height: 40px;
			width: 95%;
			border-radius: 7px;
			outline: none;
			border: 1px solid grey;
			padding: 0 10px;
		}


		.form-submit-btn input {
			cursor: pointer;
		}

		.form-submit-btn {
			margin-top: 40px;
		}

		.form-submit-btn input {
			display: block;
			width: 100%;
			margin-top: -22px;
			font-size: 25px;
			padding: 10px;
			border: none;
			border-radius: 3px;
			color: black;
			background: rgb(255, 174, 0);
			
		}

		.form-submit-btn input:hover {
			background: rgb(255, 174, 0);
			color: black;
			box-shadow: 1px 1px 20px grey;
			transition: 0.7s;
		}

		@media(max-width: 600px) {
			.container {
				min-width: 280px;
			}

			.user-input-box {
				margin-bottom: 12px;
				width: 100%;
			}


			.gender-category {
				display: flex;
				justify-content: space-between;
				width: 100%;
			}

			.main-user-info {
				max-height: 380px;
				overflow: auto;
			}

			.main-user-info::-webkit-scrollbar {
				width: 0;
			}
		}

		.checkbox {
			color: white;
			font-size: 22px;
			padding-right: 252px;
		}

		footer {
			background-color: #333;
			color: #fff;
			text-align: center;
			padding: 20px;


		}
	</style>
</head>

<body>
<header>
        <div class="content-wrapper">
            <h1>TASTE BURST</h1>
            <nav>
                <a href="../../home.html">Home</a>
                <a href="Dishes.php">Menu</a>
                <a href="Reservation.php">Reservation</a>
				<a href="v_order.php">Orders</a>
                <a href="orders.php">Cancel Orders</a>
                <a href="ViewCart.php/" class="crtSection" style="margin-left:80px;  ">
                    <?php echo "<span class='count' style='font-size:10px; '>$count</span>" ?>
                    <i class="fa-solid fa-cart-shopping" style="font-size:23px; "></i>
                </a>
                <!-- Log Out -->
                <form method="post" class="tab">
                    <br>
                   <a href="../../home.html" style="padding:6px 15px; border-radius:27px; color:white; background-color:red; text-decoration:none; hover:rgb(167, 82, 82); font-size:14px;">Logout</a>
                    <table align="center">
                        <br><br>

                       <p style="color:white;"><?php echo $_SESSION['user_name'];?></p>
                    </table>

                    
                </form>
            </nav>
        </div>
    </header>
	<div class="container">
		<h1 class="form-title" style="color:rgb(255, 187, 0);font-size:50px;">Table Reservation</h1>
		<h1 style="color:rgb(255, 187, 0); font-size:20px;">Booking request +91-81019-70045</h1>
		<form method="post">
			<div class="main-user-info">
				<div class="user-input-box">
					<label for="fullName">Full Name</label>
					<input type="text" id="fullName" name="name" placeholder="Enter Full Name" required />

				</div>
				<div class="user-input-box">
					<label for="phone">Phone No.</label>
					<input type="text" id="phone" name="phone" placeholder="Enter Your Number" required />
				</div>
			</div>
			<div class="main-user-info">
				<div class="user-input-box">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" placeholder="Enter Email" required />
				</div>

				<div class="user-input-box">
					<label for="people">No. of People</label>
					<input type="number" id="phone" name="people" placeholder="Enter Number of people" min="1" max="8" required />
				</div>
			</div>
			<div class="main-user-info">
				<div class="user-input-box">
					<label for="Message-box">Message</label>
					<input type="text" id="message" name="message" placeholder="Message" required />
				</div>

				<div class="user-input-box">
					<label for="datetime">Date & Time</label>
					<input type="datetime-local" name="date" placeholder="date" required />
				</div>
			</div>

			<div for="terms" class="checkbox"">
			<input type="checkbox" style="color:black;font-size:20px;" id="conditions" name="terms" required>
				I agree to the terms and conditions
			</div>
			<div class="form-submit-btn">
				<input type="submit" name="su" value="Book Now">
			</div>
		</form>
	</div>
	</div>
	<footer>
	<p>&copy; 2023, Taste Burst. All rights reserved.</p>
	</footer>


	<?php
	if (isset($_POST['su'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$people = $_POST['people'];
		$message = $_POST['message'];
		$date = $_POST['date'];

		$servername = "localhost:3306";
		$username = "root";
		$password = "";
		$database = "project";
		$conn = mysqli_connect($servername, $username, $password, $database);

		$instr = "insert into reservation values('$name','$phone','$email','$people', '$message', '$date')";
		mysqli_query($conn, $instr);
		//header('Location:Payment.php');
	}
	?>


</body>

</html>