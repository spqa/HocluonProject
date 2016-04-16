@if($paginator->lastPage()>1)
    <ul class="pagination">
        <li><a class="page first" href="{{$paginator->url(1)}}">«</a></li>
        <li><a class="page previous" href="{{$paginator->previousPageUrl()}}">Trước</a></li>
        <li><a class="page active" href="#">{{$paginator->currentPage()}}</a></li>
        <?php $p=$paginator->currentPage()+1; ?>
@for($i=$p;$i<=(($p+6)>$paginator->lastPage() ? $paginator->lastPage(): $p+6);$i++)
    <li><a class="page" href="{{$paginator->url($i)}}">{{$i}}</a></li>
    @endfor
        <li><a class="page next" href="{{$paginator->nextPageUrl()}}">Sau</a></li>
        <li><a class="page last" href="{{$paginator->url($paginator->lastPage())}}">»</a></li>
    </ul>
    @else
    <ul class="pagination">
        <li><a class="page active" href="#"></a></li>
    </ul>
@endif