<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Order form</title>
  <style>
    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;700&family=Dancing+Script:wght@400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Alegreya', serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./images/background.png');
    }

    .container {
      position: relative;
      max-width: 700px;
      width: 100%;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .container header {
      font-size: 1.5rem;
      color: #333;
      font-weight: 500;
      text-align: center;
    }

    .container .form {
      margin-top: 30px;
    }

    h3 {
      position: relative;
      font-size: 20px;
      font-weight: 600;
      color: #333;
    }

    h3::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: -2px;
      height: 3px;
      width: 27px;
      border-radius: 8px;
      background-color: rgb(255, 174, 0);
    }

    .input-box input:valid {
      border-color: rgb(255, 174, 0);
    }

    .container header {
      font-size: 35px;
      font-weight: 600;
      text-align: center;
      line-height: 90px;
      color: #fff;
      user-select: none;
      border-radius: 15px 15px 0 0;
      background: rgb(255, 174, 0);
    }

    .form .input-box {
      width: 100%;
      margin-top: 15px;
    }

    .input-box label {
      color: #333;
    }

    .form :where(.input-box input, .select-box) {
      position: relative;
      height: 50px;
      width: 100%;
      outline: none;
      font-size: 1rem;
      color: #707070;
      margin-top: 5px;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0 15px;
    }

    .input-box input:focus {
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .form .column {
      display: flex;
      column-gap: 20px;
    }

    .form .gender-box {
      margin-top: 20px;
    }

    .gender-box h3 {
      color: #333;
      font-size: 1rem;
      font-weight: 400;
      margin-bottom: 8px;
    }

    .form :where(.gender-option, .gender) {
      display: flex;
      align-items: center;
      column-gap: 50px;
      flex-wrap: wrap;
    }

    .form .gender {
      column-gap: 5px;
    }

    .gender input {
      accent-color: rgb(255, 174, 0);
    }

    .form :where(.gender input, .gender label) {
      cursor: pointer;
    }

    .gender label {
      color: #707070;
    }

    .address :where(input, .select-box) {
      margin-top: 15px;
    }

    .select-box select {
      height: 100%;
      width: 100%;
      outline: none;
      border: none;
      color: #707070;
      font-size: 1rem;
    }

    .form input[type="submit"] {
      height: 55px;
      width: 100%;
      color: #fff;
      font-size: 1rem;
      font-weight: 400;
      margin-top: 30px;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease;
      background: rgb(255, 174, 0);
    }

    .form button:hover {
      background: rgb(174, 148, 0);
    }

    @media screen and (max-width: 500px) {
      .form .column {
        flex-wrap: wrap;
      }

      .form :where(.gender-option, .gender) {
        row-gap: 15px;
      }
    }
  </style>
</head>

<body>
  <section class="container">
    <header>Order Details</header>

    <!-- form -->
    <form method="post" class="form">
      <h3>Personal Details</h3>
      <div class="column">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="name" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Another Email Address</label>
          <input type="text" id="name" name="email" placeholder="Enter email address" required />
        </div>
      </div>
      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="number" id="phone" name="phno" placeholder="Enter phone number" required />
        </div>
        
      </div>

      <div class="input-box address">
        <h3>Delivery Address</h3>
        <div class="column">
          <input type="text" placeholder="Address" name="address" id="address" required />
          <input type="text" placeholder="City" name="city" id="city" required />
          <input type="number" id="contact" name="pin" placeholder="Enter Your Pin Code" required>

        </div>
        <div class="column">
          <input type="text" placeholder="Local land mark" name="land" id="landmark" required />

          <div class="select-box" id="state">
            <select name="state">
              <option hidden>State</option>

              <option>Andhra Pradesh</option>
              <option>Arunachal Pradesh</option>
              <option>Assam</option>
              <option>Bihar</option>
              <option>Chhattisgarh</option>
              <option>Goa</option>
              <option>Gujarat</option>
              <option>Haryana</option>
              <option>Himachal Pradesh</option>
              <option>Jharkhand</option>
              <option>Karnataka</option>
              <option>Kerala</option>
              <option>Madhya Pradesh</option>
              <option>Maharashtra</option>
              <option>Manipur</option>
              <option>Meghalaya</option>
              <option>Mizoram</option>
              <option>Nagaland</option>
              <option>Odisha</option>
              <option>Punjab</option>
              <option>Rajasthan</option>
              <option>Sikkim</option>
              <option>Tamil Nadu</option>
              <option>Telangana</option>
              <option>Tripura</option>
              <option>Uttarakhand</option>
              <option>Uttar Pradesh</option>
              <option>West Bengal</option>

            </select>
          </div>
        </div>
      </div>
      <br>
      

      <div for="terms">
        <input type="checkbox" id="cash" name="terms">
        Cash on delivery
      </div>

      <div for="terms">
        <input type="checkbox" id="conditions" name="terms" required>
        I agree to the terms and conditions
      </div>
  

      <a href="../Dishes/Dishes.php" ><input type="submit" name="su" id="su" onclick="showSuccessPrompt();" value="Submit"></a>   
     <?php
     
     if(isset($_SESSION['s'])){
      foreach($_SESSION['s'] as  $value){
       echo" <input type='' value='$value[productPrice]'name='gPrice'>";
      }
    }
    // 1_items-------------------------------------
        if(isset($_SESSION['s'])){
          foreach($_SESSION['cart'] as  $value){
            $newpro[]=$value['productName'];
      echo "<input type='' value='$newpro[0]' name='pName'> ";
          }}
      if(isset($_SESSION['s'])){
        foreach($_SESSION['cart'] as  $value){
          $newprice[]=$value['productPrice'];
    echo "<input type='' value='₹$newprice[0]'name='pPrice'>";
        }}
         //2_items-------------------------------------
         if(isset($_SESSION['s'])){
          foreach($_SESSION['cart'] as  $value){
            $newpro[]=$value['productName'];
      echo "<input type='' value='$newpro[1]' name='pName1'> ";
          }}
      if(isset($_SESSION['s'])){
        foreach($_SESSION['cart'] as  $value){
          $newprice[]=$value['productPrice'];
    echo "<input type='' value='₹$newprice[1]'name='pPrice1'>";
        }}
      // 3_items-------------------------------------
           if(isset($_SESSION['s'])){
            foreach($_SESSION['s'] as  $value){
              $newpro[]=$value['productName'];
        echo "<input type='' value='$newpro[2]' name='pName2'> ";
            }}
        if(isset($_SESSION['s'])){
          foreach($_SESSION['cart'] as  $value){
            $newprice[]=$value['productPrice'];
      echo "<input type='' value='₹$newprice[2]'name='pPrice2'>";
          }}
         // 4_items-------------------------------------
         if(isset($_SESSION['s'])){
          foreach($_SESSION['s'] as  $value){
            $newpro[]=$value['productName'];
      echo "<input type='' value='$newpro[3]' name='pName3'> ";
          }}
      if(isset($_SESSION['s'])){
        foreach($_SESSION['cart'] as  $value){
          $newprice[]=$value['productPrice'];
    echo "<input type='' value='₹$newprice[3]'name='pPrice3'>";
        }}

    //    // 5_items-------------------------------------
    //            if(isset($_SESSION['s'])){
    //             foreach($_SESSION['s'] as  $value){
    //               $newpro[]=$value['productName'];
    //         echo "<input type='' value='$newpro[4]' name='pName4'> ";
    //             }}
    //         if(isset($_SESSION['s'])){
    //           foreach($_SESSION['cart'] as  $value){
    //             $newprice[]=$value['productPrice'];
    //       echo "<input type='' value='₹$newprice[4]'name='pPrice4'>";
    //           }}
     ?>
    </form>
  </section>

  <?php
  
  if (isset($_POST['su'])) {
    $name = $_POST['name'];
    $email = $_SESSION['user_name'];
    $Al_email = $_POST['email'];
    $phno = $_POST['phno'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $land = $_POST['land'];
    $state = $_POST['state'];
    $grndPrice = $_POST['gPrice'];
    $proName = $_POST['pName'];
    $proPrice = $_POST['pPrice'];
    $proName1 = $_POST['pName1'];
    $proPrice1 = $_POST['pPrice1'];
    $proName2 = $_POST['pName2'];
    $proPrice2 = $_POST['pPrice2'];
    $proName3 = $_POST['pName3'];
    $proPrice3 = $_POST['pPrice3'];
    $proName4 = $_POST['pName4'];
    $proPrice4 = $_POST['pPrice4'];
    $ran = rand(1008,2500);
    $c = date('d/m/y H:i:s A');
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "project";
    $conn = mysqli_connect($servername, $username, $password, $database);
     
    // $i1="select id from order_details by id desc limit 1";
    // $r1 = $conn->query($i1);
    // $row1 = $r1->fetch_assoc();
    // $oldid = $row1["id"];
    // $newid = $oldid + 1;

    $instr = "insert into order_details(`name`,`email`,`another_email`,`phone_number`,`address`,`city`,`pin`,`land`,`state`,`pro_name`,`pro_price`,`pro_name2`,`pro_price2`,`pro_name3`,`pro_price3`,`pro_name4`,`pro_price4`,`pro_name5`,`pro_price5`,`Total_price`,`random`,`Date_time`) values('$name','$email','$Al_email','$phno','$address','$city','$pin','$land','$state','$proName','$proPrice','$proName1','$proPrice1','$proName2','$proPrice2','$proName3','$proPrice3','$proName4','$proPrice4','$grndPrice','$ran','$c')";
    mysqli_query($conn, $instr);
    unset($_SESSION['cart']);
    echo "<script>
    window.location.href = '../Dishes/Dishes.php';
    </script>";
    
// $servername = "localhost:3306";
// $username = "root";
// $password = "";
// $database = "project";
// $conn = mysqli_connect($servername,$username,$password,$database);
$query = "SELECT * FROM order_details ORDER BY newid DESC";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
// $conn->query($query);
$id = mysqli_insert_id($conn);

//  $conn->close();                  
                    
// if( $conn > 1){
    // $last_id = $conn->insert_id;
   
// }

    exit();
  }else{
    unset($_SESSION['s']);
  }
  ?>
<script>
    function showSuccessPrompt() {
      alert('Booking is successful! Thank you for your order.');
      
      }
      // $sql1 = "SELECT * FROM orders ";
      //                   $result1 = $conn->query($sql1);
                        
      //                   // Populate the HTML table
      //                   if ($result1->num_rows > 0) {
      //                       while($row1 = $result1->fetch_assoc()) {
      //                         echo"$row1['id']";
      //                       }

      //                       }
   
</script>
</body>

</html>
<?php
// unset($_SESSION['s']);
// session_destroy();
?>