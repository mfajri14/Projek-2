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
							<strong> Jadwal Dokter </strong>
						</div>
						<div class="pull-right">
							
						</div>
					</div>
					<div class="card-body table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Specialist</th>
									<th>Jam</th>
									<th>hari</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($jadwals as $item)
									<tr>
										<th>{{ $item->name }}</th>
										<th>{{ $item->specialist }}</th>
										<th>{{ $item->jam }}</th>
										<th>{{ $item->hari }}</th>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
                
            </div>

        </div>
    </div>    
@endsection
