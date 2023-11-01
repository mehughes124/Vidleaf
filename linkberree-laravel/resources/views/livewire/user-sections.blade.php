@push('styles')
    <!-- VideoJS Styles -->
    <link href="https://vjs.zencdn.net/8.6.1/video-js.css" rel="stylesheet" />
    <link href="{{ asset('/css/linkberree-lp.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <!-- VideoJS Scripts -->
    <script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>
@endpush

<div>
    @foreach($sections as $section)
        <div class="section overscroll-none bg-[rgb(20,20,20)] snap-start snap-always w-full h-screen box-border relative">
            <h2>{{ $section->hero_copy_line_1 }}</h2>
            <h3>{{ $section->hero_copy_line_2 }}</h3>
            <a href="{{ $section->link_url }}">{{ $section->link_cta_copy }}</a>

            @if($section->section_type == 'Video' && $section->media_id)
                <video-js style="height: 100vh;" id="my-video-{{ $section->id }}" class="section-video video-js" preload="auto" data-setup='{}' autoplay muted loop playsinline>
                    <source src="https://customer-84jgqs8qcq480tqo.cloudflarestream.com/{{ $section->media_id }}/manifest/video.m3u8">
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>class="section-video video-js" preload="auto" data-setup='{}' autoplay muted loop
                    </p>
                </video-js>
            @endif
        </div>
    @endforeach
    <video-js id="vid1" class="section-video" preload="auto" data-setup='{}' autoplay muted loop playsinline>
        <source
            src="https://customer-84jgqs8qcq480tqo.cloudflarestream.com/5026ff9f3b8249a489c06eb9a470d1ad/manifest/video.m3u8"
            type="application/x-mpegURL"
        />
    </video-js>
</div>