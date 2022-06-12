@foreach($children as $category)
    @if(count($category->children))
        <div class="tab-pane fade" id="pills-{{$category->id}}" role="tabpanel"
             aria-labelledby="pills-{{$category->id}}-tab">
            <div class="container">
                <div class="s-box-container row justify-content">
                    @foreach($service as $rs)
                        @php
                            $average = $rs->comment->average('rate');
                        @endphp
                        @if($rs->category->id==$category->id)
                            <div class="s-box">
                                <!--top-bar-------->
                                <div class="bar"></div>
                                <!--img---------->
                                <img alt="1" src="{{Storage::url($rs->image)}}"/>
                                <h3 class="m-2"><strong>{{$rs->title}}</strong></h3>
                                <div class="row " style="display: block">
                                    <i id="star" class="bi bi-star-fill {{$average >= 1 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 2 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 3 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 4 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 5 ? 'active' : ''}}"></i>
                                </div>
                                <a href="">Comments ({{$rs->comment->count('id')}})</a>
                                <!--btn---------->
                                <a class="s-btn"
                                   href="{{route('service_detail',['id'=>$rs->id])}}">More</a>
                            </div>
                        @endif
                    @endforeach
                    <!--service-box-1---------------->
                </div>
            </div>
        </div>
        @include('home.categorytree3',['children'=>$category->children,'service'=>$service])
    @else
        <div class="tab-pane fade" id="pills-{{$category->id}}" role="tabpanel"
             aria-labelledby="pills-{{$category->id}}-tab">
            <div class="container">
                <div class="s-box-container row justify-content">
                    @foreach($service as $rs)
                        @php
                            $average = $rs->comment->average('rate');
                        @endphp
                        @if($rs->category->id==$category->id)
                            <div class="s-box">
                                <!--top-bar-------->
                                <div class="bar"></div>
                                <!--img---------->
                                <img alt="1" src="{{Storage::url($rs->image)}}"/>
                                <h3 class="m-2"><strong>{{$rs->title}}</strong></h3>
                                <div class="row " style="display: block">
                                    <i id="star" class="bi bi-star-fill {{$average >= 1 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 2 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 3 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 4 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 5 ? 'active' : ''}}"></i>
                                </div>
                                <a href="">Comments ({{$rs->comment->count('id')}})</a>
                                <!--btn---------->
                                <a class="s-btn"
                                   href="{{route('service_detail',['id'=>$rs->id])}}">More</a>
                            </div>
                        @endif
                    @endforeach
                    <!--service-box-1---------------->
                </div>
            </div>
        </div>
    @endif
@endforeach
