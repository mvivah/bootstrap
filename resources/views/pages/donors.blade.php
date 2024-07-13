<!-- Extend Main layout -->

@extends('layouts.app')
    @section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    Donors Records
                    @if(Gate::check('isAdmin') || Gate::check('isSocial'))
                    <i class="fas fa-plus-circle text-success mb-2" aria-hidden="true" style="float:right;" data-toggle="modal" data-target="#addDonor" title="Add Donations"></i>
                    @endif
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped tabledata">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Address</th>
                                <th>Occupation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($donors as $donor)
                        <tr>
                            <td>{{$donor->name}}</td>
                            <td>{{$donor->email}}</td>
                            <td>{{$donor->phone}}</td>
                            <td>{{$donor->country}}</td>
                            <td>{{$donor->address}}</td>
                            <td>{{$donor->occupation}}</td>
                            <td>
                                <i class="fa fa-edit editDonor text-success" id="{{$donor->id}}" title="Edit donor"></i>
                                <i class="fa fa-trash-alt text-danger delDonor" id="{{$donor->id}}" title="Delete donor"></i>
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
