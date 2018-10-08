@foreach($data as $key=>$item)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @if(!$item->children->isEmpty())
        @include('backend.admin.location.list-select-option-create', ['data' => $item->children])
    @endif
@endforeach