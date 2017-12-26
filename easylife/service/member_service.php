<?php require_once "../data/member_data_access.php"; ?>
<?php
    function addMember($member){
        return addMemberToDB($member);
    }
    
    function editMember($member){
        return editMemberToDB($member);
    }
    
    function deleteMember($memberId){
        return deleteMemberFromDB($memberId);
    }
    
    function getAllMembers(){
        return getAllMembersFromDB();
    }
    
	
	
    function getMemberById($memberId){
        return getMemberByIdFromDB($memberId);
    }
    
    function getMembersByName($memberName){
        return getMembersByNameFromDB($memberName);
    }
    
    function getMembersByEmail($memberEmail){
        return getMembersByEmailFromDB($memberEmail);
    }
    
    function getMembersByNameOrEmail($key){
        return getMembersByNameOrEmailFromDB($key);
    }
    
    function isUniqueMemberEmail($memberEmail){
        $members  = getAllMembers();
        $isUnique = true;
        foreach($members as $member){
            if($member['email']==$memberEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
	 function changePassword($memberId){
        $members  = getAllMembers();
        $isChange = true;
        foreach($members as $member){
            if($member['pas']==$memberEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
	 }
    
    function isUniqueMemberEmailForUpdate($memberId, $memberEmail){
        $members  = getAllMembers();
        $isUnique = true;
        foreach($members as $member){
            if($member['id']!=$memberId && $member['email']==$memberEmail){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
    
    function isValidMember($memberId){
        $members = getAllMembers();
        $isValid = false;
        foreach($members as $member){
            if($member['id']==$memberId){
                $isValid = true;
                break;
            }
        }
        return $isValid;
    }
?>