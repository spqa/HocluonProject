@extends('layouts.master')
@section('UniqueFooter')
    <div class="wrap">
        <div class="footer">
            <div class="col top span_1_of_3">
                <div class="f-list btm">
                    <h3>latest news</h3>
                    <p>"There are many variations of passages of Lorem Ipsum"</p>
                    <p class="left btm">Posted on</p>
                    <p class="right btm"><a href="">H. Johnson</a></p>
                    <div class="clear"></div>
                    <p>"The standard chunk of Lorem Ipsum used since the 1500s is"</p>
                    <p class="left btm">Posted on</p>
                    <p class="right"><a href="">J.Smith</a></p>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col top span_1_of_3">
                <div class="f-list btm">
                    <h3>features</h3>
                    <ul>
                        <li><a href="">Lorem Ipsum is simply dummy text of the printing</a></li>
                        <li><a href="">The standard chunk of Lorem Ipsum used since the</a></li>
                        <li><a href="">Lorem Ipsum is simply dummy text of the printing</a></li>
                        <li><a href="">The standard chunk of Lorem Ipsum used since the</a></li>
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_3">
                <div class="table-form btm">
                    <h3>Send us</h3>
                    <form>
                        <input type="text" class="textbox" value="Full Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"><br>
                        <input type="text" class="textbox" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                    </form>
                </div>
                <div class="btn">
                    <input type="submit" value="Send">
                    <input type="button" value="Clear">
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    @endsection