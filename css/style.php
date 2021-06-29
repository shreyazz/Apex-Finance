<!DOCTYPE html>
<html lang="en">
  <head>
   <style>
   @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

   * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
   }
   
   body,
   input {
     font-family: "Poppins", sans-serif;
   }
   
   
   :root{
       --backgroundColor: linear-gradient(
         69.94deg,
         #362691 4.79%,
         #251a68 33.4%,
         #21175e 48.64%,
         rgba(33, 23, 94, 0.995163) 68.15%,
         rgba(54, 38, 145, 0.98) 101.77%
       );
       --buttonColor: #6ddccf;
       --accentColor: #28527a;
       --textColor : black;
     }
   
   .container {
     position: relative;
     width: 100%;
     background: var(--backgroundColor);
     min-height: 100vh;
     overflow: hidden;
   }
   
   .logo{
     position: absolute;
     top: 25px;
     left: 35px;
     font-size: 40px;
     font-weight: 900;
     color: #fff;
   }
   
   .logo-2{
     position: absolute;
     top: 25px;
     right: 35px;
     font-size: 40px;
     font-weight: 900;
     color: #fff;
   }
   
   .terms{
     margin: 5px 0px 5px 0px;
     font-size: 9.5px;
     font-weight: 800;
     color: #fff;
   }
   
   .forgot{
     font-size: 12px;
     font-weight: 600;
     color: #fff;
     cursor: pointer;
     margin-left: 240px;
   }
   
   .forgot:hover{
     text-decoration: underline;
   }
   
   .sub{
     margin-left: 0.5px;
     color: #7fbc65;
     cursor: pointer;
   }
   
   .error{
     width: 28px;
     position: relative;
     bottom: 40px;
     left: 330px;
     display: block;
     cursor: pointer;
   }
   
   .forms-container {
     position: absolute;
     width: 100%;
     height: 100%;
     top: 0;
     left: 0;
   }
   
   .signin-signup {
     position: absolute;
     top: 50%;
     transform: translate(-50%, -50%);
     left: 75%;
     width: 50%;
     transition: 1s 0.7s ease-in-out;
     display: grid;
     grid-template-columns: 1fr;
     z-index: 5;
   }
   
   form {
     display: flex;
     align-items: center;
     justify-content: center;
     flex-direction: column;
     padding: 0rem 5rem;
     transition: all 0.2s 0.7s;
     overflow: hidden;
     grid-column: 1 / 2;
     grid-row: 1 / 2;
   }
   
   form.sign-up-form {
     opacity: 0;
     z-index: 1;
     /* margin-top: 10px; */
     width: 110%;
     height: 110%;
   }
   
   form.sign-in-form {
     z-index: 2;
     margin-top: 50px;
   
   }
   
   .emailSignUpToolTip{
     height: 40px;
     width: 185px;
     background: rgba(255, 255, 255, 0.123);
     position: relative;
     left: 325px;
     bottom: 48px;
     border-radius: 50px;
     display: none;
     transition: all 0.5s ease;
   }
   
   .emailSignUpToolTipShow{
     display: block;
     transition: all 0.5s ease;
   }
   
   .toolTipText{
     text-align: center;
     margin-top: 12px;
     font-size: 11px;
     color: rgb(163, 163, 163);
   }
   
   .title {
     font-size: 2.2rem;
     color: #fff;
     margin-bottom: 10px;
   }
   
   .input-field {
     max-width: 380px;
     width: 100%;
     background-color: #f0f0f0;
     margin: 10px 0;
     height: 55px;
     border-radius: 55px;
     display: grid;
     grid-template-columns: 15% 85%;
     padding: 0 0.4rem;
     position: relative;
   }
   
   .input-field i {
     text-align: center;
     line-height: 55px;
     color: #acacac;
     transition: 0.5s;
     font-size: 1.1rem;
   }
   
   .input-field input {
     background: none;
     outline: none;
     border: none;
     line-height: 1;
     font-weight: 600;
     font-size: 1.1rem;
     color: #333;
   }
   
   .input-field input::placeholder {
     color: #aaa;
     font-weight: 500;
   }
   
   .firstNameSignUp{
     padding-left: 10px;
   }
   
   .lastNameSignUp{
     padding-left: 10px;
   }
   
   
   .passSignUpToolTip{
     height: 110%;
     width: 210px;
     background: rgba(255, 255, 255, 0.123);
     position: relative;
     left: 325px;
     /* bottom: 48px; */
     border-radius: 10px;
     display: none;
     transition: all 0.5s ease;
   }
   .passSignUpToolTipShow{
     display: block;
     transition: all 0.5s ease;
   }
   
   .passSignUpToolTip ul{
     margin-left: 25px;
     margin-top: 10px;
     font-size: 13px;
     font-weight: 600;
     color: rgb(163, 163, 163);
   }
   
   .green{
     color: rgb(89, 218, 89);
   }
   
   
   .red{
     color: rgb(226, 61, 61);
   }
   
   .name{
     display: flex;
     flex-direction: row;
     gap: 10px;
     margin-left: 190px;
   }
   
   .nameDiv{
     width: 32.5%;
   }
   
   .nameDiv i{
     padding-left: 10px;
   }
   
   .social-text {
   color: #fff;
     padding: 0.7rem 0;
     font-size: 1rem;
   }
   
   .social-media {
     display: flex;
     justify-content: center;
   }
   
   .social-icon {
     height: 46px;
     width: 46px;
     display: flex;
     justify-content: center;
     align-items: center;
     margin: 0 0.45rem;
     color: rgb(148, 148, 148);
     border-radius: 50%;
     border: 1.5px solid rgb(148, 148, 148);
     text-decoration: none;
     font-size: 1.1rem;
     transition: 0.3s;
   }
   
   .social-icon:hover {
     color: #ffffff;
     border-color: #ffffff;
   }
   
   .btn, .btn-1 {
     width: 150px;
     background-color: #385EE7;
     border: none;
     outline: none;
     height: 49px;
     border-radius: 49px;
     color: #fff;
     text-transform: uppercase;
     font-size: 15px;
     font-weight: 600;
     margin: 10px 0;
     cursor: pointer;
     transition: 0.5s;
   }
   
   .btn:hover {
     background-color: #fff;
     color: #332592;
     box-shadow: 5px 5px #5e51b4;
   }
   .btn.solid:active{
     transform: translateY(10px);
   }
   
   .btn:active{
     transform: translateY(10px);
   }
   
   .panels-container {
     position: absolute;
     height: 100%;
     width: 100%;
     top: 0;
     left: 0;
     display: grid;
     grid-template-columns: repeat(2, 1fr);
   }
   
   .container:before {
     content: "";
     position: absolute;
     height: 2000px;
     width: 2000px;
     top: -10%;
     right: 48%;
     transform: translateY(-50%);
     background:  linear-gradient(
         120.94deg,
         #2c17a1 4.79%,
         #4938bb 33.4%,
         #4535aa 48.64%,
         rgba(73, 58, 173, 0.995) 68.15%,
         rgba(43, 30, 126, 0.98) 101.77%
       );
   
     transition: 1.8s ease-in-out;
     border-radius: 50%;
     z-index: 6;
   }
   
   .image {
     width: 100%;
     transition: transform 1.1s ease-in-out;
     transition-delay: 0.4s;
   }
   
   .panel {
     display: flex;
     flex-direction: column;
     align-items: flex-end;
     justify-content: space-around;
     text-align: center;
     z-index: 6;
   }
   
   .left-panel {
     pointer-events: all;
     padding: 3rem 17% 2rem 12%;
   }
   
   .right-panel {
     pointer-events: none;
     padding: 3rem 12% 2rem 17%;
   }
   
   .panel .content {
     color: #fff;
     transition: transform 0.9s ease-in-out;
     transition-delay: 0.6s;
   }
   
   .panel h3 {
     font-weight: 600;
     line-height: 1;
     font-size: 1.5rem;
   }
   
   .panel p {
     font-size: 0.95rem;
     padding: 0.7rem 0;
   }
   
   .btn-1.transparent {
     margin: 0;
     background: none;
     border: 2px solid #fff;
     width: 130px;
     height: 41px;
     font-weight: 600;
     font-size: 0.8rem;
   }
   
   .btn-1:hover {
       color: rgb(231, 231, 231);
       transform: translateY(2px);
     box-shadow: 5px 5px rgba(0, 0, 0, 0.247);
   
   }
   
   .btn-1.transparent:active{
     transform: translateY(10px);
   }
   
   .right-panel .image,
   .right-panel .content {
     transform: translateX(800px);
   }
   
   /* Animations */
   
   .container.sign-up-mode:before {
     transform: translate(100%, -50%);
     right: 52%;
   }
   
   .container.sign-up-mode .left-panel .image,
   .container.sign-up-mode .left-panel .content {
     transform: translateX(-800px);
   }
   
   .container.sign-up-mode .signin-signup {
     left: 25%;
   }
   
   .container.sign-up-mode form.sign-up-form {
     opacity: 1;
     z-index: 2;
   }
   
   .container.sign-up-mode form.sign-in-form {
     opacity: 0;
     z-index: 1;
   }
   
   .container.sign-up-mode .right-panel .image,
   .container.sign-up-mode .right-panel .content {
     transform: translateX(0%);
   }
   
   .container.sign-up-mode .left-panel {
     pointer-events: none;
   }
   
   .container.sign-up-mode .right-panel {
     pointer-events: all;
   }
   
   @media (max-width: 870px) {
     .container {
       min-height: 800px;
       height: 100vh;
     }
     .logo, .logo-2{
       visibility: hidden;
     }
     .signin-signup {
       width: 100%;
       top: 95%;
       transform: translate(-50%, -100%);
       transition: 1s 0.8s ease-in-out;
     }
   
     .signin-signup,
     .container.sign-up-mode .signin-signup {
       left: 50%;
     }
   
     .panels-container {
       grid-template-columns: 1fr;
       grid-template-rows: 1fr 2fr 1fr;
     }
   
     .panel {
       flex-direction: row;
       justify-content: space-around;
       align-items: center;
       padding: 2.5rem 8%;
       grid-column: 1 / 2;
     }
   
     .right-panel {
       grid-row: 3 / 4;
     }
   
     .left-panel {
       grid-row: 1 / 2;
     }
   
     .image {
       width: 200px;
       transition: transform 0.9s ease-in-out;
       transition-delay: 0.6s;
     }
   
     .panel .content {
       padding-right: 15%;
       transition: transform 0.9s ease-in-out;
       transition-delay: 0.8s;
     }
   
     .panel h3 {
       font-size: 1.2rem;
     }
   
     .panel p {
       font-size: 0.7rem;
       padding: 0.5rem 0;
     }
   
     .btn.transparent {
       width: 110px;
       height: 35px;
       font-size: 0.7rem;
     }
   
     .container:before {
       width: 1500px;
       height: 1500px;
       transform: translateX(-50%);
       left: 30%;
       bottom: 68%;
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
     }
   
     .container.sign-up-mode:before {
       transform: translate(-50%, 100%);
       bottom: 32%;
       right: initial;
     }
   
     .container.sign-up-mode .left-panel .image,
     .container.sign-up-mode .left-panel .content {
       transform: translateY(-300px);
     }
   
     .container.sign-up-mode .right-panel .image,
     .container.sign-up-mode .right-panel .content {
       transform: translateY(0px);
     }
   
     .right-panel .image,
     .right-panel .content {
       transform: translateY(300px);
     }
   
     .container.sign-up-mode .signin-signup {
       top: 5%;
       transform: translate(-50%, 0);
     }
   }
   
   @media (max-width: 570px) {
     form {
       padding: 0 1.5rem;
     }
     .logo, .logo-2{
       visibility: hidden;
     }
     .image {
       display: none !important;
     }
     
     .panel .content {
       padding: 0.5rem 1rem;
     }
     .container {
       padding: 1.5rem;
     }
   
     .container:before {
       bottom: 72%;
       left: 50%;
     }
   
     .container.sign-up-mode:before {
       bottom: 28%;
       left: 50%;
     }
     .error{
       display: block;
       left: 600%;
     }
   }
   
   </style>
  </head>
</html>

