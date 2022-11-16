<!doctype html>
<html> 
 <head>  
  <style>
    input[type=text]{
    width: 100%; 
    padding: 12px 50px; 
    margin: 8px 0; 
    display: inline-block; 
    border: 1px solid #ccc; 
    border-radius: 4px;
     box-sizing: border-box; 
   } 
   input[type=password] { 
     width: 100%; 
     padding: 12px 20px; 
     margin: 8px 0; 
     display: inline-block; 
     border: 1px solid #ccc;
      border-radius: 4px;
       box-sizing: border-box;
     }
    button[type=submit]{
     width: 100%;
      background-color: #41ad44;
       color: white; 
       padding: 14px 20px; 
       margin: 8px 0; 
       border: none; 
       border-radius: 4px; 
       cursor: pointer;
    }
    input[type=button]{
      width: 100%;
       background-color: #41ad44;
        color: white; 
        padding: 14px 20px; 
        margin: 8px 0; 
        border: none; 
        border-radius: 4px; 
        cursor: pointer;
     }
    .border{
     border-style:inset;
     border-radius:12px;
     padding:15px 30px;
    }
    div {
     background-color: lightgrey;
     width: 300px;
     border: 15px solid green;
     padding: 50px ;
     margin: 20px;
    
   }
   .c{
     border: 1px solid black;
     background-color: lightblue;
     padding:25px 50px;
    }
    h1{
      text-shadow:2px 2px red;
      background-color:linear-gradient(black,blue);
   }
    #leftbox { 
   
                   float:left;  
   
                   background:lightgrey; 
   
                   width:18%; 
   
                   height:200px; 
   
               } 
   
               #middlebox{ 
   
                   float:left;  
   
                   background:lightgrey; 
   
                   width:18%; 
   
                   height:200px; 
   
               } 
   
               #rightbox{ 
   
                   float:left; 
   
                   background:lightgrey; 
   
                   width:18%; 
   
                   height:200px; 
   
               }
body{
  background-image: linear-gradient(lightgreen,white);
 background-repeat: no-repeat;
 background-size: 100%;
}


  </style>
</head> 
 <body> 
   <center>
   <h1>HEALTH CARE MANAGEMENT</h1>
   <pre>   ** to access doctor enter email:ram123@gmail.com password:ram@123
</pre> 
<?php if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>
    </center>
    <div id="leftbox"> 
    <center>
     DOCTOR
    </center>
    <form onsubmit="return validate()" action="doctorverify.php" method="POST"> 
     <input type="text" class="border" name="email" id="email1" placeholder="email"> 
     <br> 
     <input type="password" class="border" name="pass" id="pass1" placeholder="password"> 
     <br> 
     <button type="submit" name="submit">login</button>
    </form> 
    <br>
    <center> <a href="signupdoctor.php">sign up </a> </center>
   </div> 
   <div id="middlebox"> 
    <center>
     PATIENT
    </center>
    <form onsubmit="return validate()" action="patientverify.php" method="POST"> 
     <input type="text" class="border" name="email" id="email2" placeholder="email"> 
     <br> 
     <input type="password" class="border" name="pass" id="pass2" placeholder="password"> 
     <br> 
     <button type="submit" name="submit">login</button>
    
    </form> <br>
   <center> <a href="signup.php">sign up </a></center>
   </div> 
   <div id="rightbox"> 
    <center>
      BLOOD DONAR
    </center>
    <form onsubmit="return validate()" action="donorverify.php" method="POST"> 
     <input type="text" class="border" name="demail" id="email3" placeholder="email"> 
     <br> 
     <input type="password" class="border" name="dpass" id="pass3" placeholder="password"> 
     <br> 
     <button type="submit" name="submit">login</button>
    </form> <br>
    <center><a href="signupdonor.php">sign up </a></center>
   </div> 
   </center>
 </body>
</html>

