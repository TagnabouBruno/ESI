@extends('layout/inscription2')

@section('page-content')
<br><br><br><br><br><br><br><br><br>
@if(session()->has('success'))
    <div class="alert alert-info">{{session()->get('success')}}</div>
@endif

<table class="table table-secondary table-bordered border-primary container table-success table-striped-columns">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Matricule</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Genre</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Lieu de naissance</th>
            <th scope="col">Filiere</th>
            <th scope="col">Cycle</th>
            <th scope="col">Niveau</th>
            <th scope="col">Semestre</th>
            <th scope="col" colspan="3" style="text-align:center;">Action</th>
        </tr>
    </thead>
 
    <tbody> 
        @php
            $id = 1;
        @endphp
        @foreach($etudiants as $etudiant)
            <tr>
                <td>{{ $id++ }}</td>
                <td>{{$etudiant->matricule}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->genre}}</td>
                <td>{{$etudiant->date_de_naissance}}</td>
                <td>{{$etudiant->lieu_de_naissance}}</td>
                <td>{{$etudiant->filiere}}</td>
                <td>{{$etudiant->cycle}}</td>
                <td>{{$etudiant->niveau}}</td>
                <td>{{$etudiant->semestre}}</td>
                <td style="text-align:center;">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$etudiant->id}}">
                        Détail
                    </button>
                </td>
                <td style="text-align:center";>
                    <a href="{{route('modifier_etudiant', $etudiant->id)}}" class="btn btn-success">Modifier</a>
                </td>
                <td style="text-align:center";>
                    <a href="{{route('delete_etudiant2', $etudiant->id)}}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>

            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$etudiant->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$etudiant->id}}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel{{$etudiant->id}}">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Matricule: {{$etudiant->matricule}}</p>
                            <p>Nom: {{$etudiant->nom}}</p>
                            <p>Prenom: {{$etudiant->prenom}}</p>
                            <p>Genre: {{$etudiant->genre}}</p>
                            <p>Date de naissance: {{$etudiant->date_de_naissance}}</p>
                            <p>Lieu de naissance: {{$etudiant->lieu_de_naissance}}</p>
                            <p>Filiere: {{$etudiant->filiere}}</p>
                            <p>Cycle: {{$etudiant->cycle}}</p>
                            <p>Niveau: {{$etudiant->niveau}}</p>
                            <p>Semestre: {{$etudiant->semestre}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>
<br><br><br><br><br><br>
@endsection
