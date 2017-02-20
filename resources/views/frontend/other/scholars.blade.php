@extends('layouts.master')
@section('title')
    Welcome to Scholars Platform
@endsection
@section('content')
    </div>
    <div class="container">
        <div class="content">
            <div class="contact-section">
                <h3 class="c-head">contact-us</h3>
                <div class="singel_right">
                    <div class="lcontact span_1_of_contact">
                        <div class="contact-form">
                            <form method="post" action="#">
                                <p class="comment-form-author"><label for="author">Your Name:</label>
                                    <input type="text" class="textbox" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
                                </p>
                                <p class="comment-form-author"><label for="author">Email:</label>
                                    <input type="text" class="textbox" value="Enter your email here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                                </p>
                                <p class="comment-form-author"><label for="author">Message:</label>
                                    <textarea value="Enter your message here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
                                </p>
                                <input name="submit" type="submit" id="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                    <div class="contact_grid span_2_of_contact_right">
                        <h3>Address</h3>
                        <div class="address">
                            <i class="pin_icon"></i>
                            <div class="contact_address">
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="address">
                            <i class="phone"></i>
                            <div class="contact_address">
                                1-25-2568-897
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="address">
                            <i class="mail"></i>
                            <div class="contact_email">
                                <a href="mailto:example@gmail.com">info(at)company.com</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>
@endsection