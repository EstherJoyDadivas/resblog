<?php 
$q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($q);
$g=mysqli_query($conn, "select q1 from feedback");
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>	


<div class="row">
	<div class="col-sm-12">
		<h1 class="page-header">Student Feedbacks</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<th>Teacher provided the course outline having weekly content plan with list of required text book</th>
		<th>Course objectives,learning outcomes and grading criteria are clear to me</th>
		<th>Course integrates throretical course concepts with the real world examples</th>
		<th>Teacher is punctual,arrives on time, and leaves on time</th>
		<th>Teacher is good at stimulating the interest in the course content</th>
		<th>Teacher is good at explaining the subject matter</th>
		<th>Teacher's presentation was clear,loud ad easy to understand</th>
		<th>Teacher is good at using innovative teaching methods/ways</th>
		<th>Teacher is available and helpful during counseling hours</th>
		<th>Teacher has competed the whole course as per course outline</th>
		<th>Teacher was always fair and impartial</th>
		<th>Assessments conducted are clearly connected to maximize learining objectives</th>
		<th>What I liked about the course</th>
		<th>What I disliked about the course</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
	
		
</table>

</div>
</div>
<?php }?>
