<!DOCTYPE html>
<html>
<head>
	<title>One To Many</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center"><a href="">ONE TO MANY RELATIONSHIP</a></h3>
				<h5 class="text-center my-4">Create By:Firda Ulfa Unsilah</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Judul Article</th>
							<th>Tag</th>
							<th width="15%" class="text-center">Jumlah Tag</th>
						</tr>
					</thead>
					<tbody>
						@foreach($artikel as $a)
						<tr>
							<td>{{ $a->judul }}</td>
							<td>
								@foreach($a->tags as $t)
									{{$t->tags}},
								@endforeach
							</td>
							<td class="text-center">{{ $a->tags->count() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>