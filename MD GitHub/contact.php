<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="theme-color" content="#000000"/>
    <meta name="description" content="A Recreation of the Mydrugs website from the hit Netflix series 'How To Sell Drugs Online (Fast)">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="BlackLogo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<meta charset="utf-8">
	<title>MyDrugs | Contact</title>
<style type="text/css">
	
	*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  
  justify-content: center;
 background-color: #0e0e0e;
}
.wrapper{
	margin-top: 100px;
	align-items: center;
	justify-content: center;
  position: relative;
  width: 700px;
  height: 400px;
}
.wrapper .img{
  position: absolute;
  width: 100%;
  height: 100%;
}
.wrapper .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  clip-path: circle(0% at 0% 100%);
  transition: all 0.7s;
}
#one:checked ~ .img-1 img{
  clip-path: circle(150% at 0% 100%);
}
#two:checked ~ .img-1 img,
#two:checked ~ .img-2 img{
  clip-path: circle(150% at 0% 100%);
}
#three:checked ~ .img-1 img,
#three:checked ~ .img-2 img,
#three:checked ~ .img-3 img{
  clip-path: circle(150% at 0% 100%);
}
#four:checked ~ .img-1 img,
#four:checked ~ .img-2 img,
#four:checked ~ .img-3 img,
#four:checked ~ .img-4 img{
  clip-path: circle(150% at 0% 100%);
}
#five:checked ~ .img-1 img,
#five:checked ~ .img-2 img,
#five:checked ~ .img-3 img,
#five:checked ~ .img-4 img,
#five:checked ~ .img-5 img{
  clip-path: circle(150% at 0% 100%);
}
.wrapper .sliders{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 99;
  display: flex;
}
.wrapper .sliders label{
  border: 2px solid rgb(142,197,252);
  width: 13px;
  height: 13px;
  margin: 0 3px;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.3s ease;
}
#one:checked ~ .sliders label.one,
#two:checked ~ .sliders label.two,
#three:checked ~ .sliders label.three,
#four:checked ~ .sliders label.four,
#five:checked ~ .sliders label.five{
  width: 35px;
  border-radius: 14px;
  background: rgb(142,197,252);
}
.sliders label:hover{
  background: rgb(142,197,252);
}
input[type="radio"]{
  display: none;
}
</style>
</head>
<body>
<nav>
         <div class="logo">

            <a href="/">
            	<img src="WhiteLogo.png" width="55">
            </a>

          </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
         	
            <li><a href="shop">SHOP</a></li>
            <li><a href="faq">FAQ</a></li>

          

            <li><a href="safety">SAFETY</a></li>
            <li><a href="forum.php">FORUM</a></li>
            <li><a class="active" href="contact">CONTACT</a></li>
            <li><a href="login.php"><i class="fas fa-user-circle"></i></a></li>
         </ul>
      </nav>
      <br><br><br>
    <div id="background-contact">
        <b><h1>Main Developer</h1></b>
        

        
        <br><br>
        <a class="discord-contact"><i class="fab fa-discord"></i> MrTiefling#3589</a>
        <br><br>
        <br>
        <a class="instagram-contact"><i class="fab fa-instagram"></i> @mrtiefling</a>
        <br><br>
        <br>
        <a class="reddit-contact"><i class="fab fa-reddit"></i> u/mrtieflingg</a>
        <br><br><br>
        <div align="center">
       <hr width="300" style="border: none; height: 2.5px; background-color: purple; color: purple;">
        </div><br><br>
        <a class="discord-contact"><i class="fab fa-discord"></i> ecstasy#0007</a>
        <br><br>
   
   
    </div>
    

</body>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

.reddit-contact{
  padding: 15px 42px;
  background-color: #ff4500;
}
.instagram-contact{
  padding: 15px 50px;
 background: linear-gradient(45deg,#f09433,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888);
}
.discord-contact{
  padding: 15px 32px;
  background-color: #7289da;
}

#background-contact{
  text-align: center;
  color: white;
  font-family: sans-serif;
  border-radius: 2vh;
  border-color: white;
}


.background-index{
	margin-top: 50px;
	align-content: center;
	text-align: center;
	align-items: center;
}




*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
nav{
  display: flex;
  height: 80px;
  width: 100%;
  background: #0e0e0e;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}
nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #fff;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: cyan;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
  width: 100%;
  padding: 0 30px;
  color: #1b1b1b;
}
.content div{
  font-size: 40px;
  font-weight: 700;
}
</style>
</html>