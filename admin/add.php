<?php include('includes/header.php'); ?>
<?php require_once('includes/sidebar.php'); ?>
<?php
include('db.php');
if(isset($_POST['save'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $pass =$_POST['password'];
    $address =$_POST['address'];
    $phone =$_POST['phone'];
    $department =$_POST['department_id'];
    echo 'name is:'.$name;
}
?>



<div class="content-wrapper">
    <section class="content-header">
        <h1>Add Doctor</h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            add Doctor
                        </h3>
                    </div>
                    <?php
                    
                    echo 'name is:'.$name;
                    
                    ?>
                    <div class="box-body">
                     <form action="" method="post">
                      <div class="form-group">
                       <label for="">Name</label>
                        <input type="text" name="name"class ="form-control" required>
                         </div>
                         <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email"class ="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password"class ="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="">Address</label>
                        <textarea name="address" id="" rows="7" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone"class ="form-control"required>
                        </div>
                        <div class="form-group">
                        <label for="">Department</label>
                        <select name="department_id" class="form-control" required="">
                                <option value="">Select Department</option>
                        </select>
                         </div>
                         <input type="submit"value="Save"class="btn btn-success">
                        
                        </form>                                          
                    </div>
                    <div class="box-footer">
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once('includes/footer.php'); ?>    

  