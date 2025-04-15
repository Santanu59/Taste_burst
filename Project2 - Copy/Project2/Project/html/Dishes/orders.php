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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2ca0a3c5a3.js" crossorigin="anonymous"></script>

    <title>Cancel Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #DAD9D7;
            min-height: 100%;
            margin: 0;
            padding: 0;
        }

        /* ----------------header ----------------*/
        h1,
        h2,
        h3,
        h4,
        h5 {
            color: #394352
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
            margin: 0 10px
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
    background-color: #DAD9D7;
}
    
         /* ------------------------- */
        .container {
            width: 40%;
            margin: auto;
            overflow: hidden;
        }
        
        form {
            background: #ffffff;
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
            /* box-shadow:3px 4px 6px black;  */
        }

        label {
            display: block;
            font-size: 18px;
            margin: 15px 0;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
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
                    <table align="center" >
                        <br><br>
                        <?php
                        
                            echo $_SESSION['user_name'];   
                        ?>
                    </table>

                  
                </form>
            </nav>
        </div>
    </header>

<div class="container">
    <form  method="post">
        <label for="orderNumber">Order Number:</label>
        <input type="text" id="orderNumber" name="orderNumber" required style="outline:none;">

        <label for="reason">Reason for Cancellation:</label>
        <textarea id="reason" name="reason" rows="4" required style="outline:none;"></textarea>

        <input type="submit" value="Cancel Order" name="can" style=" background: rgb(255, 174, 0);">
    </form>
</div>
<?php
  if(isset($_POST['can']))
  {
    $servername = "localhost:3306";
$username = "root";
$password = "";
$database = "project";
$conn = mysqli_connect($servername,$username,$password,$database);
$order_id=$_POST['orderNumber'];
$q = "DELETE FROM order_details where  random = '$order_id' ";
$d = mysqli_query($conn,$q);
if ($d){
    echo "<script>alert('Your Order Canceled Successfully')</script>";
    // header('location:Dishes.php');
  
}
  }
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "project";
$conn = mysqli_connect($servername,$username,$password,$database);
$enm = $_SESSION['user_name'];
$query = "SELECT * FROM order_details ";
// $query = "SELECT * FROM order_details ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
$id = mysqli_insert_id($conn);


?>
<div class="" style="background-color:green; width:40%; margin:auto; border-radius:4px;">
<h5 style="text-align:center; font-size:20px; padding:20px; color:white;">
     <?php  
             if ($total!=0) {
             while($result=mysqli_fetch_assoc($data)){
                // echo $_SESSION['user_name'];
                // echo $result['email'];
                if($result['email']===$_SESSION['user_name']){
                   
                 ?>
                 <div class="" style='display:flex; flex-decoration:column; '>
                 <?php
                 echo " [*] :Your Order Number is ".$result['random'];
                 ?>
                 </div>
                 <?php 
                }
                }
            }
                    ?>
                    </h5>
</div>

<footer>
<p>&copy; 2023, Taste Burst. All rights reserved.</p>
</footer>
</body>
</html>