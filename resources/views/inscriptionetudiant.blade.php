@extends('layout/headerfooter')
@section('page-content')
<div class="row">
<div class="col">
<form class="etude">
  <fieldset>
    <legend>Inscrire un etudiant</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nom:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="nom" name="nom">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Prenom:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="prenom" name="prenom">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Genre:</label>
      <select id="disabledSelect" class="form-select" name="genre">
        <option value="masculin">masculin</option>
        <option value="feminin">feminin</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Date de naissance:</label>
      <input type="date" id="disabledTextInput" class="form-control" name="date_de_naissance">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Lieu de naissance:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="lieu de naissance" name="lieu_de_naissance">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Numero INE:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="INE" name="matricule">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Cycle:</label>
      <select id="disabledSelect" class="form-select" name="cycle">
        <option value="licence">licence</option>
        <option value="master">master</option>
        <option value="doctorat">doctorat</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Niveau:</label>
      <select id="disabledSelect" class="form-select" name="niveau">
        <optgroup label="licence:">
            <option value="licence1">licence1</option>
            <option value="licence2">licence1</option>
            <option value="licence3">licence1</option>
        </optgroup>
        <optgroup label="master:">
            <option value="master1">master1</option>
            <option value="master2">master2</option>
        </optgroup>
        <optgroup label="doctorat:">
            <option value="doctorat1">doctorat1</option>
            <option value="doctorat2">doctorat2</option>
            <option value="doctorat3">doctorat3</option>
        </optgroup>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Semestre:</label>
      <select id="disabledSelect" class="form-select" name="niveau">
        <optgroup label="licence:">
            <optgroup label="licence 1:">
                <option value="semestre1">semestre1</option>
                <option value="semestre2">semestre2</option>
                <option value="semestre3">semestre3</option>
                <option value="semestre4">semestre4</option>
                <option value="semestre5">semestre5</option>
                <option value="semestre6">semestre6</option>
            </optgroup>
        </optgroup>
        <optgroup label="master:">
        <optgroup label="master 1:">
                <option value="semestre1">semestre1</option>
                <option value="semestre2">semestre2</option>
                <option value="semestre3">semestre3</option>
                <option value="semestre4">semestre4</option>
            </optgroup>
        </optgroup>
        <optgroup label="doctorat:">
        <optgroup label="doctorat 1:">
                <option value="semestre1">semestre1</option>
                <option value="semestre2">semestre2</option>
                <option value="semestre3">semestre3</option>
                <option value="semestre4">semestre4</option>
                <option value="semestre5">semestre5</option>
                <option value="semestre6">semestre6</option>
            </optgroup>
        </optgroup>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Photo d'identité:</label>
      <input type="file" id="disabledTextInput" class="form-control" name="photo">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </fieldset>
</form>
</div>
<div>
@endsection