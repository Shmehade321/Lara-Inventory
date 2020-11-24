@extends('layouts.app')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Group</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($users->count())
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->group->name}}</td>
                                <td>{{$user->created_at->format('m/d/Y g:i A')}}</td>
                                <td>{{$user->updated_at->format('m/d/Y g:i A')}}</td>
                                <td>
                                    <a class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-sm btn-info"><i class="far fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @section('jsSection')
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
    @endsection

@endsection
