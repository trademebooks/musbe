@extends('layouts.pages.home')

@section('content')

    @include('flash::message')
    <div class="row-custom">
        @foreach($books as $book)
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
                                <span class="font-size-em-10">{{ $book->course_code_prefix . ' ' . $book->course_code_suffix  }} </span>
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
        @endforeach
    </div>

    <div class="text-center">
        {{ $books->links() }}
    </div>

    @foreach($books as $book)
        <!-- Modal -->
        <div class="modal fade" id="{{ 'myModal' . $book->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    @if( Sentry::check() )
                        <div class="modal-header">
                            <h1 class="text-center"> Contact Seller </h1>
                        </div>

                        <div class="modal-body">

                            <form role="form" action="{{ route('contact-user') }}" method="post">

                                <div class="form-group">
                                    <label for="subject"> Subject: </label>
                                    <input class="form-control" name="subject" type="text" >
                                </div>

                                <div class="form-group">
                                    <label for="seller"> Message: </label>
                                    <textarea name="body" class="form-control" rows="5"></textarea>
                                    <input type="hidden" name="auth_email" value="{{ Sentry::getUser()->email }}">
                                    <input type="hidden" name="auth_username" value="{{ Sentry::getUser()->username }}">
                                    <input type="hidden" name="receiver_email" value="{{ $book->user->email }}">
                                    <input type="hidden" name="receiver_username" value="{{ $book->user->username }}">
                                </div>

                                <div class="form-group">
                                    <img class="phone-button-size" src="{{ asset('custom_files/images/phone_icon.png') }}" alt="phone icon">
                                    <span> {{ $book->phone_number }} </span>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left background-color-gray" data-dismiss="modal"> Back </button>
                                    <button type="submit" class="btn btn-danger pull-right background-color-maroon"> Submit </button>
                                </div>

                                {{ Form::token() }}

                            </form>

                        </div>
                    @else
                        <div class="modal-body text-center"> Please login to use this feature. If you are not already logged in, please register for an account! </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left background-color-gray" data-dismiss="modal"> Back </button>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    @endforeach

@stop
