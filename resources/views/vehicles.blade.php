@include('includes.header')
<section class="vehicles" id="vehicles">
   
    <h1 class="heading mt-3"> AVAILABLE <span>VEHICLES</span> </h1>
    <div class="row my-3">
    <div class="container">
        <form action="" class="search-form">
        <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg"  placeholder="Search your favourite vehicle here...">
            <button type="submit" class="input-group-text btn-success"><i class="bi bi-search me-2"></i> Search</button>
        </div>
        </form>
    </div>
    </div>
    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-1.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-2.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-3.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-4.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-5.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-6.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> $62,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>
@include('includes.footer')
