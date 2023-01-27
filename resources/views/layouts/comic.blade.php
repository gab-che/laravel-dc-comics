@include('partials.header')

<div class="divider py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="comic_img">
                    <img src="@yield('comic_img')" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <div class="row py-4">
                <div class="col-8 py-3">
                    <div class="comic_desc">
                        <h4>@yield('comic_title')</h4>

                        <div class="green_banner">
                            <div class="row">
                                <div class="col-8">
                                    <div class="price">
                                        U.S. Price:
                                        <span>@yield('comic_price')</span>
                                    </div>
                                </div>
                                <div class="col-4"><button>Check Availability</button></div>
                            </div>
                        </div>

                        <p class="py-4">@yield('comic_description')</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="buttons d-flex justify-content-around py-4">
                        <a href="@yield('edit_link')" class="btn btn-outline-primary">Edit</a>
                        <a href="#" class="btn btn-outline-danger">Delete</a>
                    </div>
                    <div class="ad">
                        <div class="ad_title">advertisement</div>
                        <div class="ad_img">
                            <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')