<div class="vidz_list">
    <div class="row">

        @foreach($content as $cont)
        <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
            <div class="videoo">
                <div class="vid_thumbainl">
                    <a href="{{url('/page/'.$cont->id)}}" title="">
                        <div class="vid-pr">
                            <video
                                id="my-video"
                                class="video-js"
                                controls
                                preload="auto"
                                width="640"
                                height="auto"
                                data-setup="{}"
                            >
                                <source src="{{url('video/'.$cont->videoName)}}" type="video/mp4" />
                            </video>
                        </div><!--vid-pr end-->
{{--                        <img src="{{url('video/'.$cont->videoName)}}" alt="video/mp4">--}}
                        <span class="vid-time">10:21</span>
                        <span class="watch_later">
                            <i class="icon-watch_later_fill"></i>
                        </span>
                    </a>
                </div><!--vid_thumbnail end-->
                <div class="video_info">
                    <h3><a href="{{url('/page/'.$cont->id)}}" title="">{{$cont->title1}}</a></h3>
                    <h4><a href="{{url('/page/'.$cont->id)}}" title="">{{$cont->title2}}</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                    <span>686K views .<small class="posted_dt"> {{$cont->created_at}}</small></span>
                </div>
            </div><!--videoo end-->
        </div>
        @endforeach

    </div>
</div><!--vidz_list end-->
