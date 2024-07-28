<section class="px-2 py-32 bg-white md:px-0">
  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full md:w-1/2 md:px-3">
        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">Beautiful Pages to</span>
            <span class="block text-indigo-600 xl:inline" data-primary="indigo-600">Tell Your Story!</span>
          </h1>
          <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It's never been easier to build beautiful websites that convey your message and tell your story.</p>
          <div class="relative flex flex-col sm:flex-row sm:space-x-4">
            <a href="#_" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto" data-primary="indigo-600" data-rounded="rounded-md">
              Try It Free
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="#_" class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600" data-rounded="rounded-md">
              Learn More
            </a>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <img src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg">
          </div>
      </div>
    </div>
  </div>
  <div x-data="{
    sources: {
        mp4: 'https://cdn.devdojo.com/pines/videos/coast.mp4',
        webm: 'https://cdn.devdojo.com/pines/videos/coast.webm',
        ogg: 'https://cdn.devdojo.com/pines/videos/coast.ogg'
    },
    playing: false,
    controls: true,
    muted: false,
    muteForced: false,
    fullscreen: false,
    ended: false,
    mouseleave: false,
    autoHideControlsDelay: 3000,
    controlsHideTimeout: null,
    poster: null,
    videoDuration: 0,
    timeDurationString: '00:00',
    timeElapsedString: '00:00',
    showTime: false,
    volume: 1,
    volumeBeforeMute: 1,
    videoPlayerReady: false,
    timelineSeek(e) {
        time = this.formatTime(Math.round(e.target.value));
        this.timeElapsedString = `${time.minutes}:${time.seconds}`;
    },
    metaDataLoaded(event) {
        this.videoDuration = event.target.duration;
        this.$refs.videoProgress.setAttribute('max', this.videoDuration);

        time = this.formatTime(Math.round(this.videoDuration));
        this.timeDurationString = `${time.minutes}:${time.seconds}`;
        this.showTime = true;
        this.videoPlayerReady = true;
    },
    togglePlay(e) {
        if (this.$refs.player.paused || this.$refs.player.ended) {
            this.playing = true;
            this.$refs.player.play();
        } else {
            this.$refs.player.pause();
            this.playing = false;
        }
    },
    toggleMute(){
        this.muted = !this.muted;
        this.$refs.player.muted = this.muted;
        if(this.muted){
            this.volumeBeforeMute = this.volume;
            this.volume = 0;
        } else {
            this.volume = this.volumeBeforeMute;
        }
    },
    timeUpdatedInterval() {
        if (!this.$refs.videoProgress.getAttribute('max'))
            this.$refs.videoProgress.setAttribute('max', $refs.player.duration);
            this.$refs.videoProgress.value = this.$refs.player.currentTime;
            time = this.formatTime(Math.round(this.$refs.player.currentTime));
            this.timeElapsedString = `${time.minutes}:${time.seconds}`;
    },
    updateVolume(e) {
        this.volume = e.target.value;
        this.$refs.player.volume = this.volume;
        if(this.volume == 0){
            this.muted = true;
        }

        if(this.muted && this.volume > 0){
            this.muted = false;
        }
    },
    timelineClicked(e) {
        rect = this.$refs.videoProgress.getBoundingClientRect();
        pos = (e.pageX - rect.left) / this.$refs.videoProgress.offsetWidth;
        this.$refs.player.currentTime = pos * this.$refs.player.duration;
    },
    handleFullscreen() {
        if (document.fullscreenElement !== null) {
            document.exitFullscreen();
        } else {
            this.$refs.videoContainer.requestFullscreen();
        }
    },
    mousemoveVideo() {
        if(this.playing){
            this.resetControlsTimeout();
        } else {
            this.controls=true;
            clearTimeout(this.controlsHideTimeout);
        }
    },
    videoEnded() {
        this.ended = true;
        this.playing = false;
        this.$refs.player.currentTime = 0;
    },
    resetControlsTimeout() {
        this.controls = true;
        clearTimeout(this.controlsHideTimeout);
        let that = this;
        this.controlsHideTimeout = setTimeout(function(){ 
            that.controls=false 
        }, this.autoHideControlsDelay);
    },
    formatTime(timeInSeconds) {
        result = new Date(timeInSeconds * 1000).toISOString().substring(11, 19);

        return {
            minutes: result.substring(3, 5),
            seconds: result.substring(6, 8),
        };
    }
}"

x-init="
    supportsVideo = document.createElement('video').canPlayType;
    if (!supportsVideo) {
        alert('This browser does not support the video element');
    }

    $refs.player.load();
    $refs.player.controls = false;
    
    $watch('playing', (value) => {
        if (value) {
            ended = false;
            controlsHideTimeout = setTimeout(() => {
                controls = false;
            }, autoHideControlsDelay);
        } else {
            clearTimeout(controlsHideTimeout);
            controls = true;
        }
    });

    if (!document?.fullscreenEnabled) {
        $refs.fullscreenButton.style.display = 'none';
    }

    document.addEventListener('fullscreenchange', (e) => {
        fullscreen = !!document.fullscreenElement;
    });
