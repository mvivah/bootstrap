@extends('layouts.app')
    @section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    Children Register
                    @if(Gate::check('isAdmin') || Gate::check('isSocial'))
                        <i class="fas fa-plus-circle text-success mb-2" aria-hidden="true" style="float:right;" data-toggle="modal" data-target="#addChild" title="Add Child"></i>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-striped tabledata">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Birthdate</th>
                                    <th>Gender</th>
                                    <th>District</th>
                                    <th>Village</th>
                                    <th>Date Admitted</th>
                                    <th>Child Abandoned</th>
                                    <th>Resettled</th>
                                    <th>Status</th>
                                    @if(Gate::check('isAdmin')|| Gate::check('isSocial'))
                                    <th>Actions</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($children as $child)
                            <tr>
                                <td>{{$child->name}}</td>
                                <td>{{$child->birthdate}}</td>
                                <td>{{$child->gender}}</td>
                                <td>{{$child->district}}</td>
                                <td>{{$child->village}}</td>
                                <td>{{$child->admission_date}}</td>
                                <td>{{$child->abandoned}}</td>
                                <td>{{$child->resettled}}</td>
                                <td>{{$child->status}}</td>
                                @if(Gate::check('isAdmin')|| Gate::check('isSocial'))
                                <td>
                                    <a href="/children/{{$child->id}}"><i class="fa fa-eye" title="View Child"></i></a>
                                    <i class="fa fa-edit editChild text-success" id="{{$child->id}}" title="Edit Child"></i>
                                    <i class="fa fa-trash-alt text-danger delChild" id="{{$child->id}}"></i>
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
