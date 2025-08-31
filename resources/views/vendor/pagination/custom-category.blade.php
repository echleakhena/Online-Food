
@if ($paginator->hasPages())
    <div style="display: flex; gap: 10px;">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="pagination-btn" disabled>
                <i class="fas fa-chevron-left"></i>
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-btn">
                <i class="fas fa-chevron-left"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <button class="pagination-btn" disabled>{{ $element }}</button>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="pagination-btn active" disabled>{{ $page }}</button>
                    @else
                        <a href="{{ $url }}" class="pagination-btn">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-btn">
                <i class="fas fa-chevron-right"></i>
            </a>
        @else
            <button class="pagination-btn" disabled>
                <i class="fas fa-chevron-right"></i>
            </button>
        @endif
    </div>
@endif
