<div class="container-fluid" id="p_3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6>@lang('content.project_facitleties')</h6>
                @foreach($data['facilities'] as $key=>$item)
                <div class="fac-items d-flex align-items-center">
                    <i class="{{$item->icon}}"></i>
                    <p>{{$item->name}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>