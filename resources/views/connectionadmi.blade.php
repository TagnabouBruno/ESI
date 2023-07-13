@extends('layout/headerfooter')
@section('page-content')
<br><br>


<div class="row">
<div class="col"></div>
  <div class="col">
      <div class="form-box form-container container">
        <form class="form" method="post" action="{{route('admilogin')}}">
          @method('post')
          @csrf
          @if($errors->any())
            <ul class="alert alert-danger">
              @foreach($errors->all() as $error)
                <li style="color:red;">{{$error}}</li>
              @endforeach
            </ul>
          @endif
          @if(session()->has('message'))
    <p class="alert alert-info" style="color:red;">{{session()->get('message')}}</p>
  @endif
          <span class="title">S'identifier</span>
          <span class="subtitle">Connectez-vous à votre compte</span>
          <div class="form-container">
		          <input type="email" class="input" placeholder="Email" name="email">
		          <input type="password" class="input" placeholder="Password" name="password">
          </div>
          <button>Se connecter</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col"></div>
  
</div><br><br>
@endsection