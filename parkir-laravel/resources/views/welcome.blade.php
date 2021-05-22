<!DOCTYPE html>
<html>
<body>

    <header>

        <h2>Lantai 1</h2>
            <a href="/">LANTAI 1</a>
            |
            <a href="/lantai2">LANTAI 2</a>
            |
            <a href="/lantai3">LANTAI 3</a>
    <!--bagiankonten blog -->
    @yield('konten')
    <br/>
    <footer>
    </footer>
</body>
</html>
Dan lantai.blade.php yang isinya :
<!DOCTYPE html>
@extends('master')
<html>
@section('konten')
<table border="2" align="left" width="500" cellpadding="5" cellspacing= "5" id="box-table-a">
<!--menampilkan data dalambentuktabel-->
    @foreach($ruangparkir as $s)
<tr bgcolor="#faebd7">
            <td>{{ $s->lantai }}</td>
            <td>{{ $s->platnomor }}</td>            
</tr>
   @endforeach
    
@endsection
