@if ($paginator->hasPages())
    <div class="text-center d-flex justify-content-center">
        <div class="post-pagination mt-5">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="javascript:;" class="page"><i class="fa fa-angle-left"></i></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="page"><i class="fa fa-angle-left"></i></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="javascript:;" class="active" class="page">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="page">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="page"><i class="fa fa-angle-right"></i></a>
        @else
            <a href="javascript:;" class="page"><i class="fa fa-angle-right"></i></a>
        @endif
        </div>
    </div>
@endif
