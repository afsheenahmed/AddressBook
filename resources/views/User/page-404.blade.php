@extends('User.layout')
@section('content')
    <main class="main page-404">
        <div class="container">
            <div class="row align-items-center height-100vh text-center">
                <div class="col-lg-8 m-auto">
                    <p class="mb-50"><img src="assets/imgs/theme/404.png" alt="" class="hover-up"></p>
                    <h2 class="mb-30">Page Not Found</h2>
                    <p class="font-lg text-grey-700 mb-30">
                        The link you clicked may be broken or the page may have been removed.<br> visit the <a href="/"> <span> Homepage</span></a> or <a href="/contact"><span>Contact us</span></a> about the problem
                    </p>
                    <form class="contact-form-style text-center" id="contact-form" action="#" method="post">
                       
                        <a class="btn btn-default submit-auto-width font-xs hover-up" href="/">Back To Home Page</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @endsection