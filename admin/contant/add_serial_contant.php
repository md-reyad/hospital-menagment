<?php
$data = $admin_obj->category_select();
$data1 = $admin_obj->select_doctor();
if (isset($_POST['btn'])) {
    $msg = $admin_obj->serial_store($_POST);
}
?>
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Form validation
        </h3>
        <?php
        if (isset($msg)) {
            echo $msg;
            unset($msg);
        }
        ?>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate method="post" action="">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Your Name:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Your Name" name="name" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Your Old:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Your Year" name="old" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Your Number:</label>
                            <div class="col-sm-6">
                                <input type="number" placeholder="Your Number" name="number" required class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Doctor Category:</label>
                            <div class="col-sm-6">
                                <select class="form-control" required name="category">
                                    <option value="">-----&&select&&------</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Doctor Name:</label>
                            <div class="col-sm-6">
                                <select class="form-control" required name="doctor_name">
                                         <option value="">-----&&select&&------</option>
                                    <?php
                                    while ($row1 = mysqli_fetch_assoc($data1)) {
                                        ?>
                                        <option value="<?php echo $row1['name']; ?>"><?php echo $row1['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Your  address:</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" required placeholder="Your address" name="address"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="bg-default content-box  pad20A mrg25T">
                    <button class="btn btn-md btn-primary col-lg-offset-2" name="btn">send</button>
                </div>
            </form>
        </div>
    </div>
</div>-->