@extends('layouts.create-layout')

@section('content')
<style>
    /* CSS para a página create.blade.php */

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.card {
    width: 100%;
    max-width: 400px;
    padding: 30px;
    box-sizing: border-box;
    border-radius: 10px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
}

.card-header {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 10px;
}

.form-control {
    border: none;
    background-color: #F2F2F2;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
}

.form-control:focus {
    outline: none;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-primary {
    background-color: #00A7E1;
    border: none;
    padding: 10px 20px;
    color: #FFF;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #007DBA;
}

.invalid-feedback {
    color: #DC3545;
    font-size: 14px;
    font-weight: bold;
    margin-top: 5px;
}

</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create User') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
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
