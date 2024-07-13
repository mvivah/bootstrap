@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <span class="shell rounded-circle">
                            <img src="{{ asset("/images/users/$user->picture") }}" alt="{{$user->firstname}} {{$user->lastname}}" class="rounded-circle" width="150">
                            <div class="overlay rounded-circle">
                                <i class="fa fa-camera text" id="{{$user->id}}" data-owner="user"></i>
                            </div>
                        </span>
                        <div class="mt-3">
                            <h4>{{$user->firstname}} {{$user->lastname}}</h4>
                            <p class="text-secondary mb-1">{{$user->staff_id}}</p>
                            <p class="text-muted font-size-sm"> <i class="fas fa-venus-mars"></i> {{$user->gender}}, <i class="fas fa-birthday-cake"></i> {{$user->birthdate}}</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fa fa-user-tie"></i> Designation</h6>
                        <span class="text-secondary">
                            {{$user->title->name}}
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><i class="fas fa-sitemap"></i> Department</h6>
                    <span class="text-secondary">{{$user->department->name}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="far fa-calendar-alt"></i> Account Created</h6>
                        <span class="text-secondary">{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="far fa-clock"></i> Last login</h6>
                        <span class="text-secondary">{{Carbon\Carbon::parse($user->last_login)->diffForHumans()}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i data-feather="activity"></i> Account Status</h6>
                        <span class="text-secondary">{{$user->account_status}}</span>
                        </li>
                    @if($user->id != Auth::user()->id)
                    <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap bg-danger text-light resettled" id="{{$user->id}}">
                        Delete Account
                    </li>
                    @endif
                </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$user->firstname}} {{$user->lastname}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$user->email}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">ID Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$user->staff_id}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Gender</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$user->gender}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Birthdate</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$user->birthdate}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Department</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$user->department->name}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->phone}}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Private info</h5>
                        </div>
                        <div class="card-body">
                            <form id="profile_update">
                                @csrf
                                <input type="hidden" name="current_id" id="current_id" value="{{ $user->id }}{{ old('user_id') }}">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">First name</label>
                                        <input type="text" class="form-control" name="current_firstname" id="current_firstname" value="{{$user->firstname}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Last name</label>
                                        <input type="text" class="form-control" name="current_lastname" id="current_lastname" value="{{$user->lastname}}">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Birthdate</label>
                                        <input type="date" class="form-control" name="current_birthdate" id="current_birthdate" value="{{$user->birthdate}}">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" name="current_phone" id="current_phone" value="{{$user->phone}}">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Gender</label>
                                        <select name="current_gender" id="current_gender" class="form-control">
                                            <option selected value="{{$user->gender}}">{{$user->gender}}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
    @endsection
