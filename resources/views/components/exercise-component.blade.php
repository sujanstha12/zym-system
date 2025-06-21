@props(['exercises' => []])


<div class=" px-5 py-5">
    <div class="row g-4">
        <!-- Card 1 -->
        @foreach ($exercises as $exercise )


        <div class="col-md-6 col-lg-3">
            <div class="card1 zoom-card1">
              <a href="{{ route('ourclassDetail',$exercise->ourclass_id) }}">
                <img src="{{ $exercise->image }}" class="card-img-top"
                    alt="..."></a>
                <div class="card-body p-3 text-center">
                    <h5 class="card-title">{{ $exercise->title }}</h5>
                    <p class="card-text">{{ $exercise->sets }}, {{ $exercise->time }}</p>
                </div>
            </div>
        </div>
        @endforeach
        {{-- <!-- Card 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="card1 zoom-card1">
                <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/class/f2.jpg" class="card-img-top" alt="...">
                <div class="card-body p-3 text-center">
                    <h5 class="card-title">Weight lifting</h5>
                    <p class="card-text">4 SETS, 3 MINUTES</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="card1 zoom-card1">
                <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/class/f3.jpg" class="card-img-top" alt="...">
                <div class="card-body p-3 text-center">
                    <h5 class="card-title">Abs fitness</h5>
                    <p class="card-text">2 SETS, 3 MINUTES</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="card1 zoom-card1">
                <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/class/f4.jpg" class="card-img-top" alt="...">
                <div class="card-body p-3 text-center">
                    <h5 class="card-title">Ropes lifting</h5>
                    <p class="card-text">5 SETS, 3 MINUTES</p>
                </div>
            </div>
        </div> --}}
    </div>

</div>
