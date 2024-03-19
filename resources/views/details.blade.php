@extends('layout.app')


@section('document-title')
    {{$comic['series']}}
@endsection

@section('body')
<div class="jumboContainer">
  <img src="../images/jumbotron.jpg" alt="">
</div>

<div id="detailsWrapper">
    <div class="thumbSupport">
    <div class="container-md thumbContainer">
            <img src="{{$comic['thumb']}}" alt="comic_thumb" class="detailsThumb">
     </div>
    </div>
  
    <div class="container-md py-5">
        <div class="row justify-content-between">
            <div class="col-8">
                <h1 class="comicTitle">{{$comic['title']}}</h1>
                <div class="availBar">
                    <div class="availLeft col-8">
                        <div class="price">
                            <span class="priceLabel opacity-75">U.S. PRICE:</span>
                            <span class="price"> {{ $comic['price'] }}</span>
                        </div>

                        <span class="isAvail opacity-75">AVAILABLE</span>
  
                    </div>
                    <div class="availRight col-4">
                        <button class="checkAvail">Check Availability</button>       
                    </div>
                </div>
                <p class="comic-description">{{$comic['description']}}</p>
            </div>
            <div class="col-4 adContainer">
                <span class="ads">ADVERTISEMENT</span>
                <img src="../images/adv.jpg" alt="ads" class="w-100">
            </div>
        </div>

    </div>

    <div class="comicSpecs">
        <div class="container-md">
            <div class="row">
                <div class="col-6">
                    <div class="colTitle">Talent</div>
                    <!-- ARTISTS -->
                    <div class="listRow">
                        <div class="rowTitle col-4">Art by:</div>
                        <div class="byPeople">
                            <a href="http://">Josè Luis Garcia-Lopez</a>,
                            <a href="http://">Clay Mann</a>,
                            <a href="http://">Rafael Alburquerque</a>,
                            <a href="http://">Patrick Gleason</a>,
                            <a href="http://">Dan Jurgens</a>,
                            <a href="http://">Joe Shuster</a>,
                            <a href="http://">Neal Adams</a>,
                            <a href="http://">Curt Swan</a>,
                            <a href="http://">John Cassaday</a>,
                            <a href="http://">Oliver Coipel</a>,
                            <a href="http://">Jim Lee</a>
                        </div>
                    </div>
                    <!-- WRITERS -->
                    <div class="listRow">
                        <div class="rowTitle col-4">Written by:</div>
                        <div class="byPeople">
                            <a href="http://">Brad Meltzer</a>,
                            <a href="http://">Tom King</a>,
                            <a href="http://">Scott Snyder</a>,
                            <a href="http://">Geoff Johns</a>,
                            <a href="http://">Brian Micheal Bendis</a>,
                            <a href="http://">Paul Dini</a>,
                            <a href="http://">Louise Simonson</a>,
                            <a href="http://">Richard Donner</a>,
                            <a href="http://">Marv Wolfman</a>,
                            <a href="http://">Peter J. Tomasi</a>,
                            <a href="http://">Dan Jurgens</a>,
                            <a href="http://">Jerry Siegel</a>,
                            <a href="http://">Paul Levitz</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="colTitle">Specs</div>
                    <div class="listRow">
                        <div class="rowTitle col-4">Series:</div>
                        <div class="specDetail">
                        <a href="http://">{{$comic['series']}}</a>
                        </div>
                    </div>
                    <div class="listRow">
                        <div class="rowTitle col-4">U.S. Price:</div>
                        <div class="specDetail">
                            <span>{{$comic['price']}}</span>
                        </div>
                    </div> 
                    <div class="listRow">
                        <div class="rowTitle col-4">On Sale Date:</div>
                        <div class="specDetail">
                            <span>{{$comic['sale_date']}}</span>
                        </div>
                    </div>                                         
                </div>
            </div>
        </div>
       

    <div id="utilities">
  <div class="container-md">
    <div class="row justify-content-between">
      <div class="col-3 p-3 bordered"><a href="" class="utilCard">
        <span>DIGITAL COMICS</span>
      <img src="../images/buy-comics-digital-comics.png" alt="">
    </a></div>
    <div class="col-3 p-3 bordered"><a href="" class="utilCard"><span>SHOP DC</span><img src="../images/buy-comics-merchandise.png" alt="">
    </a></div>
    <div class="col-3 p-3 bordered"><a href="" class="utilCard"><span>COMIC SHOP LOCATOR</span><img src="../images/buy-comics-shop-locator.png" alt="">
    </a></div>
    <div class="col-3 p-3 bordered"><a href="" class="utilCard"><span>SUBSCRIPTIONS</span><img src="../images/buy-comics-subscriptions.png" alt="">
    </a></div>
  
  </div> </div>
</div>
@endsection