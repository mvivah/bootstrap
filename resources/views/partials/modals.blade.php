{{-- Warning --}}
<div class="modal fade" id="warnModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white text-center">
                <h5 class="modal-title" id="error_title">Please Confirm</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="deleteForm" onsubmit="event.preventDefault(); executeDeletion();">
                <div class="modal-body">
                    Are you sure you want to delete this record?
                    <input type="hidden" id="target_url" name="target_url">
                    <input type="hidden" id="target_id" name="target_id">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Home Assessment--}}
<div class="modal fade" id="addAssessment" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" id="assessment_header">
                <h4 class="modal-title" id="assessment_title">Home Assessment Form</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-group" autocomplete="off" id="assessmentForm">
                <div class="modal-body">
                    <input type="hidden" name="assessed_home" id="assessed_home">
                    <div id="pageone">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Are there any other potential family homes where the child can be relocated to?</label>
                                <br>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="Yes" name="potential_home">
                                    <span class="form-check-label">
                                      Yes
                                    </span>
                                </label>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="No" name="potential_home">
                                    <span class="form-check-label">
                                      No
                                    </span>
                                </label>
                            </div>
                        </div>
                            <div class="row">
                            <div class="col-md-6">
                                <label>Are there any relatives where the child could stay?</label>
                                <br>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="Yes" name="relatives">
                                    <span class="form-check-label">
                                      Yes
                                    </span>
                                </label>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="No" name="relatives">
                                    <span class="form-check-label">
                                      No
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Is the house owned or rented?</label>
                                <br>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="Owned" name="home_ownership" id="house_owned">
                                    <span class="form-check-label">
                                        Owned
                                    </span>
                                </label>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="Rented" name="home_ownership" id="house_rented">
                                    <span class="form-check-label">
                                        Rented
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-6" id="rent">
                                <label>Is rent payment uptodate?</label>
                                <br>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="Yes" name="rent_uptodate">
                                    <span class="form-check-label">
                                        Yes
                                    </span>
                                </label>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="No" name="rent_uptodate">
                                    <span class="form-check-label">
                                        No
                                    </span>
                                </label>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <label>How many rooms are there in the home?</label>
                                <input class="form-control" type="number" name="total_rooms" id="total_rooms" max="15" min="2">
                            </div>
                            <div class="col-md-12">
                                <label>Is the family positive about potentially having the child home?</label>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="Yes" name="family_positive">
                                    <span class="form-check-label">
                                        Yes
                                    </span>
                                </label>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="No" name="family_positive">
                                    <span class="form-check-label">
                                        No
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label>Describe the home layout?</label>
                                <textarea type="text" class="form-control" name="home_layout" id="home_layout"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Describe your journey to get to the home? (<i>Is it possible to drive or must it be by Bodaboda, How long on tarmac road? How long on gravel roads? Any difficult obstacles to navigate?</i>)</label>
                                <textarea type="text" class="form-control" name="journey_home" id="journey_home"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>How close is the home to key areas? (<i>Main road, village centre, local market, shops, point of reference</i>)</label>
                                <textarea type="text" class="form-control" name="home_closeness" id="home_closeness"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>How does the family obtain clean water? (<i>Is the quality good? How often do they get it? How long does it take to get it?</i>)</label>
                                <textarea type="text" class="form-control" name="clean_water" id="clean_water"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Describe the family kitchen and food storage area(<i>Is it inside the main house? Is it properly ventilated? What fuel is used to cook? What is the source of the fuel?</i>)</label>
                                <textarea type="text" class="form-control" name="family_kitchen" id="family_kitchen"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Describe the source of family income (<i>One source or multiple? Is it viable to support another child? Describe any recent difficulties of income?</i>)</label>
                                <textarea type="text" class="form-control" name="family_income" id="family_income"></textarea>
                            </div>
                        </div>
                        <div id="pagetwo">
                            <div class="col-md-12">
                                <label>Describe how the family sources food (<i>All through their own farming? Buy once a week at the local market? Do they eat well enough? Is there enough? etc</i>)</label>
                                <textarea type="text" class="form-control" name="food_source" id="food_source"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Are there any particular family concerns? (<i>Any special family circumstances that take family resource?</i>)</label>
                                <textarea type="text" class="form-control" name="family_concerns" id="family_concerns"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label>Are the family toilet facilities usable and easily accessible?</label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="Yes" name="toilet_facilities">
                                    <span class="form-check-label">
                                        Yes
                                    </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="No" name="toilet_facilities">
                                    <span class="form-check-label">
                                        No
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label>Describe the journey how to get to the school that child would visit? (<i>Is it possible to drive or must it be by Bodaboda, How long on tarmac road? How long on gravel roads? Any difficult obstacles to navigate? How long would it take for the child to walk? Is it safe?</i>)</label>
                                <textarea type="text" class="form-control" name="school_journey" id="school_journey"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label>Do other children in the family go to this school?</label>
                                <br>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="Yes" name="children_in_school">
                                    <span class="form-check-label">
                                        Yes
                                    </span>
                                </label>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="radio" value="No" name="children_in_school">
                                    <span class="form-check-label">
                                        No
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>How many other children in the family go to this school?</label>
                                <input class="form-control" type="number" name="children_number" id="children_number" max="10" min="0">
                            </div>
                            <div class="col-md-12">
                                <label>Describe the other children/'s education situation(<i>Do they also go to school?etc</i>)</label>
                                <textarea type="text" class="form-control" name="education_situation" id="education_situation"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Describe the health of the entire family(<i>Any Issues? Are all members dressed appropriately?etc</i>)</label>
                                <textarea type="text" class="form-control" name="family_health" id="family_health"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Any other comments?</label>
                                <textarea type="text" class="form-control" name="general_comments" id="general_comments"></textarea>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <div class="btn-group btn-group">
                        <button type="button" class="btn btn-outline-success" id="process_pageone">Next</button>
                        <button type="button" class="btn btn-outline-secondary" id="back_to_pageone">Back</button>
                        <button type="submit" class="btn btn-outline-success" id="save_assessment">Save Changes</button>
                        <button type="submit" class="btn btn-outline-success" id="update_assessment">Update</button>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Add Users --}}
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title "id="user_title">User Registration</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-group" id="userForm" autocomplete="off">
                <div class="modal-body">
                    <div class="row mb-3">
                        <input type="hidden" id="user_id" name="user_id">
                        <div class="col-md-4">
                            <label>ID Number</label>
                            <input type="text" name="staff_id" id="staff_id" class="form-control" placeholder="ABC/000/000">
                        </div>
                        <div class="col-md-4">
                            <label>Firstname</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname">
                        </div>
                        <div class="col-md-4">
                            <label>Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label>Gender</label>
                            <br>
                            <select type="text" name="user_gender" id="user_gender" class="form-select">
                                <option value="" selected disabled>-- Select --</option>
                                @foreach(['Female','Male'] as  $gender)
                                    <option value="{{$gender}}">{{$gender}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Birthdate</label>
                            <input type="date" name="user_birthdate" id="user_birthdate" class="form-control" placeholder="Birthdate">
                        </div>
                        <div class="col-md-3">
                            <label>Mobile Phone</label>
                            <input type="tel" name="mobile_phone" id="mobile_phone" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Department</label>
                            <select name="the_department" id="the_department" class="form-select">
                                <option value="" selected disabled>Choose...</option>
                                @foreach(App\Models\Department::all() as  $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Title</label>
                            <select name="the_title"  id="the_title" class="form-select">
                                <option value="" selected disabled>Choose...</option>
                                @foreach(App\Models\Title::all() as  $title)
                                <option value="{{$title->id}}">{{$title->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>User group</label>
                            <select name="the_group"  id="the_group" class="form-select">
                                <option value="" selected disabled>-- Choose --</option>
                                @foreach(App\Models\Group::all() as  $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center" id="logins">
                        <div class="col-md-4">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                    <input type="hidden" name="account_status" id="account_status"  value="Active">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Homes--}}
<div class="modal fade" id="addHome" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" id="home_header">
                <h4 class="modal-title" id="home_title">Add Home</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-group" autocomplete="off" id="homeForm">
                <div class="modal-body">
                    <input type="hidden" name="home_id" id="home_id">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Family Name</label>
                            <input type="text" id="home_name" name="home_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Family Head</label>
                            <input type="text" id="home_head" name="home_head" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Type</label>
                            <select type="text" id="home_type" name="home_type" class="form-select">
                                <option value="" selected disabled> --Select Type-- </option>
                                <option value="Foster Home">Foster Home</option>
                                <option value="Orphanage">Orphanage</option>
                                <option value="Parental">Parental</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label>Address</label>
                            <input type="text" id="home_address" name="home_address" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Clan</label>
                            <input type="text" id="home_clan" name="home_clan" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Totem</label>
                            <input type="text" id="home_totem" name="home_totem" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Religion</label>
                            <select type="text" id="home_religion" name="home_religion" class="form-select">
                                <option value="" selected disabled> --Select Religion-- </option>
                                <option value="Anglican">Anglican</option>
                                <option value="Catholic">Catholic</option>
                                <option value="Baptist">Baptist</option>
                                <option value="Adventist">Adventist</option>
                                <option value="Orthodox">Orthodox</option>
                                <option value="Lutheran">Lutheran</option>
                                <option value="Pegan">Pegan</option>
                                <option value="Traditional">Traditional</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Adults in the home</label>
                            <input type="number" id="adults" name="adults" class="form-control" min="1" max="5">
                        </div>
                        <div class="col-md-6">
                            <label>Owned Children</label>
                            <input type="number" id="minors" name="minors" class="form-control" min="0" max="10">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save_home" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Messages--}}
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="message_header">
                <h4 class="modal-title" id="message_title">Message</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form class="form-group" autocomplete="off">
                <div class="modal-body" id="message_body">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Activities--}}
<div class="modal fade" id="addActivity" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header" id="activity_header">
                    <h4 class="modal-title" id="activity_title">Add Activity</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
                </div>
                <form class="form-group" autocomplete="off" id="activityForm">
                <div class="modal-body" id="activity_body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Title</label>
                            <input type="text" id="activity_title" name="activity_title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Start Date</label>
                            <input type="date" id="activity_start" name="activity_start" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>End Date</label>
                            <input type="date" id="activity_end" name="activity_end" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Description</label>
                            <textarea type="text" id="activity_description" name="activity_description" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Profile Picture--}}
