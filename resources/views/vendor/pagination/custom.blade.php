
@if ($paginator->hasPages())
 
<div class="d-flex mt-4 flex-wrap">
                      
            <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                      
            <nav class="ml-auto">
                <ul class="pagination separated pagination-info">

                @if ($paginator->onFirstPage())
                    <li class="page-item" class="disabled"><i class="icon-arrow-left"></i></li>
                @else
                    <li><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev"><i class="icon-arrow-left"></i></a></li>
                @endif


                @foreach ($elements as $element)
           
                    @if (is_string($element))
                        <li class="page-item"><span>{{ $element }}</span></li>
                    @endif


           
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" class="page-item">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next"><i class="icon-arrow-right"></i></a></li>
                @else
                    <li class="page-item"><span><i class="icon-arrow-right"></i></span></li>
                @endif
                          
                       
            </ul>
</nav>
</div>
     
   
@endif 