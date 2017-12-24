<?php require_once "../../service/validation_service.php"; ?>
<?php require_once "../../service/member_service.php"; ?>
<?php
	$name=$uname=$email=$userName=$password=$gender=$dob="";
?>
<form method="post">
	<fieldset>
		<legend><b>Add Member</b></legend>
			<br/>
			<table>
			<tr>
			<td>
			<table width="100%">
				<tr>
					<td width="130"></td>
					<td width="10"></td>
					<td width="230"></td>
					<td></td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><input name="name" type="text"  value="<?=$name?>"></td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>
						<input name="email" type="text"  value="<?=$email?>"/>
						<abbr title="hint: sample@example.com"><b>i</b></abbr>
					</td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>User Name</td>
					<td>:</td>
					<td><input name="userName" type="text" value="<?=$uname?>"/></td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input name="password" type="password" value="<?=$password?>" /></td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Confirm Password</td>
					<td>:</td>
					<td><input name="confirmPassword" type="password" value="<?=$cpassword?>/></td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td>   
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="Other">Other
					</td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td valign="top">Date of Birth</td>
					<td valign="top">:</td>
					<td>
						<input name="dob" type="text" value="<?=$dob?>/>	
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</td>
					<td></td>
				</tr>
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Type</td>
					<td>:</td>
					<td>   
						<input name="Type" type="radio" value="Admin">Admin
						<input name="Type" type="radio" value="Stock Executive">Stock Executive
						<input name="Type" type="radio" value="Order Executive">Order Executive
						<input name="Type" type="radio" value="User">User
					</td>
					<td></td>
				</tr>	
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td><input name="Blocked" type="checkbox"> Blocked</td>
		
					<td></td>
				</tr>
			</table>
			</td>
			<td>
			<table>
					<tr><td><img align="top" src="../resources/Image1.JPG" width="167"/></td></tr>
					<tr><td><input type="file" name="propic" accept="image/*"/>
							</td></tr>
									</table>
									</td>
									</tr>
									</table>
			<hr/>
			<!--<a href="successmember.php?a=uedit"><button>Add</button></a> -->
			<input type="submit" value="Add"/>
			<input type="reset">
	</fieldset>
</form>

<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name=trim($_POST['name']);
        $email=trim($_POST['email']);
		$uname=trim($_POST['uname']);
		$password=trim($_POST['password']);
		$cpassword=trim($_POST['cpassword']);
		
		$isValid = true;
        if(empty($email)){
            $isValid = false;
            $emailErr = "*";
        }
        else if(isValidEmail($email)==false){
            $isValid = false;
            $emailErr = "Invalid email format";
        }
		
		if(empty($name)){
            $isValid = false;
            $nameErr = "*";
        }
        else if(isValidPersonName($name)==false){
            $isValid = false;
            $nameErr = "At least two words required, Only letters and white space allowed";
        }
		
		else if(empty($uname)){
            $isValid = false;
            $nameErr = "*";
        }
		
		else if(isValidPersonUserName($uname)==false){
            $isValid = false;
            $nameErr = "At least two words required, Only letters and white space allowed";
        }
		
		else if(empty($password)){
            $isValid = false;
            $nameErr = "*";
        }
		
		else if(isValidPassword($password)==false){
            $isValid = false;
            $nameErr = "Invalid Password";
        }
		
		if (isset($_POST['Blocked']))
		{
			$Status="Blocked";
		}
		else
		{
			$Status="Active";
		}
		
		if (isset($_POST['Type']))
		{
			$Type=$_POST['Type'];
		}
		else
		{
			$isValid = false;
		}
		
		if($isValid==true){
			$id=getLastMemberID()['Member_ID'];
			$member['Member_ID']=$id;
			$member['User_Name']=$uname;
			$member['Password']=$password;
			$member['Name']=$name;
			$member['Email']=$email;
			$member['Type']=$Type;
			$member['Status']=$Status;
			
			if(addMember($member)==true){
                echo "<script>
                        alert('Record Added');
                        document.location='a_success.php';
                     </script>";
                die();
            }
            else{
                echo "Internal Error<hr/>";
            }
		
		}
    }