@extends('layouts.adminbody')
@section('content')

<!-- Header -->
<div class="jumbotron">
    <img src="https://faceofsot2021.com/wp-content/uploads/2017/11/sot-mosaic0001.jpg" alt="" class="jumbotron-image">
    <div class="headertext">
        <h1>Users List</h1>
        <p>Manage the users of your application</p>
    </div>

</div>


<section class=" page-section" id="portfolio">
    <div class="container">
        <table id="example" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Date de creation</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
             @foreach($ann as $annon)
            <tr>
                <td>{{$annon->nom}} </td>
                <td>{{$annon->created_at}}</td>
                <td>{{$annon->description}}</td>

                <td><a href="#" class="btn btn-danger">delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection