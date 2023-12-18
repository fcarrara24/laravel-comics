<div class=" main-bg position-relative ">

    <div class="container pt-5">
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
</div>
