@extends('layout.layout')

@section('title')
Main Page
@endsection
@section('content')

<div class="card m-2 align-self-end shadow">
    <h4 class="card-header  text-white" style="background-color: rgb(20, 88, 99) "> Detail </h4>
    <div class="table-wrap">
        <table class="table table-striped caption-top table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">age</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td> {{ $person->name }}</td>
                        <td>{{ $person->age }}</td>
                    </tr>
                
            </tbody>
        </table>

    </div>
</div>

@endsection