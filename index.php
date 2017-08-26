<?php  
    require "config.php";

    $sql = ("SELECT * FROM students");
    $query = mysqli_query($conn,$sql);
?>
<html>
<head>
<meta charset="utf-8">
	
</head>
<body>

<h1>รายการนักเรียน</h1>
<p>มีจำนวนนักเรียน 2 คน</p>
<br/>
<br/>
เพิ่มนักเรียน
<br/>
<br/>
<table>

	<tr>
		
		<th>ID</th>
		<th>Firts Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Tel.</th>
        <th>การจัดการ</th>
	
	</tr>
	<?php  while ($row = mysqli_fetch_assoc($query))  : ?>
	<tr>
	    <td><?=$row['id'] ?></td>
	    <td><?=$row['firstname'] ?></td>
	    <td><?=$row['lastname'] ?></td>
	    <td><?=$row['age'] ?></td>
	    <td><?=$row['tel'] ?></td>
	     <td>
		      แก้ไข

		      ลบ
	     </td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>