<html>
  <head>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");

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
  min-height: 100vh;
  min-width: 100vw;
}

.title {
  color: white;
  font-size: 36px;
  text-align: center;
  margin-top: 90px;
  letter-spacing: 0.015em;
}

.tri1 {
  position: absolute;
  left: 155px;
  top: 55px;
}

.tri2 {
  position: absolute;
  left: 47%;
  top: 185px;
  transform: rotate(50deg);
}
.tri3 {
  position: absolute;
  right: 5%;
  top: 42px;
}

.bubble {
  position: absolute;
}

.bubble1 {
  left: 80.25px;
  top: 193.05px;
  transform: rotate(-250deg);
}

.bubble2 {
  left: 413px;
  top: 88px;
}

.bubble3 {
  left: 911px;
  top: 168px;
}

.bubble4 {
  left: 1149px;
  top: 65px;
}

.bubble5 {
  left: 1410px;
  bottom: 170px;
}

.bubble6 {
  left: 454px;
  bottom: 100px;
}

.bubble7 {
  left: 250px;
  top: 475px;
}

.bubble8 {
  left: 810px;
  top: 415px;
}

.bubble9 {
  left: 1010px;
  bottom: 10px;
  transform: rotate(-160deg);
}

.circle {
  position: absolute;
  left: 345px;
  top: 185px;
  height: 130px;
}

.circle1 {
  position: absolute;
  height: 180px;
  bottom: 50px;
  right: 460px;
}

.circle2 {
  position: absolute;
  right: 60px;
  bottom: 350px;
}

.cards {
  margin: 80px auto 0 auto;
  /* background: red; */
  height: 70vh;
  width: 95%;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
}

.basicCard,.premCard {
  padding-top: 20px;
  cursor: pointer;
  width: 399px;
  height: 88%;
  border-radius: 20px;
  background: linear-gradient(
    101.96deg,
    rgba(249, 249, 249, 0.377) -0.52%,
    rgba(249, 249, 249, 0.0775668) 88.4%,
    rgba(249, 249, 249, 0.058) 100.25%
  );
  backdrop-filter: blur(6px);
}

.basicCard:nth-child(2){
  height: 100%;
  margin-bottom: 65px;
}

.basicCard-header {
  /* background: red; */
  position: relative;
  font-family: "Poppins", sans-serif;
  width: 100%;
  height: 180px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  color: white;
}

span {
  font-size: 70px;
}

.plan{
  font-size: 39px;
  font-weight: 500;
  margin-bottom: 30px;
}

.line {
  width: 358.55px;
  height: 1.2px;
  background: rgba(254, 254, 254, 0.19);
  border-radius: 1px;
  margin: 0 auto;
}

.basicCard-bottom{
  margin: 0 auto;
  margin-top: 20px;
  height: 60%;
  width: 90%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  /* background: red; */
}

.basicCard-bottom ul li {

  margin-bottom: 30px;
  color: white;
  font-size: 20px;
  list-style: none;
}

.basicCard-bottom ul li img{
  margin-bottom: -7px;
  margin-right: 10px;
}

button{
  display: none;
  border: 1px solid white;
  background: rgba(255, 255, 255, 0.144);
  width: 120px;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
  font-weight: 700;
  border-radius: 20px;
  font-family: 'Poppins', sans-serif;
  cursor: pointer;
}

#cut{
  text-decoration: line-through;
  color: #afafafe0;
}

.discount{
  position: absolute;
  padding: 8px 6px;
  border-radius: 12px;
  background: #BAF9AB;
  display: flex;
  justify-content: center;
  align-items: center;
  right: 10px;
  top: 10px;
}

.back{
  position: absolute;
  top: 20px;
  left: 20px;
  cursor: pointer;
}

.back a{
  text-decoration: none;
}

.back img{
  height: 35px;
}
    </style>
  </head>
</html>