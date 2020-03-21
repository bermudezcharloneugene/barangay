@extends('layouts.app2')

@section('content')
    
<div class="container mt-5 mb-5 form-style">
    <form action="{{route('person.store')}}" method="GET">
        {{ csrf_field() }}
        <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile02">
            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
          </div>
        </div>
        <div class="form-group">
          <label for="">First Name</label>
          <input type="text" name="first_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Middle Name</label>
          <input type="text" name="middle_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" name="last_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Street Code</label>
          <input type="text" name="street_code" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Address</label>
          <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Age</label>
          <input type="text" name="age" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Birthday</label>
          <input type="text" name="birthday" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Contact No.</label>
          <input type="number" name="contact_no" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="input-group mb-3">
          <select name="gender" class="custom-select" id="inputGroupSelect03">
            <option selected>Gender...</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="lgbt">LGBT</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <select name="pwd" class="custom-select" id="inputGroupSelect03">
            <option selected>PWD...</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="lgbt">LGBT</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <select name="osy" class="custom-select" id="inputGroupSelect03">
            <option selected>OSY(Out of school youth)...</option>
            <option value="male">Yes</option>
            <option value="female">No</option>
          </select>
        </div>

        <div>
            <button class="btn btn-primary btn-block" type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection

{{-- @section('script')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
@endsection --}}