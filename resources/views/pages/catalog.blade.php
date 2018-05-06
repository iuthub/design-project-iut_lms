@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!--filter bar-->
      <div class="col-md-3">
        <div class="sidebar">
          <h4 class="sidebar-title">Selection of books</h4>
          <form action="">
            <label for=""><span>Search:</span><input type="text" name="bookSearch" /></label>
            <label for="">
                <span>Genre:</span> 
                <select name="genre" id="genre" class="genre">
                  <option value="0" disabled hidden selected>Not selected</option>
                  <option value="1">Fantasy</option>
                  <option value="2">Romance</option>
                  <option value="3">Detective</option>
                  <option value="4">Prose</option>
                  <option value="5">Thriller</option>
                </select>
            </label>
          </form>
          <div class="row">
            <div class="yearRange">
              <h3>Years</h3><br>
              <div id="slider" name="slider"></div>
              <div class="yearR">Between <span class="min"></span> and <span class="max"></span></div>
            </div>
          </div>
        </div>
      </div>
        <!--end of filter bar-->

        <!-- main content -->
        <div class="col-md-9">
            <div class="catalog-main">
                <!-- sorting box -->
                <div class="container-fluid">
                    <div class="sorting-box">
                        <ul class="sorting-box-list">
                            <li>Sort by:</li>
                            <li>
                                <a href="">top</a>
                            </li>
                            <li>
                                <a href="">novelty</a>
                            </li>
                            <li>
                                <a href="">popularity</a>
                            </li>
                            <li>
                                <a href="">comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end sorting box -->

                <!-- book items -->
                <div class="container-fluid">
                    <div class="bookItem-box">
                        <div class="row">
                            {{--  --}}
                            @foreach($books as $book)
                            <div class="container">
                                <div class="bookItem">
                                    <div class="col-sm-3">
                                        <div class="book-img">
                                            <a href="">
                                                <img src="/storage/cover_images/{{$book->cover_image}}" alt="cover_image">
                                            </a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h3 class="book-title">
                                                    <a href="">{{$book->bookName}}</a>
                                                </h3>
                                                <h4 class="book-author">
                                                    <a href="#">{{$book->bookAuthor}}</a>
                                                </h4>
                                                <p class="book-description">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora officiis reprehenderit expedita iure in praesentium voluptatum ipsam nulla cumque, hic odio enim, corrupti neque recusandae nam. Distinctio, rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim omnis dignissimos perspiciatis exercitationem. Vel ex, aliquid. Excepturi temporibus corporis, ad maxime tenetur laborum est fugiat quam! Corporis tempora, fugit deleniti.
                                                    <a href="">more...</a>
                                                </p>
                                            </div>
                              
                                            <div class="col-md-4">
                                                <div class="book-info">
                                                    <h5>Overall Rating: {{$book->bookRank}}% <span class="glyphicon glyphicon-star"></span></h5>
                                                    <br>
                                                    <h5>Genre: <a href="#">{{$book->genre}}</a></h5>
                                                    <h5>Country: {{$book->country}}</h5>
                                                    <h5>Language: {{$book->language}}</h5>
                                                    <h5>Published: {{$book->publishedYear}}</h5>
                                                    <h5>Pages: </h5>
                                                    <h5>ISBN: {{$book->isbn}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="bottom-bar">
                                    <div class="tooltip"><i class="fas fa-eye"></i> 15689 
                                        <span class="tooltiptext">Seen times</span>
                                    </div>
                                    <div class="tooltip"><i class="fas fa-download"></i> 402
                                        <span class="tooltiptext">Number of downloads</span>
                                    </div>
                                    <div class="tooltip"><i class="fas fa-comments"></i> 56
                                        <span class="tooltiptext">Number of comments</span>
                                    </div>
                                </div>
                        </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                    {{ $books->links() }}
                </div>
                <!-- end of book items section -->
            </div>
        </div>
    </div>
        <br>
        <br>
    </div>  
@endsection