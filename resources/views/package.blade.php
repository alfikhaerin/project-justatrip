@extends('layouts.main')

@section('container')

<!-- Services -->
<div id="services" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Find Your Travel Package <br> in Labuhan Bajo</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <a href="index.blade.php"> <img class="img-fluid" src="images/star-from-sailingkomodo.png" alt="alternative"></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <a href=""> <img class="img-fluid" src="images/star-from-roadtrpsumba.png" alt="alternative"></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <a href=""><img class="img-fluid" src="images/star-from-overlandflores.png" alt="alternative"></a>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of services -->

@endsection