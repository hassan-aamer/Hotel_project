    @extends('app')
    @section('title')
    HOTEL X
    @endsection
    @section('body')
    <header>
        <!-- start navigation -->

        <!-- start showcase section -->
        <div id="showcase">
            <div class="container">
                <div class="showcase-content">
                    <h1><span class="text-primary">Enjoy</span> Your Stay</h1>
                    <p class="lead">
                        A luxurious hotel, enjoy with us all the advantages and the best stay
                    </p>
                    <a class="btn" href="/about">About Our Hotel</a>
                </div>
            </div>
        </div>
    </header>

    <section id="home-info" class="bg-dark">
        <div class="info-img"></div>

        <div class="info-content">
            <h1><span class="text-primary">The History</span> Of Our Hotel</h1>
            <p>
                Lorem ipsum, dolor sit amet quieveniet unde animi praesentium vel autem? Obcaecati! Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur modi odio error qui praesentium consequuntur nobis quasi tempore! At, ipsum maiores. Tenetur, exercitationem tempora quia quibusdam provident doloribus rerum repudiandae.
            </p>
            <a href="#" class="btn btn-light">Read More</a>
        </div>
    </section>

    <!-- star features section -->
    <section id="features">
        <div class="box bg-light">
            <i class="fas fa-hotel fa-3x "></i>
            <h3>Great Location</h3>
            <P>Lorem ipsum doeccing elit. Repudiandae laudantium harum nesciunt sunt porro v</P>
        </div>
        <div class="box bg-primary">
            <i class="fa fa-key fa-3x"></i>
            <h3>Free Meals</h3>
            <P>Lorem ipsum doeccing elit. Repudiandae laudantium harum nesciunt sunt porro v</P>
        </div>
        <div class="box bg-light">
            <i class="fa fa-user fa-3x"></i>
            <h3>Fitness Room</h3>
            <P>Lorem ipsum doeccing elit. Repudiandae laudantium harum nesciunt sunt porro v</P>
        </div>
    </section>

    <div class="clr"></div>
    @endsection
