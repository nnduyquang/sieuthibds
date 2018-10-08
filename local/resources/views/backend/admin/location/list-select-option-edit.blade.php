@foreach($locations as $key=>$item)
    <option {{($location->parent_id=== $item->id)?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
    @if(!$item->children->isEmpty())
        @include('backend.admin.location.list-select-option-edit', ['locations' => $item->children])
    @endif
@endforeach