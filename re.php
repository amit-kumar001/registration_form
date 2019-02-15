<!DOCTYPE html>
<html>  <!--  Defines an HTML document -->
<head>  <!-- Defines information about the document -->
	<title> register form</title> <!-- define title of document  display in the tab-->
</head>
<body>
<form action="insert.php" method="POST" >
<!-- 
   action attribute specifies where to send the form-data when a form is submitted.
   POST - Sends the form-data as an HTTP post transaction -->
  <table>
	<tr> 
<!-- <tr> tag defines a row in an HTML table. <tr> element contains one or more <th> or td> elements. -->
		<td>  <!-- <td> tag defines a standard cell (column) in an HTML table. -->
			Name :
		</td>
		<td>
			<input type="text" name=" username"  required>
			<!-- 
			      <input> tag specifies an input field where the user can enter data. 
				  1) type - attribute specifies the type of <input> element to display.The default type is text 
				  2) name  - attribute is used to reference elements in a JavaScript, or to reference form data after a form is submitted.
				  3) required - attribute is a boolean attribute. It specifies that an input field must be filled out before submitting the form.-->
		</td>
	</tr>
	<tr>
		<td>
				Password :
		</td>
		<td>
			<input type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="myInput" required>
			<!-- 
			   1) pattern - attribute specifies a regular expression that the <input>   element's value is checked against on form submission.
			   2) id - Specifies a unique id for the element.
			  -->
			<input type="checkbox" onclick="myFunction()">Show Password
			<!-- 
			    <script> tag is used to define a client-side script (JavaScript).
			     -->
			<script>
                function myFunction() /* Declare a function*/
                {
                var x = document.getElementById("myInput");
                if (x.type === "password") 
                {
                 x.type = "text";
                } 
                else 
                {
                x.type = "password";
                }}
            </script>
                  

		</td>
	</tr>
	<tr>
		<td>
				Gender :
		</td>
		<td>
			<input type="radio" name="Gender" value="m" required>Male
			<input type="radio" name="Gender" value="f" required>Female
		</td>
	</tr>
	<tr>
		<td>
				Email :
		</td>
		<td>
			<input type="text" placeholder="Email" pattern=".+@gmail.com" name="email"  title="Enter valid email " required>
			 <!--  
			 	1) placeholder - short hint is displayed in the input field before the  user enters a value. -->
		</td>

	</tr>
	<tr>
		<td>
			Phone no :
		</td>
		<td>
			<select name="phonecode" required> 
				<option >select code</option>
				<!-- <option> tag defines an option in a select list and elements go inside a <select> or <datalist> element.-->
				<option value="+91">+91</option>
				<option value="+92">+92</option>
				<option value="+93">+93</option>
			</select>
			<input type="text" pattern="[7896][0-9]{9}" placeholder="98********" name="phone"  title=" Enter correct no  " required> 
			<!--pattern - starting with 9 or 8 or 7 or 6, we can enter any numbers between 0 to 9, indexing {9}= it start from {0,1.....,9} so total no will be 10)  -->
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="submit" name="">
		</td>
	</tr>
  </table>
</form>

</body>
</html>
