@extends('layouts.home')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    {{ __('Update Project') }}
                </div>
                <div class="card-body">
                    <form action="{{ url('/projects_update/'.$project->id) }}" method="post">
                        @csrf
                        @method("put")
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required="True" value="{{ $project->name }}">

                        <label for="cost" class="form-label">Cost:</label>
                        <input type="text" class="form-control" id="cost" name="cost" required="True" value="{{ $project->cost }}">

                        <label for="other_details" class="form-label">Other details:</label>
                        <textarea class="form-control" name="other_details" id="other_details" cols="30" rows="1">{{ $project->other_details }}
                        </textarea>
                        
                        <br>
                        <div class="modal-footer">
                            <div class="container">
                                <a href="{{ url('projects_index') }}" class="btn btn-outline-primary rounded-pill">
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