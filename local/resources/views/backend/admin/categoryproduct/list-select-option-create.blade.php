@foreach($categoryItems as $key=>$item)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @if(!$item->children->isEmpty())
        @include('backend.admin.categoryproduct.list-select-option-create', ['categoryItems' => $item->children])
    @endif
@endforeach