<div class="modal fade" id="changePicture" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Picture</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form enctype="multipart/form-data" id="picturesForm" autocomplete="off">
                <div class="modal-body">
                    <div class="col-md-12">
                        <input type="hidden" name="face_id" id="face_id">
                        <input type="hidden" name="face_owner" id="face_owner">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input upicture" name="picture"  id="picture" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Departments --}}
<div class="modal fade" id="addDepartment">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="department_title">Create Department</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form autocomplete="off" id="departmentForm">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Department Name:</label>
                            <input type="text" class="form-control" name="department_name" id="department_name">
                            <input type="hidden" name="department_id" id="department_id">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Initials:</label>
                            <input type="text" class="form-control" name="department_code" id="department_code">
                        </div>
                        <div class="col-md-8">
                            <label>Department Head:</label>
                            <select name="department_head" id="department_head" class="form-select">
                                <option value="" selected disabled>-- Choose --</option>
                                @foreach(App\Models\User::all() as  $user)
                                <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save_department" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- User groups --}}
<div class="modal fade" id="addGroup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="group_title">Add Group</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form id="groupForm" autocomplete="off" class="form-group">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="group_name" id="group_name">
                            <input type="hidden" name="group_id" id="group_id">
                        </div>
                        <div class="col-md-12">
                            <label>Description:</label>
                            <input type="text" class="form-control" name="group_description" id="group_description">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save_group" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Attachments--}}
