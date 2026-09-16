

@extends('layout')

@section('sadrzajStranice')
    <h2 class="nav justify-content-center p-3">Shop stranica ovde mozete pogledati nase proizvode</h2>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Naziv proizvoda</th>
            <th>Cena</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }} RSD</td>
            </tr>
        @endforeach
        </tbody>
    </table>


    {{--    @foreach($products as $product)--}}
{{--        <li>{{$product}}</li>--}}

{{--        @if($product == "Iphone 17" || $product == "Iphone 16 pro")--}}
{{--            <strong style="color: red;">- SUPER SNIŽENJE! 🔥</strong>--}}
{{--        @else--}}

{{--        @endif--}}

{{--    @endforeach--}}



@endsection




