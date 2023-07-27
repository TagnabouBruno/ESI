@extends('layout/inscription')
@section('page-content')




<div class="card col-6 offset-3">
 <div class="card-body">
  <form class="etude" action="{{route('update_etudiant', $etudiant->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
  <fieldset>
    <legend>Modifier l'etudiant</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Numero INE:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="INE" name="matricule" value="{{ $etudiant->matricule }}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nom:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="nom" name="nom" value="{{ $etudiant->nom}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Prenom:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="prenom" name="prenom" value="{{ $etudiant->prenom}}">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Genre:</label>
      <select id="disabledSelect" class="form-select" name="genre" value="{{ $etudiant->genre }}">
        <option value="masculin">masculin</option>
        <option value="feminin">feminin</option>
      </select>


    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Date de naissance:</label>
      <input type="date" id="disabledTextInput" class="form-control" name="date_de_naissance" value="{{ $etudiant->date_de_naissance}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Lieu de naissance:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="lieu de naissance" name="lieu_de_naissance" value="{{ $etudiant->lieu_de_naissance}}">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Filiere:</label>
      <select id="disabledSelect" class="form-select" name="filiere" value="{{ $etudiant->libelle_filiere}}">
        <option value="">Choisir un filiere</option>
        @foreach($filieres as $filiere)
          <option value="{{ $filiere->libelle_filiere}}">{{ $filiere->libelle_filiere}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Cycle:</label>
      <select id="disabledSelect" class="form-select" name="cycle" value="{{ $etudiant->libelle_cycle}}">
        <option value="">Choisir un cycle</option>
        @foreach($cycles as $cycle)
          <option value="{{ $cycle->libelle_cycle}}">{{ $cycle->libelle_cycle}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Niveau:</label>
      <select id="disabledSelect" class="form-select" name="niveau" value="{{ $etudiant->libelle_niveau}}">
      <option value="">Choisir un niveau</option>
        @foreach($niveaux as $niveau)
          <option value="{{ $niveau->libelle_niveau}}">{{ $niveau->libelle_niveau}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Semestre:</label>
      <select id="disabledSelect" class="form-select" name="semestre" value="{{ $etudiant->libelle_semestre}}">
      <option value="">Choisir un semestre</option>
        @foreach($semestres as $semestre)
          <option value="{{ $semestre->libelle_semestre}}">{{ $semestre->libelle_semestre}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Photo d'identité:</label>
      <input type="file" id="disabledTextInput" class="form-control" name="photo" value="{{ $etudiant->photo}}">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </fieldset>
</form>

</div>
</div>


@endsection