<div class="modal fade" id="addAttachment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Attachments</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
                <form id="attachmentForm" action="{{url('attachments')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="owning_child" id="owning_child">
                            <label for="attachment_category">Attachment Category: </label>
                            <select class="form-select {{ $errors->has('attachment_category') ? ' is-invalid' : '' }}" name="attachment_category"  id="attachment_category">
                                <option disabled selected value="">- Choose -</option>
                                <option value="Medical Reports">Medical Reports</option>
                                <option value="Case Reports">Case Reports</option>
                                <option value="Police Reports">Police Reports</option>
                                <option value="Court Notes">Court Notes</option>
                                <option value="General">General</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="attachment">Attachment: </label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input {{ $errors->has('attachment') ? ' is-invalid' : '' }}" name="attachment"  id="attachment">
                              </div>
                        </div>
                        <div class="col-md-12">
                            <label for="attachment_description">Description: </label>
                            <input class="form-control {{ $errors->has('attachment_description') ? ' is-invalid' : '' }}" name="attachment_description"  id="attachment_description">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="save_attachment">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Comments--}}
<div class="modal fade" id="addComments" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="comment_title">Add Comment</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form class="form-group" id="commentsForm" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="comment_id" id="comment_id">
                            <input type="hidden" name="commentable_type" id="commentable_type">
                            <input type="hidden" name="commentable_id" id="commentable_id">
                            <label for="comment">Comment</label>
                            <textarea name="comment_body" id="comment_body" rows="2" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Titles--}}
