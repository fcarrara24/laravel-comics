<div class=" main-bg position-relative ">

    <div class="container pt-5 position-relative ">
        <div class="my-series bg-primary text-white px-5 py-1">
            <h3>CURRENT SERIES</h1>
        </div>
        <div class="row  d-flex ">
            @foreach ($database['comics'] as $comic)
                <div class="d-flex flex-column w-25">
                    <div class="img-container " style="max-width: 100%; ">
                        <img src="{{ $comic['thumb'] }}" alt="$comic['title']" srcset=""
                            style="max-width: 100%; width: 100%; ">
                    </div>
                    <div class=" text-white">{{ $comic['title'] }}</div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="d-flex flex-row justify-content-center py-3">
        <div class="  bg-primary text-white px-5 py-1"> LOAD MORE </div>
    </div>

</div>
