<?php
@ob_start();
session_start();
?>
<?php
include('session.php');
include 'header.php';
if (isset($_POST['create_student'])) {
    $student_obj->create_student_info($_POST);
    }
?>
<div class="container"> 
    <div class="row content">
        <a  href="home.php"  class="button button-purple mt-12 pull-right">HOME</a> 
        <h3>Create Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="App_name">Name:</label>
                <input type="text" name="App_name" id="App_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="Purchase_date">Purchase date:</label>
                <input type="date" class="form-control" name="Purchase_date" id="Purchase_date" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="Expiry_date">Expiry date:</label>
                <input type="date" class="form-control" name="Expiry_date" id="Expiry_date"  maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="Renew_date">Renew date:</label>
                <input type="date" class="form-control" name="Renew_date" id="Renew_date" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="Vendor_name">Vendor_name:</label>
                <input type="text" name="Vendor_name" id="Vendor_name" class="form-control"  maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="Price">Price:</label>
                <input type="text" name="Price" id="Price" class="form-control"  maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="country">users:</label>
                <input type="number" name="number_of_users" id="number_of_users" class="form-control"  maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="gender">Hardware / Software:</label>
                <select class="form-control" name="hardwaresoftware" id="hardwaresoftware">
                    <option value="" selected>Select</option>
                    <option value="Hardware" >Hardware</option>
                    <option value="Software" >Software</option>
                </select>
            </div> 
            <input type="submit" class="button button-green  pull-right" name="create_student" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

