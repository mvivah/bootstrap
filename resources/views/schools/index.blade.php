<!-- Extend Main layout -->

@extends('layouts.app')
    @section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    Schools Records
                    <i class="fas fa-plus-circle text-success mb-2" aria-hidden="true" style="float:right;" data-toggle="modal" data-target="#addSchool" title="Add Schools"></i>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped tabledata">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>Population</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($schools as $school)
                        <tr>
                            <td>{{$school->name}}</td>
                            <td>{{$school->address}}</td>
                            <td>{{$school->type}}</td>
                            <td>{{$school->location}}</td>
                            <td>{{$school->children->count()}}</td>
                            <td>
                                <a href="schools/{{$school->id}}"><i class="fa fa-eye text-success" title="View School"></i></a>
                                <i class="fa fa-edit editSchool text-info" id="{{$school->id}}" title="Edit school"></i>
                                <i class="fa fa-trash-alt text-danger delSchool" id="{{$school->id}}" title="Delete school"></i>
                            </td>
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
