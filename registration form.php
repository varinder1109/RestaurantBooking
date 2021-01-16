<html>
    <head>
        <title>Registration/Signup</title>
        <script type = "text/javascript">
            function validate(){
                if(document.myForm.Name.value==""){
                    alert("Please provide your name");
                    document.myForm.Name.focus();
                    return false;
                }
                if(document.myForm.Email.value==""){
                    alert("Please provide your email");
                    document.myForm.Email.focus();
                    return false;
                }
                if(document.myForm.PhoneNumber.value=="" || isNaN(document.myForm.PhoneNumber.value) || document.myForm.PhoneNumber.value.length !=10){
                    alert("Please provide your Phone Number");
                    document.myForm.PhoneNumber.focus();
                    return false;
                }
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
            function ValidateEmail(mail) 
            {
             if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.Email.value))
              {
                return (true)
              }
                alert("You have entered an invalid email address!")
                return (false)
            }
        </script>
    </head>
    <body>
<body bgcolor="#800080">
        <form action="register.php" method = "post" name="myForm" style="border: 5px solid; text-align: center;margin:10%" onsubmit="return(validate());" >
            <br>
	<h1>Registration/SignUp</h1>
            <label><b>Name:</b></label>
            <input type="text" name="Name"><br><br>
            <label><b>Email:</b></label>
            <input type="Email" name="Email"><br><br>
            <label><b>Phone Number:</b></label>
            <input type="Number" name="PhoneNumber"><br><br>
            <label><b>User Name:</b></label>
            <input type="text" name="UserName"><br><br>
             <label><b>Password:</b></label>
            <input type="Password" name="Password"><br><br>
            <input type="Submit" onclick="ValidateEmail(document.myForm.Email)"><br>
        </form>
    </body>
</html>