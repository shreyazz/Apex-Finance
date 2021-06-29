<html>
<head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

.header {
    width: 100vw;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: -210px;
  }
  
  .header .title h1 {
    margin-left: 30px;
    color: white;
    font-style: normal;
    font-weight: 200;
    font-size: 35px;
    cursor: pointer;
  }
  .header .title a{
    text-decoration: none;
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
    color: white;
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 36px;
    margin-right: 45px;
  }
  
  .header .nav ul li a img {
    position: relative;
    top: 6px;
  }
  
  .header .nav ul li:nth-child(4) {
    margin-right: 30px;
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

.contact_container{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(69.94deg, #362691 4.79%, #251A68 33.4%, #21175E 48.64%, rgba(33, 23, 94, 0.995163) 68.15%, rgba(54, 38, 145, 0.98) 101.77%);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.glass{
    width: 80%;
    height: 50vh;
    background: rgba(255, 255, 255, 0.075);
    box-shadow: 0px 0px 47px -8px rgb(0 0 0 / 20%);
    border-radius: 1rem;
    backdrop-filter: blur(2rem);
    margin-top: 4rem;  
    display: flex; 
    flex-direction: row;
}

.glass iframe{
    margin: 20px 30px;
}

.bottom_nav{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 14vh;
    background: rgba(255, 255, 255, 0.075);
    box-shadow: 0px 0px 47px -8px rgb(0 0 0 / 20%);
    backdrop-filter: blur(2rem);
    margin-top: 4rem;    
}

.contact_box{
    position: absolute;
    top: 200px;
    left: 830px;
}

.address_header, .phone_header, .email_header{
    font-size: 20px;
    font-weight: 600;
    color: #fff;
}

.sub_address{
    margin-top: 10px;
    width: 300px;
    color: rgb(182, 182, 182);
    font-size: 12px;
    margin-bottom: 10px;
}

.sub_phone{
    color: rgb(230, 108, 71);
    text-decoration: underline;
    margin: 5px 0px 10px;
}

.sub_email{
    margin-top: 10px;
    width: 300px;
    color: rgb(182, 182, 182);
    font-size: 15px;
    margin-bottom: 10px;
    text-decoration: underline;
}

.header{
    color: #fff;
    font-size: 30px;
    font-weight: 800;
}
</style>
</head>
</html>