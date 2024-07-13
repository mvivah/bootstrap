@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <div class="mx-auto">
                            <i class="fas fa-store-alt fa-10x"></i>
                            <h4 class="mt-3 mr-auto">{{$home->name}}</h4>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><i class="fas fa-umbrella"></i> Headed by</h6>
                    <span class="text-secondary">{{$home->head}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="far fa-map"></i> Location</h6>
                        <span class="text-secondary">{{$home->address}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fas fa-user-shield"></i> Adults at Home</h6>
                        <span class="text-secondary">{{$home->adults}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fas fa-user-shield"></i>Clan</h6>
                        <span class="text-secondary">{{$home->clan}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fas fa-user-shield"></i> Totem</h6>
                        <span class="text-secondary">{{$home->totem}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fas fa-user-shield"></i> Religion</h6>
                        <span class="text-secondary">{{$home->religion}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fas fa-user-plus"></i> Owned Children</h6>
                        <span class="text-secondary">{{$home->minors}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fa fa-child"></i> Supported children</h6>
                        <span class="text-secondary"> {{$home->children->count()}}</span>
                        <span class="fas fa-plus" data-id="{{ $home->id}}" data-receiver="Home" id="bring_children" style="float:left;" title="Add Child"></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap bg-primary text-light" id="homeAssessment" data-id="{{$home->id}}">
                        Assess Home
                    </li>
                </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div class="card h-100">
                            <div class="card-header text-info">
                                Assessment Details
                            </div>

                        <div class="card-body">
                            @if($home->assessed == 'Yes')
                            <table class="table table-sm table-responsive table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                        <strong>Are there any other potential family homes where the child could be relocated to</strong>
                                        <p class="font-italic">{{$home->assessment->potential_home}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Are there any relatives where the child could stay</strong>
                                        <p class="font-italic">{{$home->assessment->relatives}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>
                                        <strong>Is the house owned or rented</strong>
                                        <p class="font-italic">{{$home->assessment->home_ownership}}</p>
                                       </td>
                                    </tr>
                                    @if($home->assessment->home_ownership == 'Rented')
                                    <tr>
                                        <td>
                                            <strong>Is rent payment uptodate</strong>
                                        <p class="font-italic">{{$home->assessment->rent_uptodate}}</p>
                                        </td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>
                                            <strong>Number of rooms in the house</strong>
                                        <p class="font-italic">{{$home->assessment->total_rooms}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Is the family positive about potentially having the child home</strong>
                                        <p class="font-italic">{{$home->assessment->family_positive}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>General home layout</strong>
                                        <p class="font-italic">{{$home->assessment->home_layout}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Journey and directions to get to the home</strong>
                                        <p class="font-italic">{{$home->assessment->journey_home}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>How close is the home to key areas</strong>
                                        <p class="font-italic">{{$home->assessment->home_closeness}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Source of clean water</strong>
                                        <p class="font-italic">{{$home->assessment->clean_water}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <strong>Layout for the kitchen and food storage</strong>
                                        <p class="font-italic">{{$home->assessment->family_kitchen}}</p>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Family source of income</strong>
                                        <p class="font-italic">{{$home->assessment->family_income}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>
                                        <strong>Family sources food</strong>
                                        <p class="font-italic">{{$home->assessment->food_source}}</p>
                                       </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Specific family concerns</strong>
                                        <p class="font-italic">{{$home->assessment->family_concerns}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Are the family toilet facilities usable and easily accessible</strong>
                                        <p class="font-italic">{{$home->assessment->toilet_facilities}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Other children in the family owned or adopted</strong>
                                        <p class="font-italic">{{$home->minors}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <strong>Describe the journey to the school where the child would go</strong>
                                        <p class="font-italic">{{$home->assessment->school_journey}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Do other children in the family go to this school</strong>
                                            <p class="font-italic">{{$home->assessment->children_in_school}}</p>
                                        </td>
                                    </tr>
                                    @if($home->assessment->homes_in_school == 'Yes')
                                    <tr>
                                       <td>
                                        <strong>How many other children in the family go to this school?</strong>
                                            <p class="font-italic">{{$home->assessment->homes_number}}</p>
                                       </td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>
                                            <strong>Describe the other children's education situation</strong>
                                            <p class="font-italic">{{$home->assessment->education_situation}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Describe the general health of the entire family</strong>
                                            <p class="font-italic">{{$home->assessment->family_health}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Any other comments</strong>
                                            <p class="font-italic">{{$home->assessment->general_comments}}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @else
                            <small>We have no assessment records for this home.</small>
                            @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
