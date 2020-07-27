<!DOCTYPE html>
<html>
 
    <body>
       
  <?php
include('db.php');

$sql = "SELECT app_id, App_name, DATE_FORMAT(Purchase_date, '%D-%b-%Y') AS Purchase_date , DATE_FORMAT(Expiry_date, '%D-%b-%Y') AS Expiry_date, DATE_FORMAT(Renew_date, '%D-%b-%Y') AS Renew_date, Vendor_name,Price, number_of_users, hardwaresoftware  FROM students ORDER BY app_id asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<div class='table-responsive'><table class='table'><thead><tr> <th>App name</th><th>Purchase date</th><th>Expiry date</th><th>Renew date</th><th>Vendor name</th><th>Price</th><th>Number of Users</th><th>Wares</th></tr></thead>";
    
    while($row = $result->fetch_assoc()) {  
        $id=$row["App_id"];
        echo " <tbody><tr class='success'>".
             "<td>".$row["App_name"]."</td>".
             "<td>".$row["Purchase_date"]."</td>".
             "<td>".$row["Expiry_date"]."</td>".
             "<td>".$row["Renew_date"]."</td>".
             "<td>".$row["Vendor_name"]."</td>". 
             "<td>".$row["Price"]."</td>".
             "<td>".$row["Number_of_users"]."</td>".
			 "<td>".$row["Number_of_users"]."</td>".
		"<td>".$row["hardwaresoftware"]."</td>".
             "<td><div   style='color: white; background: #ec1d24d1; text-align: center; border-radius: 10px;'><a href='update.php' style='text-decoration: none; color: white;'>Modify</a></div></td>".
             "<tr>";
               
              
    }
   
    echo "</table></div>";
} else {
    echo "0 results";
}
$conn->close();
?>  
     
        
    
<div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
    
       
      
    </div>
  </div>
        
        
    
    </body>
    
  
</html>
 

