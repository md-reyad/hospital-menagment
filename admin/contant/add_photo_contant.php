<?php
if(isset($_POST['btn'])){
   $msg= $admin_obj->photo_sotre($_POST, $_FILES);
}

?>
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
         Add Slider
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
                            <label class="col-sm-3 control-label">Image:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description:</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" required placeholder=" description" name="description"></textarea>
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
</div>