<div class="modal fade" id="addTitle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-group" id="titleForm" autocomplete="off">
                <div class="modal-header" id="title_header">
                    <h4 class="modal-title" id="title_title">Add Title</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <label>Title Name:</label>
                            <input type="text" class="form-control" name="title_name" id="title_name">
                            <input type="hidden" name="title_id" id="title_id">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Description:</label>
                            <input type="text" class="form-control" name="title_description" id="title_description">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save_title" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Donors--}}
<div class="modal fade" id="addDonor" tabindex="-1" aria-labelledby="donorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="donor_header">
                <h4 class="modal-title" id="donor_title">Add Donor</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form class="form-group" autocomplete="off" id="donorForm">
                <div class="modal-body" id="donor_body">
                    <input type="hidden" name="donor_id" id="donor_id">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Full Name</label>
                            <input type="text" id="donor_name" name="donor_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" id="donor_email" name="donor_email" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Phone</label>
                            <input type="tel" id="donor_phone" name="donor_phone" class="form-control">
                        </div>
                        <div class="col-md-5">
                            <label>Country</label>
                            <input type="text" id="donor_country" name="donor_country" class="form-control">
                        </div>
                        <div class="col-md-7">
                            <label>Address</label>
                            <input type="text" id="donor_address" name="donor_address" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Occupation</label>
                            <input type="text" id="occupation" name="occupation" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save_donor" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Donations--}}
<div class="modal fade" id="addDonation" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="donation_header">
                 <h4 class="modal-title" id="donation_title">Donation</h4>
                 <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form class="form-group" autocomplete="off" id="donationForm">
                <div class="modal-body" id="donation_body">
                    <input type="hidden" name="donation_id" id="donation_id">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Donor</label>
                            <select type="text" id="donor" name="donor" class="form-select">
                                <option value="" selected disabled></option>
                                @foreach(App\Models\Donor::all() as  $donor)
                                    <option value="{{$donor->id}}">{{$donor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Amount</label>
                            <input type="number" id="donation_amount" name="donation_amount" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Currency</label>
                            <select type="text" id="donation_currency" name="donation_currency" class="form-select">
                                <option value="" selected disabled></option>
                                <option value="Shillings">Shillings</option>
                                <option value="Dollars">Dollars</option>
                                <option value="Pounds">Pounds</option>
                                <option value="Euros">Euros</option>
                                <option value="Francs">Francs</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>Description</label>
                            <input type="text" id="donation_description" name="donation_description" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="save" id="save_donation" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Visits--}}
<div class="modal fade" id="addVisit">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" id="visit_header">
                <h4 class="modal-title" id="visit_title">Add Visit</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form class="form-group" autocomplete="off" id="visitForm">
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="visit_id" id="visit_id">
                        <input type="hidden" name="visited_child" id="visited_child">
                        <input type="hidden" name="visiting_relative" id="visiting_relative">
                        <div class="col-md-6">
                            <label>Visit Date</label>
                            <input type="date" id="visit_date" name="visit_date" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Reason for the visit</label>
                            <input type="text" id="visit_reason" name="visit_reason" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save_visitor" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Children Resettlemnt--}}
