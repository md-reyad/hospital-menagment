<?php
$data=$admin_obj->select_category();
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
</h3>
<div class="example-box-wrapper">
<table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
<thead>
<tr>
    <th>Name</th>
    <th>Position</th>
    <th>Office</th>
  
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
    <td><?php echo $row['category_name']?></td>
    <td>Customer Support</td>
    <td>New York</td>
    <td>
        <a href="?delete&id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm " onclick="return myfunction()">delete</a>
    
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

