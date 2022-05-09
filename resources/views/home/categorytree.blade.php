@foreach($children as $subcategory)
    <ul class="price_list">
        @if(count($subcategory->children))
            <li>
                <h4>{{$subcategory->title}}</h4>
                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.</p>
                <span class="price">$8</span>
            </li>
            <ul class="price_list">
                @include('home.categorytree',['children'=>$rs->children])
            </ul>
             <hr>
        @else
            <li><a href="{{route('categoryservice',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
