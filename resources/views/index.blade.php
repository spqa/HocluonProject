@extends('layouts.mainlayout')
@section('content')
    <div class="content-bg">
        <div class="wrap">
            <div class="content">
                <div class="section group">
                    <div class="span_3_of_3 images_3_of_3">
                        <form method="get" id="search" action="{{url('/search')}}">
                            <h4>Tìm kiếm và lựa chọn người dạy đang online để chat trực tuyến</h4>
                            <br>
                            <input type="text" name="query" class="search" placeholder="Bạn cần học gì?">
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
                <a class="title-become-faculty" href="">Tìm kiếm và lựa chọn người dạy bên dưới để học trực tuyến miễn phí!
                    <!--<span>Click</span></a>-->
                <br>
                <br>
                <div class="cnt-btm">
                    <h3 class="left">Kết quả tìm kiếm</h3>
                    <h3 class="right">show&nbsp;<span><a class="a-show-all show-all-results-search-home-page"
                                                         href="details.html">all</a></span></h3>
                    <select name="sort-search-results" id="sort-search-results">
                        <option value="">Sắp xếp theo lượt like&nbsp;</option>
                        <option value="">Sắp xếp theo tên&nbsp;</option>
                    </select>
                    <div class="clear"></div>
                </div>
                <div class="section group search-results-home-page">
@foreach($teacher as $item)
                        <div class="grid_1_of_3 images_1_of_3">
                            <a href="details.html"><img src="{{$item->linkimg}}" alt=""></a>
                            <a href="" class="faculty-name">{{$item->first_name.' '.$item->last_name}}</a>
                            <p class="faculty-price"><span>{{$item->skill}}</span></p>
                            <p class="description-item">{{$item->description}}</p>
                            <p><a class="like-home-page">Rating: {{isset($item->statistical)? $item->statistical->responses:'0'}}</a><a class="dislike-home-page">
                                    Tags:@foreach($item->tags as $tag)
                                             <code style="background-color: #491c47">{{$tag->tag_content}}</code>
                                             @endforeach
                                </a><a class="comment-home-page">10 comments</a></p>
                            <div class="button"><span><a href="details.html" class="avaiable-button">Chat luôn</a></span></div>
                        </div>
@endforeach
                </div>
                <div class="section group">
                    <div class="grid_3_of_3 images_3_of_3">

{!! with(new \App\Pagination($teacher))->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection