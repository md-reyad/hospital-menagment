
<?php
if(isset($_POST['changePassword'])){
     $msg= $admin_obj->change_password($_POST);
  
}          
?>
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
  Change your password
        </h3>
        <?php
        if (isset($msg)) {
            echo $msg;
            unset($msg);
        }
        ?>
        <div class="example-box-wrapper">

                     <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate method="post" action="" enctype="multipart/form-data">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label">Old Password<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="password" name="old_password"   class="form-control required"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">new password<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="password" name="new_password" required data-required="1" class="form-control">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Confirm password<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="confirm_password" type="password" required class="form-control">
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary" name="changePassword" value="change">

                            </div>
                        </fieldset>

                    </form>
                    <!-- END FORM-->
                </div>
            </div>
</div>

