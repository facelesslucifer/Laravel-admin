@extends('admin.layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="panel-title">Create Student</h3>
            </div>
        </div>
        <div class="spacer20"></div>
        <div class="row">
            <div class="col-md-5">
                <form role="form">
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" id="first_name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="last_name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="last_name">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div> {{-- End of DIV container --}}
@stop