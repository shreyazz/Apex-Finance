<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatibple" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Internation Transaction</title>
  <link rel="stylesheet" href="./css/international.css">
  <?php include './css/receiverCSS.php'  ?>
</head>

<body>
  <section>
    <div class="toolTip">
      <ul>
        <li><a href="#">Deposit Amount</a></li>
        <li><a href="#">Withdraw Amount</a></li>
        <li><a href="#">International Payments</a></li>
      </ul>
    </div>
    <div class="header">
      <div class="title">
        <h1><a href="dashboard.php"><</a></h1>
      </div>
      
    </div>
    <div class="mid">
      <form method="POST" class="left">
        <h1 class="title">Reciever's Details</h1>
        <input type="number" name="accnt" id="accnt" placeholder="Account Number of Receiver">
        <input type="text" name="money" id="name" placeholder="Amount">
        <input type="password" name="pin" id="name" placeholder="Pin">
        <label for=""></label>
        <button type="submit" name="pay">Pay Now! <img src="./images/pay.png" alt=""></button>
      </form>
      <div class="right">
        <img src="./images/inter.png" alt="" class="rightImg">
      </div>
    </div>
    <div class="bottom"></div>
  </section>
  <script defer src="./js/international.js"></script>
</body>

</html>


<?php

include './server/connection.php';


if (isset($_POST['pay'])) {
  $acc = mysqli_real_escape_string($con, $_POST['accnt']);
  $pass = mysqli_real_escape_string($con, $_POST['pin']);
  $userInp = mysqli_real_escape_string($con, $_POST['money']);
  $id = $_SESSION['id'];
  $passDB = "select pin from data where id = $id ";
  $passDBquery = mysqli_query($con, $passDB);
  $passGot = mysqli_fetch_array($passDBquery);
  if ($passGot[0] == $pass) {
    $sendMoney = "select blc from data where id = $id";
    $sendMoney2 = "select blc from data where acc = $acc";
    $sendMoneyQuery = mysqli_query($con, $sendMoney);
    $sendMoneyQuery2 = mysqli_query($con, $sendMoney2);
    $result = mysqli_fetch_array($sendMoneyQuery);
    $result2 = mysqli_fetch_array($sendMoneyQuery2);
    $resNew = $result[0];
    $total = $result2[0] + $userInp;
    $minus = $resNew - $userInp;
    $updateRec = "update data set blc=$total where acc = $acc";
    $updateSend = "update data set blc=$minus where id = $id";
    $upRecquery = mysqli_query($con, $updateRec);
    $upSendquery = mysqli_query($con, $updateSend);
    ?>
      <script>
        location.replace("receiverS.php");
      </script>
    <?php
  } else {
      ?>
          <script>
            alert('Wrong Pin');
          </script>
      <?php
    }
  }
?>