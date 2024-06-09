<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                @if (isset($breadcrumb))
                    @foreach ($breadcrumb->list as $key => $value)
                        {{-- @dd(count($breadcrumb->list)) --}}
                        @if ($key == count($breadcrumb->list) - 1)
                            <li class="breadcrumb-item active">{{ $value['item'] }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="{{ route($value['route']) }}">{{ $value['item'] }}</a></li>
                        @endif
                    @endforeach
                @endif
            </ol>
        </nav>
        @if (isset($breadcrumb))
            <h4 class="mb-1 mt-0">{{ $breadcrumb->title }}</h4>
        @endif
    </div>
</div>