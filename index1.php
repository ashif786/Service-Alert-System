<?php
include 'header.php';
$student_list = $student_obj->student_list();
?>
<div class="container"> 
    <div class="row content">
        <a  href="create-student-info.php"  class="button button-purple mt-12 pull-right">Add Data</a> 
        
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
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
 
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     //$date= date("Y-m-d");//current date
     $expire= strtotime($row["Expiry_date"]);//timestamp
    // $dated=date("Y-m-d", $expire);//time stamp to date
     //$days_diff= date_diff($dated ,$date);
     $now = time();
    
    
    // $datediff=0;
     //if($expire > $now  )
     
        //echo 'yes';
        $datediff = ($expire)- ($now);
        $datediff=$datediff/86400;
        //echo $datediff.'<br>';
     
     //echo $datediff.'<br>'; 
     //$datediff = $datediff / 86400;
     // echo (strtotime($expire) );
      if( $datediff < 30 && $datediff > 7 ) //  yellow
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
        <td class="text-right">
        <a  href="<?php echo 'delete-student-info.php?id=' . $row["app_id"] ?>" onclick= "return confirm('Do you want to delete the row?');" class="button button-red">Delete</a>  
        <a  href="<?php echo 'update-student-info.php?id=' . $row["app_id"] ?>" class="button button-blue">Edit</a>  
        <a href="<?php echo 'read-student-info.php?id=' . $row["app_id"] ?>" class="button button-green">View</a>
        </td>
        </tr>
    <?php
  }
  //else if( $date >= $row['Expiry_date']) //  red
  else if(  $datediff <= 7) //  red
    {
  ?>
         <tr>
        <td style='background-color: #f15f5f;'><?php echo $row["App_name"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Purchase_date"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Expiry_date"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Renew_date"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Vendor_name"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["Price"] ?></td>
        <td style='background-color: #f15f5f;'><?php echo $row["number_of_users"] ?></td>
        <td class="text-right">
        <a  href="<?php echo 'delete-student-info.php?id=' . $row["app_id"] ?>" onclick= "return confirm('Do you want to delete the row?');" class="button button-red">Delete</a>  
        <a  href="<?php echo 'update-student-info.php?id=' . $row["app_id"] ?>" class="button button-blue">Edit</a>  
        <a href="<?php echo 'read-student-info.php?id=' . $row["app_id"] ?>" class="button button-green">View</a>
        </td>
        </tr>    
            
            <?php
    }
    //else if(strtotime($row['Expiry_date']) < strtotime('30 days') ) //  green
    else if ($datediff  > 30 )
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
       <div class="col-sm-3">
        EXPIRED <div style='background: #f15f5f; padding: 3px;'></div>
    </div>   
         <div class="col-sm-3">
        LESS A MONTH TO EXPIRE<div style='background: #eae667; padding: 3px;'></div>
    </div> 
         <div class="col-sm-3">
        MORE THAN A MONTH TO EXPIRE<div style='background: #45b331; padding: 3px;'></div>
    </div> 
    </div> 
    </div>
    
</div>
<?php  
include 'footer.php'; 
 

?>   
