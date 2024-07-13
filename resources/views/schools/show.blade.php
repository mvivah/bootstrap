@extends('layouts.app')
    @section('content')
        <?php
            $disabled = false
        ?>
        @if($school->resettled == true)
            <?php
                $disabled=true;
            ?>
        @endif
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <div class="mx-auto">
                            <i class="fas fa-store-alt fa-10x"></i>
                            <h4 class="mt-3 mr-auto">{{$school->name}}</h4>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><i class="fas fa-umbrella"></i> Headed by</h6>
                    <span class="text-secondary">{{$school->head}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="far fa-map"></i> Location</h6>
                        <span class="text-secondary">{{$school->address}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fas fa-user-shield"></i> Adults at School</h6>
                        <span class="text-secondary">{{$school->adults}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fas fa-user-shield"></i> Assessment</h6>
                        <span class="text-secondary">{{$school->adults}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fas fa-user-plus"></i> Owned Children</h6>
                        <span class="text-secondary">{{$school->minors}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fa fa-child"></i> Supported children</h6>
                        <span class="text-secondary"> {{$school->children->count()}}</span>
                        <span class="fas fa-plus" data-id="{{ $school->id}}" data-receiver="School" id="bring_children" style="float:left;" title="Add Child">
                        </span>
                    </li>
                    @if($school->children->count() > 0)
                        @foreach($school->children as $child)
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                {{$child->name}}
                            </li>
                        @endforeach
                    @endif
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
                            @if($school->assessed_on)
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <td>Are there any other potential family schools where the school can be relocated to</td>
                                        <th class="text-end">{{$school->assessment->potential_school}}</th>
                                    </tr>
                                    <tr>
                                        <td>Are there any relatives where the school could stay</td>
                                        <th class="text-end">{{$school->assessment->relatives}}</th>
                                    </tr>
                                    <tr>
                                        <td>Is the house owned or rented</td>
                                        <th class="text-end">{{$school->assessment->school_ownership}}</th>
                                    </tr>
                                    @if($school->assessment->school_ownership == 'Rented')
                                    <tr>
                                        <td>Is rent payment uptodate</td>
                                        <th class="text-end">{{$school->assessment->rent_uptodate}}</th>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>How many rooms are there in the school</td>
                                        <th class="text-end">{{$school->assessment->total_rooms}}</th>
                                    </tr>
                                    <tr>
                                        <td>Is the family positive about potentially having the school school</td>
                                        <th class="text-end">{{$school->assessment->family_positive}}</th>
                                    </tr>
                                    <tr>
                                        <td>Describe the school layout</td>
                                        <th class="text-end">{{$school->assessment->school_layout}}</th>
                                    </tr>
                                    <tr>
                                        <td>Describe your journey to get to the school</td>
                                        <th class="text-end">{{$school->assessment->journey_school}}</th>
                                    </tr>
                                    <tr>
                                        <td>How close is the school to key areas</td>
                                        <th class="text-end">{{$school->assessment->school_closeness}}</th>
                                    </tr>
                                    <tr>
                                        <td>How does the family obtain clean water</td>
                                        <th class="text-end">{{$school->assessment->clean_water}}</th>
                                    </tr>
                                    <tr>
                                        <td>Describe the family kitchen and food storage area</td>
                                        <th class="text-end">{{$school->assessment->family_kitchen}}</th>
                                    </tr>
                                    <tr>
                                        <td>Describe the source of family income</td>
                                        <th class="text-end">{{$school->assessment->family_income}}</th>
                                    </tr>
                                    <tr>
                                        <td>Describe how the family sources food</td>
                                        <th class="text-end">{{$school->assessment->food_source}}</th>
                                    </tr>
                                    <tr>
                                        <td>Are there any particular family concerns</td>
                                        <th class="text-end">{{$school->assessment->family_concerns}}</th>
                                    </tr>
                                    <tr>
                                        <td>Are the family toilet facilities usable and easily accessible</td>
                                        <th class="text-end">{{$school->assessment->toilet_facilities}}</th>
                                    </tr>
                                    <tr>
                                        <td>How many other schools does the family have</td>
                                        <th class="text-end">{{$school->assessment->other_schools}}</th>
                                    </tr>
                                    <tr>
                                        <td>Describe the journey how to get to the school that school would visit</td>
                                        <th class="text-end">{{$school->assessment->school_journey}}</th>
                                    </tr>
                                    <tr>
                                        <td>Do other schools in the family go to this school</td>
                                        <th class="text-end">{{$school->assessment->schools_in_school}}</th>
                                    </tr>
                                    @if($school->assessment->schools_in_school == 'Yes')
                                    <tr>
                                        <td>How many other schools in the family go to this school?</td>
                                        <th class="text-end">{{$school->assessment->schools_number}}</th>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>Describe the other schools/'s education situation</td>
                                        <th class="text-end">{{$school->assessment->education_situation}}</th>
                                    </tr>
                                    <tr>
                                        <td>Describe the health of the entire family</td>
                                        <th class="text-end">{{$school->assessment->family_health}}</th>
                                    </tr>
                                    <tr>
                                        <td>Any other comments</td>
                                        <th class="text-end">{{$school->assessment->general_comments}}</th>
                                    </tr>
                                </tbody>
                            </table>
                            @else
                            <small>We have no assessment records for this school.</small>
                            @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
