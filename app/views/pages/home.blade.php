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
                                <a href="#" class="btn btn-primary" role="button"> Contact </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@stop
