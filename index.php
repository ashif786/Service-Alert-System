<?php
   //include('session.php');
?>
<?php
 
//include 'header.php';
//$student_list = $student_obj->student_list();
?>
  <head>
         
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">  
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="./assets/style.css">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
 
 <!-- Optional theme -->
 <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"  >
 
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/hover.css">
 <!--bootstrap ends-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css">
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!--google font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
  <!--angular js link -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
     </head>
<div class="container-fluid" style="margin:0 auto; width:96%;"> 
    <div class="row content">
	  <!--<h1>Welcome <?php //echo $login_session; ?></h1>--> <!--takes the username to welcome-->
<div class="row">

      <div class="col-sm-3 col-sm-offset-4">
      
      <img src="assets/images/BrandMark.png" alt="BrandMark"/>
      </div>
     
</div>
      
     <h1 style='font-size: large;font-weight: bold;text-align: center;'>Genetco's Service Alert System</h1> 
      
       
        <div class="col-sm-4 col-sm-offset-4"><br><br>
       <form action="log.php" method="post">
  <div class="form-group">
    <label for="email">USER NAME:</label>
    <input type="text" name="username" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">PASSWORD:</label>
    <input type="password"  name= "password" class="form-control" id="pwd">
  </div>
   
  <button type="submit" class="btn btn-info">LOGIN</button>
</form>
        </div>


		
        
 
        
      <br>
    </div>
    
</div> 
        
 
  