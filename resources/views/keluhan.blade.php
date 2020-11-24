@extends('main')

@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Jadwal Dokter</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
        <div class="content mt-3">

            <div class="animated fadeIn">
				<div class="card">
					<div class="card-header">
						<div class="pull-left">
							<strong> Keluhan Sakit </strong>
						</div>
						<div class="pull-right">
							<a href="#" class="btn btn-secondary btn-sm">
								<i class="fa fa-undo"></i>
							</a>
						</div>
						
					</div>

					<div class="card-body">
						<center>
						<div class="row">
						<div class="col-md-4 offset-md-4">
						<form method="POST" action="{{url('/keluhan')}}">
							
							@csrf
								{{ csrf_field() }}
									<div class="form-group">
										<label>Nama</label>
										<input type="text" name="name" class="form-control" autofocus required>
									</div>
									
									<div class="form-group">
										<label>Alamat</label>
										<input type="text" name="alamat" class="form-control" required>
									</div>
									
									<div class="form-group">
										<label>Nomor Telepon</label>
										<input type="text" name="telp" class="form-control" required>
									</div>
									
									<div class="form-group">
										<label>Keluhan Sakit</label>
										<textarea name="keluhan_sakit" class="form-control" required></textarea>
									</div>
								<p class="clearfix">
									<input class="btn btn-success" type="submit" name="submit" value="Kirim">
								</p> 
						</form>
						
						</div>
						</div>
						</center>
					</div>
				</div>
			</div>
		</div>    

@endsection