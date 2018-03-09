<html>

<body>
<div>
<table id="mytable">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Details</th>
<th>Type</th>
</tr>
</thead>


<tbody>
<?php
$db = new PDO("mysql:host=localhost;dbname=product","root","berkanoguz");
$stmt = $db->prepare("select * from list");
$stmt->execute();
while($row-$stmt->fetch()){
?>
<tr>
<td><?php echo $row['ProduceId'] ?></td>

<td><?php echo $row['ProduceName'] ?></td>

<td><?php echo $row['ProduceDetail'] ?></td>

<td><?php echo $row['Type'] ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</body>
</html>
