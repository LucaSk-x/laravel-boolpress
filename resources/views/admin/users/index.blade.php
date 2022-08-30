@extends('layouts.app')

@section('navbar_menu')
    @include('admin.partials.adminNav')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @foreach ($users as $user)
                <div class="col-md-8">
                    
                    <div class="card mb-2">
                        <div class="card-header">
                            <div class="row">
                                <div class="col align-self-center d-flex justify-content-between">
                                    <div class="">{{ $user->name }}</div>
                                    <div> <a href=" {{route('admin.users.edit', $user->id)}} ">Modifica</a></div>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <ul class="list-group list-group-flush text-right">
                                        <li class="list-group-item"> <span class="text-uppercase">name:</span></li>
                                        <li class="list-group-item"> <span class="text-uppercase">email: </span></li>
                                        <li class="list-group-item"> <span class="text-uppercase">role:</span></li>
                                        <li class="list-group-item"> <span class="text-uppercase">address:</span></li>
                                        <li class="list-group-item"> <span class="text-uppercase">city:</span></li>
                                        <li class="list-group-item"> <span class="text-uppercase">phone number:</span></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{ $user->name }}</li>
                                        <li class="list-group-item">{{ $user->email }}</li>
                                        <li class="list-group-item">{{ $user->details->role }} </li>
                                        <li class="list-group-item">{{ $user->details->address ?? 'non inserito' }} </li>
                                        <li class="list-group-item">{{ $user->details->city ?? 'non inserito'  }} </li>
                                        <li class="list-group-item">{{ $user->details->phone ?? 'non inserito'  }} </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                
                                <div class="col">
                                    Inserito: {{ $user->created_at }}
                                </div>
                                <div class="col">
                                    Modificato: {{ $user->updated_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection