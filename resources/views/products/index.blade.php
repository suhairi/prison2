@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="mb-3">
                @include('layouts.messages')            
            </div>  
        </div>
        
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-white bg-primary"><strong>Products</strong></div>

                <div class="card-body">

                    <div class="col-md-10 mb-3">
                        <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-cart-plus"></i> Add a Product</a>
                    </div>

                    <div>
                    <table class="table table-bordered table-hover table-striped data-table">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Status</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                    </div>
                    
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
            ajax: "{{ route('products.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'price', name: 'price'},
                {data: 'status', name: 'status'},
            ]
        });
    });

</script>

@endpush