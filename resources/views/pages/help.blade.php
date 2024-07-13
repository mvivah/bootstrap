<!-- Extend Main layout -->

@extends('layouts.app')
    @section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-center mb-4">
                    <div class="container contact-form">
                        <form class="form-group mx-auto" id="feedBackForm">
                            @csrf
                            <div class="col-md-8 mx-auto">
                                <h3>Leave a Message, we will get back to You</h3>
                                <input type="hidden" name="txtName" id="txtName" value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}">
                                <input type="hidden" name="txtEmail" id="txtEmail" value="{{Auth::user()->email}}">
                                <input type="hidden" name="txtPhone" id="txtPhone" value="{{Auth::user()->phone}}">
                                <input type="text" name="txtSubject" id="txtSubject" class="mt-4 form-control" placeholder="Your Message Title">
                                <textarea type="text" name="txtMsg" id="txtMsg" class="mt-4 form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                <button type="submit" name="submit" class="mt-4 btn btn-btn-lg btn-success">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
