@extends('layout/inscription2')

@section('page-content')
@if(session()->has('success'))
    <div class="alert alert-info">{{session()->get('success')}}</div>
@endif

<table class="table table-secondary table-bordered border-primary container">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
 
    <tbody> 
        @php
            $id = 1;
        @endphp
        @foreach($secretaires as $secretaire)
            <tr>
                <td>{{ $id++ }}</td>
                <td>{{$secretaire->nom}}</td>
                <td>{{$secretaire->prenom}}</td>
                <td>{{$secretaire->email}}</td>
                <td style="text-align:center;">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$secretaire->id}}">
                        Détail
                    </button>
                </td>
                
            </tr>

            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$secretaire->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$secretaire->id}}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel{{$secretaire->id}}">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Nom: {{$secretaire->nom}}</p>
                            <p>Prenom: {{$secretaire->prenom}}</p>
                            <p>Email: {{$secretaire->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    
    </tbody>
</table>
@endsection
