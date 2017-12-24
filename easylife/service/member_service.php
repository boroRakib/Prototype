<?php require_once "../data/member_data_access.php"; ?>
<?php
    function addMember($member){
        return addMemberToDb($member);
    }
    
    function editMember($member){
        return editMemberToDb($member);
    }
    
    function deleteMember($memberId){
        return deleteMemberFromDb($memberId);
    }
    
    function getAllMembers(){
        return getAllMembersFromDb();
    }
    
    function getMemberById($memberId){
        return getMemberByIdFromDb($memberId);
    }
    
    function getMembersByName($memberName){
        return getMembersByNameFromDb($memberName);
    }
    
    function getMembersByEmail($memberEmail){
        return getMembersByEmailFromDb($memberEmail);
    }
    
    function getMembersByNameOrEmail($key){
        return getMembersByNameOrEmailFromDb($key);
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