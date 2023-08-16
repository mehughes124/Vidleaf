<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Linkberree | A better link-in-bio.</title>
        <meta name="description" content="Your link-in-bio sucks. A LinkBerree gets you more clicks. Get one today.">
        <meta property="og:title" content="Linkberree | A better link-in-bio that gets more clicks" />
        <meta property="og:description" content="Your link-in-bio sucks. A LinkBerree gets you more clicks. Get one today." />
        <meta property="og:image" content="{{ asset('/images/linkberree_og.png') }}"/>
        <meta property="og:url" content="https://linkberr.ee"/>
        <meta property="og:site_name" content="LinkBerree" />
        <link href="{{ asset('/css/linkberree-lp.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/805bf6db2e.js" crossorigin="anonymous"></script>
    </head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7FP21MGW64"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-7FP21MGW64');
    </script>
    <body>
    <div class="content-wrapper">
        <div id="modal-form" class="modal">
            <div class="modal-content">
                <form id="waitlist-form">
                    <input type="email" id="email" placeholder="Email" required>
                    <button class="modal-submit-button" type="submit">Join Waitlist</button>
                    <p class="modal-subtitle">no spam, ever. Join for exclusive Early Access</p>
                </form>
                <div id="success-message" class="hidden">
                    <p>Thank you very much - your Linkberree invite will be coming soon!</p>
                </div>
            </div>
        </div>
        <section id="section1" class="section-grid section-with-video">
            <div class="hero-copy-container" id="hero-copy-container-1">
                <p class="hero-copy-line-1">Your Link-in-Bio</p>
                <p class="hero-copy-line-2"><span class="twinkle-star">✨</span>SUCKS<spanclass="twinkle-star">✨</span></p>
            </div>  
            <video id="section1-video" width="100%" autoplay muted loop class="section-video">
                <source src="{{ asset('/videos/peachy_link_lp.mp4') }}" type="video/mp4">
            </video>
            <div class="bottom-third-content" id="bottom-third-content-1">
                <!-- <div class="svg-background-circle">
                    <svg class="mute-svg-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512" style="display: block; margin: auto;">
                        <line x1="416" y1="432" x2="64" y2="80" style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"/>
                        <path d="M243.33,98.86a23.89,23.89,0,0,0-25.55,1.82l-.66.51L188.6,124.54a8,8,0,0,0-.59,11.85l54.33,54.33A8,8,0,0,0,256,185.06V120.57A24.51,24.51,0,0,0,243.33,98.86Z"/>
                        <path d="M251.33,335.29,96.69,180.69A16,16,0,0,0,85.38,176H56a24,24,0,0,0-24,24V312a24,24,0,0,0,24,24h69.76l92,75.31A23.9,23.9,0,0,0,243.63,413,24.51,24.51,0,0,0,256,391.45V346.59A16,16,0,0,0,251.33,335.29Z"/>
                        <path d="M352,256c0-24.56-5.81-47.87-17.75-71.27a16,16,0,1,0-28.5,14.55C315.34,218.06,320,236.62,320,256q0,4-.31,8.13a8,8,0,0,0,2.32,6.25l14.36,14.36a8,8,0,0,0,13.55-4.31A146,146,0,0,0,352,256Z"/>
                        <path d="M416,256c0-51.18-13.08-83.89-34.18-120.06a16,16,0,0,0-27.64,16.12C373.07,184.44,384,211.83,384,256c0,23.83-3.29,42.88-9.37,60.65a8,8,0,0,0,1.9,8.26L389,337.4a8,8,0,0,0,13.13-2.79C411,311.76,416,287.26,416,256Z"/>
                        <path d="M480,256c0-74.25-20.19-121.11-50.51-168.61a16,16,0,1,0-27,17.22C429.82,147.38,448,189.5,448,256c0,46.19-8.43,80.27-22.43,110.53a8,8,0,0,0,1.59,9l11.92,11.92A8,8,0,0,0,452,385.29C471.6,344.9,480,305,480,256Z"/>
                    </svg>
                </div> -->
                <div class="image-link-wrapper">
                    <div class="image-link">
                        <div class="profile-pic-wrapper">
                            <img class="profile-pic" src="{{ asset('/images/linkberree_icon_thick.png') }}" alt="Image1">
                            <span class="image-text">LinkBerree</span>
                        </div>
                        <div class="link-wrapper">
                            <a class="a-anchor-link">Get A Better One<span class="link-arrow"><span class="fa-solid fa-turn-down"></span></span></a>
                        </div>
                    </div>
                </div>
                <div class="bounce-arrow"><span class="fa-solid fa-arrow-down"></span></div>
            </div>
        </section>

        <section id="section2" class="section-grid">
            <div class="hero-copy-container">
                <p class="hero-copy-line-1">Get a LinkBerree</p>
                <p class="hero-copy-line-2"><span class="twinkle-star">✨</span>Get Clicks<spanclass="twinkle-star">✨</span></p>
            </div>
            <div class="unordered-list-container">
                <ul class="list-section">
                    <li><span class="unordered-list-span"><span class="list-headline">*Easy* to Click</span><br><span class="list-subhead"> Every link is right under your fan's thumbs 👍</span></span></li>
                    <li><span class="unordered-list-span"><span class="list-headline">*A Reason* To Click</span><br><span class="list-subhead"> Tell your fans WHY to click with a video, pic or description</span></span></li>
                    <li><span class="unordered-list-span"><span class="list-headline">*What* To Click</span><br><span class="list-subhead"> Each link stands alone in a swipeable section</span></span></li>
                </ul>
            </div>
            <div class="bottom-third-content">
                <div class="image-link-wrapper">
                    <div class="image-link">
                        <div class="profile-pic-wrapper">
                            <img class="profile-pic" src="{{ asset('/images/linkberree_icon_thick.png') }}" alt="Image1">
                            <span class="image-text">LinkBerree</span>
                        </div>
                        <div class="link-wrapper">
                            <button href="javascript:void(0);" class="join-waitlist-button">Join Waitlist Now<span class="link-email-emoji">✉️</span></a>
                        </div>
                        <div class="exclusive-line">* no spam, ever. Sign up for exclusive Early Access</div>
                    </div>
                </div>
                <div class="bounce-arrow"><span class="fa-solid fa-arrow-down"></span></div>
            </div>
        </section>


        <section id="section3" class="section-grid">
            <div class="hero-copy-container">
                <p class="hero-copy-line-1">You're on a LinkBerree</p>
                <p class="hero-copy-line-2"><span class="twinkle-star">✨</span>Right Now<spanclass="twinkle-star">✨</span></p>
            </div>
            <div class="unordered-list-container">
                <ul class="list-section">
                    <li><span class="unordered-list-span"><span class="list-headline">Isn't It Easy?</span><br><span class="list-subhead">Just swipe and click... Simple! </span></span></li>
                    <li><span class="unordered-list-span"><span class="list-headline">Launching Soon</span><br><span class="list-subhead">Get on the waitlist to secure early access. </span></span></li>
                    <li><span class="unordered-list-span"><span class="list-headline">Sign-up Bonus</span><br><span class="list-subhead">Early Linkberree signups receive a *lifetime* discount</span></span></li>
                </ul>
            </div>
            <div class="bottom-third-content">
                <div class="image-link-wrapper">
                    <div class="image-link">
                        <div class="profile-pic-wrapper">
                            <img class="profile-pic" src="{{ asset('/images/linkberree_icon_thick.png') }}" alt="Image1">
                            <span class="image-text">LinkBerree</span>
                        </div>
                        <div class="link-wrapper">
                            <button href="javascript:void(0);" class="join-waitlist-button">Join Waitlist Now<span class="link-email-emoji">✉️</span></button>
                        </div>
                        <div class="exclusive-line">* no spam, ever. Sign up for exclusive Early Access.</div>
                    </div>
                </div>
                <div class="bounce-arrow"><span class="fa-solid fa-arrow-down"></span></div>
            </div>
        </section>
    </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
