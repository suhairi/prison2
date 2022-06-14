@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col col-mb-10">
			<div class="card">
				<div class="card-header text-white bg-primary">Orders List</div>
				<div class="card-body">

					<div class="w-100 pull-right">
                        <a href="{{ route('orders.summary') }}" class="card-text btn btn-primary">Product Summary</a>
                    </div>
                    <br />

					<table class="table table-bordered table-hover table-striped data-table">
						<thead class="thead-dark">
							<tr>
								<th>#</th>							
								<th>User ID</th>
								<th>Bulan/Tahun</th>
								<th>Details</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
		
	</div>

</div>

@endsection

@push('scripts')
	
	<script type="text/javascript">

	// $.ajax({
 //    		ajax: "{{ route('orders.index') }}",
 //            success: function(data) {
 //                console.log(data);
 //            },
 //            error:function(data){
 //                console.log(data);
 //            }
 //        });

    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('orders.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'bulan_tahun', name: 'bulan_tahun'},
                {data: 'details', name: 'details'},
            ],
            success:function(data) {
            	console.log('here')
            }
        });
    });

</script>
@endpush