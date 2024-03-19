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
                    @foreach ($comics as $key => $comic)
                    <div class="col-2">
                        <div class="comicCard">
                            <a href="{{ route('details', ['key' => $key]) }}">
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

<div id="blutilities">
  <div class="container-md">
    <div class="row justify-content-between">
      <div class="col-auto"><a href=""><img src="../images/buy-comics-digital-comics.png" alt="">
    <span>DIGITAL COMICS</span></a></div>
    <div class="col-auto"><a href=""><img src="../images/buy-comics-merchandise.png" alt="">
    <span>DC MERCHANDISE</span></a></div>
    <div class="col-auto"><a href=""><img src="../images/buy-comics-subscriptions.png" alt="">
    <span>SUBSCRIPTIONS</span></a></div>
    <div class="col-auto"><a href=""><img src="../images/buy-comics-shop-locator.png" alt="">
    <span>COMIC SHOP LOCATOR</span></a></div>
    <div class="col-auto"><a href=""><img src="../images/buy-dc-power-visa.svg" alt="">
    <span>DC POWER VISA</span></a></div>
    </div>
  </div>

</div>

@endsection