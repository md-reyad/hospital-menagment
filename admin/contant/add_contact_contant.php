<?php

if(isset($_POST['btn'])){
   $msg= $admin_obj->contact_store($_POST);
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
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate method="post" >
                <div class="row">
                    <div class="col-md-8">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Office address:</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" required placeholder="Office address" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Office Number1:</label>
                            <div class="col-sm-6">
                                <input type="number" name="number1" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">office Number2:</label>
                            <div class="col-sm-6">
                                <input type="number" name="number2" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">email:</label>
                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control" required>
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