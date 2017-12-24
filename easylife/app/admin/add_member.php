<?php require_once "../../service/validation_service.php"; ?>
<?php require_once "../../data/member_data_access.php"; ?>
<?php
	$name=$email=$password=$cpassword=$gender=$dob="";
?>

<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name=trim($_POST['name']);
        $email=trim($_POST['email']);
		$password=trim($_POST['password']);
		$cpassword=trim($_POST['cpassword']);
		
		$isValid = true;
        if(empty($email)){
            $isValid = false;
            $emailErr = "*";
			echo "1";
        }
        else if(isValidEmail($email)==false){
            $isValid = false;
            $emailErr = "Invalid email format";
			echo "2";
        }
		
		if(empty($name)){
            $isValid = false;
            $nameErr = "*";
			echo "3";
        }
        else if(isValidPersonName($name)==false){
            $isValid = false;
            $nameErr = "At least two words required, Only letters and white space allowed";
			echo "4";
        }
		
		
		
		else if(empty($password)){
            $isValid = false;
            $nameErr = "*";
			echo "7";
        }
		
		else if(isValidPassword($password)==false){
            $isValid = false;
            $nameErr = "Invalid Password";
			echo "8";
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
			$nameErr = "Invalid Type";
			echo "9";
		}
		
		if($isValid==true){
			$id=getLastMemberIDFromDB()['MAX(Member_ID)'];
			$member['Member_ID']=$id+1;
			$member['Password']=$password;
			$member['Name']=$name;
			$member['Email']=$email;
			$member['Type']=$Type;
			$member['Status']=$Status;
			
			if(addMemberToDB($member)==true){
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
		else
		{
			 echo "Error<hr/>";
		}
    }
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
					<td>Password</td>
					<td>:</td>
					<td><input name="password" type="password" value="<?=$password?>" /></td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Confirm Password</td>
					<td>:</td>
					<td><input name="cpassword" type="password" value="<?=$cpassword?>"/></td>
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
						<input name="dob" type="text" value="<?=$dob?>" />	
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</td>
					<td></td>
				</tr>
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Type</td>
					<td>:</td>
					<td>   
						<input name="Type" type="radio" value="1">Admin
						<input name="Type" type="radio" value="2">Stock Executive
						<input name="Type" type="radio" value="3">Order Executive
						<input name="Type" type="radio" value="4">User
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

