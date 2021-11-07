@extends('layout.base')

@section('pageContent')
    <section class="movies">
        <div class="container">
            <h2>CURRENT SERIES</h2>
            <div class="box-movies">
                @foreach ($cartoons as $cartoon)
                    <div class="movie">

                        <img src="{{$cartoon["thumb"]}}">
                        
                        <div class="description">
                            <h3>{{$cartoon["series"]}}</h3>
                            <p>{{$cartoon["description"]}}</p>
                            <span>{{$cartoon["sale_date"]}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="load">
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
    <section>
        <div class="icons-address">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            <div class="image point">
                                <img src="images/buy-comics-digital-comics.png">
                            </div>
                            <span>DIGITAL COMICS</span>    
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="image">
                                <img src="images/buy-comics-merchandise.png">
                            </div>
                            <span>DC MERCHANDISE</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="image">
                                <img src="images/buy-comics-subscriptions.png">
                            </div>
                            <span>SUBSCRIPTION</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="image point">
                                <img src="images/buy-comics-shop-locator.png">
                            </div>
                            <span>COMIC SHOP LOCATOR</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="image">
                                <img src="images/buy-dc-power-visa.svg">
                            </div>
                            <span>DC POWER VISA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection