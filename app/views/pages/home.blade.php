@extends('layouts.home')

@section('content')
    <!--
    <form action="{{ URL::route('books.index') }}" method="get">
        <input type="search" name="search" placeholder="search...">
        <input type="submit" value="search">
    </form>
    -->
    <?php $count = 0 ?>
    <div class="container"> <!-- length of the entire Array of Book-->
        @foreach ($books as $book)
            <?php $count += 1 ?>
            <!-- activities column 1 -->
            <div class="col-lg-3">
                <div class="post">
                    <div class="border-bottom">
                        <img src="http://d.gr-assets.com/books/1370511112l/18042866.jpg" >
                    </div>

                    <div class="padding10">

                        <li> {{ $book->title }} </li>
                        <div> For: </div>
                        <div> By: </div>
                        <div> Solutions: </div>
                        <hr>

                        <div> Addtional Comments </div>
                        <div> Meet up at Mac Uni only! Or else you die! </div>

                        <div>
                            <span> posted today </span>
                            <span> call </span>
                            <span> price </span>
                        </div>

                    </div>
                </div>
                {{ '<br>' }}
            </div>
        @endforeach
    </div>

    <br><br>
@stop
