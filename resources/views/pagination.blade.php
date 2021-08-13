@if ($paginator->hasPages())
    <nav class="pagination">
        <ul>
            @if (!$paginator->onFirstPage())
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Prev">前へ</a>
                </li>
            @endif

            @if ($paginator->currentPage() - 5 > 1)
                <li>
                    <a href="{{ $paginator->url(1) }}">1</a>
                </li>
            @endif

            @if ($paginator->currentPage() - 6 > 1)
                <li class="disabled" aria-disabled="true"><span>...</span></li>
            @endif

            @for ($page = max(1, $paginator->currentPage() - 3); $page <= min($paginator->currentPage() + 3, $paginator->lastPage()); $page++)
                @if ($page == $paginator->currentPage())
                    <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                @else
                    <li><a href="{{ $paginator->url($page) }}">{{ $page }}</a></li>
                @endif
            @endfor

            @if ($paginator->currentPage() + 6 < $paginator->lastPage())
                <li class="disabled" aria-disabled="true"><span>...</span></li>
            @endif

            @if ($paginator->currentPage() + 5 < $paginator->lastPage())
                <li>
                    <a href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
                </li>
            @endif

            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">次へ</a>
                </li>
            @endif
        </ul>

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page"><span>&nbsp;{{ $page }}</span></li>
                        &nbsp;/&nbsp;
                        <li class="active" aria-current="page"><span>{{ $paginator->lastPage() }}&nbsp;</span></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </nav>
@endif
