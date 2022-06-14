@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="row">
            <div class="mb-3">
                @include('layouts.messages')            
            </div>  
        </div>
        
		<div class="col col-mb-10">
			<div class="card">
				<div class="card-header text-white bg-primary">Orders List</div>
				<div class="card-body">

					<table class="table table-bordered table-hover table-striped data-table">
						<thead class="thead-dark">
							<tr>
								<th>#</th>							
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


    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('order.index') }}",
            columns: [
                {data: 'id', name: 'id'},
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