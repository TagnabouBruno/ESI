@extends('layout/inscription')
@section('page-content')
<br><br>

@if($errors->any())
  <ul class="alert alert-info">
    @foreach($errors->all() as $error)
      <li style="color:red;">{{$error}}</li>
    @endforeach
  </ul>
@endif
<div class="card col-3 offset-5" style="border:none;">
  <div class="card-body">
    <div class="form-box form-container container">
      <form class="form" method="POST" action="{{route('update_secretaire', $secretaire->id)}}">
        @csrf
        @method('PUT')
        @if(session()->has('success'))
          <p class="alert alert-info" style="color:green;">{{session()->get('success')}}</p>
        @endif
        <span class="title">Modification</span>
        <span class="subtitle">Modifier la secretaire</span>
        <div class="form-container">
          <input type="text" class="input" placeholder="Nom" name="nom" value="{{ $secretaire->nom }}">
          <input type="text" class="input" placeholder="Prenom" name="prenom" value="{{ $secretaire->prenom }}">
          <input type="email" class="input" placeholder="Email" name="email" value="{{ $secretaire->email }}">
          <input type="password" class="input" placeholder="Password" name="password" value="{{ $secretaire->password }}">
        </div>
       
        <button type="submit">Enregistrer</button>
       
      </form>
    </div>
  </div>
</div><br><br>
@endsection