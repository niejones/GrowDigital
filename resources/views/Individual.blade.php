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
                @foreach ($person as $per)
                    <tr>
                        <td> {{ $per->name }}</td>
                        <td>{{ $per->age }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
<div class="d-flex justify-content-center">
    <ul class="pagination">
        {{ $person->links() }}
    </ul>
</div>

@endsection