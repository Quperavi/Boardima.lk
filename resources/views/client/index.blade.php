@extends('layouts.client')
@section('content')
    <main>
        <div class=" overflow-hidden text-center position-relative bg-body-tertiary ">
            <div class="col-md-6 p-lg-5 mx-auto hero-section">
                <h1 class="display-3 fw-bold">Tailored for<span class="jpura-text"> University</span><br>Students</h1>
                <h3 class="fw-normal text-muted mb-3">Find The Best Boading for you with <span class="jpura-text"></span> <span class="boading-text">බෝඩිම.lk</span></h3>
                <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <a class="icon-link" href="#">
                    Learn more
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
                <a class="icon-link" href="#">
                    Find
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
                </div>
            </div>
            <div class="home-svg position-absolute w-100 pt-5 mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FD8D14" fill-opacity="1" d="M0,288L48,266.7C96,245,192,203,288,170.7C384,139,480,117,576,122.7C672,128,768,160,864,181.3C960,203,1056,213,1152,192C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            </div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <!-- About section -->
        <section class="container mb-5 pb-2" style="padding-top: 80px;">
            <div class="row  justify-content-center">
              <!-- Hero content-->
              <div class="col-lg-4 col-md-5 col-sm-9 order-md-1 order-2 text-md-start text-center">
                <h1 class="mb-4 text-black fw-bold fs-4">About <span class="jpura-text"></span> <span class="boading-text">බෝඩිම.lk</span></h1>
                <p class="fs-6 text-secondary">
                    At Boarding House Finder, we understand the challenges of finding the perfect boarding house that feels like home. Whether you're a student looking for a comfortable and conducive living space near your school or a professional seeking a convenient and friendly environment, we've got you covered.
                </p>
                <p class="fs-6 text-secondary">
                    Our mission is simple: to connect individuals with their ideal boarding house, making the search process easy, efficient, and stress-free. We take pride in curating a diverse range of boarding houses that cater to various preferences and budgets, ensuring that everyone can find a place that suits their unique needs.
                </p>
              </div>
              <!-- Hero carousel-->
              <div class="col-lg-7 col-md-6 offset-md-1 col-12 order-md-2 order-1">
                <img class="rounded-5 w-100" src="{{asset('assest/img/fot.jpg')}}" alt="Carousel image" style="box-shadow: 0px 12px 32px 10px rgba(0, 0, 0, 0.5);
                -webkit-box-shadow: 0px 12px 32px 10px rgba(0, 0, 0, 0.5);">
              </div>
            </div>
        </section>
        
        <!-- Stats-->
        <section class="position-relative rounded-xxl-4 py-md-3 zindex-5 bg-body-tertiary mt-5" >
          
            <!-- head Text -->
            <div class="container pt-5" >
              <div  class="h2 text-center text-uppercase fw-bold text-black">
                Why <span class="jpura-text"></span> <span class="boading-text">බෝඩිම.lk</span>
              </div> 
            <div class="text-center text-secondary pb-3">
                Choose us for unparalleled quality and exceptional service.
            </div>
            </div>
            
            <div class="container pt-5 pb-2 mb-4 mb-md-5">
              <div class="row row-cols-md-4 row-cols-2 g-4 text-center">
                <div class="col border-end border-3">
                    <i class="icon-square rounded-1 py-5 px-5 text-white fa-solid fa-magnifying-glass fs-1">
                    </i>
                  <div class="fs-5 mt-3 lh-lg  fw-bold">
                    Easy To Find
                    <div class="fs-6 fw-normal text-secondary">
                      You can find property easily
                    </div>
                  </div>
                </div>
                <div class="col border-end border-3">
                    <i class="icon-square rounded-1 py-5 px-5 text-white fa-solid fa-magnifying-glass fs-1">
                    </i>
                  <div class="fs-5 mt-3 lh-lg  fw-bold">
                    Easy To Find
                    <div class="fs-6 fw-normal text-secondary">
                      You can find property easily
                    </div>
                  </div>
                </div>
                <div class="col border-end border-3">
                    <i class="icon-square rounded-1 py-5 px-5 text-white fa-solid fa-magnifying-glass fs-1">
                    </i>
                  <div class="fs-5 mt-3 lh-lg  fw-bold">
                    Easy To Find
                    <div class="fs-6 fw-normal text-secondary">
                      You can find property easily
                    </div>
                  </div>
                </div>
                <div class="col border-end border-3">
                    <i class="icon-square rounded-1 py-5 px-5 text-white fa-solid fa-magnifying-glass fs-1">
                    </i>
                  <div class="fs-5 mt-3 lh-lg  fw-bold">
                    Easy To Find
                    <div class="fs-6 fw-normal text-secondary">
                      You can find property easily
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <!-- Contact us -->
        <section class="container">
            
            <div class="row  align-self-center mb-5 pt-5">
                
                <div class="col-md-6">
                  <img src="{{asset('assest/img/contact.jpg')}}" class="img-fluid" alt="" srcset="">
                </div>
      
                <div class="col-md-6">
                  <!-- Contact form-->
                  <div class="card rounded-4" style="box-shadow: 0px 12px 20px 1px rgba(0, 0, 0, 0.5);
                  -webkit-box-shadow: 0px 12px 20px 1px rgba(0, 0, 0, 0.5);">
                    <div class="card-body">
                        <form class="needs-validation p-3">
                          <div class="mb-4">
                            <label class="form-label text-dark" for="c-name">Full Name</label>
                            <input class="form-control form-control-lg form-control-light" id="c-name" type="text" required >
                            <div class="invalid-feedback">Please, enter your name</div>
                          </div>
                          <div class="mb-4">
                            <label class="form-label text-dark" for="c-email">Your Email</label>
                            <input class="form-control form-control-lg form-control-light" id="c-email" type="email" required >
                            <div class="invalid-feedback">Please, enter your email</div>
                          </div>
                          <div class="mb-4">
                            <label class="form-label text-dark" for="c-subject">Subject</label>
                            <input class="form-control form-control-lg form-control-light" id="c-email" type="email" required >
                            <div class="invalid-feedback">Please, choose subject</div>
                          </div>
                          <div class="mb-4">
                            <label class="form-label text-dark" for="c-message">Message</label>
                            <textarea class="form-control form-control-lg form-control-light" id="c-message" rows="4" placeholder="Leave your message" required ></textarea>
                            <div class="invalid-feedback">Please, leave your message</div>
                          </div>
                          <div class="pt-2">
                            <button style="background-color: #0071ce;" class="btn btn-lg btn-primary w-sm-auto w-100" type="submit">Submit form</button>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <!-- <div class="w-100 pt-5" id="map" style="height: 400px;"></div> -->
    
        </main>
@endsection