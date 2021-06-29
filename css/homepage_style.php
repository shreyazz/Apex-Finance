<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

  @import url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;700&display=swap");
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  :root {
    --background-color: linear-gradient(
      69.94deg,
      #362691 4.79%,
      #251a68 33.4%,
      #21175e 48.64%,
      rgba(33, 23, 94, 0.995163) 68.15%,
      rgba(54, 38, 145, 0.98) 101.77%
    );
  }
  
  body {
    font-family: "Poppins", sans-serif;
    background: var(--background-color);
    height: 380vh;
    width: 100%;
    overflow-x: hidden;
    position: relative;
  }
  
  html {
    --scrollbarBG: #CFD8DC;
    --thumbBG: #90A4AE;
  }
  body::-webkit-scrollbar {
    width: 18px;
  }
  body {
    scrollbar-width: thin;
    scrollbar-color: var(--thumbBG) var(--scrollbarBG);
  }
  body::-webkit-scrollbar-track {
    background: var(--scrollbarBG);
  }
  body::-webkit-scrollbar-thumb {
    background-color: var(--thumbBG) ;
    border-radius: 6px;
    border: 3px solid var(--scrollbarBG);
  }
  
  .header {
    width: 100%;
    height: 100px;
    /* overflow-x: hidden; */
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
    margin-right: 80px;
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
    font-size: 15px;
    line-height: 36px;
    margin-right: 45px;
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
    right: 30px;
    top: 25px;
    margin-right: 10px;
    height: 50px;
    width: 50px;
    cursor: pointer;
    /* margin-bottom: 10px; */
  }

  .profile_head{
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    border: 1px solid #fff;
    padding: 5px 60px 5px 5px;
  }
  
  
  .transactionA,
  .pricingA,
  .contactA {
    color: white;
  }
  
  .arrow-down{
    font-size: 28px;
    font-weight: 500;
    transform: rotate(180deg);
    margin-left: 10px;
  }
  
  .active {
    color: #21175e;
    background: white;
    padding: 7px;
    border-radius: 10px;
  }
  
  .middle {
    margin: 40px auto 0 auto;
    /* background: red; */
    height: 76vh;
    width: 96.5vw;
    display: flex;
  }
  
  .left,
  .right {
    height: 100%;
    width: 50%;
  }
  
  .toolTip {
    position: absolute;
    background: rgba(255, 255, 255, 0.856);
    height: 130px;
    width: 195px;
    right: 350px;
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
  
  .middle .left h1 {
    width: 490px;
    font-size: 46px;
    color: white;
    margin-left: 55px;
    padding-top: 50px;
    font-weight: 600;
    font-style: normal;
    line-height: 80px;
    letter-spacing: 0.5px;
  }
  
  .middle .left .line {
    height: 3px;
    width: 480px;
    margin-left: 55px;
    background: linear-gradient(
      90deg,
      rgba(88, 72, 176, 0.98) 0%,
      #34268b 53.65%,
      #5848b0 100%
    );
    border-radius: 2px;
  }
  
  .middle .left .numbers {
    margin-top: 40px;
    display: flex;
    height: 100px;
    width: 480px;
    margin-left: 55px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .middle .left .numbers .leftNum,
  .midNum,
  .rightNum {
    height: 125px;
    width: 125px;
    background: rgba(206, 206, 206, 0.137);
    border-radius: 16px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-direction: column;
  }
  
  .middle .left .numbers .leftNum h2 {
    color: white;
    font-weight: 300;
    font-size: 32px;
  }
  
  .middle .left .numbers .leftNum p {
    font-size: 12px;
    text-align: center;
    color: white;
    font-weight: 200;
  }
  
  .middle .left .numbers .midNum h2 {
    color: white;
    font-weight: 300;
    font-size: 32px;
  }
  
  .middle .left .numbers .midNum p {
    font-size: 12px;
    text-align: center;
    color: white;
    font-weight: 200;
  }
  
  .middle .left .numbers .rightNum h2 {
    color: white;
    font-weight: 300;
    font-size: 32px;
  }
  
  .middle .left .numbers .rightNum p {
    font-size: 12px;
    text-align: center;
    color: white;
    font-weight: 200;
  }
  .buttonDiv {
    margin-left: 55px;
    margin-top: 45px;
    height: 52.5px;
    width: 163px;
    background: linear-gradient(
      90deg,
      #b000f8 0%,
      #f864ee 25.69%,
      #fc68c0 74.87%,
      #66008f 104.93%
    );
    border-radius: 26px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  }
  
  .buttonDiv button {
    height: 50px;
    width: 160px;
    border: none;
    border-radius: 26px;
    cursor: pointer;
    color: white;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: #362691;
    font-weight: 500;
  }
  
  .ribbon {
    z-index: -5;
    position: absolute;
    background: linear-gradient(
      180.69deg,
      #4e3399 10.95%,
      #f153b2 58.86%,
      #4e3399 99.4%
    );
  
    height: 100vh;
    width: 287px;
    top: 0;
    right: 240px;
  }
  
  .cards .shreyasCard,
  .anushCard,
  .sumeeCard {
    position: absolute;
    width: 416.23px;
    height: 233.23px;
    background: linear-gradient(
      101.96deg,
      rgba(249, 249, 249, 0.261) -0.52%,
      rgba(249, 249, 249, 0.0775668) 88.4%,
      rgba(249, 249, 249, 0.058) 100.25%
    );
    backdrop-filter: blur(10px);
    right: 200px;
    top: 430px;
    transform: rotate(-22deg);
    border-radius: 25px;
  }
  
  .anushCard {
    right: 230px;
    top: 280px;
    transform: rotate(-1deg);
  }
  
  .sumeeCard {
    right: 200px;
    top: 140px;
    transform: rotate(18deg);
  }
  
  .sumeeCirc {
    transform: rotate(-20deg);
    height: 65px;
    margin-right: 14px;
  }
  
  .topCard {
    height: 40px;
    width: 100%;
    /* background: red; */
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .name {
    /* background: red; */
    margin-left: 20px;
    display: flex;
    flex-direction: column;
  }
  
  .name p {
    background: linear-gradient(150deg, rgb(255, 255, 255), rgb(167, 167, 167));
    background-size: 100%;
    font-size: 14px;
    -webkit-background-clip: text;
    color: transparent;
    font-weight: 400;
  }
  
  .name p:nth-child(2) {
    font-size: 18px;
    font-weight: 700;
  }
  
  .midCard {
    font-family: "Roboto Mono", monospace;
    margin-top: 60px;
    margin-left: 20px;
    font-size: 20px;
    color: white;
    font-weight: 700;
    background: linear-gradient(to right, rgb(255, 255, 255), rgb(104, 104, 104));
    background-size: 100%;
    -webkit-background-clip: text;
    color: transparent;
  }
  
  .shreyasCirc {
    height: 52px;
    margin-right: 20px;
    transform: rotate(21deg);
  }
  
  .bottomCard {
    margin-top: 20px;
    height: 60px;
    width: 100%;
    /* background: red; */
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .bottomCard .expiry,
  .cvv p {
    font-size: 14px;
    color: white;
  }
  .bottomCard .expiry,
  .cvv p:nth-child(2) {
    font-size: 16px;
    font-family: "Roboto Mono", monospace;
    font-weight: 500;
  }
  
  .bottomCard .expiry {
    margin-left: 20px;
    background: linear-gradient(to right, rgb(255, 255, 255), rgb(190, 190, 190));
    background-size: 100%;
    -webkit-background-clip: text;
    color: transparent;
  }
  
  .bottomCard .cvv p {
    margin-right: 20px;
    text-align: center;
    background: linear-gradient(to right, rgb(255, 255, 255), rgb(190, 190, 190));
    background-size: 100%;
    -webkit-background-clip: text;
    color: transparent;
  }
  
  .anushCirc {
    height: 65px;
    margin-right: 15px;
    transform: rotate(1deg);
  }
  
  .company-bar{
    width: 100%;
    display: flex;
    justify-content: center;
  }
  
  .company-list{
    margin-top: 40px;
    width: 90%;
    height: 150px;
    background: #D2BBEF;
    border-radius: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .company-list h3{
    font-size: 35px;
  }
  
  .home2-header-container{
    width: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    margin-top: 100px;
  }
  
  .home2-header-container .home2-header{
    width: 720px;
    font-size: 35px;
    font-weight: 800;
    color: #fff;
    text-align: center;
  }
  
  .home2-header-container .home2-sub-header{
    width: 730px;
    font-size: 14px;
    font-weight: 500;
    color: #969696;
    text-align: center;
    margin-top: 10px;
  }
  
  .svg{
    position: absolute;
  }
  
  .el1{
    right: 0;
    margin-top: -120px;
  }
  
  .el2{
    left: 410px;
    margin-top: 220px;
  }
  
  .el3{
    left: 170px;
    margin-top: -150px;
  }
  
  .el4{
    margin-top: 150px;
    left: 700px;
  }
  
  .el5{
    margin-top: 400px;
  }
  
  .pl1{
    left: 200px;
  }
  
  .pl2{
    margin-top: 200px;
    left: 200px;
  }
  
  .pl3{
    left: 1100px;
    transform: rotate(-90deg);
    margin-top: 200px;
  }
  
  .pl4{
    margin-top: 450px;
    right: 200px;
  }
  
  .pl5{
    width: 50px;
    right: 250px;
    margin-top: -100px;
    transform: rotate(-45deg);
  }
  
  .home2-card-row{
    width: 100%;
    height: 500px;
    /* background: red; */
    margin-top: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .first-card{
    width: 350px;
    height: 300px;
        background: linear-gradient( 
  101.96deg
  , rgba(249, 249, 249, 0.261) -0.52%, rgba(249, 249, 249, 0.0775668) 88.4%, rgba(249, 249, 249, 0.058) 100.25% );
      backdrop-filter: blur(10px);
    margin-right: 70px;
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .second-card{
    width: 350px;
    height: 300px;
        background: linear-gradient( 
  101.96deg
  , rgba(249, 249, 249, 0.261) -0.52%, rgba(249, 249, 249, 0.0775668) 88.4%, rgba(249, 249, 249, 0.058) 100.25% );
      backdrop-filter: blur(10px);
    margin-right: 70px;
    border-radius: 20px;
    margin-bottom: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .third-card{
    width: 350px;
    height: 300px;
        background: linear-gradient( 
  101.96deg
  , rgba(249, 249, 249, 0.261) -0.52%, rgba(249, 249, 249, 0.0775668) 88.4%, rgba(249, 249, 249, 0.058) 100.25% );
      backdrop-filter: blur(10px);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .common-h2{
    color: #fff;
  }
  
  .homepage3{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .home3-left{
    margin-top: 120px;
    margin-left: 100px;
    position: relative;
  }
  
  .home3-right{
    margin-left: 60px;
  }
  
  .home3-header{
    width: 700px;
    font-size: 35px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 100px;
  }
  
  .home3-sub-header, .home3-sub-header-2{
    width: 600px;
    color: #949494;
    font-size: 15px;
    font-family: Poppins;
    font-style: normal;
    font-weight: bold;
    line-height: 30px;
    font-weight: 600;
  }
  
  .home3-sub-header-2{
    margin-top: 30px;
  }
  
  .third-page, .second, .third, .four{
    width: 290px;
    height: 245px;
    position: absolute;
    top: 40px;
    left: 50px;
  }
  
  .second{
    left: 370px;
  }
  
  .third, .four{
    top: 320px;
  }
  
  .four{
    left: 370px;
  }
  
  .third-page{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  
  .cards-discription{
    color: #fff;
    font-size: 20px;
    font-weight: 700;
  }
  
  .cards-discription-2{
    font-size: 13px;
    font-weight: 600;
    color: #fff;
    width: 170px;
    text-align: center;
    margin-top: 30px;
  }
  
  .s, .t{
    width: 200px;
  }
  
  :root{
    --White: hsl(0, 0%, 100%);
    --Grayish-blue: hsl(240, 2%, 79%);
    --Very-dark-grayish-blue: hsl(207, 13%, 34%);
    --Very-dark-black-blue: hsl(240, 10%, 16%);
  }
  
  .footer{
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 45vh;
    background: #7b2bddd8;
    border-top-right-radius: 100px;
  }
  
  .footer-logo{
    position: absolute;
    top: 60px;
    left: 100px;
    color: #fff;
    font-weight: 800;
    font-size: 35px;
    cursor: pointer;
  }
  
  .item{
    color: #fff;
    font-size: 13px;
    /* font-family: 'Ubuntu', sans-serif; */
    font-weight: 500;
    cursor: pointer;
  }
  
  .ite{
    color: var(--Grayish-blue);
    font-size: 12px;
    font-weight: 200;
    cursor: pointer;
  }
  
  .flex-row{
    position: absolute;
    top: 80px;
    left: 450px;
    width: 50%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
  }
  
  .row{
    margin-top: 30px;
    line-height: 30px;
  }
  
  .second-row{
    margin-top: -29px;
  }
  
  .third-row{
    margin-top: -59px;
  }
  
  .common{
    width: 50px;
    height: 50px;
    background-color: var(--Very-dark-grayish-blue);
    position: absolute;
    right: 400px;
    bottom: 20px;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .facebook{
    position: absolute;
    right: 310px;
    bottom: 25px;
  }
  
  .facebook img{
    width: 35px;
    height: 35px;
  }
  
  .twitter img{
    width: 35px;
    height: 35px;
  }
  
  .instagram img{
    width: 35px;
    height: 35px;
  }
  
  .twitter{
    position: absolute;
    right: 210px;
    bottom: 25px;
  }
  
  .instagram{
    position: absolute;
    right: 110px;
    bottom: 25px;
  }
  </style>
  </head>
</html>

