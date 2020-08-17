<?php
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'GCGC');

?>
<!--
if (isset($_POST['submit'])) {
	   $if($_POST['value'] == 'CSE') {  
    // query to get all US records  
    $query = mysql_query("SELECT * FROM academic_details WHERE Branch='CSE'");  
}  
elseif($_POST['value'] == 'ECE') {  
    // query to get all AUD records  
    $query = mysql_query("SELECT * FROM academic_details WHERE Branch='ECE'");  
} else {  
    // query to get all records  
    $query = mysql_query("SELECT * FROM academic_details");  
} 
Print "<table border cellpadding=3>"; 
while($row = mysql_fetch_array($query))
{
    Print "<tr>"; 
    Print "<th>Branch:</th> <td>".$row['name'] . "</td> "; 
    Print "<th>Pet:</th> <td>".$row['invention-title'] . " </td></tr>"; 
}
Print "</table>"; 
?>
  '''  
}
else
{
	
}
function filtertable($query){
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'GCGC');	
return;
}
    ?>
<table cellpadding="10" cellspacing="1">

    <thead>
        <tr>
            <th><strong>Name</strong></th>
            <th><strong>Rolln0</strong></th>
            <th><strong>Branch</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = "SELECT * from academic_details";
    $i = 0;
    $selectedOptionCount = count($_POST['Branch']);
    $selectedOption = "";
    while ($i < $selectedOptionCount) {
        $selectedOption = $selectedOption . "'" . $_POST['Branch'][$i] . "'";
        if ($i < $selectedOptionCount - 1) {
            $selectedOption = $selectedOption . ", ";
        }
        
        $i ++;
    }
    $query = $query . " WHERE Branch in (" . $selectedOption . ")";
    
    $result = $db_handle->runQuery($query);
}
if (! empty($result)) {
    foreach ($result as $key => $value) {
        ?>
        <tr>
            <td><div class="col" id="user_data_2">
                    <?php echo $result[$key]['user_id']; ?>
                </div></td>
            <td><div class="col" id="user_data_3">
                    <?php echo $result[$key]['Branch']; ?>
                </div></td>
        </tr>
        <?php
    }
    ?>

    </tbody>
</table>
<?php
	}
?>
'''

-->