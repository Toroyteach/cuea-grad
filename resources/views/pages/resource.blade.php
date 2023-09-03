@extends('layouts.app')

@section('content')

<div class="home_">
    <div class="home_background_container_ prlx_parent">
        <div class="home_background_ prlx" style="background-image:url({{ asset ( 'assets/images/contact_background.jpg')}})"></div>
    </div>
    <div class="home_content_">
        <h1>Resources</h1>
    </div>
</div>

<!-- Elements -->

<div id="aspect-content">

    <div class="aspect-tab ">
        @forelse($graduations as $graduation)
        <input id="item-18" type="checkbox" class="aspect-input" name="aspect">
        <label for="item-18" class="aspect-label"></label>

        <div class="aspect-content">
            <div class="aspect-info">
                <span class="aspect-name text-white">{{ $graduation->title }}</span>
            </div>
        </div>

        <div class="aspect-tab-content">

            <p class="text-dark">{{ $graduation->description }}</p>

            <div class="sentiment-wrapper">

                @if($graduation->resources->count() > 0)

                @foreach($graduation->resources as $resource)
                @if($resource->is_downloadable)
                @php
                $downloadableMedia = $resource->getMedia()->filter(function ($media) {
                return in_array($media->mime_type, ['application/pdf']);
                });

                @endphp
                @if($downloadableMedia->count() > 0)

                <div class="card">
                    <div>

                        <div class="opinion-header">
                            <span>{{ $resource->title }}</span>
                        </div>
                        <div>
                            <span>{{ $resource->description }}</span>
                            <br />
                            @foreach($downloadableMedia as $media)
                            <a href="{{ $media->getUrl() }}" class="btn btn-primary btn-sm" style="background-color: #A0002A;">Download</a>
                            @endforeach
                        </div>

                    </div>
                </div>

                @endif
                @endif
                @endforeach

                @else
                <div class="alert alert-info">
                    No resources available for this graduation.
                </div>
                @endif


            </div>
        </div>
        @empty
        <div class="alert alert-info">
            No graduations available.
        </div>
        @endforelse
    </div>

</div>

@endsection