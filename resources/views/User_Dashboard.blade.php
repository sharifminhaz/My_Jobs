@extends('layouts.app')

<style>
    .vl {
        border-left: 1px solid #000000;
        height: 500px;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <h2>Profile</h2>
        </div>
        <div class="row">
            <div class="col-5 p-3">
                <div class="row justify-content-center">
                    <table class="table table-responsive">
                        @foreach($profile as $pp)
                        <tr>
                            <td><img src="{{URL::to($pp->Image)}}" style="height:30px; width: 30px; "></td>
                        </tr>
                        <tr>
                            <td>{{$pp->CV}}</td>
                        </tr>
                            @endforeach
                    </table>
                </div>
                <div class="row justify-content-center">
                    <h6> &nbsp; </h6>
                </div>
            </div>
            <div class="col-1 p-3">
                <div class="row justify-content-center">
                    <div class="vl"></div>
                </div>
                <div class="row justify-content-center">
                    <h6> &nbsp; </h6>
                </div>
            </div>
            <div class="col-5 p-3">
                <div class="card-body">
                    <form method="POST" action="{{route('profile')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                            <select name="Last_name">
                                <option value="{{Auth::user()->Last_name}}">New Upload</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control"  required name="Image">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="CV" class="col-md-4 col-form-label text-md-right">{{ __('CV') }}</label>

                            <div class="col-md-6">
                                <input id="CV" type="file" class="form-control @error('CV') is-invalid @enderror" name="CV" value="{{ old('CV') }}" required autocomplete="CV" autofocus>

                                @error('CV')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>


    </div>
@endsection
