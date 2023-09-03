@extends('layouts.app')

@section('content')

<div class="home_">
    <div class="home_background_container_ prlx_parent">
        <div class="home_background_ prlx" style="background-image:url({{ asset ( 'assets/images/news_background.jpg')}})"></div>
    </div>
    <div class="home_content_">
        <h1>{{ $newsItem->title }}</h1>
    </div>
</div>

<!-- News -->

<div class="news">
    <div class="container">
        <div class="row">

            <!-- News Post Column -->

            <div class="col-lg-8">

                <div class="news_post_container">
                    <!-- News Post -->
                    <div class="news_post">
                        <div class="news_post_image">
                            <div class="event_image">
                            @if($newsItem->media->count() > 0)
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach($newsItem->media as $index => $mediaItem)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" @if($index===0) class="active" @endif></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">

                                    @foreach($newsItem->media as $index => $mediaItem)
                                    <div class="carousel-item parent-div {{ ($index === 0) ? 'active' : '' }}">
                                        @if($mediaItem->collection_name === 'images')

                                        <img src="{{ $mediaItem->getUrl() }}" class="d-block w-100" alt="Image">

                                        @endif
                                    </div>
                                    @endforeach

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            @endif
                            </div>
                        </div>
                        <div class="news_post_top d-flex flex-column flex-sm-row">
                            <div class="news_post_date_container">
                                <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                    <div>{{ \Carbon\Carbon::parse($newsItem->published_date)->format('d') }}</div>
                                    <div>{{ \Carbon\Carbon::parse($newsItem->published_date)->format('M') }}</div>
                                </div>
                            </div>
                            <div class="news_post_title_container">
                                <div class="news_post_title">
                                    <a href="">{{ $newsItem->title }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="news_post_quote">
                            <p class="news_post_quote_text">{{ $newsItem->excerpt }}.</p>
                        </div>

                        <div class="news_post_text">
                            <p>{{ $newsItem->content }}. </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Sidebar Column -->
        </div>
    </div>
</div>

@endsection