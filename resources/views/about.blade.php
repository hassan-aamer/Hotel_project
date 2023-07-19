@extends('app')
@section('title')
HOTEL X
@endsection
@section('body')
<section class="imag">
    <a href="#">
        <img src="images/about.jpg" alt="" style="width: 100%; height: 70vh;">
    </a>
</section>
<section>
    <center class="abouth1">
        <h1>
            ABOUT
        </h1>
    </center>
</section>

<section >
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
        <div class="card">
            <img src="images/room.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">hotel rooms</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card">
            <img src="images/restaurant.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Hotel restaurant</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card">
            <img src="images/cofe.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Hotel cafe</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card">
            <img src="images/cinma.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Hotel cinema</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="ff">
    <center>
        <div class="containery">
            <div class="card text-center" style="width: 80%">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eEY50BOF0wM" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hotel video</h5>
                </div>
            </div>
        </div>
    </center>
</section>




@endsection
