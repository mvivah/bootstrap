@extends('layouts.app')
    @section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <span class="shell rounded-circle">
                            <img src="{{ asset("/images/children/$child->picture") }}" alt="{{$child->name}}" class="rounded-circle" width="150">
                            <div class="overlay rounded-circle">
                                <i class="fa fa-camera text" id="{{$child->id}}" data-owner="child"></i>
                            </div>
                        </span>
                        <div class="mt-3">
                            <h4>{{$child->name}}</h4>
                            <p class="text-muted font-size-sm"> <i class="fas fa-venus-mars"></i> {{$child->gender}}, <i class="fas fa-birthday-cake"></i> {{$child->birthdate}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fa fa-globe"></i> Home Address</h6>
                        <span class="text-secondary">
                            {{$child->village}} Village, {{$child->distric}} District
                            {{$child->parish}} Parish, {{$child->sub_county}} Subcounty
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="far fa-calendar-alt"></i> Admission date</h6>
                        <span class="text-secondary">{{$child->admission_date}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="far fa-clock"></i> Admission Period</h6>
                        <span class="text-secondary">{{$child->duration}} {{$child->duration_type}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="far fa-clock"></i> Current Status</h6>
                        <span class="text-secondary">{{$child->status}}</span>
                    </li>
                </ul>
            </div>
            <div class="card mt-3">
                <button class="btn btn-outline-primary" data-id="{{ $child->id}}" id="child_attachment"><i class="fas fa-upload"></i> Attachments</button>
                <ul class="list-group list-group-flush bg-primary-light">
                    @foreach ($child->attachments as $key=>$attachment)
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">{{++$key}} {{$attachment->description}}</h6>
                        <span class="text-secondary">{{Carbon\Carbon::parse($attachment->created_at)->diffForHumans()}}</span>
                        <span class="text-secondary"><a href="/attachments/{{$attachment->id}}"><i class="fa fa-download text-info" title="Download"></i></a>
                            <i class="fas fa-trash-alt text-danger delAttachment" id="{{$attachment->id}}" title="Delete"></i>
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="card mt-3">
                <button class="btn btn-outline-info" data-id="{{$child->id}}" id="child_case"><i class="fas fa-file-alt"></i> Child Case</button>
                <ul class="list-group list-group-flush bg-primary-light">
                    @foreach ($child->cases as $case)
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">{{$case->care_order}}</h6>
                        <span class="text-secondary">{{$case->presiding_magistrate}}</span>
                        <i class="fas fa-trash-alt text-danger delCase" id="{{$case->id}}" title="Delete"></i>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap">
                                    <h6 class="mb-0">General Information</h6>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Admission Number:</h6><span class="text-secondary">{{$child->admission_number}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Name:</h6><span class="text-secondary">{{$child->name}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Gender:</h6><span class="text-secondary">{{$child->gender}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Birthdate:</h6><span class="text-secondary">{{$child->birthdate}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Birth Order:</h6><span class="text-secondary">{{$child->birth_order}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Clan:</h6><span class="text-secondary">{{$child->clan}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Totem:</h6><span class="text-secondary">{{$child->totem}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Religion:</h6><span class="text-secondary">{{$child->religion}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap">
                                    <h6 class="mb-0">Other Details</h6>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Village:</h6><span class="text-secondary">{{$child->village}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Parish:</h6><span class="text-secondary">{{$child->parish}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Subcounty:</h6><span class="text-secondary">{{$child->sub_county}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">District:</h6><span class="text-secondary">{{$child->district}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Was Child abandoned:</h6><span class="text-secondary">{{$child->abandoned}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Circumstances in which the child was found:</h6><span class="text-secondary">{{$child->circumstances}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Reason for admission:</h6><span class="text-secondary">{{$child->admission_reason}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Brought by:</h6><span class="text-secondary">{{$child->brought_by}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title  text-light">{{$child->name}} - Relatives</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <fieldset>
                                        <legend>{{$child->name}}'s Relatives</legend>
                                        <ul class="list-group list-group-flush">
                                            @if(sizeof($child->relatives) >0)
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"></h6>
                                                <span class="fas fa-plus-circle text-info" style="float:right" data-id="{{ $child->id}}" id="child_relatives" title="Add Relatives"></span>
                                            </li>
                                            <table class="table table-sm  table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>phone</th>
                                                        <th>Relationship</th>
                                                        <th>Alive</th>
                                                        <th>Occupation</th>
                                                        <th>Age</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $child->relatives as $relative)
                                                        <tr>
                                                            <td>{{$relative->name}}</td>
                                                            <td>{{$relative->address}}</td>
                                                            <td>{{$relative->phone}}</td>
                                                            <td>{{$relative->relationship}}</td>
                                                            <td>{{$relative->alive}}</td>
                                                            <td>{{$relative->occupation}}</td>
                                                            <td>{{$relative->age}}</td>
                                                            <td>
                                                                <span class="fas fa-trash-alt text-danger delRelative" id="{{$relative->id}}" title="Delete Relative"></span>
                                                                @if($relative->alive != 'No')
                                                                <span class="fas fa-edit text-info editRelative" id="{{$relative->id}}" title="Edit Relative"></span>
                                                                @if($relative->alive == 'Yes')
                                                                <span class="fas fa-hiking text-success visit_child" data-child="{{$child->id}}" id="{{$relative->id}}" title="Visit Child"></span>
                                                                @endif
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @else
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap bg-warning-light">
                                                <h6 class="mb-0">{{$child->name}} has no relatives on record, click the button to add some</h6>
                                                <span class="fas fa-plus-circle text-success" style="float:right" data-id="{{ $child->id}}" id="child_relatives" title="Add Relatives"></span>
                                            </li>
                                            @endif
                                        </ul>
                                    </fieldset>
                                </div>
                                <div class="col-md-3">
                                    <fieldset>
                                        <legend>Visit Summary</legend>
                                        <ul class="list-group list-group-flush">
                                            @forelse ( $child->visits->unique('relative_id') as $visitation)
                                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                    <h6 class="mb-0">{{$visitation->relative->name}}</h6>
                                                    <span class="text-secondary">
                                                        {{$visitation->relative->visits->count()}}
                                                        @if($visitation->relative->visits->count()==1)
                                                        Visit
                                                        @else
                                                        Visits
                                                        @endif
                                                    </span>
                                                </li>
                                            @empty
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap bg-warning-light">
                                                <h6 class="mb-0">Child has never been visited</h6>
                                            </li>
                                            @endforelse
                                        </ul>
                                        <h2 class="d-flex justify-content-center align-items-center"> Total Visits: {{$child->visits->count()}}</h2>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card  mb-3 h-100">
                        <div class="card-header">
                            <button class="btn btn-sm btn-info" data-id="{{$child->id}}" id="evaluate_child">Visit Evaluation</button>
                        </div>
                        <div class="card-body">
                            @if($child->evaluations->count() > 0 )
                            <table class="table table-sm table-responsive table-striped table-bordered">
                                <tbody>
                                    @foreach ($child->evaluations as $evaluation)
                                    <tr>
                                        <td>
                                        <strong>Is the child happy to see the social worker?</strong>
                                        <p class="font-italic">{{$evaluation->happiness}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Does the child seem comfortable?</strong>
                                        <p class="font-italic">{{$evaluation->comfortable}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>
                                        <strong>Is the child comfortable in the family presence</strong>
                                        <p class="font-italic">{{$evaluation->family_presence}}</p>
                                       </td>
                                    </tr>
                                    @if($evaluation->home_ownership == 'Rented')
                                    <tr>
                                        <td>
                                            <strong>Are there any changes in the household since the last recorded home details</strong>
                                        <p class="font-italic">{{$evaluation->household_changes}}</p>
                                        </td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>
                                            <strong>Is the water source still accessible?</strong>
                                        <p class="font-italic">{{$evaluation->water_accessibility}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Is the toilet still in satisfactory condition?</strong>
                                        <p class="font-italic">{{$evaluation->toilet_condition}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>escribe whether the family is financially able to provide food for the child?</strong>
                                        <p class="font-italic">{{$evaluation->financial_ability}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>What are the sources of family food?</strong>
                                        <p class="font-italic">{{$evaluation->food_sources}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Is the child eating and drinking well?</strong>
                                        <p class="font-italic">{{$evaluation->feeding}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>How often does the family eat?</strong>
                                        <p class="font-italic">{{$evaluation->number_of_meals}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Which food are they eating?</strong>
                                        <p class="font-italic">{{$evaluation->food_eaten}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <strong>Is the child sleeping well, is the room clean</strong><i>(Including bed wetting, check with the family and the child, go and see the child's bedroom, mattress, mosquito net and bed sheets)</i>
                                        <p class="font-italic">{{$evaluation->room}}</p>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Family source of income</strong>
                                        <p class="font-italic">{{$evaluation->children_playing}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>
                                        <strong>Do the parents like having the child back</strong>
                                        <p class="font-italic">{{$evaluation->parents_view}}</p>
                                       </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Do the children like having the child back</strong>
                                        <p class="font-italic">{{$evaluation->children_view}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Does the child like being back</strong>
                                        <p class="font-italic">{{$evaluation->opinion}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Has the child been ill for any period since the last questionnaire</strong>
                                        <p class="font-italic">{{$evaluation->illness}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <strong>Does the child have any obvious skin conditions or sores</strong>
                                        <p class="font-italic">{{$evaluation->skin}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>
                                        <strong>Has the child hurt themselves by accident since the last questionnaire</strong>
                                            <p class="font-italic">{{$evaluation->accidents}}</p>
                                       </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Is the child usually tired or weak?</strong>
                                            <p class="font-italic">{{$evaluation->weakness}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Is the child growing well</strong><i>(Are there any signs of unsual size or height)</i>
                                            <p class="font-italic">{{$evaluation->growth}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Is the child exercising well?</strong>
                                            <p class="font-italic">{{$evaluation->exercise}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Is the child generally happy in temparament?</strong>
                                            <p class="font-italic">{{$evaluation->temparament}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Is the child positive about the future?</strong>
                                            <p class="font-italic">{{$evaluation->positive}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Is the child negative about anything?</strong>
                                            <p class="font-italic">{{$evaluation->negative}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Describe the child's general mobility</strong>
                                            <p class="font-italic">{{$evaluation->mobility}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Describe any ongoing health concerns or problems</strong>
                                            <p class="font-italic">{{$evaluation->health_concerns}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Specify any actions or meetings necessary after meeting the family </strong>
                                            <p class="font-italic">{{$evaluation->specific_actions}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>General comments</strong>
                                            <p class="font-italic">{{$evaluation->comments}}</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap bg-warning-light">
                                <h6 class="mb-0">{{$child->name}} has no evaluation on record, click the button to add some</h6>
                            </li>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
