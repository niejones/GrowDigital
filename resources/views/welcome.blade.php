@extends('layout.layout')

@section('title')
Main Page
@endsection
@section('content')

<div class="card m-2 align-self-end shadow">
    <h4 class="card-header  text-white" style="background-color: rgb(20, 88, 99) "> People </h4>
    <div class="table-wrap">
        <table class="table table-striped caption-top table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">age</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                    <tr>
                        <td> {{ $person->name }}</td>
                        <td>{{ $person->age }}</td>
                        <td>
                       
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
<nav class="navbar navbar-light">

    <p class="nav-link active text-decoration-none" style="color:rgb(11, 80, 92)" aria-current="page"> Average Age: {{$average}}  </p>
    <p class="nav-link active text-decoration-none" style="color:rgb(11, 80, 92)" aria-current="page"> Oldest Person: {{$max->name}} </p>
    <p class="nav-link active text-decoration-none" style="color:rgb(11, 80, 92)" aria-current="page"> Youngest Person: {{$min->name}}  </p>
</nav>

@endsection