<div class="modal fade" id="resettleChild">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <form class="form-group" id="resettlingForm" autocomplete="off">
                <div class="modal-header" id="resettling_header">
                    <h4 class="modal-title" id="resettling_title">Child Resettlement</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Search Child</label>
                            <input type="select-one" name="searched_child" autocomplete="off" id="searched_child" class="form-control" placeholder="Type child name here...">
                            <select id="picked_child" class="form-select" placeholder="Select a child..." tabindex="1"></select>
                            <input type="hidden" name="found_child" id="found_child">
                            <input type="hidden" name="receiving_home" id="receiving_home">
                            <input type="hidden" name="receiving_school" id="receiving_school">
                        </div>
                    </div>
                </div>
                <div class="modal-footer mt-2">
                    <button type="submit" class="btn btn-success" id="save_resettlement">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Child Relatives --}}
<div class="modal fade" id="addRelative">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" id="relative_header">
                <h4 class="modal-title" id="relative_title">Add Relative</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form class="form-group" id="relativeForm" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="relative_id" id="relative_id">
                        <input type="hidden" name="related_child" id="related_child">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="relative_name" id="relative_name" class="form-control" placeholder="Relatives's Fullname">
                        </div>
                        <div class="col-md-6">
                            <label>Physical Address</label>
                            <input type="text"  name="relative_address" id="relative_address" class="form-control" placeholder="Village and Parish">
                        </div>
                        <div class="col-md-6">
                            <label>Phone Contact</label>
                            <input type="tel"  name="relative_phone" id="relative_phone" class="form-control" placeholder="0712345678">
                        </div>
                        <div class="col-md-6">
                            <label>Relationship</label>
                            <select type="text" id="relationship" name="relationship" class="form-select">
                                <option value="" selected disabled> --Select-- </option>
                                @foreach (['Parent','Brother','Sister','Uncle','Aunt','Grandfather','Grandmother','Cousin','Guardian','Visitor','Referee','Contact person','Court Representative'] as $relationship)
                                    <option value="{{$relationship}}">{{$relationship}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Is alive</label>
                            <select type="text" id="relative_alive" name="relative_alive" class="form-select">
                                @foreach (['Yes','Maybe','No'] as $alive)
                                <option value="{{$alive}}" selected>{{$alive}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-7">
                            <label>Occupation</label>
                            <input type="text"  name="relative_occupation" id="relative_occupation" class="form-control" placeholder="Current occupation">
                        </div>
                        <div class="col-md-2">
                            <label>Age</label>
                            <input type="number"  name="relative_age" id="relative_age" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer mt-2">
                    <button type="submit" class="btn btn-success" id="save_relative">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Children--}}
