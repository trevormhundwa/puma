@extends('layouts.main')

@section('banner-header')
    <h1 class="sec-heading">Get more <strong style="font-weight: 700;color: #379dd3;">leads </strong>for your business from our <strong style="font-weight: 700;color: #379dd3;">business </strong>package</h1>
@endsection

@section('content')

    <!--Project Page Section-->

    <section class="project-page-section">

        <div class="auto-container">


            <!--MixitUp Galery-->

            <div class="mixitup-gallery">
                <div class="row">

                    <div class="col-md-8">

                        <div class="text-center">
                            {{$products->links()}}
                        </div>
                        <div class="filter-list row clearfix">

                            @foreach($products as $product)

                        <!--Default Portfolio Item-->

                        <div class="default-portfolio-item mix all chemical col-md-4 col-sm-6 col-xs-12">

                            <div class="inner-box">

                                <figure class="image-box"><img src="{{asset('front-end/images/products')}}/{{$product->pic}}.jpg" alt=""></figure>

                                <!--Overlay Box-->

                                <div class="overlay-box">

                                    <div class="overlay-inner">

                                        <div class="content">

                                            <h3><a href="{{route('pages.productDetails',$product->id)}}">{{$product->name}}</a></h3>

                                            <div class="tags">{{$product->category->name}}</div>

                                            @if ($product->stock == 1)
                                                <div class="tags" style="color:green;     background: white;
    padding: 10px;">in stock</div>
                                            @else
                                                <div class="tags" style="color:red;     background: white;
    padding: 10px;">out of stock</div>
                                            @endif


                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                                @endforeach
                    </div>
                        <div class="text-center">
                            {{$products->links()}}
                        </div>



                    </div>

                    <!--Sidebar Side-->

                    <div class="sidebar-side col-lg-3 col-md-8 col-sm-12 col-xs-12">

                        <aside class="sidebar">

                            <!--Blog Category Widget-->

                            <div class="sidebar-widget sidebar-blog-category">

                                <div class="sidebar-title">

                                    <h2>Categories</h2>

                                    <div class="separater"></div>

                                </div>

                                <ul class="cat-list">

                                    <li class="clearfix" data-role="button" data-filter="all"><a href="/products">VIEW ALL</a></li>

                                    @foreach($categories as $category)
                                        <li class="filter" data-role="button" data-filter=".agriculture"><a href="{{route('pages.productSearch',$category->id)}}">{{$category->name}} <span>{{ $category->products->count() }}</span></a></li>
                                    @endforeach

                                </ul>

                            </div>



                        </aside>

                    </div>
                </div>





            </div>

        </div>

    </section>

    <!--End Project Page Section-->



@endsection