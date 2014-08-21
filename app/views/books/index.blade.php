@extends('layouts.book_shelf')

<link rel="stylesheet" type="text/css" href="..\bower_components\bootstrap\dist\css\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="..\custom_files\css\custom.css">

@section('content')

    <div class="table-responsive">
        <table class="table table-hover">

            <caption> <h1> My Listings </h1> </caption>

            <thead>
                <tr>
                    <th> Image </th>
                    <th> Book Title </th>
                    <th> Description </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>

            <tbody>
                @foreach($books as $book)
                <tr>
                    <td class="col-md-2"><img src="{{ $book->image }}"></td>
                    <td class="col-md-3"> {{ $book->title }} </td>
                    <td class="col-md-5"> {{ $book->description }} </td>
                    <td class="col-md-1"> <button type="button" class="btn btn-success"> Edit </button> </td>
                    <td class="col-md-1"> <button type="button" class="btn btn-danger"> Delete </button> </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>






<!-- Button trigger modal -->
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
          <form action="{{ URL::route('books.store'); }}" method="post">
                <input type="text" name="title">
                <input type="submit" value="submit">
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

@stop
