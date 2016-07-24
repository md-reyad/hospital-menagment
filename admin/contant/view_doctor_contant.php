<?php
if(isset($_GET['delete'])){
    $admin_obj->delete_doctor($_GET);
}
$data=$admin_obj->select_doctor();
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
    View Doctor
</h3>
<div class="example-box-wrapper">
<table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
<thead>
<tr>
    <th>image</th>
    <th>Name</th>
    <th>Category Name</th>
    <th>Number</th>
    <th>Education</th>
    <th>Description</th>

  
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
    while ($row=  mysqli_fetch_assoc($data)){
   
?>
<tr>
    <td style="width: 40px"><img style="width: 90%" src="image/<?php echo $row['image']?>"</td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['category_name']?></td>
    <td><?php echo $row['number']?></td>
    <td><?php echo $row['education']?></td>
    <td><?php echo $row['description']?></td>
  
    <td style="width: 15%">
        <a href="?delete&id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm " onclick="return myfunction()">delete</a>
        <a href="doctor_edit.php?&id=<?php echo $row['id'];?>" class="btn btn-success btn-sm ">edit</a>
    
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

