@extends('layout/inscription')

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
            <th scope="col" colspan="4" style="text-align:center;">Action</th>
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
                    <a href="{{route('delete_etudiant', $etudiant->id)}}" class="btn btn-danger">Supprimer</a>
                </td>
                 <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModale{{$etudiant->id}}">
                        Carte
                    </button></a>
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
            <div class="modal fade" id="exampleModale{{$etudiant->id}}" tabindex="-1" aria-labelledby="exampleModaleLabel{{$etudiant->id}}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModaleLabel{{$etudiant->id}}">Carte de l'etudiant</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
    
                            <div class=" col-4 mt-3 mb-3" style="line-height:1px; font-size:12px;">
        
           
                                <div class="card mt-2">
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{asset('images/img.jpeg')}}" class="img-thumbnail" width="50" height="auto">
                                        </div>
                                        <div class="col offset-9">
                                            <img src="{{asset('images/drapeau.png')}}" class="img-thumbnail" width="120" height="auto">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div >
                                            <p class="mt-10">yugcfhfgyj</p>
                                        </div>
                                        <div class="col offset-3 mt-3">
                                            <p><strong>Matricule: </strong>{{$etudiant->matricule}}</p>
                                            <p><strong>Nom: </strong>{{$etudiant->nom}}</p>
                                            <p><strong>Prenom: </strong>{{$etudiant->prenom}}</p>
                                            <p><strong>Genre: </strong>{{$etudiant->genre}}</p>
                                            <p><strong>Date de naissance: </strong>{{$etudiant->date_de_naissance}}</p>
                                            <p><strong>Lieu de naissance: </strong>{{$etudiant->lieu_de_naissance}}</p>
                                            <p><strong>Filiere:</strong> {{$etudiant->libelle_filiere}}</p>
                                            <p><strong>Cycle:</strong> {{$etudiant->libelle_cycle}}</p>
                                            <p><strong>Niveau:</strong> {{$etudiant->libelle_niveau}}</p>
                                            <p><strong>Semestre:</strong> {{$etudiant->libelle_semestre}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
        @endforeach
    </tbody>
</table>
<br><br><br><br><br><br>
@endsection
