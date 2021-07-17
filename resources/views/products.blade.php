<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laravel 8 Pagination App</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3 style="text-align: center;">Laravel 8 Pagination App by Sospeter Mongare</h3>
		<div class="panel panel-primary">
			<div class="panel-heading">
				Pagination App
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Slug</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						@if (!empty($data) && $data->count())
						@foreach ($data as $key =>$value)

						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->slug }}</td>
							<td>
								<button class="btn btn-danger"> Delete</button>
							</td>
						</tr>

						@endforeach
						@else
						<tr>
							<td colspan="10">There are no data</td>
						</tr>
						@endif
					</tbody>
				</table>

				{!! $data->links() !!}
			</div>

		</div>
	</div>

</body>
</html>