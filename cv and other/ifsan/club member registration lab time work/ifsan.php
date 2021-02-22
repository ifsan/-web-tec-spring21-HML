<?php
    if (isset($_GET ["submit"])){
	     echo htmlspecialchars ($_GET ["usernames"]);
	}
?>
<folderset>
    <legend>Registration</legend>
    <form>
        <input type="text" size="20"name="username">
        
    </form>
</folderset>	

<html>
<head>
<title></title>
</head>
<body>
<form methods="" action"">
<fieldset>
<legend >Date of Birth</legend>
&emsp;&emsp;&emsp;dd  &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;     mm  &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;      yyyy<br>
<input type="text" name="dd" values""?>/
<input type="text" name="mm" values""?>/
<input type="text" name="yyyy" values""?> <br><br>
<hr>
</form>
</body>
</html>
    
<html>
<head>
<title>Page 2</title>
</head>
<body>
<form methods="" action"">
<legend >Gender</legend>
<table>
<tr>
<td><input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other<br>
<input type="submit" name="submit" value="Submit"><br>				
</td>
</tr>
</form>
</body>
</html>






