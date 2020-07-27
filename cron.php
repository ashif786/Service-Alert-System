<?php
   include('session.php');
?>
<?php
 
include 'header.php';
$student_list = $student_obj->student_list();
?>
<div class="container"> 
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
        <td style='background-color: #eae667;'><?php echo $row["App_name"] ?></td>
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
		$red =  $row["App_name"];
		$date=  $row["Expiry_date"];
  ?>
		 
        <tr>
        <td style='background-color: #f15f5f;'><?php echo $row["App_name"] ?></td>
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
        <td style='background-color: #45b331 ;'><?php echo $row["App_name"] ?></td>
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
        </table>
<div class="row">
       <div class="col-sm-4">
        EXPIRED/GOING TO EXPIRE WITHIN A WEEK <div style='background: #f15f5f; padding: 3px;'></div>
    </div>   
         <div class="col-sm-3">
        LESS THAN A MONTH TO EXPIRE<div style='background: #eae667; padding: 3px;'></div>
    </div> 
         <div class="col-sm-3">
        MORE THAN A MONTH TO EXPIRE<div style='background: #45b331; padding: 3px;'></div>
    </div> 
    </div> 
    </div>
    
</div>
 
<?php
if(strtotime($row['Expiry_date']) < strtotime('10 days')){
    $to = "ashif@genetco.net, taj@genetco.net"; // this is your Email address. If the mail goes to spam then go to spam and make it not spam then all mails will hit to the inbox
    $from ='service.system.alert@alert.net'; // this is the sender's Email address
    $url='http://www.alert-system.oaccoman.com';	
	$alert='This App is going to expire on'.' '.$date.'.'.' Please check your issue tracker page to know more. ';
	$subject = "Service Going to Expire";
	$thank='Thank You!';
	//$app= $row["App_name"];	 
    //$phone = $_POST['phone'];
	//$city=$_POST['city'];
	 //$yyy= '<table><tbody><tr><td>'.$row["App_name"].'</td></tr></tbody></table>'; 
    //$subject2 = "Copy of your form submission";
    $message = "App Name:".$red."\n\n" . "Message:".$alert."\n\n" .$url."\n\n" .$thank; //$red is available in if statement above
	
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
	//$headers .= "CC: ashif@genetco.net\r\n";
	 
	
    //$headers .= "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from); // sends a copy of the message to the sender
      
    // You can also use header('Location: thank_you.php'); to redirect to another page.
	
    }
?>  
        
 
<?php
 
include 'footer.php';
 
?>  