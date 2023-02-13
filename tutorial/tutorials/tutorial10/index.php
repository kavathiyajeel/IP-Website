<?php
require "connection/connection.php";
 
$query = "select
           id,
           machine_name,
           description
       from
           tbl_machine
       where
           is_delete = 0 and 
           machine_name like 'dr%'
       order by
           machine_name desc
       limit 
           21,60";
//echo $query;
//$query = "SELECT * FROM tbl_machine ORDER BY id";
$result = $db->query($query);
if($result->num_rows > 0)
{
    
    ?>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <title>Tutorial 10</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<script src="../jquery/dataTables.bootstrap4.min.js"></script>
<script src="../jquery/jquery-3.5.1.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
    
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</head>
    <body>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <th>ID</th>
            <th>MACHINE NAME</th>
            <th>DESCRIPTION</th>
        </tr>
    <?php
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row["id"]."</td><td>".$row["machine_name"]."</td><td>".$row["description"]."</td></tr>";
    }
    echo "</table>";
    ?>
        </table>
        
    </body>
</html>
<?php
}
else
{   
    echo "No Records Found !";
}
?>