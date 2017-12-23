<?php require_once "data_access.php"; ?>
<?php
	function addMemberToDB($member)
	{
        $sql = "INSERT INTO member(Member_ID, User_Name, Password, Name, Email, Type, Image, Status) VALUES ('$member[Member_ID]', '$member[User_Name]', '$member[Password', '$member[Name]', '$member[Email]', '$member[Type]', '$member[Image]', '$member[Status]')";
        $result = executeSQL($sql);
        return $result;
    }