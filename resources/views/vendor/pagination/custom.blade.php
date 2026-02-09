@if ($paginator->hasPages())
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center flex-wrap">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link" style="border-radius: 50%; min-width: 45px; text-align: center;">←</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                   style="border-radius: 50%; min-width: 45px; text-align: center; transition: all 0.3s;">
                    ←
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled">
                    <span class="page-link">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                        <a class="page-link"
                           href="{{ $url }}"
                           style="border-radius: 50%; min-width: 45px; text-align: center; transition: all 0.3s;">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                   style="border-radius: 50%; min-width: 45px; text-align: center; transition: all 0.3s;">
                    →
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link" style="border-radius: 50%; min-width: 45px; text-align: center;">→</span>
            </li>
        @endif

    </ul>
</nav>

{{-- Custom CSS --}}
<style>
    .pagination .page-link {
        color: #198754; /* اللون الأساسي */
        border: 1px solid #198754;
        margin: 0 3px;
        font-weight: 500;
    }

    .pagination .page-item.active .page-link {
        background-color: #198754;
        color: #fff;
        border-color: #198754;
    }

    .pagination .page-link:hover {
        background-color: #198754;
        color: #fff;
        transform: scale(1.1);
    }

    /* Responsive: زر أكبر على الشاشات الصغيرة */
    @media (max-width: 576px) {
        .pagination .page-link {
            min-width: 40px;
            padding: 0.5rem 0;
        }
    }
</style>
@endif
