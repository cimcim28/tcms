@extends('layouts.app')

@section('title', 'QA App')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        <div class="section-body"></div>
    </section>
@endsection


@section('sidebar')
    @parent
    <li class="menu-header">Other</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
            <span>Learn</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="layout-default.html">Article</a>
            </li>
      </li>
@endsection