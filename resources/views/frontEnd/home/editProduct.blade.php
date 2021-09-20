@extends('frontEnd.master')

@section('title')
    Edit | CRUD
@endsection

@section('body')
    <!--create body section start -->
    <div class="myBody">
        <h4 class="bodyTitle">Product Registration</h4>
        <div class="regform">
            <form action="{{ route('updateProduct') }}" method="post">
                @csrf
                <input class="myinput" type="text" name="mname" value="{{ $products->mname }}">
                <input class="myinput" type="hidden" name="id" value="{{ $products->id }}">
                <input class="myinput" type="email" name="memail" value="{{ $products->memail }}">
                <input class="myinput" type="phone" name="mphone" value="{{ $products->mphone }}">
                <input class="myinput bt" type="text" name="mdepertment" value="{{ $products->mdepertment }}">
                {{-- <select class="myinput selectbBorder" name="mdepertment">
                    <option>Select Your Depertment</option>
                    <option>CSE</option>
                    <option>EEE</option>
                    <option>CIVIL</option>
                </select> --}}
                <h6>Gender</h6>
                Male : <input class="" type=" radio" value="1" name="gender"
                    {{ $products->gender == 1 ? 'checked ' : '' }}>
                Female : <input class="" type=" radio" value="0" name="gender"
                    {{ $products->gender == 0 ? 'checked' : '' }}>
                <br>
                <input type="submit" name="sbmt" value="Update Product" class="mt-2 ">
            </form>
        </div>
    </div>
    <!--create body section end -->
@endsection
