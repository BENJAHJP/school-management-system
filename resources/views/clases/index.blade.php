@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header">{{ __('Classes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <!-- search form -->
                   <div class="container m-4">
                        <div class="row">
                            <div class="col-8">
                                <div class="container text-start">
                                    <a href="#" class="btn btn-outline-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#class-reg-modal">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col text-end">
                                <form action="{{ route('clases.search') }}" method="get">
                                    <input class="form-control" type="text" name="search" placeholder="search here ....."><br>
                                    <button type="submit" class="btn btn-outline-primary rounded-pill">
                                        <i class="fa-solid fa-search"></i>
                                    </button> 
                                </form>
                            </div>
                        </div>   
                    </div>


                    <div class="container p-0">
                        @if (session('mssg'))
                            <div class="alert alert-success" role="alert">
                                {{ session('mssg') }}
                            </div>
                        @endif

                        <!-- users registration table -->
                        <div class="container table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Other Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clases as $clas) 
                                        <tr>
                                            <td>{{ $clas->name }}</td>
                                            <td>{{ $clas->other_details }}</td>
                                            <td>
                                                <a href="{{ url('/clases_edit/'.$clas->id) }}" class="btn btn-outline-primary rounded-pill">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{ url('/clases_destroy/'.$clas->id)}}"class="btn btn-outline-primary rounded-pill">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $clases->onEachSide(1)->links() }}
                        </div>
                      

                        <div class="modal fade" id="class-reg-modal" aria-labelledby="modal-title" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal-title">Class registration</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('clases.store') }}" method="post">
                                            @csrf
                                            <label for="name" class="form-label">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" required="True">

                                            <label for="other_details" class="form-label">Other details:</label>
                                            <textarea class="form-control" name="other_details" id="other_details" cols="30" rows="1"></textarea>

                                            <div class="modal-footer">
                                                <div class="container">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
