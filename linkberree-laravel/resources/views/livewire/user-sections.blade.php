@push('styles')
    <!-- VideoJS Styles -->
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet" />
@endpush

@push('scripts')
    <!-- VideoJS Scripts -->
    <script src="https://vjs.zencdn.net/7.15.4/video.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dashjs/4.1.1/dash.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-dash/3.2.0/videojs-dash.min.js"></script>
@endpush

<div>
    @foreach($sections as $section)
        <div class="section">
            <h2>{{ $section->hero_copy_line_1 }}</h2>
            <h3>{{ $section->hero_copy_line_2 }}</h3>
            <a href="{{ $section->link_url }}">{{ $section->link_cta_copy }}</a>

            @if($section->section_type == 'Video' && $section->media_id)
                <video id="my-video-{{ $section->id }}" class="section-video video-js" preload="auto" data-setup='{}' autoplay muted loop>
                    <source src="https://customer-84jgqs8qcq480tqo.cloudflarestream.com/{{ $section->media_id }}/manifest/video.mpd" type="application/dash+xml">
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
            @endif
        </div>
    @endforeach
</div>