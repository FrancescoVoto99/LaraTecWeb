@extends('layouts.admin')

@section('title', 'Area Admin')

@section('content')
<div id="tooplate_content">
    <h3>Area Amministratore</h3>
    <p>Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
    <p>Seleziona la funzione da attivare</p>
</div>
@endsection


