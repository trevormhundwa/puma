@extends('layouts.main')

@section('banner-header')
    <h1 class="sec-heading">Get more <strong style="font-weight: 700;color: #379dd3;">leads </strong>for your business from our <strong style="font-weight: 700;color: #379dd3;">business </strong>package</h1>
@endsection

@section('content')
    <!--Project Single Section-->

    <section class="project-single-section">
        <div class="auto-container">
            <div class="upper-box">

        <div class="row clearfix">



            <!--Image Column-->

            <div class="image-column col-md-4 col-sm-12 col-xs-12">

                <div class="image">

                    <img src="{{asset('front-end/images/products')}}/{{$product->pic}}.jpg" alt="" />

                </div>

            </div>
            <!--List Column-->

            <div class="list-column col-md-8 col-sm-12 col-xs-12">
                <div class="sec-title">
                    <h2>{{$product->name}}</h2>
                </div>
                <div class="text">
                    <p>
                        {{$product->desc}}

                    </p>
                </div>
                <div class="sec-title">
                    <h2>Product Specs</h2>
                    <ul class="list-group">
                        @foreach($specs as $spec)
                            <li class="list-group-item">{{$spec->name}}</li>
                        @endforeach
                    </ul>
                </div>

            </div>



        </div>

    </div>
        </div>
    </section>
@endsection