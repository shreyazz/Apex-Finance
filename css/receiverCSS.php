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
  font-weight: 200;
  font-size: 35px;
  cursor: pointer;
}

a{
  color: #fff;
  text-decoration: none;
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

.backImg {
  margin-top: 50px;
  margin-left: 27px;
  height: 35px;
  width: 35px;
  cursor: pointer;
}

.mid {
  height: 65vh;
  width: 90%;
  margin: 20px auto 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
}

.left {
  height: 100%;
  width: 60%;
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
  flex-direction: column;
  margin-top: 10px;
  margin-left: 90px;
}

input,
button {
  margin-top: 45px;
}

input {
  width: 390px;
  outline: none;
  padding: 21px 0px;
  padding-left: 20px;
  background: rgba(217, 217, 217, 0.46);
  border-radius: 15px;
  color: white;
  font-weight: 600;
  border: none;
  font-size: 16px;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input::placeholder {
  color: white;
  font-weight: 600;
  font-size: 16px;
}

button {
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  background: rgba(255, 255, 255, 0.09);
  border: 1px solid #e1e1e1;
  box-sizing: border-box;
  border-radius: 128px;
  color: white;
  padding: 10px 25px;
  font-weight: 600;
  font-size: 18px;
}

button img {
  margin-left: 20px;
}

h1 {
  color: white;
  font-weight: 500;
  font-size: 45px;
}

.right {
  height: 100%;
  width: 40%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.rightImg {
  margin-bottom: 80px;
  margin-left: 40px;
}

.bottom{
  position: absolute;
  bottom: 0;
  left: 0;
  height: 10px;
  width: 100%;
  background: linear-gradient(45.69deg, #4E3399 10.95%, #F153B2 58.86%, #4E3399 99.4%) no-repeat;

}


  </style>

</head>
<body>
  
</body>
</html>


