{{-- Intervention Image Package Laravel --}}
<form action="{{route('imageupload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="">
            <label for="exampleFormControlFile1">Upload a image : </label>
            <h4>{{Session::get('message')}}</h4>
            <input type="file" class="" name=" imageinput"> <br> <br>
            <input type="submit" name="btn" value="Submit">
        </div>
    </div>
</form>
