 <!DOCTYPE html>
<html>
<head>
<title>LogIn/SignIn </title>
<link rel="stylesheet" type="text/css" href="style.css">
  <script type = "text/javascript">
            function validate(){
                if(document.myForm.UserName.value==""){
                    alert("Please enter a User Name");
                    document.myForm.UserName.focus();
                    return false;
                }
                  if(document.myForm.Password.value==""){
                    alert("Please enter a Password");
                    document.myForm.Password.focus();
                    return false;
             }
                return (true);
            }
          
        </script>
</head>
<body>
<div class="header">
<h2> LogIn/SignIn </h2>
</div>

 <form method="post" name="myForm" action="validation.php" onsubmit="return(validate());" >
 
 <div class="input-group">
       <label><b>User Name:</b></label>
            <input type="text" name="UserName">
       </div>
	   
	   <div class="input-group">
     <label><b>Password:</b></label>
            <input type="Password" name="Password">
       </div>

	   <div class="input-group">
          <button type="submit" name="SignIn" class="btn" > <br>SignIn</button>
       </div>
	     
    </form>
</body>



</html>
