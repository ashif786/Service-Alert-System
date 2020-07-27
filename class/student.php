<?php
@ob_start();
session_start();
?>

<?php

class Student
{
    private $conn;
    function __construct() {
     
    $servername = "localhost";
    $dbname = "genetco_dbgadget";
    $username = "genetco_oacc";
    $password = "L)3p=8mMZsR.";
  

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;  
       }

    }


    public function student_list(){
        
       $sql = "SELECT app_id, App_name, DATE_FORMAT(Purchase_date, '%D-%b-%Y') AS Purchase_date , DATE_FORMAT(Expiry_date, '%D-%b-%Y') AS Expiry_date, DATE_FORMAT(Renew_date, '%D-%b-%Y') AS Renew_date, Vendor_name,Price, number_of_users, hardwaresoftware  FROM students ORDER BY app_id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }
    
    public function create_student_info($post_data=array()){
         
       if(isset($post_data['create_student'])){
       $App_name= mysqli_real_escape_string($this->conn,trim($post_data['App_name']));
       $email_address= mysqli_real_escape_string($this->conn,trim($post_data['Purchase_date']));
       $Renew_date= mysqli_real_escape_string($this->conn,trim($post_data['Renew_date']));
       $contact= mysqli_real_escape_string($this->conn,trim($post_data['Expiry_date']));
       $Vendor_name= mysqli_real_escape_string($this->conn,trim($post_data['Vendor_name']));
       $Price= mysqli_real_escape_string($this->conn,trim($post_data['Price']));
       $number_of_users= mysqli_real_escape_string($this->conn,trim($post_data['number_of_users']));
	    $ware= mysqli_real_escape_string($this->conn,trim($post_data['hardwaresoftware']));

       $sql="INSERT INTO students (App_name, Purchase_date, Expiry_date, Vendor_name, Renew_date, Price, number_of_users, hardwaresoftware) VALUES ('$App_name', '$email_address', '$contact', '$Vendor_name', '$Renew_date', '$Price', '$number_of_users', '$ware')";
        
       $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Successfully Created the Data";
               
              header('Location: home.php');
           }
          
       unset($post_data['create_student']);
       }
       
        
    }
    
    public function view_student_by_student_id($id){
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select app_id, App_name, DATE_FORMAT(Purchase_date, '%D-%b-%Y') AS Purchase_date , DATE_FORMAT(Expiry_date, '%D-%b-%Y') AS Expiry_date, DATE_FORMAT(Renew_date, '%D-%b-%Y') AS Renew_date, Vendor_name,Price, number_of_users, hardwaresoftware from students where app_id='$student_id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    public function update_student_by_student_id($id){
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from students where app_id='$student_id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
    public function update_student_info($post_data=array()){
       if(isset($post_data['update_student'])&& isset($post_data['id'])){
           
       $App_name= mysqli_real_escape_string($this->conn,trim($post_data['App_name']));
       $email_address= mysqli_real_escape_string($this->conn,trim($post_data['Purchase_date']));
       $Renew_date= mysqli_real_escape_string($this->conn,trim($post_data['Renew_date']));
       $contact= mysqli_real_escape_string($this->conn,trim($post_data['Expiry_date']));
       $Vendor_name= mysqli_real_escape_string($this->conn,trim($post_data['Vendor_name']));
       $Price= mysqli_real_escape_string($this->conn,trim($post_data['Price']));
       $number_of_users= mysqli_real_escape_string($this->conn,trim($post_data['number_of_users']));
       $student_id= mysqli_real_escape_string($this->conn,trim($post_data['id']));
	   $ware= mysqli_real_escape_string($this->conn,trim($post_data['hardwaresoftware']));
        $sql="UPDATE students SET App_name='$App_name',Purchase_date='$email_address',Expiry_date='$contact',Vendor_name='$Vendor_name',Renew_date='$Renew_date',Price='$Price',number_of_users='$number_of_users',hardwaresoftware='$ware' WHERE app_id =$student_id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Updated the row";
			   header('Location: home.php');
           }
       unset($post_data['update_student']);
       }   
    }
    
    public function delete_student_info_by_id($id){
        
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  students  WHERE app_id =$student_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted the row";
            
           }
       }
         header('Location: home.php'); 
    }
    function __destruct() {
    mysqli_close($this->conn);  
    }
    
}

?>