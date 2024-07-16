<div class="container-fluid banner">

    <div
        id="carousel"
        class="carousel carousel-dark d-flex justify-content-center"
        data-bs-ride="carousel"
    >
    <div class="container slide slide-heading">
        <div class="row d-flex ">
            <div class="col-xs-12 col-md-12 col-lg-6 heading">
                <h2>AJUDE A MANTER  <br />
                NOSSOS PEQUENOS ANJOS</h2>
                <h4 class="my-5">SEJA UM DOADOR</h4>
                <a href="#oinstituto" class="btn btn-lg btn-blue">SER UM DOADOR</a>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-6 d-flex flex-lg-column flex-md-row align-items-end justify-content-lg-between justify-content-md-center icons-social">
                <a href="https://www.facebook.com/InstitutoPequenosAnjos/" title="" target="_blank"><i class="bi bi-facebook  me-3"></i></a>
                <a href="https://www.instagram.com/doacaoinstitutopequenosanjos/" title="" target="_blank"><i class="bi bi-instagram me-3"></i></a>
                <a href="https://www.youtube.com/channel/UCp1Val8w-T01s4YRGIcfP6w" title="" target="_blank"><i class="bi bi-youtube me-3"></i></a>
                <a href="https://api.whatsapp.com/send?phone=5511996490545" title="" target="_blank"><i class="bi bi-whatsapp me-3"></i></a>
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
