window.addEventListener("DOMContentLoaded", (e) => {
    let videoElements = document.querySelectorAll('.video__element');
    let sliderElements = document.querySelectorAll('.slider');
    let accordionElements = document.querySelectorAll('.faq');

    if(videoElements) {
        videoElements.forEach(el => {
            const video = el.querySelector('.video__element--player');
            const playBtn = el.querySelector('.video__play');

            playBtn.addEventListener('click', ()=> {
                player.play();
            })

            const player = new Plyr(video, {
                controls: [
                  'play-large',
                  'progress', // The progress bar and scrubber for playback and buffering
                  'current-time', // The current time of playback
                  'duration', // The full duration of the media
                  'mute', // Toggle mute
                  'volume', // Volume control
                  'fullscreen', // Toggle fullscreen
        
                ]
              });

              player.on('play', () => el.classList.add('playing'));
              player.on('pause', () => el.classList.remove('playing'));

        })
    }

    if(sliderElements) {
        sliderElements.forEach(el => {
            const slider = el.querySelector('.swiper');
            const pagination = el.querySelector('.slider__pagination')
            const swiper = new Swiper(slider, {
                slidesPerView: 3,
                spaceBetween: 32,
                loop: true,
                pagination: {
                    el: pagination,
                    type: 'bullets',
                  },
            })


        })
    }

    if(accordionElements) {
        let items = document.querySelectorAll('.faq__list-item');

        function toggleAccordion() {
            let thisItem = this.closest('.faq__list-item');
            items.forEach(item => {
                if (thisItem === item) {
                    thisItem.classList.toggle('active');
                    return;
                }

                item.classList.remove('active');

            });
        }

        items.forEach(question => question.addEventListener('click', toggleAccordion))
    }
})