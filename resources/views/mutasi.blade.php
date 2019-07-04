@extends('dashboards.app')

@section('body')
<div id="content-wrapper">
    <!-- /.container-fluid -->
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/index">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Mutasi</li>
        </ol>
    </div>
    
    <div class="container">
        <h2>Contextual Classes</h2>
        <table class="table">
            <thead>
            <tr>
                <th>id </th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Dibuat pada</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach ($mutasi as $key)
                <td>{{$key->id}}</td>
                <td>{{$key->name}}</td>
                <td>{{$key->email}}</td>
                <td>{{$key->password}}</td>
                <td>{{$key->created_at}}</td>
                @endforeach 
            </tr>      
            </tbody>
        </table>
        </div>
    </div>    
@endsection
