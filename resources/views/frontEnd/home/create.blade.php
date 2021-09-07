@extends('frontEnd.master')

@section('title')
    Insert Data | CRUD
@endsection

@section('body')
	<!--create body section start -->
	<div class="myBody">
        <h4 class="bodyTitle">Product Registration</h4>
        <div class="regform">
            <form action="" method="post">
                <input class="myinput" type="text" name="mname" placeholder="Enter Your Name">
                <input class="myinput" type="email" name="memail" placeholder="Enter Your Email">
                <input class="myinput" type="phone" name="mphone" placeholder="Enter Your phone">
                <!-- <input class="myinput" type="text" name="mdepertment" placeholder="Enter Your Depertment">  -->
                <select class="myinput selectbBorder" name="mdepertment">
                    <option>Select Your Depertment</option>
                    <option>CSE</option>
                    <option>EEE</option>
                    <option>CIVIL</option>
                </select>
                <h6>Gender</h6>
                Male : <input class="" type="radio" name="gender" value="">
                Female : <input class="" type="radio" name="gender" value="">
                <br>
                <input type="submit" name="sbmt" value="SUBMIT" class="mt-2 ">
            </form>
        </div>
    </div>
	<!--create body section end -->
@endsection
