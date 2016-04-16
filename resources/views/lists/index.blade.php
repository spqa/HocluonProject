@extends('layouts.mainlayout')
@section('content')

    <div class="content-bg">
        <div class="wrap">
            <div class="content">
                <div class="section group">
                    <div class="span_3_of_3 images_3_of_3">
                        <form method="get" id="search" action="https://www.google.com">
                            <h4>Tìm kiếm và lựa chọn người dạy đang online để chat trực tuyến</h4>
                            <br>
                            <input type="text" class="search" placeholder="Bạn cần học gì?">
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="section group">
                    <div class="span_3_of_3 images_3_of_3">
                        <div class="switchable-content">
                            <div id="places-by-speciality" style="display: block;">
                                <ul>
                                    <li>
                                        <a href="">Toeic</a>
                                    </li>
                                    <li>
                                        <a href="">Ielts</a>
                                    </li>
                                    <li>
                                        <a href="">Tiếng anh tiểu học</a>
                                    </li>
                                    <li>
                                        <a href="">Tiếng anh THCS</a>
                                    </li>
                                    <li>
                                        <a href="">Tiếng anh THPT</a>
                                    </li>
                                    <li>
                                        <a href="">Tiếng anh giao tiếp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="title-become-faculty" href="">Hãy trở thành người dạy để chia sẻ kiến thức và kiếm tiền ngay! <span>Click</span></a>
                <br>
                <br>
                <div class="cnt-btm">
                    <h3 class="left">Kết quả tìm kiếm</h3>
                    <h3 class="right">show&nbsp;<span><a class="a-show-all show-all-results-search-home-page" href="details.html">all</a></span></h3>
                    <select name="sort-search-results" id="sort-search-results">
                        <option value="">Sắp xếp theo lượt like</option>
                        <option value="">Sắp xếp theo giá tăng</option>
                        <option value="">Sắp xếp theo giá giảm</option>
                    </select>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="listRestful">
                <h2> Todolists</h2>
                <table style="border: 1px solid black">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Desription</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                    @if($lists->count()>0)
                        @foreach($lists as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
                <div>
                    {{$lists->currentPage().
                    $lists->count().
                    $lists->hasMorePages().
                    $lists->lastPage().
                    $lists->nextPageUrl().
                    $lists->perPage()
                    }}
                    <div class="section group">
                        <div class="grid_3_of_3 images_3_of_3">
                            {!! with(new \App\Pagination($lists))->render() !!}
                        </div>
                    </div>
                    {!! $lists->render() !!}
                </div>
            </div>
        </div>
    </div>

    @endsection