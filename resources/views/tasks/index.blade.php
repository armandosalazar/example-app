@extends('app')

@section('content')
    <h2>Tasks</h2>
    <div>
        <form action="">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="description" placeholder="Description">
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
