@foreach ($locations as $key => $data)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $data->id }}</td>
        <td @if(isset($style))style="{{$style}}" @endif>{{ $data->name }}</td>
        <td>
            <div class="group-locale">
                @php
                    $localesPost=$data->translations()->first()->locations()->get();
                @endphp
                @foreach($locales as $key=>$item)
                    @if(in_array($item->id,$localesPost->pluck('locale_id')->toArray()))
                        @foreach($localesPost as $key2=>$item2)
                            @if($item2->locale_id==$item->id)
                                <a href="{{ route('location.edit',['id'=>$item2->id,'locale_id'=>$item2->locale_id]) }}"><i class="far fa-check-square"
                                                                                 style="color: green"></i>

                                    @endif
                                    @endforeach
                                    @else
                                        <a href="{{ route('location.createLocale',['translation_id'=>$data->translation_id,'locale_id'=>$item->id]) }}"><i
                                                    class="fas fa-plus"></i></a>
                            @endif
                        @endforeach
            </div>
        </td>
        <td>{{ $data->created_at }}</td>
        <td>{{ $data->updated_at }}</td>
        <td>
            @permission(('page-edit'))
            <a class="btn btn-primary" href="{{ route('location.edit',['id'=>$data->id,'locale_id'=>$data->locale_id]) }}">Cập Nhật</a>
            @endpermission
            @permission(('page-delete'))
            {!! Form::open(['method' => 'DELETE','route' => ['location.destroy', $data->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endpermission
        </td>
    </tr>
    @if(!$data->children->isEmpty())
        @php
            $px=($data->level+2)*20;
        @endphp
        @include('backend.admin.location.list-location-index', ['locations' => $data->children,'style'=>'padding-left:'.$px.'px'])
    @endif
@endforeach