@extends('layouts.app')
    @section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Relatives Records
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped tabledata">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Related Child</th>
                                <th>Relationship</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($relatives as $relative)
                            <tr>
                                <td>{{$relative->name}}</td>
                                <td>{{$relative->phone}}</td>
                                <td>{{$relative->address}}</td>
                                <td>{{$relative->child->name}}</td>
                                <td>{{$relative->relationship}}</td>
                                <td>
                                    <i class="fa fa-edit editRelative  text-success" id="{{$relative->id}}" title="Edit relative"></i>
                                    <i class="fa fa-trash-alt text-danger delRelative" id="{{$relative->id}}" title="Delete relative"></i>
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
