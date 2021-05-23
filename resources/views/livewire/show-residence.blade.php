<div>
    <div style="height: 80vh;marin-bottom:100px;">
        <img src="{{ asset('assets/images/products') }}/{{ $res->image }}" alt="{{ $res->name }}"
            style="height: 500px;width:100vw;object-fit:cover; position:absolute; display:inline-block;">
        <div
            style="position: relative; top:200px; margin:auto; padding:20px; text-align:center; background:	rgb(105,105,105);opacity: 0.7; width:400px;height:auto; ">
            <h2 style="color: white">{{ $res->name }}</h2>
            <h2 style="color: white">{{ $res->name }}</h2>
            <h2 style="color: white">{{ $res->name }}</h2>
        </div>
    </div>
    <div style="display: flex; width:90vw; margin :auto;">
        <div style="width: 45vw;">
            <img src="{{ asset('assets/images/products') }}/{{ $res->image }}" alt="{{ $res->name }}"
                style="height: 200px; width:200px;" />
            <h1>{{ $res->details }}</h1>

        </div>
        <div style="width: 45vw;">
            <h1>{{ $res->details }}</h1>
            <h1>{{ $res->details }}</h1>
            <h1>{{ $res->details }}</h1>
            <h1>{{ $res->details }}</h1>
            <h1>{{ $res->details }}</h1>
            <h1>{{ $res->details }}</h1>
            <h1>{{ $res->details }}</h1>
            <h1>{{ $res->user->tel }}</h1>
        </div>
    </div>
    <div class="featured-rooms-center">
        @foreach ($related as $re)
            <article class="room">
                <div class="img-container">
                    <img src="{{ asset('assets/images/products') }}/{{ $re->image }}" alt="{{ $re->name }}"
                        style="height: 200px; width:100%; object-fit:cover; " />
                    <div class="price-top">
                        <h6>ksh {{ $re->price }}</h6>
                        <p>per month</p>
                    </div>
                    <a href="{{ route('residence.details', ['id' => $re->id]) }}" class="btn-primary room-link">
                        features
                    </a>
                </div>
                <p class="room-info">{{ $re->name }}</p>


            </article>
        @endforeach


    </div>
</div>
