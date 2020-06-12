@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div>
                        @if($visualizado->id==0)
                        <form id='form_video' style="display:none" method="POST" action="{{route('ponencia_visualizada')}}">
                            {{ csrf_field() }} 
                            <input type="hidden" value="{{$ponencia->id}}" name="id_ponencia"/>
                            <input type="hidden" value="{{$user_id}}" name="id_user"/>
                            <input type="submit" value="Marcar como visualizada"/>
                        </form>
                        @else
                        <p>Ya has visualizado esta ponencia</p>
                        @endif
                        
                      <h2>{{$ponencia->titulo}}</h2>
                      <h4>{{$user->name}}</h4>
                      <div id="player"></div>
                      <!--<iframe id="player" width="550" height="300" src="{{$ponencia->url}}?enablejsapi=1;controls=0;rel=0;autoplay=1"></iframe>-->
                      <p class="description_photo">{{$ponencia->descripcion}}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
  <script>
    var url = '{{$ponencia->url}}';
    var video_id = url.split('v=');
    var ampersandPosition = video_id.indexOf('&');
    if(ampersandPosition != -1) {
      video_id = video_id.substring(0, ampersandPosition);
    }
    console.log(video_id[1]);
    // 2. This code loads the IFrame Player API code asynchronously.
 
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
   
      player = new YT.Player('player', {
        height: '360',
        width: '640',
        videoId: video_id[1],
        playerVars: { 'autoplay': 1, 'controls': 0, 'rel':0, 'disablekb':1},
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
      });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        
      event.target.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {
        
      if (event.data == YT.PlayerState.ENDED && done) {
        document.getElementById("form_video").submit(); 
        
      }
      if (event.data == YT.PlayerState.PLAYING && !done) {
        done = true;
      }
    }

    function stopVideo() {
        
      player.stopVideo();
    }
  </script>
@endsection