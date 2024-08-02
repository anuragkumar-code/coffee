<?php include('../../config/db.php'); ?>

<tr style="background-color: aliceblue;">
	<th class="text-center">S No.</th>
	<th>Title</th>
	<th colspan="3">Message</th>
	<th class="text-center">Status</th>
	<th class="text-center">File</th>
	<th class="text-center">Date</th>
</tr>

<?php
$order_id=isset($_POST['orderid'])?$_POST['orderid']:'';
$fetch_row=isset($_POST['row'])?$_POST['row']:'';

$query = "SELECT * FROM order_status where order_id = '$order_id' ORDER BY 'created_at' ASC";
$result = $conn->query($query);
$sno = '';
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$sno++;

?>
	<tr>
		<td class="text-center"><?php echo $fetch_row.".".$sno; ?></td>
		<td class="text-center"><?php echo $row['title']; ?></td>
		<td colspan="3"><?php echo $row['message']; ?></td>
		<td><?php echo $row['status']; ?></td>
		<td class="text-center">
			<a href="<?php echo $row['file']; ?>"><i class="fas fa-download"></i></a>
		</td>
		<td class="text-center"><?php echo date('d/m/Y', strtotime($row['created_at'])); ?></td>

	</tr>
<?php }} ?>