<div class="modal fade" id="addChild">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form class="form-group" id="childForm" autocomplete="off">
                <div class="modal-header" id="child_header">
                    <h2 class="modal-title" id="child_title">Add Child</h2>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="child_id">
                        <div class="col-md-2">
                            <label>Admission Number</label>
                            <input type="text" name="admission_number" id="admission_number" class="form-control" placeholder="000/0000/000">
                        </div>
                        <div class="col-md-5">
                            <label>Fullname</label>
                            <input type="text" name="child_name" id="child_name" class="form-control" placeholder="Name of the child">
                        </div>
                        <div class="col-md-2">
                            <label>Gender</label>
                            <select type="text" id="child_gender" name="child_gender" class="form-select">
                                <option value="" selected disabled> --Select-- </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Birthdate</label>
                            <input type="date" id="birth_date" name="birth_date" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Birth Order</label>
                            <input type="number" id="birth_order" name="birth_order" class="form-control" min="1" max="15">
                        </div>
                        <div class="col-md-3">
                            <label>Clan</label>
                            <input type="text" id="child_clan" name="child_clan" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Totem</label>
                            <input type="text" id="child_totem" name="child_totem" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Religion</label>
                            <select type="text" id="child_religion" name="child_religion" class="form-select">
                                <option value="" selected disabled> --Select Religion-- </option>
                                <option value="Anglican">Anglican</option>
                                <option value="Catholic">Catholic</option>
                                <option value="Baptist">Baptist</option>
                                <option value="Adventist">Adventist</option>
                                <option value="Orthodox">Orthodox</option>
                                <option value="Lutheran">Lutheran</option>
                                <option value="Pegan">Pegan</option>
                                <option value="Traditional">Traditional</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Admission Date</label>
                            <input type="date" id="admission_date" name="admission_date" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Was child abandoned?</label>
                            <select type="text" id="abandoned" name="abandoned" class="form-select">
                                <option value="" selected disabled> --Select-- </option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Village</label>
                            <input type="text"  name="village" id="village" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Parish</label>
                            <input type="text"  name="parish" id="parish" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Sub-County</label>
                            <input type="text"  name="subcounty" id="subcounty" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>District</label>
                            <input type="text"  name="district" id="district" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Circumstances under which the child was found </label>
                            <input type="text"  name="circumstances" id="circumstances" class="form-control"/>
                        </div>
                        <div class="col-md-3">
                            <label>Health condition  </label>
                            <input type="text"  name="health_condition" id="health_condition" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Reason for admission </label>
                            <input type="text"  name="admission_reason" id="admission_reason" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Duration of stay</label>
                            <input type="number"  name="duration" id="duration" class="form-control" min="1">
                        </div>
                        <div class="col-md-3">
                            <label>Duration type</label>
                            <select name="duration_type" id="duration_type" class="form-select">
                                <option value="Days">Days</option>
                                <option value="Weeks">Weeks</option>
                                <option value="Months">Months</option>
                                <option value="Years">Years</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Brought By</label>
                            <select type="text" id="brought_by" name="brought_by" class="form-select">
                                <option value="" selected disabled> --Select-- </option>
                                <option value="Probation officer">Probation officer</option>
                                <option value="Hospital">Hospital</option>
                                <option value="Police">Police</option>
                                <option value="Family Member">Family Member</option>
                                <option value="Religious Leader">Religious Leader</option>
                                <option value="Local Leader">Local Leader</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer mt-2">
                    <button type="submit" class="btn btn-success" id="save_child">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Cases--}}
<div class="modal fade" id="addCase">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" id="case_header">
                <h2 class="modal-title" id="case_title">Child Case</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form class="form-group" id="caseForm" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="case_id">
                        <input type="hidden" id="affected_child" name="affected_child">
                        <div class="col-md-5">
                            <label>Care order number</label>
                            <input type="text"  name="care_order" id="care_order" class="form-control">
                        </div>
                        <div class="col-md-7">
                            <label>Presiding magistrate</label>
                            <input type="text"  name="presiding_magistrate" id="presiding_magistrate" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Details</label>
                            <textarea type="text" name="case_details" id="case_details" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mt-2">
                    <button type="submit" class="btn btn-success" id="save_case">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Child Evaluation--}}
