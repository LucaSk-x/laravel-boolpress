@extends('layouts.app')

@section('navbar_menu')
    @include('admin.partials.adminNav')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-header">
                            <h5>Modifica Post</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="name-user">Nome Utente</span>
                                        </div>
                                        <input value="{{ old('name') ?? $user->name }}" name="name" type="text"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="user-email">E-mail Utente</span>
                                        </div>
                                        <input value="{{ old('email') ?? $user->email }}" name="email" type="text"
                                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="user-city">City</span>
                                        </div>
                                        <input value="{{ old('city') ?? $user->city }}" name="city" type="text"
                                            class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}"
                                            aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('city') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="user-address">Indirizzo Utente</span>
                                        </div>
                                        <input value="{{ old('address') ?? $user->address }}" name="address" type="text"
                                            class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                            aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('address') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="user-role">Ruolo Utente</span>
                                        </div>
                                        <input value="{{ old('role') ?? $user->role }}" name="role" type="text"
                                            class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }}"
                                            aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('role') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="user-phone">Telefono Utente</span>
                                        </div>
                                        <input value="{{ old('phone') ?? $user->phone }}" name="phone" type="text"
                                            class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                            aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mr-2">Salva</button>
                                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary mr-2">Annulla</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection