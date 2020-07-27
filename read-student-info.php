<?php
@ob_start();
session_start();
?>
<?php
include('session.php');
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
      
 }else{
  header('Location: index.php');
 }
   ?>
<div class="container " > 
    
  <div class="row content">
  
             <a  href="home.php"  class="button button-purple mt-12 pull-right">HOME</a> 
     
 <h3>View Data</h3>
       
    
     <hr/>
     
    <label > App Name:</label>
   <?php  if(isset($student_info['App_name'])){echo $student_info['App_name']; }?>

<br/>
    <label>Purchase date:</label>
  <?php  if(isset($student_info['Purchase_date'])){echo $student_info['Purchase_date'];} ?>
    
    <br/>
    <label >Expiry date:</label>
      <?php  if(isset($student_info['Expiry_date'])){echo $student_info['Expiry_date'];} ?>
    <br/>

  <label >renew date:</label>
   <?php  if(isset($student_info['Renew_date'])){echo $student_info['Renew_date'];} ?>
  <br/>
    <label >vendor name:</label>
      <?php  if(isset($student_info['Vendor_name'])){echo $student_info['Vendor_name'];} ?>
    <br/>
 
    <label >Price:</label>
      <?php  if(isset($student_info['Price'])){echo $student_info['Price'];} ?>
    <br/>
     
    <label >Number of users:</label>
      <?php  if(isset($student_info['number_of_users'])){echo $student_info['number_of_users'];} ?>
    <br/>
     <label >Hardware / Software:</label>
      <?php  if(isset($student_info['hardwaresoftware'])){echo $student_info['hardwaresoftware'];} ?>
    <br/>
          

    <a href="<?php echo 'update-student-info.php?id='.$student_info["app_id"] ?>" class="button button-blue">Edit</a>
 
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>



