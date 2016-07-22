<?php
//$data=$admin_obj->category_select();
$edit_Data=$admin_obj->edit_contant($_GET);
$row=  mysqli_fetch_assoc($edit_Data);
if(isset($_POST['btn'])){
   $msg= $admin_obj->update_contact($_POST);
}

?>
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Form validation
        </h3>
        <?php
        if(isset($msg)){
            echo  $msg;
            unset($msg);
        }
        ?>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" name="edit_form" data-parsley-validate method="post" action="" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Doctor Name" name="address" value="<?php echo $row['address'] ;?>" required class="form-control">
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Doctor Number1:</label>
                            <div class="col-sm-6">
                                
                                <input type="text" data-parsley-minlength="11"  value="<?php echo $row['number1'] ;?>" placeholder=" Number" name="number1" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"> Number 2:</label>
                            <div class="col-sm-6">
                                
                                <input type="text" data-parsley-minlength="11"  value="<?php echo $row['number2'] ;?>" placeholder=" Number 2" name="number2" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">email:</label>
                            <div class="col-sm-6">
                                <textarea class="form-control"  required placeholder="doctor address" name="email"><?php echo $row['email'] ;?></textarea>
                            </div>
                        </div>
                        <
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                       
                </div>
                </div>
                <div class="bg-default content-box  pad20A mrg25T">
                    <button class="btn btn-md btn-primary col-lg-offset-2" name="btn">Save Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
               document.forms['edit_form'].elements['category'].value = "<?php echo $row['category'] ;?>";
        </script> 