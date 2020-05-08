@extends('common')

@section('page_title') Bienvenido! :D @endsection

@section('jumbo_title'){{ $title }}@endsection

@section('jumbo_body')
<hr>
    <div class="row">
        @foreach ($piscinas as $item)
            @php
                // determinar el estado de la piscina para aplicar un color a la tarjeta
                $status = "";
                switch ($item->condicion->ID_CONDICION) {
                    case '1':
                        $status = "bg-danger";
                        break;
                    case '2':
                        $status = "bg-warning";
                        break;
                    case '3':
                        $status = "bg-success";
                        break;
                }
            @endphp
            <div class="col-md-4 mt-2">
                <div class="card text-center text-light {{$status}}">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->NOMBRE }}</h4>
                        <p class="card-text">{{ $item->condicion->CONDICION }}</p>
                    </div>
                </div>
            </div>
        @endforeach       
    </div>
@endsection