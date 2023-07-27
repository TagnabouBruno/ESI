@extends('layout/gestion2')
@section('page-content')
@if($errors->any())
  <ul class="alert alert-info">
    @foreach($errors->all() as $error)
      <li style="color:red;">{{$error}}</li>
    @endforeach
  </ul>
@endif
@if(session()->has('success'))
  <p class="alert alert-info">{{session()->get('success')}}</p>
@endif
<div class="row">
        <div class="col">
        <div class="CSSgal">

<!-- Don't wrap targets in parent -->
<s id="s1"></s> 
<s id="s2"></s>
<s id="s3"></s>
<s id="s4"></s>

<div class="slider">
  <div style="background-image:url('{{ asset('images/image2.jpg')}}')">
          <h2><span class="A2">U</span>niversité <span class="A2">N</span>azi <span class="A2">B</span>oni</h2>
          <p class="A1">UFR/ ESI /Analyse et Programmation</p>
      </div>
  <div style="background-image:url('{{ asset('images/image2.jpg')}}')">
        <h2>Université Nazi Boni</h2>
        <p class="A1">UFR/ ESI /Analyse et Programmation</p>
      </div>
  <div style="background-image:url('{{ asset('images/image2.jpg')}}')">
  <h2>Université Nazi Boni</h2>
  <p class="A1">UFR/ ESI /Analyse et Programmation</p>
      </div>
  <div style="background-image:url('{{ asset('images/image2.jpg')}}')">
          <h2>Université Nazi Boni</h2>
          <p class="A1">UFR/ ESI /Analyse et Programmation</p>
      </div>
</div><br><br><br><br>

<div class="prevNext">
  <div><a href="#s4"></a><a href="#s2"></a></div>
  <div><a href="#s1"></a><a href="#s3"></a></div>
  <div><a href="#s2"></a><a href="#s4"></a></div>
  <div><a href="#s3"></a><a href="#s1"></a></div>
</div>

<div class="bullets">
  <a href="#s1">1</a>
  <a href="#s2">2</a>
  <a href="#s3">3</a>
  <a href="#s4">4</a>
</div>

</div>
        </div>
    </div>
@endsection