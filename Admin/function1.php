<?php

$link = mysqli_connect("localhost", "root", "", "GCGC");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


	 if(isset($_POST["Export"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'First Name','Middle_name','Branch','Phone','Email ID','SSC Percent','Inter Percent','B.Tech GPA','Pass Category'));  
      $query = "SELECT user_id, first_name from personal_details_mdb";  
	  
	  
	  
      $result = mysqli_query($link, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
	
function get_all_records(){

    $Sql = "SELECT * FROM perosnal_details_mdb";
    $result = mysqli_query($link, $Sql);  

    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
     <thead>
     <tr>
 
				  		<th>User ID</th>
				  		<th>First Name</th>
                        </tr></thead><tbody>";

     while($row = mysqli_fetch_assoc($result)) {


         echo "<tr><td>" . $row['user_id']."</td>
                   <td>" . $row['first_name']."</td></tr>";
         
     }
	//  echo "<tr> <td><a href='' class='btn btn-danger' id='status_btn' data-loading-text='Changing Status..'>Export</a></td></tr>";
     echo "</tbody></table></div>";
	 
} else {
     echo "you have no recent pending orders";
}
}

mysqli_close($link);

?>
