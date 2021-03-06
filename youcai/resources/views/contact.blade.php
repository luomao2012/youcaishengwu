@extends('layouts.app')

@section('title', '关于我们')

@section('container')
    <div class="contact">
        <div class="container">
            <h2>联系我们</h2>
            <div class="mail-grids wthree-22">
                <div class="col-md-6 mail-grid-left">
                    <div class="mail-grid-left1">
                        <form action="#" method="post">
                            <input type="text" name="name" value="Name" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Name';}" required="">
                            <input type="email" name="emil" value="Email" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            <input type="text" name="subject" value="Subject" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Subject';}" required="">
                            <textarea type="text" name="message" onfocus="this.value = '';"
                                      onblur="if (this.value == '') {this.value = 'Message...';}"
                                      required="">Message...</textarea>
                            <input type="submit" disabled="disabled" value="Submit Now">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 mail-grid-right">
                    <div class="mail-grid-right1 agile-22">
                        <ul>
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i></li>
                            <li>{{ $contractAddress ?? '' }}</li>
                        </ul>
                        <ul>
                            <li><i class="glyphicon glyphicon-send" aria-hidden="true"></i></li>
                            <li><a href="mailto:{{ $contractEmail ?? '' }}">{{ $contractEmail ?? '' }}</a></li>
                        </ul>
                        <ul>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></li>
                            <li>{{ $contractPhone ?? '' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424400.7172141652!2d150.64224783165366!3d-33.79603613720226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1464605733276" width="0" height="0" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
        </div>
    </div>
@endsection