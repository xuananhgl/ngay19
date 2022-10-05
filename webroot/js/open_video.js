const openVideo = document.querySelector('.js-open-video')
                const playVideo = document.querySelector('.js-video')
                const closeVideo = document.querySelector('.js-close-video')
                function showVideo(){
                    playVideo.classList.add('open')
                }

                function hideVideo(){
                    playVideo.classList.remove('open')
                }
                openVideo.addEventListener('click', showVideo)
                closeVideo.addEventListener('click', hideVideo)