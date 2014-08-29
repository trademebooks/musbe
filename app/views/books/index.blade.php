@extends('layouts.books.index_book')

<link rel="stylesheet" type="text/css" href="..\bower_components\bootstrap\dist\css\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="..\custom_files\css\custom.css">

@section('content')

    <div class="table-responsive">
        <table class="table table-hover">

            <caption> <h3> My Textbooks </h3> </caption>

            <thead>
                <tr>
                    <!-- <th> Image </th> -->
                    <th> Book Title </th>
                    <!--<th> Description </th>-->
                    <th> Price </th>
                    <th> </th>
                    <th>  </th>
                    <th>  </th>
                </tr>
            </thead>

            <tbody>
                @foreach($books as $book)
                    <tr>
                        <!-- <td class="col-md-4"><img src="{{ $book->image }}"></td> -->
                        <td class="col-md-4"> {{ $book->title }} </td>
                        <!-- <td class="col-md-4"> {{ $book->description }} </td> -->
                        <td class="col-md-1"><sup>$</sup>{{ $book->price }}</td>
                        <td class="col-md-1"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="{{'#myModal' . $book->id}}"> Preview </button></td>
                        <td class="col-md-1"><a href="{{ route('books.edit', $book->id) }}"><button type="button" class="btn btn-success btn-lg"> Edit &nbsp; &nbsp; &nbsp; </button></a></td>
                        <td class="col-md-1">
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('books.destroy', $book->id))) }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-lg')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    @foreach($books as $book)
        <!-- Modal -->
        <div class="modal fade" id="{{ 'myModal' . $book->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-body">
                        <div class="item">
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="{{ $book->image }}" alt="...">
                                    <div class="label label-success price background-color-maroon"><sup>$</sup>{{ $book->price }}</div>
                                    <div class="caption">
                                        <h2 class="text-center"> {{ $book->title }} </h2>

                                        <span class="font-color-maroon font-size-em-12"> Description: </span>
                                        <p><span class="font-size-em-10"> {{ $book->description }} </span></p>

                                        <p>
                                            <span class="font-color-maroon font-size-em-12"> Author: </span>
                                            <span class="font-size-em-10">{{ $book->author }}</span>
                                        </p>

                                        <p>
                                            <span class="font-color-maroon font-size-em-12"> Course Code: </span>
                                            <span class="font-size-em-10">{{ $book->course_code_prefix . ' ' . $book->course_code_suffix }} </span>
                                        </p>

                                        <p>
                                            <span class="font-color-maroon font-size-em-12"> Course Name: </span>
                                            <span class="font-size-em-10">{{ $book->course_name }} </span>
                                        </p>

                                        <p>
                                            <span class="font-color-maroon font-size-em-12"> Edition: </span>
                                            <span class="font-size-em-10">{{ $book->edition }} </span>
                                        </p>

                                        <p>
                                            <a href="#" class="btn btn-contact-size background-color-maroon font-color-white" role="button" data-toggle="modal" data-target="{{'#myModal' . $book->id}}">
                                                Contact
                                            </a>
                                        </p>

                                        <p>
                                            <span class="font-size-em-10"> {{ date("F j, Y", strtotime($book->created_at)) }} </span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"> Back </button>
                  </div>

                </div>

            </div>
        </div>
    @endforeach

@stop
