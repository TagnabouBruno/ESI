@extends('layout/inscription')

@section('page-content')
<div class="container">
<div class="row">
    <div class="col-12">
    
    <div class=" col-4 mt-3 mb-3" style="line-height:1px; font-size:12px;">
        
            @foreach($etudiants as $etudiant)
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
            
            @endforeach
        
    </div>
</div>
</div>  
</div> 
@endsection