<div class="modal fade" id="addEvaluation" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" id="evaluation_header">
                <h4 class="modal-title" id="evaluation_title">Child Evaluation</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-group" autocomplete="off" id="evaluationForm">
                <div class="modal-body">
                    <div class="row" id="general_section">
                        <input type="hidden" name="evaluated_child" id="evaluated_child">
                        <div class="col-md-12">
                            <label>Is the child happy to see the social worker?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_happiness">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_happiness">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Does the child seem comfortable?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_comfortable">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_comfortable">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Is the child comfortable in the family presence<i>(Do you need to speak away from the family)</i>?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="family_presence">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="family_presence">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Are there any changes in the household since the last recorded home details?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="household_changes">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="household_changes">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Is the water source still accessible?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="water_accessibility">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="water_accessibility">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Is the toilet still in satisfactory condition?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="toilet_condition">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="toilet_condition">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Describe whether the family is financially able to provide food for the child?</label>
                            <input class="form-control" type="text" id="financial_ability" name="financial_ability">
                        </div>
                        <div class="col-md-12">
                            <label>What are the sources of family food?</label>
                            <input class="form-control" type="text" id="food_sources" name="food_sources">
                        </div>
                        <div class="col-md-12">
                            <label>Is the child eating and drinking well?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_feeding">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_feeding">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>How often does the family eat?</label>
                            <input class="form-control" type="text" id="number_of_meals" name="number_of_meals">
                        </div>
                        <div class="col-md-12">
                            <label>Which food are they eating?</label>
                            <input class="form-control" type="text" id="food_eaten" name="food_eaten">
                        </div>
                        <div class="col-md-12">
                            <label>Is the child sleeping well, is the room clean<i>(Including bed wetting, check with the family and the child, go and see the child's bedroom, mattress, mosquito net and bed sheets)</i>?</label>
                            <input class="form-control" type="text" id="child_room" name="child_room">
                        </div>
                        <div class="col-md-12">
                            <label>Do other children in the family play well with the child?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="children_playing">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="children_playing">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Do the parents like having the child back <i>(Ask the parents)?</i></label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="parents_view">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="parents_view">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Do the children like having the child back <i>(Ask the children)?</i></label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="children_view">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="children_view">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Does the child like being back <i>(Spend time alone with the child to understand this properly)?</i></label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_opinion">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_opinion">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="row" id="health_section">
                        <div class="col-md-12">
                            <label>Has the child been ill for any period since the last questionnaire?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_illness">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_illness">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Does the child have any obvious skin conditions or sores?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_skin">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_skin">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Has the child hurt themselves by accident since the last questionnaire?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_accidents">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_accidents">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Is the child usually tired or weak?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_weakness">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_weakness">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Is the child growing well<i>(Are there any signs of unsual size or height)</i>?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_growth">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_growth">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Is the child exercising well?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_exercise">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_exercise">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Is the child generally happy in temparament?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_temparament">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_temparament">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Is the child positive about the future?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_positive">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_positive">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Is the child negative about anything?</label>
                            <br>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="Yes" name="child_negative">
                                <span class="form-check-label">
                                  Yes
                                </span>
                            </label>
                            <label class="form-check-inline">
                                <input class="form-check-input" type="radio" value="No" name="child_negative">
                                <span class="form-check-label">
                                  No
                                </span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label>Describe the child's general mobility</label>
                            <input class="form-control" id="child_mobility" name="child_mobility">
                        </div>
                        <div class="col-md-12">
                            <label>Describe any ongoing health concerns or problems</label>
                            <input class="form-control" id="child_concerns" name="health_concerns">
                        </div>
                        <div class="col-md-12">
                            <label>Specify any actions or meetings necessary after meeting the family</label>
                            <input class="form-control" id="specific_actions" name="specific_actions">
                        </div>
                        <div class="col-md-12">
                            <label>General comments</label>
                            <input class="form-control" id="child_comments" name="child_comments">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group btn-group">
                        <button type="button" class="btn btn-outline-success" id="process_general">Next</button>
                        <button type="button" class="btn btn-outline-info" id="back_to_general">Back</button>
                        <button type="submit" class="btn btn-outline-success" id="save_evaluation">Save Changes</button>
                        <button type="submit" class="btn btn-outline-success" id="update_evaluation">Update</button>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Schools--}}
<div class="modal fade" id="addSchool" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" id="school_header">
                <h4 class="modal-title" id="school_title">Add School</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-group" autocomplete="off" id="schoolForm">
                <div class="modal-body">
                    <input type="hidden" name="school_id" id="school_id">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" id="school_name" name="school_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Address</label>
                            <input type="text" id="school_address" name="school_address" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Type</label>
                            <select type="text" id="school_type" name="school_type" class="form-select">
                                <option value="" selected disabled> --Select Type-- </option>
                                @foreach (['Kindergater','Primary','Secondary','Vocational','Tertiary'] as $type)
                                <option value="{{$type}}">{{$type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label>Location</label>
                            <input type="text" id="school_location" name="school_location" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save_school" class="btn btn-success">Save Changes</button>
                    <button type="button" class="btn btn-outline-secondary reseter" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
