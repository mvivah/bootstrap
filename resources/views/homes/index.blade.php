<!-- Extend Main layout -->

@extends('layouts.app')
    @section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    Homes Records
                    @if(Gate::check('isAdmin') || Gate::check('isSocial'))
                    <i class="fas fa-plus-circle text-success mb-2" aria-hidden="true" style="float:right;" data-toggle="modal" data-target="#addHome" title="Add Homes"></i>
                    @endif
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped tabledata">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Head</th>
                                <th>Address</th>
                                <th>Clan</th>
                                <th>Totem</th>
                                <th>Religion</th>
                                <th>Adults</th>
                                <th>Owned Children</th>
                                <th>Supported Children</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($homes as $home)
                        <tr>
                            <td>{{$home->name}}</td>
                            <td>{{$home->type}}</td>
                            <td>{{$home->head}}</td>
                            <td>{{$home->address}}</td>
                            <td>{{$home->clan}}</td>
                            <td>{{$home->totem}}</td>
                            <td>{{$home->religion}}</td>
                            <td>{{$home->adults}}</td>
                            <td>{{$home->minors}}</td>
                            <td>{{$home->children->count()}}</td>
                            <td>
                                <a href="homes/{{$home->id}}"><i class="fa fa-eye text-success" title="View Home"></i></a>
                                <i class="fa fa-edit editHome text-info" id="{{$home->id}}" title="Edit home"></i>
                                <i class="fa fa-trash-alt text-danger delHome" id="{{$home->id}}" title="Delete home"></i>
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
