@extends('layouts.app')

@section('content')
<!-- https://www.w3schools.com/howto/howto_js_dropdown_sidenav.asp -->
<br>
<br>
<div class="container">
    <div class="sidenav">
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a>
    <button class="dropdown-btn">Dropdown
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
    <a href="#contact">Search</a>
    </div>
</div>

@endsection

@extends('layouts.fother')