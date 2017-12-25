<?php require_once "data_access.php"; ?>
<?php
	function addMemberToDB($member)
	{
        $sql = "INSERT INTO member(Member_ID, Password, Name, Email, Type, Status) VALUES ('$member[Member_ID]', '$member[Password]', '$member[Name]', '$member[Email]', '$member[Type]', '$member[Status]')";
        $result = executeSQL($sql);
        return $result;
    }

	function editMemberToDB($member)
	{
        $sql = "UPDATE member SET Password='$member[Password]',Name='$member[Name]',Email='$member[Email]',Type='$member[Type]',Status='$member[Status]' WHERE Member_ID='$member[Member_ID]'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function changeMemberPasswordToDB($pass,$id)
	{
        $sql = "UPDATE member SET Password='$pass' WHERE Member_ID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function updateLastActiveToDB($id)
	{
        $sql = "UPDATE member SET Last_Logged_in=GETDATE() WHERE Member_ID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function deleteMemberFromDB($member)
	{
        $sql = "DELETE FROM member WHERE Member_ID='$member[Member_ID]'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function getAllMembersFromDB()
	{
        $sql = "SELECT * FROM member";        
        $result = executeSQL($sql);
        
        $members = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $members[$i] = $row;
        }
       // var_dump($members);
        return $members;
    }
	
	function getLastMemberIDFromDB()
	{
        $sql = "SELECT MAX(Member_ID) FROM member";        
        $result = executeSQL($sql);
        
        $member = mysqli_fetch_assoc($result);
        
        return $member;
    }
	
	function getMemberByIDFromDB($Member_ID)
	{
        $sql = "SELECT * FROM member WHERE Member_ID=$Member_ID";        
        $result = executeSQL($sql);
        
        $member = mysqli_fetch_assoc($result);
        
        return $member;
    }
	
	function getMemberByUserNameFromDB($User_Name)
	{
        $sql = "SELECT * FROM member WHERE User_Name=$User_Name";        
        $result = executeSQL($sql);
        
        $member = mysqli_fetch_assoc($result);
        
        return $member;
    }

	function getMembersByNameFromDB($Name)
	{
        $sql = "SELECT * FROM member WHERE Name LIKE '%$Name%'";
        $result = executeSQL($sql);
        
        $members = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $products[$i] = $row;
        }
        
        return $members;
    }
	
	function getMemberByEmailFromDB($Email)
	{
        $sql = "SELECT * FROM member WHERE Email=$Email";        
        $result = executeSQL($sql);
        
        $member = mysqli_fetch_assoc($result);
        
        return $member;
    }
	
	// function getMembersByTypeFromDB($Type)
	// {
        // $sql = "SELECT * FROM member WHERE Type=$Type";
        // $result = executeSQL($sql);
        
        // $members = array();
        // for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            // $products[$i] = $row;
        // }
        
        // return $members;
    // }
	
	function getMembersByTypeFromDB($Status)
	{
        $sql = "SELECT * FROM member WHERE Status=$Status";
        $result = executeSQL($sql);
        
        $members = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $products[$i] = $row;
        }
        
        return $members;
    }
?>
	
	