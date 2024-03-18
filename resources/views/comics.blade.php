@extends('layout.app')

@section('document-title', 'Comics')

@section('body')

<div class="jumboContainer">
  <img src="../images/jumbotron.jpg" alt="">
</div>

</div>
    <div id="comicsWrapper">
        <div class="container-md py-5" id="comicsContainer">
        <div class="label">
            <span">CURRENT SERIES</span>
        </div>
                <div class="row g-4 p-4">
                    @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="comicCard">
                            <a href="">
                                <img src="{{$comic['thumb']}}" class="comicCover" alt="{{$comic['series']}}">
                                <div>
                                  <p>{{$comic['series']}}</p>
                                </div>
                            </a>
                          </div>
                    </div>
                        
                    @endforeach
                </div>
                    <button class="btn btn-primary loadMore">LOAD MORE</button>
            </div>
            
        </div>    
        
</div>

@endsection