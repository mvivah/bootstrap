@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="mt-3">
                    <h4>{{$department->name}}</h4>
                        <p class="text-secondary mb-1">{{$department->admission_number}}</p>
                        <p class="text-muted font-size-sm">{{$department->gender}}, {{$department->birthdate}}</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><i class="far fa-calendar-alt"></i> Date Created</h6>
                    <span class="text-secondary">{{$department->created_at}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Members</h6>
                    <ul class="list-group list-group-flush">
                    @foreach ( $department->users as $user)
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    {{$user->firstname}} {{$user->lastname}}
                    </li>
                    @endforeach
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    @endsection
