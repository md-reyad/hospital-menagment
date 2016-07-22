<?php
if(isset($_POST['btn'])){
   $msg= $admin_obj->footer_store($_POST);
}

?>
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero" style="margin: 20px 150px 50px">
         Add Footer
        </h3>
        <?php
        if (isset($msg)) {
            echo $msg;
            unset($msg);
        }
        ?>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate method="post" action="" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Footer Name:</label>
                            <div class="col-sm-6">
                                <input class="form-control" required placeholder="footer_name" name="footer_name">
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