<div class="container-fluid banner">

    <div
        id="carousel"
        class="carousel carousel-dark d-flex justify-content-center"
        data-bs-ride="carousel"
    >
        <div class="container slide slide-heading">
            <div class="row d-flex ">
                <div class="col-6 heading">
                    <h2>INSTITUTO <br/>
                        PEQUENOS ANJOS</h2>
                    <h4>Cuidando de Crianças com Amor</h4>
                    <p>Instituição não Governamental, criada a partir da iniciativa
                    Social em prol da solidariedade.</p>
                    <button class="btn btn-lg btn-blue">Saiba +</button>
                </div>
                <div class="col-6 d-flex flex-column align-items-end justify-content-between icons-social">
                    <a href="#" title=""><i class="bi bi-facebook"></i></a>
                    <a href="#" title=""><i class="bi bi-instagram"></i></a>
                    <a href="#" title=""><i class="bi bi-youtube"></i></a>
                    <a href="#" title=""><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000" >
            <img src="{{asset('assets/images/slider/slide1.jpg') }}" class="d-block w-100" alt="{{ config('app.name', 'Laravel') }}">
          </div>
          <div class="carousel-item"data-bs-interval="2000" style="background: ">
            <img src="{{asset('assets/images/slider/slide-2.png') }}" class="d-block w-100" alt="{{ config('app.name', 'Laravel') }}">
          </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</div>
