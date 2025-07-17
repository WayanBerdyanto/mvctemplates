<div class="container-fluid px-0">
    <div class="hero-section text-white py-5">
        <div class="container">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold mb-4 text-dark">Welcome to Our Platform</h1>
                    <p class="lead fs-4 mb-4 text-dark">Discover amazing features and possibilities with our innovative solutions</p>
                    <div class="d-flex gap-3 text-dark">
                        <a class="btn btn-primary btn-lg px-4" href="#" role="button">Get Started</a>
                        <a class="btn btn-outline-dark btn-lg px-4" href="#" role="button">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                    <img src="https://img.freepik.com/free-vector/flat-creativity-concept-illustration_52683-64279.jpg" alt="Hero Image" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hero-section {
    position: relative;
    overflow: hidden;
}

.min-vh-75 {
    min-height: 75vh;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.1)" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.1;
    pointer-events: none;
}
</style>