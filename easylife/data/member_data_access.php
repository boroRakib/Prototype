<?php require_once "data_access.php"; ?>
<?php
	function addMemberToDB($member)
	{
        $sql = "INSERT INTO member(Member_ID, User_Name, Password, Name, Email, Type, Image, Status) VALUES ('$member[Member_ID]', '$member[User_Name]', '$member[Password', '$member[Name]', '$member[Email]', '$member[Type]', '$member[Image]', '$member[Status]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	function editMemberToDb($member)
	{
        $sql = "UPDATE member SET User_Name='$member[User_Name]',Password='$member[Password]',Name='$member[Name]',Email='$member[Email]',Type='$member[Type]',Image='$member[Image]',Status='$member[Status]',Member_Since='$member[Member_Since]',Last_Logged_in='$member[Last_Logged_in]',Total_Purchase='$member[Total_Purchase] WHERE Member_ID='$member[Member_ID]'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function deleteMemberFromDb($member)
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
        
        return $members;
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
	
	function getMembersByTypeFromDB($Type)
	{
        $sql = "SELECT * FROM member WHERE Type=$Type";
        $result = executeSQL($sql);
        
        $members = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $products[$i] = $row;
        }
        
        return $members;
    }
	
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
	
	