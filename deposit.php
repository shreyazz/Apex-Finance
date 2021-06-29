<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Page</title>
    <?php include './css/deposit_style.php' ?>
</head>
<body>
    <div class="container">
        <div class="back"><img src="./images/chevron-left 1.png" alt=""></div>
        <div class="svg"><img src="./images/undraw_transfer_money_rywa 1inter.png" alt=""></div>
        <div class="flex-box">
            <p class="deposit_heading">Deposit Money</p>
            <form action="" method="post">
                <input type="text" name="amt" id="deposit_amt" placeholder="Amount"><br>
                <input type="password" name="pin" id="deposit_amt" placeholder="Pin"><br>
                <input type="checkbox" name="check" id="check"> <p class="checkbox">Agree all terms and conditions</p>
                <input type="submit" value="Procced" id="btn" name="btn">
            </form>
        </div>
    </div>
</body>
</html>

<?php
    include './server/connection.php';
    if (isset($_POST['btn'])) {
        $amt = mysqli_real_escape_string($con,$_POST['amt']);
        $pass = mysqli_real_escape_string($con,$_POST['pin']);
        $id = mysqli_real_escape_string($con,$_SESSION['id']);
        $passDB = "select pin from data where id = $id ";
        $passDBquery = mysqli_query($con, $passDB);
        $passGot = mysqli_fetch_array($passDBquery);
        if ($passGot[0] == $pass) {
            $query = "select blc from data where id = $id";
            $sendQuery = mysqli_query($con, $query);
            $res = mysqli_fetch_array($sendQuery);
            $now = $res[0];
            $total = $res[0] + $amt;
            $updateQuery = "update data set blc = $total where id = $id";
            $newRes = mysqli_query($con, $updateQuery);
            ?>
            <script>
                location.replace("depositS.php");
            </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Wrong Pin');
                </script>
            <?php
        }
    }
?>