@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Email</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->email}}</td>
            <td><button class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}">X</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
@section('javascript')
    <script>
    $(function(){
        $('.delete').click(function(){
            $.ajax({
                method: "DELETE",
                url: "shop.test/users/"+$(this).data("id")
                //data: {}
            }).done(function(response){
                window.location.reload();
                alert("Data seved: "+response);
            }).fail(function(response){
                alert('ERROR');
            });
            console.log($(this).data("id"));
        });
    });
    </script>
@endsection