<?php require_once "../data/member_data_access.php"; ?>
<?php
    function addInvoice($invoice){
        return addInvoiceToDb($invoice);
    }
    
    function addInvoice($invoice){
        return addInvoiceToDb($invoice);
    }
    
    function deleteInvoice($invoice){
        return deleteInvoiceFromDb($invoice);
    }
    
    function getAllInvoices(){
        return getAllInvoicesFromDb();
    }
    
    function getInvoiceByCode($Invoice_Code){
        return getInvoiceByCodeFromDB($Invoice_Code);
    }
    
    function getInvoiceByMember($Member_ID){
        return getInvoiceByMemberFromDB($Member_ID);
    }
    
    function getInvoicesByDate($Date){
        return getInvoicesByDateFromDB($Date);
    }
    
    function getInvoicesByStatus($Status){
        return getInvoicesByStatusFromDB($Status);
    }
	function getInvoicesByPayment($Payment_Status){
        return getInvoicesByPaymentFromDB($Payment_Status);
    }
    

?>