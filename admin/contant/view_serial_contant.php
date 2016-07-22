<?php

if(isset($_GET['delete'])){
    $admin_obj->delete_serial($_GET);
}
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
    Responsive data tables
</h3>
<div class="example-box-wrapper">
<table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
<thead>
<tr>

    <th>id</th>
    <th>Name</th>
    <th>Old</th>
    <th>Number</th>
    <th>Category-Name</th>
    <th>doctor-name</th>
    <th>Description</th>
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
    <td><?php echo $row['address']?></td>
    <td><?php echo $row['your_date']?></td>
    <td><?php echo $row['your_time']?></td>
  
    <td style="width: 18%">
        <a href="?delete&id=<?php echo $row['id'];?>" class="btn btn-danger btn-xs " onclick="return myfunction()">delete</a>
        <?php
        if($row['status']==1){
        ?>
        <a href="#" class="btn btn-info btn-xs">see admin</a>
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

