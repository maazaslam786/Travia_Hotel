

<div id="myCarousel" class="carousel slide banner" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/banner1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Elegance</h5>
                <p>Discover luxury and comfort at our exquisite hotel. Indulge in world-class amenities, breathtaking views, and personalized service</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/banner2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Luxury</h5>
                <p>Unwind in elegant accommodations and savor culinary delights crafted by our renowned chefs, ensuring an unforgettable stay.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/banner3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Tranquility</h5>
                <p>Escape to tranquility at our serene oasis. Immerse yourself in the beauty of nature and experience ultimate relaxation</p>
            </div>
        </div>
        <div class="carousel-item"> <!-- New slide -->
            <img class="d-block w-100" src="images/banner4.jpg" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Serene Escapes</h5>
                <p>Embark on a journey of serenity and tranquility with our exclusive offers. Immerse yourself in the calming ambiance of our luxurious accommodations, surrounded by breathtaking natural landscapes. Experience ultimate relaxation and rejuvenation at our haven of peace and serenity</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<style>
    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        color: #fff;
        border-radius: 5px;
    }

    .carousel-caption h5 {
        font-size: 24px;
    }

    .carousel-caption p {
        font-size: 18px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
    }

    .carousel-control-prev-icon:before,
    .carousel-control-next-icon:before {
        color: #fff;
    }
</style>