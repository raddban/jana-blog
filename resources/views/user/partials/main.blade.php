@extends('user.layouts.master')

@section('title')
    Home Page
@endsection

@section('content')

    <!-- ##### Instagram Area Start ##### -->
    <div class="instagram-feed-area d-flex flex-wrap">
        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta1.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta1.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta2.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta2.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta3.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta3.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta4.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta4.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta5.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta5.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta6.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta6.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta7.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta7.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta8.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta8.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta9.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta9.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>

        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src={{ URL::to('user/img/bg-img/insta10.jpg')}} alt="">
            <!-- Image Zoom -->
            <a href={{ URL::to('user/img/bg-img/insta10.jpg')}} class="img-zoom" title="Instagram Image">+</a>
        </div>
    </div>
    <!-- ##### Instagram Area End ##### -->

@endsection
