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
  var specialization=/^\w+$/;
  var phone=/^[6789]{1}\d{9}$/;
  var email=/^\w+@gmail.com$/;
  var password=/^\w+[@&£#$¥€]{1}[0-9]+$/;

  var ru1=name.test(document.getElementById("name").value)
  var rs1=specialization.test(document.getElementById("Specialization").value)
  var rp1=phone.test(document.getElementById("phone").value)
  var re1=email.test(document.getElementById("email").value)
  var rpa1=password.test(document.getElementById("password").value)
  if(ru1==true)
  {
    if(rp1==true)
    {
      if(re1==true)
      {
         if(rpa1==true)
         {
            if(rs1==true)
            {
              alert("inputs are valid");
            }
            else{
              alert("special");
              return false;
            }
         }
         else{
          alert("pass");
          return false;
         }
      }
      else{
        alert("email");
        return false;
      }
    }
    else{
      alert("phone");
      return false;
    }
  }
  else{
    alert("name are invalid");
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
   <h2>currently this form NOT ACCEPTING the requests..</h2>
   <center> 
    <form > 
     <input type="text" name="name" id="name" placeholder="FULL NAME" class="border" required> 
     <br>  
     <br>  
     <input type="text" placeholder="E-MAIL" name="email" id="email" class="border" required> 
     <br> 
     <br>  
     <input type="password" placeholder="PASSWORD" name="password" id="password" class="border" required> 
     <br> 
     <br> 
     <input type="text" placeholder="PHONE NUMBER" name="phone" id="phone" class="border" maxlength="10" required> 
     <br> 
     <label >Specialization:</label>
     <br>
     <select id="Specialization" name="Specialization" required>
        <option value="NULL" name="NULL">--SELECT--</option>
        <option value="generalcheckup" name="generalcheckup">GENERAL CHECK UP</option>
        <option value="kidney" name="kidney">KIDNEY PROBLEM</option>
        <option value="eye" name="eye">EYE CHECK UP</option>
        <option value="heart" name="heart">HEART DISEASE</option>
        
  </Select>
     <br> 
     <input type="submit" name="submit" id="submit" > 
     <center> 
     </center> 
    </form> 
   </center> 
  </div> 
 </body>
</html>