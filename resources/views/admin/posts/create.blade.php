@extends('layouts.app')

@section('navbar_menu')
    @include('admin.partials.adminNav')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5>Nuovo Post</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="titolo-post">Titolo post</span>
                                        </div>
                                        <input value="{{ old('title') }}" name="title" type="text"
                                            class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                            aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('title') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Scritto da:</label>
                                        </div>
                                        <select
                                            class="custom-selectform-control w-50 {{ $errors->has('createdBy') ? 'is-invalid' : '' }}"
                                            name="createdBy" id="inputGroupSelect01">
                                            <option></option>
                                            <option {{ old('createdBy') === 'Eleonora' ? 'selected' : ''}} value="Eleonora">Eleonora</option>
                                            <option {{ old('createdBy') === 'Luca' ? 'selected' : ''}} value="Luca">Luca</option>
                                            <option {{ old('createdBy') === 'Silvana' ? 'selected' : ''}} value="Silvana">Silvana</option>
                                            <option {{ old('createdBy') === 'Luigi' ? 'selected' : ''}} value="Luigi">Luigi</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('createdBy') }}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Contenuto Post</label>
                                <textarea name="content" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}"
                                    id="exampleFormControlTextarea1" rows="9">
                                    {{ old('content') }}
                                </textarea>
                                <div class="invalid-feedback">
                                    {{ $errors->first('content') }}
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <input value="{{ old('imgUrl') }}" name="imgUrl" type="file"
                                    class="form-control {{ $errors->has('imgUrl') ? 'is-invalid' : '' }}"
                                    aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                <div class="invalid-feedback">
                                    {{ $errors->first('imgUrl') }}
                                </div>
                            </div>


                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mr-2">Salva</button>
                                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Annulla</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection