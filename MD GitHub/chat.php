<?php session_start(); if(!isset($_SESSION["user"])){header("Location:login.php");}?>
<?php
$bdd = new PDO("mysql:host=localhost;dbname=smdmxjmg_mydrugs;charset=utf8;port=3306", "smdmxjmg_myuser", "3u(Me3:3bu%d!3d5Qu");
if (isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message'])) 
{
     $pseudo = htmlspecialchars($_POST['pseudo']);
     $message = htmlspecialchars($_POST['message']);
     $insertmsg = $bdd->prepare('INSERT INTO chat(pseudo, message) VALUES(?, ?)');
     $insertmsg->execute(array($pseudo, $message));
}
	


?>
<!DOCTYPE html>
<html lang="en">
<head>
	


<link rel="shortcut icon" type="image/x-icon" href="logo1.png"/>
     <meta name="theme-color" content="#343a40">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>General Chat | MrLeak </title>
    <style type="text/css">
    body{
        color: #c9c9c9;
        font-family: arial, sans-serif;
        background-color: #343a40;
        align-content: center;

    }
    #send{


 width: 700px;

margin:0 auto;

background-color: #464f5b;

text-align: center;

align-content: center;
border-radius: 4vh ;


    }
    .msg{
        font-family: arial, sans-serif;
        color: #eeeeee;
    }
    .pseudo{
        outline: none;
       font-family: arial, sans-serif;
      font-size: 20px;
      background-color: #736a8b;
  border: none;
  color: #fff;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 2rem;
  }

    input{
        outline: none;
   
   font-family: arial, sans-serif;
      font-size: 20px;
      background-color: white;
  border: none;
  color: black;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 2rem;

    }
    .footer{
        text-align: center;
    }
    textarea{
        outline: none;
         font-family: arial, sans-serif;
         font-size: 30px;
      background-color: #736a8b;
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 2rem;
  
    }
    :-moz-placeholder { color: #fff; } /* Firefox <= 18 */
::-moz-placeholder { color: #fff; } /* Firefox >= 19 */
::-webkit-input-placeholder { color: #fff; }
:-ms-input-placeholder{ color: #fff; } /* IE */
hr{
    color: #343a40;
    background-color: #343a40;
}
.btn {
  font-family: arial;
  letter-spacing: 2px;
  font-size: 22px;
  text-transform: uppercase;
  background: #fc5185;
  color: #ffffff;
  border-radius: 10px;
  padding: 20px 24px;
  box-shadow: 0 0 60px -10px #CD106E;
  transition: all .3s;
  text-decoration: none;
}
.btn:hover {
  box-shadow: 0 8px 65px -5px #CD106E;
}
a{
    color: #949494;
    outline: none;
    text-decoration: none;
}
.rdo{
            
            background-size: 100% 100%;
            border-radius: 50%;

        }
</style>
    <script>
    $('.btn').tilt({ scale: 1.1, speed: 1000 });
</script>
</head>


    <body>
    	<div id="send">
    		<br><br>
    		<iframe src="https://discord.com/widget?id=859160318630297650&theme=dark" width="350" height="200" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>

    		<h2>Or you can join our discord by clicking <a href="https://discord.com/invite/FXKa2kSFwF">here</a></h2>
    		<br><br>
    <form method="post" action="">
    	<input class="pseudo" type="text" name="pseudo" placeholder="PSEUDO" value="<?php echo $_SESSION['pseudo']; ?>" readonly><br>
    	<textarea type="text" name="message" placeholder="Message"></textarea><br>
    	<input class="btn" type="submit" value="Send">
    	<p>If you don't see any message displayed please refresh the page.<br>
    	       V.1</p>
    	<br>
    	<hr width="600">
    </form>
    <br><br><br><br>
 
    <?php
    $allmsg = $bdd->query('SELECT * FROM chat ORDER BY id DESC');
    while ($msg = $allmsg->fetch()) 
    {
    ?>
    <hr width="250">
    <br>	<img class="rdo" src="logouser.jpeg" width="50"><br>
    <b class="msg"><?php echo $msg['pseudo']; ?> <br><br></b><?php echo $msg['message']; ?>
     <br><br>
     
     
    <?php
    }
    ?>


</div>
<br><br>
  <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                ©   2021 - MrLeak. All rights reserved.
                            </div>
   <br><br>
   

    </body>
</html>