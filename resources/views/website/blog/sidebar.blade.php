<div class="col-lg-4 col-xl-3 pl10 pr10">
    <div class="main_blog_post_widget_list">
        <div class="blog_search_widget">
            <form action="{{route('find.blog')}}" method="post">
                @csrf
            <div class="input-group mb-3">


                    <input type="text" class="form-control" name="valore" placeholder="Cerca qui" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-magnifying-glass"></span></button>
                    </div>
            </div>
        </form>

        </div>
        <div class="blog_category_widget">
            <ul class="list-group">
                <h4 class="title">Categorie</h4>
                @foreach ($postcategories as $postcategory)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('categoria.blog',$postcategory->titolo)}}"> {{ucfirst($postcategory->titolo)}} </a><span class="float-right">6</span>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="blog_recent_post_widget media_widget">
            <h4 class="title">Articoli recenti</h4>
            <div class="media">
                <img class="align-self-start mr-3" src="images/blog/s1.jpg" alt="s1.jpg">
                <div class="media-body">
                    <h5 class="mt-0 post_title">Half of What We Know About Coffee</h5>
                    <a href="#">October 25, 2019.</a>
                </div>
            </div>
            <div class="media">
                <img class="align-self-start mr-3" src="images/blog/s2.jpg" alt="s2.jpg">
                <div class="media-body">
                    <h5 class="mt-0 post_title">The Best Places to Start Your Travel</h5>
                    <a href="#">October 25, 2019.</a>
                </div>
            </div>
            <div class="media">
                <img class="align-self-start mr-3" src="images/blog/s3.jpg" alt="s3.jpg">
                <div class="media-body">
                    <h5 class="mt-0 post_title">The Top 25 London</h5>
                    <a href="#">October 25, 2019.</a>
                </div>
            </div>
        </div>
        <div class="blog_tag_widget">
            <h4 class="title">Tags</h4>
            <ul class="tag_list">
                <li class="list-inline-item"><a href="#">Photoshop</a></li>
                <li class="list-inline-item"><a href="#">Sketch</a></li>
                <li class="list-inline-item"><a href="#">Beginner</a></li>
                <li class="list-inline-item"><a href="#">UX/UI</a></li>
            </ul>
        </div>
    </div>
</div>
