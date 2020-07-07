@extends('website.layouts.master')


@section('content')

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Blog</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Blog Post Content -->
<section class="blog_post_container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="main_blog_post_content">
                    @if ($post<>'')
                    <div class="mbp_thumb_post">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ url('/storage/'.$post->immagine) }}" alt="{{$post->immagine}}">
                            <div class="tag">{{$post->category->titolo}}</div>
                            <div class="post_date"><h2></h2> <span>{{$post->created_at->format('d/m/Y')}}</span></div>
                        </div>
                        <div class="details">
                            <h3>{{$post->titolo}}</h3>
                            <ul class="post_meta">
                                <li><a href="#"><span class="flaticon-profile"></span></a></li>
                                <li><a href="#"><span>{{$post->user->name}}</span></a></li>
                                <li><a href="#"><span class="flaticon-comment"></span></a></li>
                                <li><a href="#"><span>7 comments</span></a></li>
                            </ul>
                            <h4>Descrizione</h4>
                            <p>{!! $post->descrizione !!}</p>
                            <h4 class="mb0">Content</h4>
                            <p class="mb25">    {!! $post->testo !!}
                            </p>
                        </div>
                        <ul class="blog_post_share">
                            <li><p>Share</p></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>

                    <div class="mbp_pagination_tab">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="pag_prev">
                                    <a href="#"><span class="flaticon-left-arrow"></span>Previous Post</a> <br> <p>The bedding was hardly able</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="pag_next text-right">
                                    <a href="#">Next Post <span class="flaticon-right-arrow-1"></span></a> <br> <p>11 Tips to Help You Get New</p>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li class="list-inline-item float-left"></li>
                            <li class="list-inline-item float-right"></li>
                        </ul>
                    </div>

                    {{-- <div class="product_single_content style2 mb30">
                        <h4 class="aii_title">Reviews</h4>
                        <div class="mbp_pagination_comments">
                            <div class="mbp_first media">
                                <img src="images/resource/review1.png" class="mr-3" alt="review1.png">
                                <div class="media-body">
                                    <h4 class="sub_title mt-0">Warren Bethell
                                        <span class="sspd_review float-right">
                                            <ul>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"></li>
                                            </ul>
                                        </span>
                                    </h4>
                                    <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                    <p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
                                    <p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p> <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
                                    <div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
                                    <div class="custom_hr style2"></div>
                                    <div class="mbp_sub media">
                                        <a href="#"><img src="images/resource/review1.png" class="mr-3" alt="review1.png"></a>
                                        <div class="media-body">
                                            <h4 class="sub_title mt-0">Anton Hilton
                                                <span class="sspd_review float-right">
                                                    <ul>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"></li>
                                                    </ul>
                                                </span>
                                            </h4>
                                            <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                            <p class="fz15 mt20 mb50">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the</p>
                                            <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
                                            <div class="sspd_review_liked">
                                                <a href="#"><i class="flaticon-like-1"></i><span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom_hr"></div>
                            <div class="mbp_second media">
                                <img src="images/resource/review1.png" class="align-self-start mr-3" alt="review1.png">
                                <div class="media-body">
                                    <h4 class="sub_title mt-0">Warren Bethell
                                        <span class="sspd_review float-right">
                                            <ul>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"></li>
                                            </ul>
                                        </span>
                                    </h4>
                                    <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                    <p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
                                    <p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p> <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
                                    <div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
                                </div>
                            </div>
                            <div class="custom_hr style3"></div>
                            <div class="text-center mt50 mb30">
                                <button type="button" class="more-review-btn btn">See more reviews</button>
                            </div>
                        </div>
                    </div>
                    <div class="product_single_content style2">
                        <div class="mbp_comment_form style2">
                            <h4>Add Reviews & Rate</h4>
                            <ul>
                                <li class="list-inline-item pr15"><p>What is it like to Course?</p></li>
                                <li class="list-inline-item">
                                    <span class="sspd_review">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                            <li class="list-inline-item"></li>
                                        </ul>
                                    </span>
                                </li>
                            </ul>
                            <form class="comments_form">
                                <div class="form-group">
                                    <label for="exampleInputName1">Review Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Review Content</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
                            </form>
                        </div>
                    </div> --}}
                    @else
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mbp_pagination mt20">
                                <h2>Non ci sono articoli!</h2>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
          @include('website.blog.sidebar')
        </div>
    </div>
</section>

@endsection

@push('script')

@endpush
