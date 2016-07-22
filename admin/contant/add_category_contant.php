<?php
if(isset($_POST['btn'])){
   $msg= $admin_obj->categoy_stote($_POST);
}
?>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Category Name
        </h3>
        <?php
        if(isset($msg)){
            echo  $msg;
            unset($msg);
        }
        ?>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Category Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" name="category_name" required class="form-control">
                            </div>
                        </div>
              
                     
                    </div>
                </div>
                <div class="bg-default content-box  pad20A mrg25T">
                    <button class="btn btn-lg btn-primary" name="btn" style="margin: 0px 90px">Save </button>
                </div>
            </form>
        </div>
    </div>
</div>

