<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <?php include "./css/pricing_stsyle.php" ?>
</head>
<body>
    
    <h1 class="title">Let’s choose a right plan for you!</h1>
    <div class="back-random-svgs">
      <img src="./images/pricing/bubble1.svg" alt="" class="bubble bubble1"> 
      <img src="./images/pricing/bubble2.svg" alt="" class="bubble bubble2"> 
      <img src="./images/pricing/bubble3.svg" alt="" class="bubble bubble3"> 
      <img src="./images/pricing/bubble4.svg" alt="" class="bubble bubble4"> 
      <img src="./images/pricing/bubble5.svg" alt="" class="bubble bubble5"> 
      <img src="./images/pricing/bubble6.svg" alt="" class="bubble bubble6"> 
      <img src="./images/pricing/bubble7.svg" alt="" class="bubble bubble7"> 
      <img src="./images/pricing/bubble8.svg" alt="" class="bubble bubble8"> 
      <img src="./images/pricing/bubble9.svg" alt="" class="bubble bubble9">
      <img src="./images/pricing/circle.svg" alt="" class="circle">
    <img src="./images/pricing/circle1.svg" alt="" class="circle1">
    <img src="./images/pricing/circle3.svg" alt="" class="circle2">
    <img src="./images/pricing/triangle1.svg" alt="" class="tri1">
    <img src="./images/pricing/triangle2.svg" alt="" class="tri2">
    <img src="./images/pricing/triangle3.svg" alt="" class="tri3">
    </div>

   <div class="cards">
       <div class="basicCard">
           <div class="basicCard-header">
               <div class="money"><span>$0</span>/mo</div>
               
           <div class="plan">BASIC</div>

           </div>
           <div class="line"></div>
           <div class="basicCard-bottom">
            <ul>
                <li><img src="./images/check-circle.svg" alt=""> International Payments</li>
                <li><img src="./images/check-circle.svg" alt=""> Secure Payments</li>
                <li id="cut"><img src="./images/check-circle.svg" alt=""> Free 10GB transaction storage</li>
                <li id="cut"><img src="./images/check-circle.svg" alt=""> Individual Ledger System</li>
            </ul>
            <button>Buy Now</button>
           </div>
       </div>
       <div class="basicCard">
           <div class="discount">
               Save 10% 🎉
           </div>
        <div class="basicCard-header">
            <div class="money"><span>$40</span>/mo</div>
            
        <div class="plan">PREMIUM</div>

        </div>
        <div class="line"></div>
        <div class="basicCard-bottom">
         <ul>
             <li><img src="./images/check-circle.svg" alt=""> International Payments</li>
             <li><img src="./images/check-circle.svg" alt=""> Secure Payments</li>
             <li><img src="./images/check-circle.svg" alt=""> Free 10GB transaction storage</li>
             <li id="cut"><img src="./images/check-circle.svg" alt=""> Individual Ledger System</li>
         </ul>
         <button>Buy Now</button>
        </div>
    </div>

    <div class="basicCard">
        <div class="basicCard-header">
            <div class="money"><span>$70</span>/mo</div>
        <div class="plan">ENTERPRISE</div>
        </div>
        <div class="line"></div>
        <div class="basicCard-bottom">
         <ul>
             <li><img src="./images/check-circle.svg" alt=""> International Payments</li>
             <li><img src="./images/check-circle.svg" alt=""> Secure Payments</li>
             <li><img src="./images/check-circle.svg" alt=""> Free 10GB transaction storage</li>
             <li><img src="./images/check-circle.svg" alt=""> Individual Ledger System</li>
         </ul>
            <button>Apply Now</button>
        </div>
    </div>
   </div>
   <div class="back">
       <a href="./index.php"><img src="./images/pricing/chevron-left.svg" alt=""></a>
   </div>
    <script defer src="./js/pricing.js"></script>
</body>
</html>