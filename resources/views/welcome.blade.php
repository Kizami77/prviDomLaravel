
@extends('layout')

@section('sadrzajStranice')
    <p>trenutno sati je:{{$sat}}</p>
    <p>Trenutno vreme je {{$trenutnoVreme}}</p>
@endsection
 @section('sadrzajStranice')
     <h2 class="text-center text-primary">Glavna stranica sa koje mozete da idete na ostale stranice </h2>
 @endsection

{{--   ako je izmedju 0 i 12h ispisi poruku dobro jutro--}}
{{--  ako je izmedjiu 12 i 24 ispisi dobar dan--}}

<!-- Prikaz tačnog vremena -->
<p>Trenutno vreme je: {{ $trenutnoVreme }}</p>

<!-- Ovde pišete IF iskaz koristeći varijablu $sat -->
@if($sat >= 5 && $sat < 12)
    <h1>Dobro jutro! 🌅</h1>
@elseif($sat >= 12 && $sat < 18)
    <h1>Dobar dan! ☀️</h1>
@else
    <h1>Dobro veče! 🌙</h1>
@endif

<form method="post" action="/send-contact" class="form-control">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Naslov </label>
        <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="naslov ">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>

        <button class="form-control bg-success p-2 m-1 text-info">Posalji</button>
    </div>
</form>
