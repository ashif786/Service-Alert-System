<?php
   include('session.php');
?>
<?php
 
include 'header.php';
$student_list = $student_obj->student_list();
?>
<div class="container-fluid" style="margin:0 auto; width:96%;"> 
    <div class="row content">
	  <!--<h1>Welcome <?php //echo $login_session; ?></h1>--> <!--takes the username to welcome-->
      
        <a  href="create-student-info.php"  class="button button-purple mt-12 ">Add Data</a> 
         <a  href="logout.php"  class="button button-purple mt-12  pull-right">Sign Out</a> 
       
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
		<div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>App Name</th>
                    <th>Purchase Date</th>
                    <th>Expiry Date</th>
                    <th>Renew Date</th>
                    <th>Vendor name</th>
                    <th>Price</th>
                    <th>Number of Users</th>
                    <th>Hardware / Software</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
 
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
      if(strtotime($row['Expiry_date']) < strtotime('30 days') && strtotime($row['Expiry_date']) > strtotime('7 days') ) //  yellow
    {
       		  
		 
     ?>
        <tr>
        <td style='background-color: #eae667;width: 250px;'><?php echo $row["App_name"] ?></td>
        <td style='background-color: #eae667;'><?php echo $row["Purchase_date"] ?></td>
        <td style='background-color: #eae667;'><?php echo $row["Expiry_date"] ?></td>
        <td style='background-color: #eae667;'><?php echo $row["Renew_date"] ?></td>
        <td style='background-color: #eae667;'><?php echo $row["Vendor_name"] ?></td>
        <td style='background-color: #eae667;'><?php echo $row["Price"] ?></td>
        <td style='background-color: #eae667;'><?php echo $row["number_of_users"] ?></td>
        <td style='background-color: #eae667;'><?php echo $row["hardwaresoftware"] ?></td>
        <td class="text-right">
        <a  href="<?php echo 'delete-student-info.php?id=' . $row["app_id"] ?>" onclick= "return confirm('Do you want to delete the row?');" class="button button-red">Delete</a>  
        <a  href="<?php echo 'update-student-info.php?id=' . $row["app_id"] ?>" class="button button-blue">Edit</a>  
        <a href="<?php echo 'read-student-info.php?id=' . $row["app_id"] ?>" class="button button-green">View</a>
        </td>
        </tr>
    <?php
  }
  else if(strtotime($row['Expiry_date']) < strtotime('7 days')) //  red
    {
		 
  ?>
		 
        <tr>
        <td style='background-color: #f15f5f;width: 250px;'><?php echo $row["App_name"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Purchase_date"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Expiry_date"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Renew_date"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Vendor_name"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Price"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["number_of_users"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["hardwaresoftware"] ?></td>
        <td class="text-right">
        <a  href="<?php echo 'delete-student-info.php?id=' . $row["app_id"] ?>" onclick= "return confirm('Do you want to delete the row?');" class="button button-red">Delete</a>  
        <a  href="<?php echo 'update-student-info.php?id=' . $row["app_id"] ?>" class="button button-blue">Edit</a>  
        <a href="<?php echo 'read-student-info.php?id=' . $row["app_id"] ?>" class="button button-green">View</a>
        </td>
        </tr>    
            
            <?php
			 
    }
    else if(strtotime($row['Expiry_date']) > strtotime('30 days') ) //  green
    {
    ?>
       <tr>
        <td style='background-color: #45b331 ;width: 250px;'><?php echo $row["App_name"] ?></td>
        <td style='background-color: #45b331 ;'><?php echo $row["Purchase_date"] ?></td>
        <td style='background-color: #45b331 ;'><?php echo $row["Expiry_date"] ?></td>
        <td style='background-color: #45b331 ;'><?php echo $row["Renew_date"] ?></td>
        <td style='background-color: #45b331 ;'><?php echo $row["Vendor_name"] ?></td>
        <td style='background-color: #45b331 ;'><?php echo $row["Price"] ?></td>
        <td style='background-color: #45b331 ;'><?php echo $row["number_of_users"] ?></td>
        <td style='background-color: #45b331;'><?php echo $row["hardwaresoftware"] ?></td>
        <td class="text-right">
        <a  href="<?php echo 'delete-student-info.php?id=' . $row["app_id"] ?>" onclick= "return confirm('Do you want to delete the row?');" class="button button-red">Delete</a>  
        <a  href="<?php echo 'update-student-info.php?id=' . $row["app_id"] ?>" class="button button-blue">Edit</a>  
        <a href="<?php echo 'read-student-info.php?id=' . $row["app_id"] ?>" class="button button-green">View</a>
        </td>
        </tr>      
    <?php
}}}
?>
           </tbody>
        </table></div>
 
       <div class="col-sm-4">
        EXPIRED/GOING TO EXPIRE WITHIN A WEEK <div style='background: #f15f5f; padding: 3px;'></div>
    </div>   
         <div class="col-sm-3">
        LESS THAN A MONTH TO EXPIRE<div style='background: #eae667; padding: 3px;'></div>
    </div> 
         <div class="col-sm-3">
        MORE THAN A MONTH TO EXPIRE<div style='background: #45b331; padding: 3px;'></div>
    </div> 
      <br>
    </div>
    
</div> 
        
 
<?php
 
include 'footer.php';
 
?>  