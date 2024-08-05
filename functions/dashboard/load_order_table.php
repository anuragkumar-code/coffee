

<table class="table border-top-0  table-bordered text-nowrap border-bottom" id="responsive-datatable">
	<thead>
		<tr>
			<th class="text-center wd-15p border-bottom-0">S. No.</th>
			<th class="text-center wd-15p border-bottom-0">Order ID</th>
			<th class="text-center wd-20p border-bottom-0">Coffee</th>
			<th class="text-center wd-15p border-bottom-0">Customer Name</th>
			<th class="text-center wd-15p border-bottom-0">Quantity</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="text-center">1</td>
			<td class="text-center">OD34820PLDT456</td>
			<td class="text-center">New coffee</td>
			<td class="text-center">Kunal</td>
			<td class="text-center">10</td>
		</tr>
	</tbody>
</table>

<script>
	$('#responsive-datatable').DataTable({
   		language: {
       		searchPlaceholder: 'Search...',
       		scrollX: "100%",
       		sSearch: '',
   		}
  	});
</script>