"
x-ref="videoContainer"
@mouseleave="mouseleave=true" 
@mousemove="mousemoveVideo"
class="relative h-[360px] min-w-[640px] overflow-hidden rounded-md aspect-video">
<video 
    x-ref="player"
    @loadedmetadata="metaDataLoaded" 
    @timeupdate="timeUpdatedInterval" 
    @ended="videoEnded"
    preload="metadata" 
    :poster="poster"
    class="relative z-10 object-cover w-full h-full bg-black"
    crossorigin="anonymous">
    <source :src="sources.mp4" type="video/mp4" />
    <source :src="sources.webm" type="video/webm" />
    <source :src="sources.ogg" type="video/ogg" />
</video>
<div x-show="videoPlayerReady" class="absolute inset-0 w-full h-full">
    <div x-ref="videoBackground" @click="togglePlay()" class="absolute inset-0 z-30 flex items-center justify-center w-full h-full bg-black bg-opacity-0 cursor-pointer group">
        <div
            x-show="playing"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="scale-50 opacity-100"
            x-transition:enter-end="scale-100 opacity-0"
            class="absolute z-20 flex items-center justify-center w-24 h-24 bg-blue-600 rounded-full opacity-0 bg-opacity-20"
            x-cloak>
            <svg class="w-10 h-10 translate-x-0.5 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.42737 3.41611C6.46665 2.24586 4.00008 3.67188 4.00007 5.9427L4 18.0572C3.99999 20.329 6.46837 21.7549 8.42907 20.5828L18.5698 14.5207C20.4775 13.3802 20.4766 10.6076 18.568 9.46853L8.42737 3.41611Z" fill="currentColor"></path></svg>
        </div>
        <div
            x-show="!playing && !ended"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="scale-50 opacity-100"
            x-transition:enter-end="scale-100 opacity-0"
            class="absolute z-20 flex items-center justify-center w-24 h-24 bg-blue-600 rounded-full opacity-0 bg-opacity-20"
            x-cloak>
            <svg class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 3C8.55228 3 9 3.44772 9 4L9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20L7 4C7 3.44772 7.44772 3 8 3ZM16 3C16.5523 3 17 3.44772 17 4V20C17 20.5523 16.5523 21 16 21C15.4477 21 15 20.5523 15 20V4C15 3.44772 15.4477 3 16 3Z" fill="currentColor"></path></svg>
        </div>
        <div
            x-show="ended"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="scale-50 opacity-100"
            x-transition:enter-end="scale-100 opacity-0"
            class="absolute z-20 flex items-center justify-center w-24 h-24 bg-blue-600 rounded-full bg-opacity-20"
            x-cloak>
            <svg class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM11 7C11 6.44772 11.4477 6 12 6C12.5523 6 13 6.44772 13 7V11C13 11.5523 12.5523 12 12 12C11.4477 12 11 11.5523 11 11V7ZM11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V15Z" fill="currentColor"></path></svg>
        </div>
    </div>
    <div x-show="controls" x-cloak class="absolute z-40 w-full text-white transition duration-500 ease-in-out transform bottom-5" @click.away="mouseleave ? controls=false : mouseleave = true">
        <div class="px-4">
            <input 
                @input="timelineSeek" 
                @change="timelineClicked"
                x-ref="videoProgress" 
                type="range" 
                value="0" 
                step="any" 
                class="relative z-40 w-full cursor-pointer range-lg">
        </div>
        <div class="flex items-center justify-between w-full px-4 mt-2">
            <div class="flex items-center space-x-4">
                <button
                    x-on:click="togglePlay()"
                    class="relative z-50 w-12 h-12 bg-gray-900 bg-opacity-50 rounded-md">
                    <svg x-show="playing" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m-7 6h14a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <svg x-show="!playing" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-5.197-3.096A1 1 0 008 9.038v5.924a1 1 0 001.555.832l5.197-3.096a1 1 0 000-1.664z" />
                    </svg>
                </button>
                <button 
                    @click="toggleMute"
                    class="relative z-50 w-12 h-12 bg-gray-900 bg-opacity-50 rounded-md">
                    <svg x-show="muted" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13H5a2 2 0 01-2-2V7a2 2 0 012-2h4l5-5v18l-5-5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9l6 6m0-6l-6 6" />
                    </svg>
                    <svg x-show="!muted" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13H5a2 2 0 01-2-2V7a2 2 0 012-2h4l5-5v18l-5-5z" />
                    </svg>
                </button>
                <input type="range" @input="updateVolume" :value="volume" class="z-50 w-24 cursor-pointer range-lg">
            </div>
            <div class="flex items-center justify-end flex-1 space-x-4">
                <span x-show="showTime" x-cloak class="relative z-50 text-white bg-gray-900 bg-opacity-50 rounded-md px-2 py-1">{{ timeElapsedString }} / {{ timeDurationString }}</span>
                <button
                    x-on:click="handleFullscreen"
                    class="relative z-50 w-12 h-12 bg-gray-900 bg-opacity-50 rounded-md">
                    <svg x-show="!fullscreen" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h5m6 0h5m-1 6h5m-5 6h5m-1 6h-5m-6 0H4m1-6H4m1-6H4" />
                    </svg>
                    <svg x-show="fullscreen" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 8H5a1 1 0 00-1 1v3m0 4v3a1 1 0 001 1h3m4 0h3a1 1 0 001-1v-3m0-4V8a1 1 0 00-1-1h-3M8 8V5a1 1 0 011-1h3m4 0h3a1 1 0 011 1v3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</section>
