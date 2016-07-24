<?php
require '../class/admin_function.php';
$login=new admin_function();

if(isset($_POST['btn'])){
    $msg=$login->forgot_email($_POST);
    
}
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Your Email
        </h3>
        <?php
        if (isset($msg)) {
            echo $msg;
            unset($msg);
        }
        ?>
        <div class="col-md-5">

            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate method="post" action="" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Your Email<span class="required">*</span></label>
                        <div class="controls">
                            <input type="email" name="email" required   class="form-control required"/>
                        </div>
                    </div>

                    <div class="form-actions">
                        <input type="submit" class="btn btn-primary" name="btn" value="send">

                    </div>
                </fieldset>

            </form>
            <!-- END FORM-->
        </div>
    </div>
</div>

