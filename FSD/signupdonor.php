<!doctype html>
<html> 
 <head> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <style>
   .border{
    border-style:inset;
    border-radius:12px;
    padding:5px;
   }
  h1{
    text-shadow:2px 2px red;
     background-color:linear-gradient(black,blue);
  }
  input[type=text], select
   { width: 50%; 
   padding: 12px 20px; 
   margin: 8px 0; 
   display: inline-block; 
   border: 1px solid #ccc; 
   border-radius: 4px;
    box-sizing: border-box; } 
  input[type=password],select { 
    width: 50%; 
    padding: 12px 20px; 
    margin: 8px 0; 
    display: inline-block; 
    border: 1px solid #ccc;
     border-radius: 4px;
      box-sizing: border-box;
    }
   input[type=submit]{
    width: 50%;
     background-color: #e8922a;
      color: white; 
      padding: 14px 20px; 
      margin: 8px 0; 
      border: none; 
      border-radius: 4px; 
      cursor: pointer;
   } 
  input[type=submit]:hover{ 
    background-color:#0cb5cf;
 }

body{
    background-image: url("signupdoctor.png");
    background-repeat: no-repeat;
    background-size:cover;
    
}
</style>
    
  <script>
    function validate()
{
  var name=/^[a-zA-Z]+[." "]*[a-zA-Z" ".]*$/;
  var phone=/^[6789]{1}\d{9}$/;
  var email=/^\w+@gmail.com$/;
  var password=/^\w+[@&£#$¥€]{1}[0-9]+$/;

  var ru=name.test(document.getElementById("name").value);
  var rp=phone.test(document.getElementById("phone").value);
  var re=email.test(document.getElementById("email").value);
  var rpa=password.test(document.getElementById("password").value);
  if(ru!=true||rp!=true||re!=true||rpa!=true)
  {
       alert("enter correct inputs");
       return false;
  }
}
  </script> 
 </head> 
 <body> 
  <div> 
   <center> 
    <h1>SIGN UP</h1> 
   </center> 
   <center> 
    <form onsubmit="return validate()" action="donorsignup.php" method="POST">  
     <input type="text" name="name" id="name" placeholder="FULL NAME" class="border" required> 
     <br>  
     <br>  
     <input type="text" placeholder="E-MAIL" name="email" id="email" class="border" required> 
     <br> 
     <br>  
     <input type="password" placeholder="PASSWORD MUST CONTAINS Characters,spl characters,numbers" name="password" id="password" class="border" required> 
     <br> 
     <br> 
     <input type="text" placeholder="PHONE NUMBER" name="phone" id="phone" class="border" maxlength="10" required> 
     <br>  
     <br>
   <center>  <label for="bloodgroup">BLOOD GROUP</label></center>
     <select id="bloodgroup" name="bloodgroup" required>
           <option value="NULL" name="NULL">--SELECT--</option>
           <option value="A-" name="A-">A-negative</option>
           <option value="A+" name="A-">A-Positive</option>
           <option value="B-" name="A-">B-negative</option>
           <option value="B+" name="A-">B-Positive</option>
           <option value="O-" name="A-">O-negative</option>
           <option value="O+" name="A-">O-Positive</option>
           <option value="AB-" name="A-">AB-negative</option>
           <option value="AB+" name="A-">AB-Positive</option>

     </Select>
     <br> 
     <input type="submit" name="submit" id="submit"> 
     <center> 
     </center> 
    </form> 
   </center> 
  </div> 
 </body>
</html>