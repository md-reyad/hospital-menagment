<?php
$data=$admin_obj->category_select();
if(isset($_POST['btn'])){
   $msg= $admin_obj->doctor_store($_POST, $_FILES);
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
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate method="post" action="" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Doctor Name:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Doctor Name" name="name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Doctor Category:</label>
                            <div class="col-sm-6">
                                <select class="form-control" required="" name="category">
                                    <?php
                                    while ($row=  mysqli_fetch_assoc($data)){   
                                    ?>
                                    <option value="<?php echo $row['id'];?>"><?php echo $row['category_name'];?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Doctor Number:</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-minlength="11" placeholder="Doctor Number" name="number" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Doctor address:</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" required placeholder="doctor address" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"> Education:</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" required placeholder="doctor education" name="education"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description:</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" required placeholder="doctor description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Image:</label>
                            <div class="col-sm-6">
                                <input type="file" data-parsley-validate  name="image">
                            </div>
                        </div>
                       
                </div>
                </div>
                <div class="bg-default content-box  pad20A mrg25T">
                    <button class="btn btn-md btn-primary col-lg-offset-2" name="btn">Save Data</button>
                </div>
            </form>
        </div>
    </div>
</div>-->