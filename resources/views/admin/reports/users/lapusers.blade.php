<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Data User</title>
</head>
<body>
  <h3 >Report Data User</h3>
</hr>
<table style="width:100%">
    <thead>
        <tr>
            <td bgcolor="yellow" width="5%">No</td>
            <td bgcolor="yellow">Name</td>
            <td bgcolor="yellow">Phone Number</td>
            <td bgcolor="yellow">Email</td>
            <td bgcolor="yellow">Date</td>
        </tr>
    </thead>
<tbody>
    @foreach($R_user as $row)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->no_telp }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->created_at->format('d F Y') }}</td>
    </tr>
    @endforeach
</tbody>
</table>
<footer class="main-footer">
    <p align="right">
        Date : {{$row->created_at}} </br>
        Personal In Charge</br>
        
        @if(Auth::check())
<span class="hidden-xs" fontsize= 15 >{{ Auth::user()->name}}</span>
@endif</br>
</br>

</br>
</br>
@if(Auth::check())
<span class="hidden-xs">({{ Auth::user()->name}})</span>
@endif
</footer>
</body>
</html>