@extends('layouts.user2')

@section('content')
    <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Ruang ZIS</h1>
                            <h4 class="text-white mb-4 animated zoomIn">(Zakat,Infaq,Sedekah)</h4>
                            <p class="text-white pb-3 animated zoomIn">Berimanlah kamu kepada Allah dan Rasul-Nya dan nafkahkanlah sebagian dari hartamu yang Allah telah menjadikan kamu menguasainya. Maka orang-orang yang beriman di antara kamu dan menafkahkan (sebagian) dari hartanya memperoleh pahala yang besar. (QS. Al Hadid ayat 7)</p>
                          </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="aset/img/donasi3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Ruang ZIS</h6>
                            <h2 class="mt-2">Solusi untuk anda yang tidak mau ribet untuk menyalurkan ZIS</h2>
                        </div>
                        <p class="mb-4">Web ini menyediakan fitur donasi zakat,infaq dan sedekah untuk anda yang tidak mau ribet untuk memberikan zakat, infaq dan sedekah. <br> 
                        Web ini bertujuan untuk menyalurkan donasi anda kepada orang-orang yang tepat unutuk menerimanya.</p>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="aset/img/about.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Penyaluran</h6>
                    <h2 class="mt-2">Penyaluran Zakat, Infaq, Sedekah.</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                               <img src="aset/img/zakat.png" alt="" style="width: 200px; height: 200px;" class="rounded-circle">
                            </div>
                            <h5 class="mb-3 ">Penyaluran Zakat</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                            <img src="aset/img/sedeqah.jpeg" alt="" style="width: 200px; height: 200px;" class="rounded-circle">
                            </div>
                            <h5 class="mb-3">Penyaluran sedekah</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                            <img src="aset/img/infaq.jpg" alt="" style="width: 200px; height: 200px;" class="rounded-circle">
                            </div>
                            <h5 class="mb-3">Penyaluran Infaq</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
       
        <!-- Portfolio End -->


        <!-- Testimonial Start -->
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4" style="height: 330px;">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p> "Terkadang kita sebagai manusia lupa akan kewajibannya untuk berbagi kepada sesama. Padahal, berbagi apapun akan mendekatkan jiwa kita kepada Tuhan dan sesama manusia."</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4" style="height: 330px;">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>"Berbagi bukan melulu soal harta pribadi. Kebahagiaan, tawa, dan waktu adalah hal-hal sederhana yang dapat kita bagi dengan orang lain."</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4" style="height: 330px;">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p> "Tak akan pernah ada sejarah menuliskan seorang manusia menyesal untuk berbagi. Setiap manusia justru akan merasakan nikmat dunia yang sesungguhnya setelah berbagi."</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4" style="height: 330px;">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>"Berbagi kesuksesan diri sendiri bukan berarti sombong, tapi agar memacu dan menginspirasi orang lain."</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <div class="container wow fadeInUp" data-wow-delay="0.1s">

            <h2>judul..</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium ullam incidunt reprehenderit 
                numquam alias amet quo labore? Temporibus dolores debitis cupiditate dolorum quaerat voluptate 
                quibusdam natus voluptates quod a ratione, dolor eveniet? Perferendis consectetur, excepturi, facere 
                tempore omnis iusto ut quibusdam optio facilis recusandae sapiente ipsa perspiciatis nam modi. 
                Quidem a, officiis aperiam facilis pariatur amet, quibusdam labore dicta distinctio officia magni 
                quae modi excepturi exercitationem ea earum doloremque praesentium iure, tempore reprehenderit laudantium 
                sed aut sequi. Eum sint autem necessitatibus tempore fugiat dolores totam! Reiciendis, porro aliquid esse 
                eaque, eligendi ducimus distinctio itaque, maiores veniam molestias illo modi?</p>
          <br>
        </div>

@endsection