@extends('./layout/headerfooter')

@section('page-content')
<br><br>
@if(session()->has('success'))
  <p class=""alert alert-info>{{session()->get('success')}}</p>
@endif
@if($errors->any())
  <ul class="alert alert-info">
    @foreach($errors->all() as $error)
      <li style="color:red;">{{$error}}</li>
    @endforeach
  </ul>
@endif
<div class="row">
  <div class="col"></div>
  <div class="col">
    <div class="form-box form-container container">
      <form class="form" method="post" action="{{route('registeradmi')}}">
        @csrf
        @method('post')
        <span class="title">Inscription</span>
        <span class="subtitle">Créer un compte administrateur</span>
        <div class="form-container">
          <input type="text" class="input" placeholder="Nom" name="nom" value="{{ old('nom') }}">
          <input type="text" class="input" placeholder="Prenom" name="prenom" value="{{ old('prenom') }}">
          <input type="email" class="input" placeholder="Email" name="email" value="{{ old('email') }}">
          <input type="password" class="input" placeholder="Password" name="password" value="{{ old('password') }}">
        </div>
        <button>Enregistrer</button>
      </form>
    </div>
  </div>
  <div class="col"></div>
</div><br><br>
@endsection
