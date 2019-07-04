@extends('dashboards.app')

@section('conten')

	<div class="row">
		<div class = "col-md-6 offset-md-3" >
			@if($message = Session::get('danger'))
				<div class = "alert alert-danger">
					<strong>{{ $message }}</strong>
				</div>
			@endif
		@foreach($data as $p)
			<form class="form-horizontal" action="/perencanaan/update" method="post">
				@csrf
				<div class="form-grup">
					<label>Tanggal</label>
					<input type="date" name="tanggal" class="form-control" value="{{ $p->tanggal }}" >
				</div>

				<div class="form-grup">
					<label>Deskripsi</label>
					<input type="textarea" name="deskripsi" class="form-control" value="{{ $p->deskripsi }}" >
				</div>

				<div class="form-grup">
					<label>Kode</label>
					<input type="text" name="kode" class="form-control" value="{{ $p->kode }}" >
				</div>

				<div class="form-grup">
					<label>Debit</label>
					<input type="text" name="debit" class="form-control" value="{{ $p->debit }}" >
				</div>

				<div class="form-grup">
					<label>Kredit</label>
					<input type="text" name="kredit" class="form-control" value="{{ $p->kredit }}" >
				</div>

				<button type="submit" class="btn btn-warning">Update</button>
				<a href="/perencanaan" class="btn btn-default">Kembali</a>
			</form>	
		@endforeach
		</div>
	</div>
@endsection