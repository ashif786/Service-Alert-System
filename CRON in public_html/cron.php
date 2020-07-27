<?php
session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'genetco_oacc');
   define('DB_PASSWORD', 'L)3p=8mMZsR.');
   define('DB_DATABASE', 'genetco_dbgadget');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    
?>
<?php
 
include 'cron-header.php';
$student_list = $student_obj->student_list();
?>
<div class="container"> 
    <div class="row content">
	  <!--<h1>Welcome <?php //echo $login_session; ?></h1>--> <!--takes the username to welcome-->
      
         
       
         
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
  else if(strtotime($row['Expiry_date']) < strtotime('7 days') || $row['Expiry_date'] > strtotime('1 days')) //  red
    {
		
		//here given  2 mail send code in 2 if statements  whom to send the email for perticular apps
		
	if($row["App_name"]=='FIRE ESTINGUISER'){
	$red =  $row["App_name"];
	$date=  $row["Expiry_date"];	 
    $to = "ashif@genetco.net, wabbas@genetco.net, taj@genetco.net,zeeshan@genetco.net"; // this is your Email address. If the mail goes to spam then go to spam and make it not spam then all mails will hit to the inbox
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
		if($row["App_name"]=='Genetco Domain' || $row["App_name"]=='Genetco Hosting' || $row["App_name"]=='Oacc Domain' || $row["App_name"]=='Oacc & GCE Hosting' || $row["App_name"]=='Gce Oman' || $row["App_name"]=='SMS Service Subscription' || $row["App_name"]=='TREND MICRO ANTI VIRUS' || $row["App_name"]=='AMC-NET App,HP Switches,IBM and HP Servers'|| $row["App_name"]=='Parallels Remote Application Server' || $row["App_name"]=='Office 365 Suscription ( OACCOMAN.COM)' || $row["App_name"]=='Office 365 Suscription ( GENETCO.NET) ' || $row["App_name"]=='Ftgroupholding.com' || $row["App_name"]=='FT Gmail 100 GB Space for Mr.Faisal')
		{
	$red =  $row["App_name"];
	$date=  $row["Expiry_date"];	 
    $to = "ashif@genetco.net, wabbas@genetco.net, taj@genetco.net,zeeshan@genetco.net, naveen@genetco.net"; // this is your Email address. If the mail goes to spam then go to spam and make it not spam then all mails will hit to the inbox
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
	else if(strtotime($row['Expiry_date']) < strtotime('1 days')) //  red
    {
		
		//here given  2 mail send code in 2 if statements  whom to send the email for perticular apps
		
	if($row["App_name"]=='FIRE ESTINGUISER'){
	$red =  $row["App_name"];
	$date=  $row["Expiry_date"];	 
    $to = "ashif@genetco.net, wabbas@genetco.net, taj@genetco.net,zeeshan@genetco.net"; // this is your Email address. If the mail goes to spam then go to spam and make it not spam then all mails will hit to the inbox
    $from ='service.system.alert@alert.net'; // this is the sender's Email address
    $url='http://www.alert-system.oaccoman.com';	
	$alert='This App expired on'.' '.$date.'.'.' Please check your issue tracker page to know more. ';
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
		if($row["App_name"]=='Genetco Domain' || $row["App_name"]=='Genetco Hosting' || $row["App_name"]=='Oacc Domain' || $row["App_name"]=='Oacc & GCE Hosting' || $row["App_name"]=='Gce Oman' || $row["App_name"]=='SMS Service Subscription' || $row["App_name"]=='TREND MICRO ANTI VIRUS' || $row["App_name"]=='AMC-NET App,HP Switches,IBM and HP Servers'|| $row["App_name"]=='Parallels Remote Application Server' || $row["App_name"]=='Office 365 Suscription ( OACCOMAN.COM)' || $row["App_name"]=='Office 365 Suscription ( GENETCO.NET) ' || $row["App_name"]=='Ftgroupholding.com' || $row["App_name"]=='FT Gmail 100 GB Space for Mr.Faisal')
		{
	$red =  $row["App_name"];
	$date=  $row["Expiry_date"];	 
    $to = "ashif@genetco.net, wabbas@genetco.net, taj@genetco.net,zeeshan@genetco.net, naveen@genetco.net"; // this is your Email address. If the mail goes to spam then go to spam and make it not spam then all mails will hit to the inbox
    $from ='service.system.alert@alert.net'; // this is the sender's Email address
    $url='http://www.alert-system.oaccoman.com';	
	$alert='This App expired on'.' '.$date.'.'.' Please check your issue tracker page to know more. ';
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

?>  
        
  