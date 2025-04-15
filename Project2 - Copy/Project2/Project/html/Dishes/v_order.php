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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.th{
    border:none ;
    background-color:  rgb(255, 174, 0);
    padding:5px;
}
.thh{
    border:none ;
    color:black;
    font-size:15px;
    background-color:  rgb(251, 251, 251);
    padding:5px;
}
    
         /* ------------------------- */
      
        footer {
			background-color: #333;
			color: #fff;
			text-align: center;
			padding: 20px;
            position: fixed;
            left:0;
            right: 0;
            bottom: 0;
           /* margin-top:auto; */

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
<!-- ............... -->

 <!-- ................. -->

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
$query = "SELECT * FROM order_details  ";
// $query = "SELECT * FROM order_details ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
$id = mysqli_insert_id($conn);


?>
<div class="" style=" width:90%; height:auto; margin:auto;  border-radius:4px;">
<h5 style="text-align:center; font-size:20px; padding:20px; color:white;">
     
            
            <div class="cont">
  <table class="tb" style="border:none; border-radius:7px; font-size:18px;   width:100%;">
      <tr class="tr" >
          <th class="th" >Items</th>
          <th class="th">Price</th>
          <th class="th">Order Id</th>
          <th class="th">Order Date/Time</th>
          <th class="th">Address</th>
          <th class="th">Pin</th>
          <th class="th">Contact Number</th>
          <th class="th">Status</th>
      </tr>
      <?php
      if ($total!=0) {
       while($result=mysqli_fetch_assoc($data))
       {
        if($result['email']===$_SESSION['user_name']){   
          echo"
          <tr class='tr' >
          <td class='thh' >".$result['pro_name'].", ".$result['pro_name2'].", ".$result['pro_name3'].", ".$result['pro_name4'].", ".$result['pro_name5']."</td>
          <td class='thh' >".$result['Total_price']."</td>
          <td class='thh' >".$result['random']."</td>
          <td class='thh' >".$result['Date_time']."</td>
          <td class='thh'>".$result['address']."</td>
          <td class='thh'>".$result['pin']."</td>
           <td class='thh'>".$result['phone_number']."</td>
          <td class='thh'>".$result['status']."</td>
          </tr>
          ";
        }
       }
      }
      ?>
  </table>
  
 </div>

                    </h5>
</div>

<footer >
<p>&copy; 2023, Taste Burst. All rights reserved.</p>
</footer>
</body>
</html>