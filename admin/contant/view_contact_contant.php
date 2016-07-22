<?php
$data=$admin_obj->select_contact();
if(isset($_GET['delete'])){
    $admin_obj->delete_category($_GET);
}
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
    <?php
    if(isset( $_SESSION['msg'])){
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
    <th>Address</th>
    <th>number1</th>
    <th>number2</th>
    <th>email</th>
  
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
    <td><?php echo $row['address']?></td>
    <td><?php echo $row['number1']?></td>
    <td><?php echo $row['number2']?></td>
    <td><?php echo $row['email']?></td>
    <td>
        <a href="edit_contact.php?&id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">edit</a>
    
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

