
<div  class="container" style=" margin-top :10px">  
    <form action="/blog/excel" class="dropzone"
    method="post"
    enctype="multipart/form-data"
    ng-dropzone
    dropzone="dropzone"
    dropzone-config="dropzoneConfig2"
    event-handlers="{ 'success': terminolacarga, 'error': dzError }">
    {{ csrf_field() }}
</form>
</div>

<table>
	<thead>
		<tr>
			<th>ProductName</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Date</th>
		</tr>			
	</thead>
	<tbody>
		<tr ng-repeat="product in products">
			<td>{[product.name]}</td>
			<td>{[product.quantity]}</td>
			<td>{[product.price]}</td>
			<td>{[product.date]}</td>
		</tr>
	</tbody>
</table>>