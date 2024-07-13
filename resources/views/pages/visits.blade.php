@extends('layouts.app')
    @section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Visitation Records
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped tabledata">
                        <thead>
                            <tr>
                                <th>Visitor Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Visited Child</th>
                                <th>Visit date</th>
                                <th>Reason for the visit</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($visits as $visit)
                        <tr>
                            <td>{{$visit->relative->name}}</td>
                            <td>{{$visit->relative->phone}}</td>
                            <td>{{$visit->relative->address}}</td>
                            <td>{{$visit->child->name}}</td>
                            <td>{{$visit->date}}</td>
                            <td>{{$visit->reason}}</td>
                            <td>
                                <i class="fa fa-edit editVisitor  text-success" id="{{$visit->id}}" title="Edit visitor"></i>
                                <i class="fa fa-trash-alt text-danger delVisitor" id="{{$visit->id}}" title="Delete visitor"></i>
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
