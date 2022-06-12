@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <li > <button type="button" class="default_btn ml-4" id="pills-{{$subcategory->id}}-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-{{$subcategory->id}}" type="button" role="tab"
                      aria-controls="pills-{{$subcategory->id}}"
                      aria-selected="false">{{$subcategory->title}}
            </button></li>
        @include('home.categorytree',['children'=>$subcategory->children])
    @else
        <li > <button type="button" class="default_btn ml-4" id="pills-{{$subcategory->id}}-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-{{$subcategory->id}}" type="button" role="tab"
                      aria-controls="pills-{{$subcategory->id}}"
                      aria-selected="false">{{$subcategory->title}}
            </button></li>
    @endif
@endforeach
