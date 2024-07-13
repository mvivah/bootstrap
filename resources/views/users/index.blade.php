<!-- Extend Main layout -->

@extends('layouts.app')
    @section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    User registry
                    @if(Gate::check('isAdmin'))
                    <i class="fas fa-plus-circle text-success mb-2" aria-hidden="true" style="float:right;" data-toggle="modal" data-target="#addUser" title="Add User"></i>
                    @endif
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped tabledata">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                {{-- <th>Age</th> --}}
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Department</th>
                                @if(Gate::check('isAdmin'))
                                <th>Actions</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->staff_id}}</td>
                            <td>{{$user->firstname}} {{$user->lastname}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->department->name}}</td>
                            @if(Gate::check('isAdmin'))
                            <td>
                                <a href="/users/{{$user->id}}"><i class="fa fa-eye" title="View user"></i></a>
                                <i class="fa fa-edit editUser text-success" id="{{$user->id}}" title="Edit user"></i>
                                <i class="fa fa-trash-alt text-danger deleteUser" id="{{$user->id}}"></i>
                            </td>
                            @endif
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
