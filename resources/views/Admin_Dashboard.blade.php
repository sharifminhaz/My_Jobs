@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post Job') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('posts')}}">
                            @csrf
                            <div>
                                <select name="Company">
                                    <option value="{{Auth::user()->Business_name}}">{{Auth::user()->Business_name}}</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="Job_title" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>

                                <div class="col-md-6">
                                    <input id="Job_title" type="text" class="form-control @error('Job_title') is-invalid @enderror" name="Job_title" value="{{ old('Job_title') }}" required autocomplete="Job_title" autofocus>

                                    @error('Job_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--<div class="form-group row">
                                <label for="Job_description" class="col-md-4 col-form-label text-md-right">{{ __('Job Description') }}</label>

                                <div class="col-md-6">
                                    <input id="Job_description" row="10" type="text" class="form-control @error('Job_description') is-invalid @enderror" name="Job_description" value="{{ old('Job_description') }}" required autocomplete="Job_description" autofocus>

                                    @error('Job_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>--}}
                            <div class="control-group ">

                                <div class="form-group floating-label-form-group controls">
                                    <label for="Job_description" class="col-md-4 col-6 text-md-right">{{ __('Job Description') }}</label>
                                    <textarea rows="12" type="text" class="form-control" name="Job_description" value="{{ old('Job_description') }}"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Salary" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                                <div class="col-md-6">
                                    <input id="Salary" type="text" class="form-control @error('Salary') is-invalid @enderror" name="Salary" value="{{ old('Salary') }}" required autocomplete="Salary" autofocus>

                                    @error('Salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                                <div class="col-md-6">
                                    <input id="Location" type="text" class="form-control @error('Location') is-invalid @enderror" name="Location" value="{{ old('Location') }}" required autocomplete="Location" autofocus>

                                    @error('Location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <input id="Country" type="text" class="form-control @error('Country') is-invalid @enderror" name="Country" value="{{ old('Country') }}" required autocomplete="Country" autofocus>

                                    @error('Country')
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
    </div>
@endsection

