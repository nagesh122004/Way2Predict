<html>
<head>

<style>
   table{
  width:50%;

  height:70px;
 
   }
   table td{
  width:auto;
  height:30px;
  padding:5px;
  background:lightgray;
  color:black;
  font-size:10px;  
 
   }
   table th{
     
 
  padding:5px;
  background:lightgreen;
  color:black;
  font-size:13px;
   }
   
</style>
</head>


<body align="center">
   <h1>PREDICTION RESULT IS HERE</h1>
		   <table align="center" border="0.5" style="width:auto; line-height:auto; font-size:20px; font-weight:bold">
	<t>
   <th>college name</th>
<th>Location</th>
<th>District Code</th>
<th>District</th>
<th>Region</th>
<th>Collegetype</th>
<th>Minority</th>
<th>Co-Edu</th>
<th>Branch Code</th>
<th>Branch Name</th>
<th>gender</th>
<th>caste</th>
<th>Max.Rank</th>
</t>
<?php
error_reporting(0);
$connection=mysqli_connect("localhost","dcme","dcme030");
mysqli_select_db( $connection,'collegedb');

if(isset($_POST['predict']))
{
	$rank=$_POST['rank'];
	$gender=$_POST['gender'];
	$caste=$_POST['caste'];
	$district=$_POST['district'];
	$branch=$_POST['branchname'];
	$query="SELECT * from diploma where (caste='$caste' and district='$district' )";
	$query_run=mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($query_run))
	{?>
	                

	
	                  <tr>

				<td id="col1"><?php echo $row['collegename']?></td>
<td><?php echo $row['location']?></td>
<td><?php echo $row['dist code']?></td>
<td><?php echo $row['district']?></td>
<td><?php echo $row['region']?></td>
<td><?php echo $row['collegetype']?></td>
<td><?php echo $row['minority']?></td>
<td><?php echo $row['coedu']?></td>
<td><?php echo $row['branch code']?></td>
<td><?php echo $row['branchname']?></td>
<td><?php echo $row['gender']?></td>
<td><?php echo $row['caste']?></td>
<td><?php echo $row['rank']?></td>
			        </tr>
	        
		
	
   <?php }

	
	

  }?>

</table>
<a href="District.html"><button>Home Page</button></a>
</body></html>
