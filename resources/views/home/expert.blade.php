@extends('home.public.parent')
@section('content')


<div id="cattit">
        <h3><a href="#">专家板块</a></h3>
</div>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<div id="cattlist" class="am-container">
    <ul class="am-avg-sm-1 am-avg-md-3 am-avg-lg-4">
        @foreach( $intes as $i )
        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="{{ asset('/image/'.$i->photo) }}">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>{{ $i->nickname }}</h3>
                            <p>采纳:<span>{{ $i->adopt }}</span>%</p>
                            <p>{{ $i->time }}</p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                       {{ $i->name }}
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">
                       <a href="/ngavig/answer/{{$i->id}}" style="color:white;"> 进入问题帖 </a>
                    </button>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>


@endsection