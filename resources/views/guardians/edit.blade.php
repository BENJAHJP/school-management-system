@extends('layouts.home')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    {{ __('Update Guardian') }}
                </div>

                <div class="card-body">
                    <form action="{{ url('/guardians_update/'.$guardian->id) }}" method="post">
                        @csrf
                        @method("put")
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required="True" value="{{ $guardian->name }}">

                        <label for="contact" class="form-label">contact:</label>
                        <input type="tel" class="form-control" id="contact" name="contact" required="True" value="{{ $guardian->contact }}">

                        <label for="relationship" class="form-label">relationship:</label>
                        <input type="text" class="form-control" id="relationship" name="relationship" required="True" value="{{ $guardian->relationship }}">

                        <label for="student" class="form-label">student:</label>
                        <input type="text" class="form-control" id="student" name="student" required="True" value="{{ $guardian->student }}">

                        <br>
                        <div class="modal-footer">
                            <div class="container">
                                <a href="{{ url('guardians_index') }}" class="btn btn-outline-primary rounded-pill">
                                    <i class="fa-solid fa-times"></i>
                                </a>
                                <button type="submit" class="btn btn-outline-primary rounded-pill">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection