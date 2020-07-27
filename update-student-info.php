<?php
@ob_start();
session_start();
?>

<?php
include('session.php');
include 'header.php';
if (isset($_GET['id'])) {
    $student_info = $student_obj->update_student_by_student_id($_GET['id']);
    if (isset($_POST['update_student']) && $_GET['id'] === $_POST['id']) {
        $student_obj->update_student_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="home.php"  class="button button-purple mt-12 pull-right">HOME</a> 
        <h3>Update Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($student_info['app_id'])) {
            echo $student_info['app_id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="App_name"> App Name:</label>
                <input type="text" name="App_name" value="<?php if (isset($student_info['App_name'])) {
                   echo $student_info['App_name'];
        } ?>" id="App_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="Purchase_date">Purchase date:</label>
                <input type="date" class="form-control" value="<?php if (isset($student_info['Purchase_date'])) {
            echo $student_info['Purchase_date'];
        } ?>" name="Purchase_date" id="Purchase_date" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="Expiry_date">Expiry date:</label>
                <input type="date" class="form-control" value="<?php if (isset($student_info['Expiry_date'])) {
            echo $student_info['Expiry_date'];
        } ?>" name="Expiry_date" id="Expiry_date"  maxlength="50">
            </div>
             <div class="form-group">
                <label for="Renew_date">Renew date:</label>
                <input type="date" class="form-control" value="<?php if (isset($student_info['Renew_date'])) {
            echo $student_info['Renew_date'];
        } ?>" name="Renew_date" id="Renew_date"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="Vendor_name">Vendor_name:</label>
                <input type="text" name="Vendor_name" value="<?php if (isset($student_info['Vendor_name'])) {
            echo $student_info['Vendor_name'];
        } ?>" id="Vendor_name" class="form-control"  maxlength="50">
            </div>
             <div class="form-group">
                <label for="Price">Price:</label>
                <input type="text" name="Price" value="<?php if (isset($student_info['Price'])) {
            echo $student_info['Price'];
        } ?>" id="Price" class="form-control"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="country">Number of users:</label>
                <input type="number" name="number_of_users" value="<?php if (isset($student_info['number_of_users'])) {
            echo $student_info['number_of_users'];
        } ?>" id="number_of_users" class="form-control"  maxlength="50">
            </div>
            
            <div class="form-group">
                <label for="gender">Hardware / Software:</label>
                <select class="form-control" name="hardwaresoftware" id="hardwaresoftware">
                    <option value="">Select</option>
                    <option value="Hardware" <?php if (isset($student_info['hardwaresoftware']) && $student_info['hardwaresoftware'] == 'Hardware') {
            echo 'selected';
        } ?>>Hardware</option>
                    <option value="Software" <?php if (isset($student_info['hardwaresoftware']) && $student_info['hardwaresoftware'] == 'Software') {
            echo 'selected';
        } ?>>Software</option>

                </select>

            </div> 
			<a href="home.php"  class="button button-red pull-right">Cancel</a>
            <input type="submit" class="button button-green" name="update_student" value="Update"/>
			 
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>



