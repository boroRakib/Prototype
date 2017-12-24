<?php require_once "../data/member_data_access.php"; ?>
<?php
    function addReport($report){
        return addReportToDb($report);
    }
    
    function addReport($report){
        return addReportToDb($report);
    }
    
    function deleteReport($report){
        return deleteReportFromDb($report);
    }
    
    function getAllReports(){
        return getAllReportsFromDb();
    }
    
    function getReportByCode($Report_Code){
        return getReportByCodeFromDB($Report_Code);
    }
    
    function getReportByTitle($Report_Title){
        return getReportByTitleFromDB($Report_Title);
    }
    
    function getReportsByMember($Member_ID){
        return getReportsByMemberFromDB($Member_ID);
    }
	 function getReportsByStatus($Status){
        return getReportsByStatusFromDB($Status);
    }
	 function getReportsByDate($Date){
        return getReportsByDateFromDB($Date);
    }
  

?>