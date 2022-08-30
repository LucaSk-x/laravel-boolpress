@extends('layouts.app')

@section('navbar_menu')
    @include('admin.partials.adminNav')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @foreach ($posts as $post)
                <div class="col-md-8">
                    <div class="card mb-2">
                        <div class="card-header">
                            <div class="row">
                                <div class="col align-self-center">
                                    <div>{{ $post->title }}</div>

                                </div>
                                <div class="col text-right">
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" enctype="multipart/form-data">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin.posts.show', $post->id) }}"
                                                class="btn btn-outline-success">
                                                Apri
                                            </a>
                                            <a href="{{ route('admin.posts.edit', $post->id) }}"
                                                class="btn btn-outline-primary">
                                                Modifica
                                            </a>

                                            <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">
                                                    Elimina
                                                </button>
                                            </form>


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>{{ $post->content }}</div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <span class="text-muted">Scritto da:</span> {{ $post->createdBy }}
                                </div>
                                <div class="col">
                                    Inserito: {{ $post->created_at }}
                                </div>
                                <div class="col">
                                    Modificato: {{ $post->updated_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection