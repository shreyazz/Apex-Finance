<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            background: linear-gradient(69.94deg, #362691 4.79%, #251A68 33.4%, #21175E 48.64%, rgba(33, 23, 94, 0.995163) 68.15%, rgba(54, 38, 145, 0.98) 101.77%);
            ;
        }

        a{
            text-decoration: none;
            color: #fff;
        }

        .bottom {
            width: 100%;
            height: 10px;
            background: linear-gradient(180.69deg, #4E3399 10.95%, #F153B2 58.86%, #4E3399 99.4%);
            position: absolute;
            bottom: 0;
            opacity: 0.7;
        }

        .balance {
            width: 600px;
            display: flex;
            color: #fff;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            bottom: 100px;
            left: 40px;
        }

        .balance h1:nth-child(2) {
            font-size: 60px;
        }

        .welcome {
            color: #fff;
            font-size: 25px;
            position: absolute;
            bottom: 300px;
            left: 40px;
        }

        .logout {
            font-size: 25px;
            font-weight: 600;
            color: #fff;
            position: absolute;
            right: 30px;
            top: 30px;
            cursor: pointer;
        }

        .nav-bar {
            width: 70%;
            height: 100px;
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 100px;
            left: 50%;
            transform: translateX(-50%);
        }

        .nav-bar img {
            width: 60px;
            height: 60px;
            cursor: pointer;
        }

        .nav-title {
            width: 70%;
            height: 100px;
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 200px;
            left: 50%;
            transform: translateX(-55%);
            font-size: 20px;
            font-weight: 600;
            color: #fff;
        }

        .nav-title .title {
            cursor: pointer;
            color: #fff;
        }

        .nav-title .title:nth-child(2) {
            position: relative;
            right: 45px;
        }


        .nav-title .title:nth-child(3) {
            margin-left: -60px;
        }

        .nav-title .title:nth-child(4) {
            margin-right: -70px;
        }
    </style>
</head>

<body>

</body>

</html>