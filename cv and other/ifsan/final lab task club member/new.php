<html>
    <head></head>
    <body>
        <form action="" method="post">
        <fieldset>
          <legend><h1>User Registration</h1></legend>
            <table>
                <tr>
                    <td><span><b>Name</b></span></td>
                    <td>:<input type="text" name="uname" value="<?php echo $uname;?>">
                    <span><?php echo $err_uname;?></span></td>

 

 

 

                </tr>
                <tr>
                    <td><span><b>Username</b></span></td>
                    <td>:<input type="text" name="uname" value="<?php echo $uname;?>">
                    <span><?php echo $err_uname;?></span></td>

 

 

 

                </tr>
                <tr>
                    <td><span><b>Password</b></span></td>
                    <td>:<input type="password" name="pass" value="<?php echo $pass;?>">
                    <span><?php echo $err_pass;?></span></td>
                </tr>
                <tr>
                    <td><span><b>Confirm Password</b></span></td>
                    <td>:<input type="password" name="pass" value="<?php echo $pass;?>">
                    <span><?php echo $err_pass;?></span></td>
                </tr>
                <tr>
                    <td><span><b>Email</b></span></td>
                    <td>:<input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><span><b>Phone</b></span></td>
                    <td>:<input type="tel" name="phone_no"></td>
                </tr>
				<tr>
					<td><span><b>birthDate</b></span></td>
					<td>:<input type="date" name="date"></td>
				</tr>
                <tr>
                    <td><span><b>Gender</b></span></td>
                    <td>:<input type="radio" name="gender" value="Male"><span>Male</span>
                        <input type="radio" name="gender" value="Female"><span>Female</span>
                        <span><?php echo "&nbsp ".$err_gender;?></span></td>
                </tr>
                </form>
<tr>
<td>
 

 

          <form action="Where did you hear about us?.php" method="post">
                 <fieldset>
        <legend>Where did you hear about us?</legend>
                A Friend or Colleague<input type="checkbox" value="A Friend or Colleague" name="where did you hear about us?"><br>
                 Google<input type="checkbox" value="Google" name="where did you hear about us?"><br>
                 Blog Post<input type="checkbox" value="Blog Post" name="where did you hear about us?"><br>
  
  News Article<input type="checkbox" value="News Article" name="where did you hear about us?">
  </td>
</tr>
<tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>

 

 </form>
</body>
</html>