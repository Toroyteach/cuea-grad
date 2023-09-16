@extends('layouts.app')

@section('content')

<div class="home_">
    <div class="home_background_container_ prlx_parent">
        <div class="home_background_ prlx" style="background-image:url( {{ asset ( 'assets/images/1.jpg')}} )"></div>
    </div>
    <div class="home_content_">
        <h1>Events</h1>
    </div>
</div>

<!-- News -->

<div class="news">
    <div class="container">
        <div class="row">

            <!-- News Column -->

            <div class="col-lg-8">
                <div class="news_posts">
                    @forelse($news as $newsItem)
                    <div class="news_post">
                        <div class="news_post_image">
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
                                <a class="carousel-control-prev" href="#carousel-one" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-one" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            @endif
                        </div>
                        <div style="box-shadow: 5px 5px 8px 12px #bfb6b6; padding: 10px;">
                            <div class="news_post_top d-flex flex-column flex-sm-row">
                                <div class="news_post_date_container">
                                    <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                        <div>{{ \Carbon\Carbon::parse($newsItem->published_date)->format('d') }}</div>
                                        <div>{{ \Carbon\Carbon::parse($newsItem->published_date)->format('M') }}</div>
                                    </div>
                                </div>
                                <div class="news_post_title_container">
                                    <div class="news_post_title">
                                        <a href="{{ route('single', $newsItem->id) }}">{{ $newsItem->title }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news_post_text">
                                <p class="text-dark">{{ Illuminate\Support\Str::limit($newsItem->content, 40) }}</p>
                            </div>
                        </div>
                        <div class="news_post_button text-center trans_200">
                            <a href="{{ route('single', $newsItem->id) }}">Read More</a>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-info">
                        No news available.
                    </div>
                    @endforelse
                </div>

                <!-- Pagination Links -->
                <div class="news_page_nav">
                    {{ $news->links() }}

                </div>
            </div>


            <!-- Sidebar Column -->
        </div>
    </div>
</div>

@endsection