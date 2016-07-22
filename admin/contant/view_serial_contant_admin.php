<?php

$data=$admin_obj->view_serial();
?>

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="assets/widgets/datatable/datatable-responsive.js"></script>

<script type="text/javascript">

    /* Datatables responsive */

    $(document).ready(function() {
        $('#datatable-responsive').DataTable( {
            responsive: true
        } );
    } );

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });

</script>


<div class="panel">
<div class="panel-body">
<h3 class="title-hero">
   Serial table
   <?php
   if(isset($_SESSION['msg'])){
       echo $_SESSION['msg'];
       unset($_SESSION['msg']);
   }
   ?>
</h3>
<div class="example-box-wrapper">
<table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
<thead>
<tr>

    <th>#</th>
    <th>Name</th>
    <th>Old</th>
    <th>Number</th>
    <th>Category Name</th>
    <th>doctor name</th>
    <th>date</th>
    <th>Time</th>

  
    <th>Ation</th>
</tr>
</thead>

<!--<tfoot>
<tr>
    <th>Name</th>
    <th>Position</th>
    <th>Office</th>
    <th>Salary</th>
</tr>
</tfoot>-->

<tbody>
<?php
$i=1;
    while ($row=  mysqli_fetch_assoc($data)){
   
?>
<tr>

    <td><?php echo $i++?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['old']?></td>
    <td><?php echo $row['number']?></td>
    <td><?php echo $row['category_name']?></td>
    <td><?php echo $row['doctor_name']?></td>
    <td><?php echo $row['your_date']?></td>
    <td><?php echo $row['your_time']?></td>
  
    <td style="width: 18%">
        <?php
        if($row['status']==1){
        ?>
        <a href="?delete&id=<?php echo $row['id'];?>"  onclick="return myfunction()"><i class="glyph-icon tooltip-button demo-icon icon-check btn-success btn-xs"></i></a>
        <a href="edit_serial.php?&id=<?php echo $row['id'];?>"><i class="glyph-icon tooltip-button demo-icon icon-edit btn-success btn-xs"></i></a>

       
            <?php
        }  else {
            ?>
         <a href="?delete&id=<?php echo $row['id'];?>"  onclick="return myfunction()"><i class="glyph-icon tooltip-button demo-icon icon-exclamation-triangle btn-danger btn-xs"></i></a>
         <a href="edit_serial.php?&id=<?php echo $row['id'];?>"><i class="glyph-icon tooltip-button demo-icon icon-edit btn-success btn-xs"></i></a>
             <?php
        
        }
       ?>
    
    </td>
</tr>
<?php
    }
?>
    <script>
        function myfunction(){
            var delete_class=confirm("ar you seure you must be delete be delete");
            if(delete_class){
               return true;
            }else{
                return  false;
            }
        }
        </script>
</tbody>
</table>
</div>
</div>
</div>

