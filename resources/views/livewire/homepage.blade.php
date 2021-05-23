{{-- <div class="sort-item orderby ">
    <select name="orderby" class="use-chosen" wire:model="sorting">
        <option value="default" selected="selected">Default sorting</option>

        <option value="date">Sort by newness</option>
        <option value="price">Sort by price: low to high</option>
        <option value="price-desc">Sort by price: high to low</option>
    </select>
</div>
<div class="sort-item product-per-page">
    <select name="post-per-page" class="use-chosen" wire:model="pageSize">
        <option value="12" selected="selected">12 per page</option>
        <option value="16">16 per page</option>
        <option value="18">18 per page</option>
        <option value="21">21 per page</option>
        <option value="24">24 per page</option>
        <option value="30">30 per page</option>
        <option value="32">32 per page</option>
    </select>
</div>
<div class="row">

    <ul class="product-list grid-products equal-container">
        @foreach ($res as $re)
            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                <div class="product product-style-3 equal-elem ">
                    <div class="product-thumnail">
                        {{-- <a href="{{ route('product.details', ['slug' => $re->slug]) }}"
                            title="{{ $re->name }}"> --}}
{{-- <figure><img src="{{ asset('assets/images/products') }}/{{ $re->image }}" alt="{{ $re->name }}"></figure>
</a>
</div>
<div class="product-info">
    <a href="#" class="product-name"><span>{{ $re->name }}</span></a>
    <div class="wrap-price"><span class="product-price">{{ $re->price }}</span></div>
    @if ($re->category)
        <div>{{ $re->category->name }}</div>
    @endif

    <div>{{ $re->details }}</div>
    <div>{{ $re->occ }}</div>
    <div>{{ $re->location }}</div>

</div>
</div>
</li>
@endforeach
</ul>
</div> --}}
<div>



    <div class="container my-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://placeimg.com/1080/500/animals">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>My Caption Title (1st Image)</h5>
                        <p>The whole caption will only show up if the screen is at least medium size.</p>
                    </div>
                </div>
                @foreach ($res as $re)
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('assets/images/products') }}/{{ $re->image }}"
                            alt="Second slide">
                    </div>
                @endforeach


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="exceptional">
            <h1 style="font-size: 40px"> <span style="color: 		#CD853F">554 </span> Exceptional Rental Houses</h1>
            <div><select class="custom-select" style="width: 300px" wire:model="sorting">
                    <option selected>Sort the houses</option>

                    <option value="date">newness</option>
                    <option value="price">Lowest to Highest</option>
                    <option value="price-desc">Highest to</option>
                </select></div>
            <div>
                <select class="custom-select" style="width: 300px" wire:model="pageSize">
                    <option value="2" selected="selected">2 per page</option>
                    <option value="16">16 per page</option>
                    <option value="18">18 per page</option>
                    <option value="21">21 per page</option>
                    <option value="24">24 per page</option>
                    <option value="30">30 per page</option>
                    <option value="32">32 per page</option>
                </select>
            </div>
        </div>
        <div class="carrier">
            <div class="sidebar">

            </div>
            <div class="cards">
                <div class="featured-rooms-center">
                    @foreach ($res as $re)
                        <article class="room">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/products') }}/{{ $re->image }}"
                                    alt="{{ $re->name }}" style="height: 200px; width:100%; object-fit:cover; " />
                                <div class="price-top">
                                    <h6>ksh {{ $re->price }}</h6>
                                    <p>per month</p>
                                </div>
                                <a href="{{ route('residence.details', ['id' => $re->id]) }}"
                                    class="btn-primary room-link">
                                    features
                                </a>
                            </div>
                            <p class="room-info">{{ $re->name }}</p>
                        </article>
                    @endforeach


                </div>
            </div>
        </div>
        {{-- =======end of card======= --}}
    </div>
</div>
