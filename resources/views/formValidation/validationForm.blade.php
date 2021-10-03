@extends('frontEnd.master')

@section('title')
   Validations
@endsection

@section('body')
	<!--create body section start -->
	<div class="myBody">
        <h4 class="bodyTitle">Form Validations</h4>
        <div class="regform">
            <form action="{{route('formSubmit')}}" method="post">
                @csrf
                <input class="myinput" type="text" name="mname" value="{{ old('mname') }}" placeholder="Enter Your Name">
                @error('mname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input class="myinput" type="text" name="memail" value="{{ old('memail') }}" placeholder="Enter Your Email">
                @error('memail')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input class="myinput" type="phone" name="mphone" placeholder="Enter Your phone">
                @error('mphone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input class="myinput" type="text" name="mdepertment" placeholder="Enter Your Depertment">
                {{-- <select class="myinput selectbBorder" name="mdepertment">
                    <option>Select Your Depertment</option>
                    <option>CSE</option>
                    <option>EEE</option>
                    <option>CIVIL</option>
                </select> --}}
                <h6>Gender</h6>
                Male : <input class="" type="radio" name="gender" value="1">
                Female : <input class="" type="radio" name="gender" value="0">
                <br>
                <input type="submit" name="sbmt" value="SUBMIT" class="mt-2 ">
            </form>
        </div>
    </div>
	<!--create body section end -->
@endsection
