@extends('layouts.app')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Group</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('group/create')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Group Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                    @error('name')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Permissions</h6></div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Module</th>
                                        <th>Create</th>
                                        <th>View</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($permissions as $permissionParent => $permissionChildrens)
                                        <tr>
                                            <td>{{$permissionParent}}</td>
                                            @foreach($permissionChildrens as $permissionChildren)
                                                <td>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" name="permissions[]" id="permissions[]" value="{{$permissionChildren}}">
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
