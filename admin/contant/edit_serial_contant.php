<?php
$id=$admin_obj->edit_serial($_GET);
$result=  mysqli_fetch_assoc($id);
if (isset($_POST['btn'])) {
    $msg = $admin_obj->serial_update($_POST);
}
?>
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
       
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
                            <label for="" class="col-sm-4 control-label">Time</label>
                            <div class="col-sm-8">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" value="<?php echo $result['your_time'];?>" name="your_time" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Date</label>
                            <div class="col-sm-8">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" name="your_date" value="02/16/12" data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Date</label>
                            <div class="col-sm-8">
                                <div class="input-prepend input-group">
                                   <select class="form-control" required name="status">
                                    <option value="1">publish</option>
                                    <option value="0">unpublish</option>
                                </select>
                                </div>
                            </div>
                        </div>
                           
                        <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                     
                        
                    </div>
                </div>
                <div class="bg-default content-box  pad20A mrg25T">
                    <button class="btn btn-md btn-primary col-lg-offset-2" name="btn">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/datepicker/datepicker.css">-->
<script type="text/javascript" src="assets/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */

    $(function() { "use strict";
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'mm-dd-yyyy'
        });
    });

</script>

<!-- jQueryUI Datepicker -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/datepicker-ui/datepicker.css">-->
<script type="text/javascript" src="assets/widgets/datepicker-ui/datepicker.js"></script>
<script type="text/javascript" src="assets/widgets/datepicker-ui/datepicker-demo.js"></script>

<!-- Bootstrap Daterangepicker -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/daterangepicker/daterangepicker.css">-->
<script type="text/javascript" src="assets/widgets/daterangepicker/moment.js"></script>
<script type="text/javascript" src="assets/widgets/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/widgets/daterangepicker/daterangepicker-demo.js"></script>

<!-- Bootstrap Timepicker -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/timepicker/timepicker.css">-->
<script type="text/javascript" src="assets/widgets/timepicker/timepicker.js"></script>
<script type="text/javascript">

    /* Timepicker */

    $(function() { "use strict";
        $('.timepicker-example').timepicker();
    });
</script>