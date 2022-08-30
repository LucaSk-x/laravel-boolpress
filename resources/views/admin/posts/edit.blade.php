@extends('layouts.app')

@section('navbar_menu')
    @include('admin.partials.adminNav')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h5>Modifica Post</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="titolo-post">Titolo post</span>
                                        </div>
                                        <input value="{{ old('title') ?? $post->title }}" name="title" type="text"
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
                                            <option {{ 'Eleonora' === ( old('createdBy') ?? $post->createdBy) ? 'selected' : ''}} value="Eleonora">Eleonora</option>
                                            <option {{ 'Luca' === ( old('createdBy') ?? $post->createdBy) ? 'selected' : ''}} value="Luca">Luca</option>
                                            <option {{ 'Silvana' === ( old('createdBy') ?? $post->createdBy) ? 'selected' : ''}} value="Silvana">Silvana</option>
                                            <option {{ 'Luigi' === ( old('createdBy') ?? $post->createdBy) ? 'selected' : ''}} value="Luigi">Luigi</option>
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
                                    {{ old('content') ?? $post->content }}
                                </textarea>
                                <div class="invalid-feedback">
                                    {{ $errors->first('content') }}
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="titolo-post">Link per immagine</span>
                                </div>
                                <input value="{{ old('imgUrl') ?? $post->imgUrl }}" name="imgUrl" type="text"
                                    class="form-control {{ $errors->has('imgUrl') ? 'is-invalid' : '' }}"
                                    aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                <div class="invalid-feedback">
                                    {{ $errors->first('imgUrl') }}
                                </div>
                            </div>

                            <div class="mb-3">
                                @dump($tagPost)
                                <label for="Input" class="form-label">Post Tag</label>
                                <select class="form-select {{ $errors->has('tags') ? 'is-invalid' : '' }}" multiple name="tags[]"
                                id="tagsInput">
                                
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag['id'] }}"  {{$tagPost->contains('tag_id', $tag['id']) ? 'selected' : ''}}>
                                            {{ $tag['name']}} </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    {{ $errors->first('tags') }}
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