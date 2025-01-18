@extends('layouts.client')
@section('content')
  <main>
    <nav style="--bs-breadcrumb-divider: '>';" class="container fs-6 pt-5" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="/">Home</a></li>
        <li class="breadcrumb-item "><a href="/catalogue">Catalogue</a></li>
        <li class="breadcrumb-item active " aria-current="page"><span class="active-breadcrumb">{{ $project-> name}}</span> </li>
      </ol>
    </nav>
    <div class="about-us pb-5 pt-1">
      <div class="container">
        <div class="fs-2  fw-bolder pb-1 single-title text-black">
            {{ $project-> name}}
        </div>
        <div class="fs-5 home-address  pb-2">
            {{ $project-> address}}
        </div>
        <div class="icon-box d-flex gap-4 pb-3">
          <div class="user-ic d-flex align-items-center">
            <span class="fw-normal icon-padding fs-6 ">
                @if ($project-> category == "1")
                    Male </span><i class="fa-solid fa-mars fs-5 text-secondary"></i>
                @elseif ($project-> category == "2")
                    Female </span><i class="fa-solid fa-venus fs-5 text-secondary"></i>
                @else
                 Any </span><i class="fa-solid fa-mars-and-venus fs-5 text-secondary"></i>
                 @endif
          </div>
          <div class="user-ic d-flex align-items-center">
            <span class="fw-normal icon-padding fs-6 ">{{$project->slots}}</span><i class="fa-solid fa-users fs-6 text-secondary"></i>
          </div>
          <div class="user-ic">
            <span class="fw-normal icon-padding fs-6">{{ $distance_Arr[$project->distance] }}</span> <span class="fs-6 text-secondary fw-bold">KM</span>
          </div>
        </div>
      </div>
        <section class="overflow-auto mb-4 pb-3 container" data-simplebar>
            <div class="row g-2 g-md-3 gallery " data-thumbnails="true" style="min-width: 30rem;">
              <div class="col-8 ">
                <div class="owl-carousel">
                    @foreach($project->images as $item)
                    <div class="item"><a class="gallery-item rounded rounded-md-3" href="javascript:void(0);" >
                        <img src="{{ asset('storage/images/'.$item->image_name) }}" class="img-fluid " alt="Gallery thumbnail">
                      </a></div>
                    @endforeach

                    <!-- Add more items (slides) as needed -->
                </div>
              </div>
              <div class="col-4">
                @if ($project->images && $project->images->isNotEmpty())
                    <a class="gallery-item rounded rounded-md-3 mb-2 mb-md-3" href="javascript:void(0);">
                        @php
                            $lastImage = $project->images->last();
                        @endphp
                        <img src="{{ asset('storage/images/' . $lastImage->image_name) }}" class="img-fluid" alt="Gallery thumbnail">
                    </a>
                @endif

                @if ($project->images &&$project->images->count() >= 2)
                <a class="gallery-item rounded rounded-md-3" href="javascript:void(0);">
                    @php
                        $secondLastImage = $project->images->slice(-2, 1)->first();
                    @endphp
                    <img src="{{ asset('storage/images/' . $secondLastImage->image_name) }}"  class="img-fluid" alt="Gallery thumbnail">
                  </a>
                @endif


              </div>
            </div>
        </section>

        <section class="container mb-5 pb-1">
          <div class="row">
            <div class="col-md-7 mb-md-0 mb-4">
              <h2 class="h3 mb-4 pb-4 border-bottom fw-bold anex-price ">Rs. {{$project->price}}<span class="d-inline-block ms-1 fs-6 text-secondary fw-normal">/month</span></h2>
              <!-- Overview-->
              <div class="mb-4 pb-md-3">
                <h3 class="h4 head-title">Overview</h3>
                <p class="mb-1 overview-text">{{$project->description}}</p>
              </div>
              <!-- Property Details-->
              <div class="mb-4 pb-md-3">
                <h3 class="h4 head-title">Property Details</h3>
                <ul class="list-unstyled mb-0 text-secondary">
                  <li><b>Type: </b>{{ $property_type[$project->type] }}</li>
                  <li><b>Apartment area: </b>{{$project->area}} sq.m</li>
                  <li><b>Vacancies: </b>{{$project->slots}}</li>
                  <li><b>Bedrooms: </b>{{$project->rooms}}</li>
                  <li><b>Bathrooms: </b>{{$project->bathroom}}</li>
                </ul>
              </div>
              <!-- Amenities-->
              <div class="mb-4 pb-md-3">
                <h3 class="h4 head-title">Amenities</h3>
                <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">

                    @foreach($project->features as $feature)
                        @foreach($feature->feature_items as $item)
                        <li class="col"><i class="fa-solid {{ $item->class}} mt-n1 me-2 fs-lg align-middle"></i>{{ $item->feature_name}}</li>
                        @endforeach
                    @endforeach

                </ul>
              </div>


          </div>
          <div class="col-md-5 mb-md-0 mb-4">
            <div class="card owner-contact">
                <div class="avatar-owner w-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" style="width: 150px;" alt="Avatar" />
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $project-> user-> name }}</h5>
                  <ul class="list-group list-group-light">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="fa-solid fa-phone rounded-circle"></i>
                        <div class="ms-3">
                          <p class="fw-bold mb-1">{{ $project-> user_details-> phone_number }}</p>
                        </div>
                      </div>
                      <span class="badge rounded-pill badge-success">Active</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="fa-brands fa-whatsapp"></i>
                          <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $project-> user_details-> whatsapp_number }}</p>
                          </div>
                        </div>
                        <span class="badge rounded-pill badge-success">Active</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-house"></i>
                          <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $project-> user_details-> address }}</p>
                          </div>
                        </div>
                        <span class="badge rounded-pill badge-success">Active</span>
                      </li>
                  </ul>
                  <a href="tel:{{ $project-> user_details-> phone_number }}" class="btn btn-success my-3" data-mdb-ripple-init> <i class="fa-solid fa-phone rounded-circle mx-2"></i>Call</a>
                </div>
              </div>
          </div>
          <h3 class="h4 head-title">Location</h3>
            <div class="w-100 pt-5" id="maps" style="height: 400px;"></div>

            </main>
            </div>
        </section>
    </div>
  </main>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    // Initialize the map
    var map = L.map('maps').setView([{{ $project->latitude }},{{ $project->longitude }}], 18);

    // Add a tile layer to the map (you can use any tile provider)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([{{ $project->latitude }},{{ $project->longitude }}]).addTo(map);

    // Add markers or other map elements as needed
  </script>
@endsection
