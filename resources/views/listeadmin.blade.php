@extends('layout/inscription')

@section('page-content')
<br><br><br><br><br><br><br><br><br>
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
            <th scope="col" colspan="3" style="text-align:center;">Action</th>
        </tr>
    </thead>
 
    <tbody> 
        @php
            $id = 1;
        @endphp
        @foreach($administrateurs as $administrateur)
            <tr>
                <td>{{ $id++ }}</td>
                <td>{{$administrateur->nom}}</td>
                <td>{{$administrateur->prenom}}</td>
                <td>{{$administrateur->email}}</td>
                <td style="text-align:center;">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$administrateur->id}}">
                        Détail
                    </button>
                </td>
                <td style="text-align:center";>
                    <a href="{{route('modifier_admin', $administrateur->id)}}" class="btn btn-success">Modifier</a>
                </td>
                <td style="text-align:center";>
                    <a href="{{route('delete_admin', $administrateur->id)}}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>

            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$administrateur->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$administrateur->id}}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel{{$administrateur->id}}">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Nom: {{$administrateur->nom}}</p>
                            <p>Prenom: {{$administrateur->prenom}}</p>
                            <p>Email: {{$administrateur->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>
<br><br><br><br><br><br>
@endsection
