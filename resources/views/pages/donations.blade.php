<!-- Extend Main layout -->

@extends('layouts.app')
    @section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    Donation Records
                    @if(Gate::check('isAdmin') || Gate::check('isSocial'))
                    <i class="fas fa-plus-circle text-success mb-2" aria-hidden="true" style="float:right;" id="add_donation" title="Add Donations"></i>
                    @endif
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped tabledata">
                        <thead>
                            <tr>
                                <th>Donor</th>
                                <th>Amount</th>
                                <th>Currency</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($donations as $donation)
                        <tr>
                            <td>{{$donation->donor->name}}</td>
                            <td>{{$donation->amount}}</td>
                            <td>{{$donation->currency}}</td>
                            <td>{{$donation->description}}</td>
                            <td>
                                <i class="fa fa-edit editDonation text-success" id="{{$donation->id}}" title="Edit donation"></i>
                                <i class="fa fa-trash-alt text-danger delDonation" id="{{$donation->id}}" title="Delete donation"></i>
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
