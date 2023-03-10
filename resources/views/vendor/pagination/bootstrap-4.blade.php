@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            @php
                function toBengaliNum($number)
{
    $number = str_replace("1", "১", $number);
    $number = str_replace("2", "২", $number);
    $number = str_replace("3", "৩", $number);
    $number = str_replace("4", "৪", $number);
    $number = str_replace("5", "৫", $number);
    $number = str_replace("6", "৬", $number);
    $number = str_replace("7", "৭", $number);
    $number = str_replace("8", "৮", $number);
    $number = str_replace("9", "৯", $number);
    $number = str_replace("0", "০", $number);
    return $number;
}
            @endphp

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}


                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())

                        @if(app()->getLocale()=='en')
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @endif

                        @if(app()->getLocale()=='bn')
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ toBengaliNum($page) }}</span></li>
                        @endif
                        @else
                        @if(app()->getLocale()=='en')
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif

                        @if(app()->getLocale()=='bn')
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ toBengaliNum($page) }}</a></li>
                         @endif

                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
