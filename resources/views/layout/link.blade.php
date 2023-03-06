<?php
// config
$link_limit = 4; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($paginator->lastPage() > 1)
<div class="row mx-0">
    <div class="col-12 text-center pb-4 pt-4">
        @if ($paginator->currentPage() > 1)
        <a href="{{ $paginator->url(1) }}" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
        @endif
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $paginator->currentPage() - $half_total_links;
            $to = $paginator->currentPage() + $half_total_links;
            if ($paginator->currentPage() < $half_total_links) {
               $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <a href="{{ $paginator->url($i) }}" class="btn_pagging">{{ $i }}</a>
            @endif
        @endfor
        
        @if ($paginator->currentPage() < $paginator->lastPage())
            <a href="{{ $paginator->url($paginator->lastPage()) }}" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
        @endif
     </div>
</div>
@endif