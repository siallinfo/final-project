@extends('website.master')

@section('body')

    <!-- breadcrumb__start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__title">
                        <h1>Contact</h1>
                        <ul>
                            <li>
                                <a href="{{route('website.home')}}">Home</a>
                            </li>
                            <li class="color__blue">
                                Contact
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb__end -->

    <!-- contact__section__start -->
    <div class="contactarea sp_top_80 sp_bottom_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="contactarea__single">
                        <h3>Email Address</h3>
                        <p>info@grahokshop.com<br>service@grahokshop.com</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="contactarea__single">
                        <h3>Phone Number</h3>
                        <p>+880-1516-111989 <br>+880-01762-620579</p>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="contactarea__single">
                        <h3>Office Address </h3>
                        <p>5/13, United Arbour, Block-C,<br>Lalmatia, Dhaka-1207, BD.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- contact__section__end -->

    <!-- contactarea__form__area start -->
    <div class="contactarea__form sp_bottom_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contactarea__form__area">
                        <h4 class="contactarea__form__title">Send Message</h4>
                        <form id="contact-form" class="contact-form" action="https://minimalin-html.netlify.app/minimalin/mail.php" method="post">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="contactarea__form__input">
                                        <input type="text" placeholder="Enter your name" class="" name="con_name" id="con_name" >

                                    </div>

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="contactarea__form__input">
                                        <input type="text" placeholder="Enter email address" class="" name="con_email" id="con_email">

                                    </div>

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="contactarea__form__input">
                                        <input type="text" placeholder="Enter phone number" class="" name="con_phone" id="con_phone">

                                    </div>

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="contactarea__form__input">
                                        <input type="text" placeholder="Enter subject" class="" name="con_subject" id="con_subject">

                                    </div>

                                </div>

                                <div class="col-xl-12">
                                    <div class="contactarea__form__input">
                                        <textarea placeholder="Enter message" class="custom-textarea" name="con_message" id="con_message"></textarea>

                                    </div>

                                </div>

                                <div class="col-xl-12">
                                    <div class="contactarea__form__button">
                                        <button type="submit" value="submit" class="default__button" name="submit">Submit</button>
                                        <p class="form-messege"></p>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- contactarea__form__area end -->

    <!-- contact__map__start -->
    <div class="contact__map sp_bottom_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__map__inner">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29210.20802773719!2d90.43968000000001!3d23.773183999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1723315989605!5m2!1sen!2sbd" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact__map__end -->

@endsection
