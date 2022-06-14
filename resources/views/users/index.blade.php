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
                <div class="card-header text-white bg-primary"><strong>Users</strong></div>

                <div class="card-body">

                    <div>
                    <table class="table table-bordered table-hover table-striped data-table">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>No SMPP</th>
                            <th>Section</th>
                            <th>Role</th>
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
            ajax: "{{ route('users.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'username', name: 'username'},
                {data: 'nosmpp', name: 'nosmpp'},
                {data: 'section', name: 'section'},
                {data: 'role', name: 'role'},
                {data: 'status', name: 'status'},
            ]
        });
    });

</script>

@endpush