
// global audio and video playback handling, as well as animation controller for arrows 
let globalMuteState = true;
let currentSection = null;

const sections = document.querySelectorAll('section');
sections.forEach((section) => {
    const video = section.querySelector('video');
    const svgWrapper = section.querySelector('.svg-background-circle');
    const svgIcon = section.querySelector('.mute-svg-icon');

    section.addEventListener('click', () => {
        video.muted = !video.muted;
        globalMuteState = video.muted;

        sections.forEach((section) => {
            const videoInSection = section.querySelector('video');
            const svgWrapperInSection = section.querySelector('.svg-background-circle');
            const svgIconInSection = section.querySelector('.mute-svg-icon');
            
            if (section !== currentSection){
                videoInSection.muted = globalMuteState;
                if(globalMuteState) {
                    svgWrapperInSection.style.visibility = 'visible';
                    svgIconInSection.style.visibility = 'visible';
                } else {
                    svgWrapperInSection.style.visibility = 'hidden';
                    svgIconInSection.style.visibility = 'hidden';
                }
            }
        });

        svgWrapper.style.visibility = video.muted ? 'visible' : 'hidden';
        svgIcon.style.visibility = video.muted ? 'visible' : 'hidden';
    });
});

// remove muted svg on click and animate bottom arrows on visible
document.addEventListener('DOMContentLoaded', (event) => {
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            var bounceArrow = entry.target.querySelector('.bounce-arrow');
            var video = entry.target.querySelector('video');
            var svgWrapper = entry.target.querySelector('.svg-background-circle');
            var svgIcon = entry.target.querySelector('.mute-svg-icon');

            if (entry.isIntersecting) {
                bounceArrow.classList.add('bounce-visible');
                video.play();
                if (currentSection && currentSection !== entry.target) {
                    const previousVideo = currentSection.querySelector('video');
                    previousVideo.muted = true;
                    previousVideo.pause();
                }
                video.muted = globalMuteState;
                if(video.muted) {
                    svgWrapper.style.visibility = 'visible';
                    svgIcon.style.visibility = 'visible';
                } else {
                    svgWrapper.style.visibility = 'hidden';
                    svgIcon.style.visibility = 'hidden';
                }
                currentSection = entry.target;
            } else {
                bounceArrow.classList.remove('bounce-visible');
            }
        });
    }, { threshold: [0.5] });

    sections.forEach(section => {
        observer.observe(section);
    });
});

// remove bouncing arrow from last section
document.addEventListener('DOMContentLoaded', () => {
    // Get the last section
    let lastSection = sections[sections.length - 1];

    // Get the "bounce-arrow" div in the last section
    let bounceArrowDiv = lastSection.querySelector('.bounce-arrow');

    // Add the "last-arrow" class to this div
    bounceArrowDiv.classList.add('last-arrow');
});


