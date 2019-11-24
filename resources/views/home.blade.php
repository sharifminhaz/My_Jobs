@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jobs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is home. You are logged in!
                        @foreach($posts as $job)
                    <hr>
                    <table class="table table-responsive">
                        <tr>
                            <th>Company name</th>
                            <td>: &nbsp;</td>
                            <td>{{$job->Company}}</td>
                        </tr>
                        <tr>
                            <th>Job Title</th>
                            <td>: &nbsp;</td>
                            <td>{{$job->Job_title}}</td>
                        </tr>
                        <tr>
                            <th>Job Description</th>
                            <td>: &nbsp;</td>
                            <td>{{$job->Job_description}}</td>
                        </tr>
                        <tr>
                            <th>Salary</th>
                            <td>: &nbsp;</td>
                            <td>{{$job->Salary}}</td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>: &nbsp;</td>
                            <td>{{$job->Location}}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>: &nbsp;</td>
                            <td>{{$job->Country}}</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Apply</a>
                            </td>
                        </tr>
                    </table>
                            @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
