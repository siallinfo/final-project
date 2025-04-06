@extends('website.master')

@section('body')

    <!-- login__section__start -->
    <div class="loginarea  sp_bottom_80 sp_top_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-md-2 loginarea__col">
                    <ul class="nav  tab__button__wrap text-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Sing up</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content tab__content__wrapper" id="myTabContent">

                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                        <div class="col-xl-8 offset-md-2 loginarea__col">
                            <div class="loginarea__wraper">
                                <div class="loginarea__heading">
                                    <h5 class="text-danger text-center">{{session('message')}}</h5>
                                </div>

                                <form action="{{route('customer.login')}}" method="POST">
                                    @csrf
                                    <div class="loginarea__form">
                                        <label class="form__label">Username or email</label>
                                        <input class="common__login__input" type="email" name="email" placeholder="Your username or email" required>

                                    </div>
                                    <div class="loginarea__form">
                                        <label class="form__label">Password</label>
                                        <input class="common__login__input" type="password" name="password" placeholder="Password" required>

                                    </div>
                                    <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input type="checkbox" id="login__privacy">
                                            <label for="login__privacy">Remember Me</label>
                                        </div>
                                        <p class="login__description">Don't have an account yet? <a href="{{route('customer.register')}}" data-bs-toggle="modal" data-bs-target="#registerModal">Sign up for free</a></p>

                                        <div class="text-end login__form__link">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="loginarea__button text-center">
                                        <button type="submit" class="default__button w-100">Log In</button>
                                    </div>
                                </form>

                                <div class="loginarea__social__option">

                                    <ul class="loginarea__social__btn">
                                        <li><a class="default__button" href="#"><i class="fab fa-facebook-f"></i> facebook</a></li>
                                        <li><a class="default__button" href="#"><i class="fab fa-google"></i> Google</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                        <div class="col-xl-8 offset-md-2 loginarea__col">
                            <div class="loginarea__wraper">
                                <div class="loginarea__heading">
                                </div>

                                <form action="{{route('customer.register')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="loginarea__form">
                                                <label class="form__label">Full Name</label>
                                                <input class="common__login__input" type="text" name="name" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="loginarea__form">
                                                <label class="form__label">Email</label>
                                                <input class="common__login__input" type="email" name="email" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="loginarea__form">
                                                <label class="form__label">Mobile Number</label>
                                                <input class="common__login__input" type="number" name="mobile" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="loginarea__form">
                                                <label class="form__label">Password</label>
                                                <input class="common__login__input" type="password" name="password" placeholder="Password">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input type="checkbox" id="regi__privacy">
                                            <label for="regi__privacy">Accept the Terms and Privacy Policy</label>
                                        </div>
                                        <p class="login__description">Already have an account? <a href="{{route('customer.login')}}" data-bs-toggle="modal" data-bs-target="#registerModal">Log In</a></p>

                                    </div>
                                    <div class="login__button">
                                        <button type="submit" class="default__button text-center w-100">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
