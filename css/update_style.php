<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    @import url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --background-color: linear-gradient(69.94deg,
          #362691 4.79%,
          #251a68 33.4%,
          #21175e 48.64%,
          rgba(33, 23, 94, 0.995163) 68.15%,
          rgba(54, 38, 145, 0.98) 101.77%);
    }

    body {
      overflow: hidden;
      font-family: "Poppins", sans-serif;
      background: var(--background-color);
      height: 100vh;
      width: 100vw;
    }

    .header {
      width: 100vw;
      height: 100px;
      /* background: red; */
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .header .title h1 {
      margin-left: 30px;
      color: white;
      font-style: normal;
      font-weight: 600;
      font-size: 35px;
    }

    .header .nav {
      margin-right: 30px;
    }

    .header .nav ul {
      display: flex;
    }

    .header .nav ul li {
      list-style: none;
    }

    .header .nav ul li a {
      text-decoration: none;
      /* color: white; */
      font-style: normal;
      font-weight: 500;
      font-size: 20px;
      line-height: 36px;
      margin-right: 45px;
    }

    .homeA {
      color: white;
    }

    .header .nav ul li a img {
      position: relative;
      top: 6px;
    }

    .header .nav ul li:nth-child(4) {
      margin-right: 80px;
    }

    .profile {
      position: absolute;
      right: 0;
      top: 13px;
      margin-right: 10px;
      height: 50px;
      width: 50px;
      cursor: pointer;
      /* margin-bottom: 10px; */
    }

    /* .homeA{
  color: #21175e;
  background: white;
  padding: 7px;
  border-radius: 10px;
} */

    .transactionA,
    .pricingA,
    .contactA {
      color: white;
    }

    .toolTip {
      position: absolute;
      background: rgba(255, 255, 255, 0.856);
      height: 130px;
      width: 195px;
      right: 410px;
      top: 85px;
      z-index: 5;
      border-radius: 7px;
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .toolTipShow {
      opacity: 1;
      pointer-events: all;
      transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .toolTip ul {
      height: 100%;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: stretch;
    }

    .toolTip ul li {
      list-style: none;
    }

    .toolTip ul li a {
      font-size: 14px;
      text-decoration: none;
      color: #21175e;
      font-weight: 500;
    }

    .back{
      margin-top: 50px;
    }

    .backImg {
      margin-left: 27px;
      height: 35px;
      width: 35px;
      cursor: pointer;
    }

    .mid {
      height: 80vh;
      width: 95%;
      margin: 0 auto;
      display: flex;
    }

    .left {
      height: 100%;
      width: 50%;
      /* background: red; */
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }

    form {
      height: 97%;
      margin-left: 60px;
      /* background: #21175e; */
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
    }

    form label {
      color: white;
      font-size: 25px;
    }

    .name,
    .email {
      display: flex;
      flex-direction: column;
    }

    input[type="text"] {
      background: rgba(217, 217, 217, 0.46);
      border-radius: 15px;
      border: none;
      height: 50px;
      padding-left: 10px;
      color: white;
      font-weight: 600;
      margin-top: 10px;
      outline: none;
    }

    input::placeholder{
      color: #fff;
      font-size: 12px;
    }

    button {
      background: rgba(255, 255, 255, 0.09);
      border: 1px solid #e1e1e1;
      box-sizing: border-box;
      border-radius: 128px;
      border: none;
      height: 40px;
      color: white;
      font-size: 18px;
      margin-top: 10px;
      cursor: pointer;
      border: 1px solid white;
    }

    .right {
      width: 50%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .right img {
      height: 500px;
      width: 500px;
    }
  </style>
</head>

<body>

</body>

</html>