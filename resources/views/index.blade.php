@extends('layouts.mainlayout');
@section('content')
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
        <div class="section group search-results-home-page">
            <div class="grid_1_of_3 images_1_of_3">
                <a href="details.html"><img src="images/pic1.jpg" alt=""></a>
                <a href="" class="faculty-name">Nguyễn Hoàng Anh</a>
                <p class="faculty-price"><span>300</span>đ/<span>1</span>phút &nbsp; (Miễn phí <span>5</span> phút dạy đầu tiên)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                <p><a class="like-home-page">1000 likes</a><a class="dislike-home-page">5 dislikes</a><a class="comment-home-page">10 comments</a></p>
                <div class="button"><span><a href="details.html" class="avaiable-button">Chat luôn</a></span></div>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <a href="details.html"><img src="images/pic2.jpg" alt=""></a>
                <a href="" class="faculty-name">Phạm Thị QUyên</a>
                <p class="faculty-price"><span>200</span>đ/<span>1</span>phút &nbsp; (Miễn phí <span>5</span> phút dạy đầu tiên)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                <p><a class="like-home-page">1000 likes</a><a class="dislike-home-page">5 dislikes</a><a class="comment-home-page">10 comments</a></p>
                <div class="button"><span><a href="details.html">Nhắn lại</a></span></div>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <a href="details.html"><img src="images/pic3.jpg" alt=""></a>
                <a href="" class="faculty-name">Tony Trần</a>
                <p class="faculty-price"><span>500</span>đ/<span>1</span>phút &nbsp; (Miễn phí <span>5</span> phút dạy đầu tiên)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                <p><a class="like-home-page">1000 likes</a><a class="dislike-home-page">5 dislikes</a><a class="comment-home-page">10 comments</a></p>
                <div class="button"><span><a href="details.html">Nhắn lại</a></span></div>
            </div>

            <div class="grid_1_of_3 images_1_of_3">
                <a href="details.html"><img src="images/pic1.jpg" alt=""></a>
                <a href="" class="faculty-name">Nguyễn Hoàng Anh</a>
                <p class="faculty-price"><span>1000</span>đ/<span>1</span>phút &nbsp; (Miễn phí <span>5</span> phút dạy đầu tiên)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                <p><a class="like-home-page">1000 likes</a><a class="dislike-home-page">5 dislikes</a><a class="comment-home-page">10 comments</a></p>
                <div class="button"><span><a href="details.html" class="avaiable-button">Chat luôn</a></span></div>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <a href="details.html"><img src="images/pic2.jpg" alt=""></a>
                <a href="" class="faculty-name">Phạm Thị QUyên</a>
                <p class="faculty-price"><span>300</span>đ/<span>1</span>phút &nbsp; (Miễn phí <span>5</span> phút dạy đầu tiên)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                <p><a class="like-home-page">1000 likes</a><a class="dislike-home-page">5 dislikes</a><a class="comment-home-page">10 comments</a></p>
                <div class="button"><span><a href="details.html" class="avaiable-button">Chat luôn</a></span></div>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <a href="details.html"><img src="images/pic3.jpg" alt=""></a>
                <a href="" class="faculty-name">Tony Trần</a>
                <p class="faculty-price"><span>300</span>đ/<span>1</span>phút &nbsp; (Miễn phí <span>5</span> phút dạy đầu tiên)</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                <p><a class="like-home-page">1000 likes</a><a class="dislike-home-page">5 dislikes</a><a class="comment-home-page">10 comments</a></p>
                <div class="button"><span><a href="details.html">Nhắn lại</a></span></div>
            </div>
        </div>
        <div class="section group">
            <div class="grid_3_of_3 images_3_of_3">
                <ul class="pagination">
                    <li><a class="page first" href="">«</a></li>
                    <li><a class="page previous" href="">Previous</a></li>
                    <li><a class="page active" href="">10</a></li>
                    <li><a class="page" href="">11</a></li>
                    <li><a class="page" href="">12</a></li>
                    <li><a class="page" href="">13</a></li>
                    <li><a class="page" href="">14</a></li>
                    <li><a class="page" href="">15</a></li>
                    <li><a class="page" href="">16</a></li>
                    <li><a class="page next" href="">Next</a></li>
                    <li><a class="page last" href="">»</a></li>
                </ul>
            </div>
        </div>
        <div class="cnt-btm">
            <h3 class="left">Bài viết mới nhất</h3>
            <h3 class="right">show&nbsp;<span><a class="a-show-all" href="details.html">all</a></span></h3>
            <div class="clear"></div>
        </div>
        <div class="section group news-home-page">
            <div class="grid_1_of_3 images_1_of_3">
                <a href="details.html"><img src="images/staff3.jpg" alt=""></a>
                <p class="title-new">10 thủ thuật học tiếng anh hiệu quả</p>
                <a href="" class="author-new">Nguyễn Thị Vân</a>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <a href="details.html"><img src="images/staff1.jpg" alt=""></a>
                <p class="title-new">10 thủ thuật học tiếng anh hiệu quả hay nhất cần xem ngay lập tức</p>
                <a href="" class="author-new">Nguyễn Thị Vân</a>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <a href="details.html"><img src="images/staff2.jpg" alt=""></a>
                <p class="title-new">10 thủ thuật học tiếng anh hiệu quả hay nhất cần xem ngay lập tức</p>
                <a href="" class="author-new">Nguyễn Thị Vân</a>
            </div>
        </div>
    </div>
    @endsection