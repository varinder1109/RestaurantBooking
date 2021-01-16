<html>
    <head>
        <title>Form Validation</title>
        <script type = "text/javascript">
            function validate(){
                if(document.myForm.Name.value==""){
                    alert("Please provide your Name");
                    document.myForm.Name.focus();
                    return false;
                }
                if(document.myForm.Phonenumber.value==""){
                    alert("Please provide your Phone Number");
                    document.myForm.Phonenumber.focus();
                    return false;
                }
	if(document.myForm.Partysize.value=="" || document.myForm.Partysize.value.length !=1 || document.myForm.Partysize.value.length ==2){
                    alert("Please provide number of person between 1-9");
                    document.myForm.Partysize.focus();
                    return false;         
                }
                if(document.myForm.Day.value==""){
                    alert("Please select your Day");
                    document.myForm.Day.focus();
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
        <form action="booking_register.php" method = "post" name="myForm" style="border: 5px solid; text-align: center;margin:10%" onsubmit="return(validate());" >
            <br>
            <label>Name:</label>
            <input type="text" name="Name"><br><br>

            <label>Phone Number:</label>
            <input type="Number" name="Phonenumber"><br><br>

            <label>Party Size:</label>
            <input type="Number" name="Partysize"><br><br>

            <label>Day:</label>
            <select name="Day">
                <option value="-1" selected>Choose Day</option>
                <option value="MONDAY" >MONDAY</option>
                <option value="TUESDAY">TUESDAY</option>
                <option value="WEDNESSDAY">WEDNESSDAY</option>
				<option value="THURSDAY">THURSDAY</option>
				<option value="FRIDAY">FRIDAY</option>
				<option value="SATURDAY">SATURDAY</option>
				<option value="SUNDAY">SUNDAY</option>
            </select><br><br>
            
            <label>Time:</label>
            <select name="Time">
                <option value="-1" selected>Choose Time</option>
                <option value="11:30 AM" >11:30am</option>
                <option value="12:30 PM">12:30pm</option>
                <option value="1:30 PM">1:30pm</option>
				<option value="5:00 PM">5:00pm</option>
                <option value="6:00 PM">6:00pm</option>
                <option value="7:00 PM ">7:00pm</option>
				<option value="8:00 PM" >8:00pm</option>
                <option value="9:00 PM">9:00pm</option>
                <option value="10:00 PM">10:00pm</option>
				</select><br><br>
            <input type="submit" onclick="ValidateTime(document.myForm.Time)"><br>
        </form>
    </body>
</html>