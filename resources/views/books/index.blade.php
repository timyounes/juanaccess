@extends('template')
@section('content')
<h1>Online Bookstore</h1>
<table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>ISBN</th>
         <th>Title</th>
         <th>Author</th>
         <th>Publisher</th>
         <th>Thumbs</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($books as $book)
     	<tr class="bg-info">
     	    <td>{{ $book->id }}</td>
     	    <td>{{ $book->isbn }}</td>
     	    <td>{{ $book->title }}</td>
     	    <td>{{ $book->author }}</td>
     	    <td>{{ $book->publisher }}</td>
     	    <td>Thumbs</td>
     	    <td colspan="3">Actions</td>
     	</tr>
     @endforeach
@endsection