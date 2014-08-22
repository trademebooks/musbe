@extends('layouts.home')

@section('content')

    <!--
    <form action="{{ URL::route('books.index') }}" method="get">
        <input type="search" name="search" placeholder="search...">
        <input type="submit" value="search">
    </form>
    -->

    <div class="row-custom">
        @foreach($books as $book)
            <div class="item">
                <div class="well">
                    <div class="thumbnail">
                        <img src="{{ $book->image}}" alt="...">
                        <div class="label label-success price"><sup>$</sup>{{ $book->price }}</div>
                        <div class="caption">
                            <h3> {{ $book->title }} </h3>
                            <p> {{ $book->description }} </p>

                            <p> Author: {{ $book->author }} </p>
                            <p> Course Code: {{ $book->course_code }} </p>
                            <p> Course Name: {{ $book->course_name }} </p>
                            <p> Edition: {{ $book->edition }} </p>
                            <p>
                                <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal"> Contact </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center">
        {{ $books->links() }}
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">
                    <form role="form" action="{{ URL::route('books.store') }}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Contact the Seller </label>
                            <textarea name="message" class="form-control" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Back </button>
                </div>

            </div>

        </div>
    </div>
@stop
