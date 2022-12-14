@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header">{{ __('Fees') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- search form -->
                    <div class="container m-4">
                            <div class="row">
                                <div class="col text-end">
                                    <form action="{{ route('fees.search') }}" method="get">
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

                        <div class="container table-responsive">
                            @foreach($students as $student)
                                <form action="{{ url('/fees_store/') }}" method="post">
                                    @csrf          
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Fee paid</th>
                                                <th>Fee payable</th>
                                                <th>Payment method</th>
                                                <th>Ref No</th>
                                                <th>Term period</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                            <tr>
                                                <td><input type="text" class="form-control" name="name" required="True" value="{{ $student->name }}"></td>
                                                <td><input type="text" class="form-control" id="fee_paid" name="fee_paid" required="True"></td>
                                                <td><input type="text" class="form-control" id="fee_payable" name="fee_payable" required="True"></td>
                                                <td><input type="text" class="form-control" id="payment_method" name="payment_method" required="True"></td>
                                                <td><input type="text" class="form-control" id="ref_no" name="ref_no" required="True"></td>
                                                <td><input type="text" class="form-control" id="term_period" name="term_period" required="True"></td>
                                                <td>
                                                    <button type="submit" class="btn btn-outline-primary rounded-pill">
                                                        <i class="fa-solid fa-paper-plane"></i>
                                                    </button>
                                                </td>
                                            </tr>               
                                        </tbody>
                                    </table>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection