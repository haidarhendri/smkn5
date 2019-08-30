<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">Upload File</h2>
			
			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<b>File</b><br/>
						<input type="file" name="file">
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="ket"></textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>

        <h3 class="my-5"> Gambarnya </h3>

        <table class="table table-brdered table-striped">
          <thead>
            <tr>
              <th width="1%"> File </th>
              <th>Keterangan</th>
              <th width="1%"> Option </th>
            </tr>
          </thead>
          <tbody>
            @foreach($photo as $ph)
            <tr>
              <td><img width="200px" src="{{ url('/data_file/'.$ph->path) }}"></td>
              <td>{{ $ph->ket }}</td>
              <td><a class="btn btn-danger" href="/upload/hapus/{{ $ph->id }}">HAPUS</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
			</div>
		</div>
	</div>
</body>
</html>