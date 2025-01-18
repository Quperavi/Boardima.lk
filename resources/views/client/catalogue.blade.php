@extends('layouts.client')
@section('content')
  <main>
    <div class="main-container pt-5" id="main-container">
        <div class="row g-0">
            <div class="slide-bar col-3 pb-4">
                <div class="card w-100 container custom-card pt-4">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="button-group">
                            <input  onchange="fetchData()" type="radio" class="btn-check" name="boading_category" value="2" id="option1" autocomplete="off">
                            <label class="btn btn-secondary custom-button me-2 px-3 py-2 rounded-3" for="option1"><i class="fa-solid fa-venus me-2"></i>For Girls</label>
                            <input onchange="fetchData()" type="radio" class="btn-check" name="boading_category" value="1" id="option2" autocomplete="off">
                            <label class="btn btn-secondary custom-button px-3 py-2 rounded-3" for="option2"><i class="fa-solid fa-mars me-2"></i>For Boys</label>
                        </div>
                        <div class="border-top border-3 mt-4 w-100">
                        </div>
                        <div class="distance align-self-start mt-4 d-flex flex-column w-100">
                            <h3 class="fs-6 fw-bold filter-text text-start">Distance From Faculty</h3>
                            <select onchange="fetchData()"  class="js-example-basic-single select-2-selection w-100" id="distance" name="state">
                                <option value="" selected>Any</option>
                                <option value="1">under 1 Km</option>
                                <option value="2">1Km - 2km</option>
                                <option value="3">2Km - 3km</option>
                                <option value="4">3Km - 4km</option>
                                <option value="5">4Km - 5km</option>
                                <option value="6">Above 5km</option>
                            </select>
                        </div>
                        <div class="border-top border-3 mt-4 w-100">
                        </div>
                        <div class="w-100 pb-3">
                            <div class="distance align-self-start mt-4 d-flex flex-column w-100">
                                <h3 class="fs-6 fw-bold filter-text text-start">Property Type</h3>
                            </div>
                            <div id="scrollable-content" onchange="fetchData()" style="min-height: 200px; overflow-y: auto;" class="d-flex flex-column w-100">

                                    <div class="pretty p-curve p-smooth p-bigger mt-3">
                                      <input type="checkbox" name="boading_type" value="1">
                                      <div class="state p-success">
                                        <label>Apartmnet</label>
                                      </div>
                                    </div>

                                    <div class="pretty p-curve p-smooth mt-3">
                                      <input type="checkbox" name="boading_type" value="2">
                                      <div class="state p-success">
                                        <label>House</label>
                                      </div>
                                    </div>

                                    <div class="pretty p-curve p-smooth mt-3">
                                      <input type="checkbox" name="boading_type" value="3">
                                      <div class="state p-success">
                                        <label>Hostel</label>
                                      </div>
                                    </div>

                                    <div class="pretty p-curve p-smooth mt-3">
                                      <input type="checkbox" name="boading_type" value="4">
                                      <div class="state p-success">
                                        <label>New Building</label>
                                      </div>
                                    </div>

                                    <div class="pretty p-curve p-smooth mt-3">
                                        <input type="checkbox" name="boading_type" value="5">
                                        <div class="state p-success">
                                          <label>Room</label>
                                        </div>
                                      </div>
                                    <div class="pretty p-curve p-smooth mt-3">
                                        <input type="checkbox" name="boading_type" value="6">
                                        <div class="state p-success">
                                          <label>Anex</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-curve p-smooth mt-3">
                                        <input type="checkbox" name="boading_type" value="7">
                                        <div class="state p-success">
                                          <label>Other</label>
                                        </div>
                                    </div>
                                  </div>


                        </div>
                        <div class="w-100 pb-3">
                            <div class="distance align-self-start mt-4 d-flex flex-column w-100">
                                <h3 class="fs-6 fw-bold filter-text text-start">Features</h3>
                            </div>
                            <div id="scrollable-content" style="min-height: 200px; overflow-y: auto;" class="d-flex flex-column w-100">

                                @foreach ($features as $feature)
                                    <div class="pretty p-curve p-smooth p-bigger mt-3"  onchange="fetchData()">
                                        <input type="checkbox" name="features" value="{{$feature->id}}">
                                        <div class="state p-success">
                                          <label>{{$feature->feature_name}}</label>

                                        </div>
                                      </div>
                                @endforeach
                                  </div>


                        </div>
                        <div class="border-top border-3 mt-4 w-100">
                        </div>
                        <div class="w-100 pb-5">
                            <div class="distance align-self-start mt-4 d-flex flex-column w-100 pb-4">
                                <h3 class="fs-6 fw-bold filter-text text-start">Monthly Price</h3>
                            </div>
                            <input type="text" class="js-range-slider" name="my_range" value="" />
                        </div>
                        <div class="border-top border-3 mt-4 w-100">
                        </div>
                        <div class="w-100 pb-5">
                            <div class="distance align-self-start mt-4 d-flex flex-column w-100 pb-4">
                                <h3 class="fs-6 fw-bold filter-text text-start">Find Nearest Boading</h3>
                            </div>
                            <div class="row">
                                <!-- First LG-sized input field -->
                                <div class="col-sm-6 mb-3">
                                    <input type="text"  class="form-control form-control-lg" id="lattiude" value="" placeholder="lat: " required>
                                </div>

                                <!-- Second LG-sized input field -->
                                <div class="col-sm-6 mb-3">
                                    <input type="text" class="form-control form-control-lg" id="longitude" value="" placeholder="long: " required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <button id=getLocation href="javascript:void(0)"  class="btn btn-mod btn-border btn-circle btn-medium ">
                                  <i class="fa fa-location"></i>
                                  Get My Location
                                </button>
                            </div>
                            <div class="d-flex justify-content-center margin-bottom-40">
                                <button id=reset_location href="javascript:void(0)"  class="btn btn-danger btn-border btn-circle btn-danger ">
                                  Reset
                                  <i class="fa fa-location"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="boading-container col-8 container">
                <div class="sort-by d-flex align-items-center pb-4">
                    <div class="border-top border-3 mt-4 w-100 pb-4 text-black">
                    </div>
                    <select name="" id="" class="form-select" style="width: 20%">
                        <option value="" selected disabled>Sort by</option>
                        <option value="">Newest</option>
                        <option value="">Oldest</option>
                    </select>
                </div>
                <div id="boading_container" class="row row-cols-1 row-cols-md-3 g-4 pb-5">

                  </div>
            </div>

        </div>
    </div>
  </main>
  <script>

    function fetchData(min_price=undefined, max_price=undefined,type=1 ) {
        $.ajax({
        url: '/api/catalogue',
        method: 'POST',
        contentType: 'application/json', // Specify the content type for the request
        data: JSON.stringify({
            "features" :  $('input[name="features"]:checked').map(function () {
                         return this.value;
            }).get(),
            "category" : $('input[name="boading_category"]:checked').val(),
            "type" : $('input[name="boading_type"]:checked').map(function () {
                         return this.value;
            }).get(),
            "distance" : $('#distance').val() ? $('#distance').val() : undefined ,
            "min_price" :min_price,
            "max_price" :max_price,
            "latitude" : $('#lattiude').val() ? $('#lattiude').val() : undefined ,
            "longitude":  $('#longitude').val() ? $('#longitude').val() : undefined
         }), // Convert data to JSON format
        success: function (data) {
            // Update the UI with the fetched data
            $('#boading_container').empty();

            if( $('#lattiude').val() && $('#longitude').val()){
                function calculateDistance(lat1, lon1, lat2, lon2) {

                    const earthRadius = 6371;

                    const dLat = (lat2 - lat1) * (Math.PI / 180);
                    const dLon = (lon2 - lon1) * (Math.PI / 180);

                    const a =
                        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                        Math.cos(lat1 * (Math.PI / 180)) *
                        Math.cos(lat2 * (Math.PI / 180)) *
                        Math.sin(dLon / 2) *
                        Math.sin(dLon / 2);

                    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

                    const distance = earthRadius * c;
                    return distance;
                }



                data = data.map(place => {
                    const geo_distance = calculateDistance(
                        parseFloat($('#lattiude').val() ),
                        parseFloat($('#longitude').val() ),
                        parseFloat(place.latitude),
                        parseFloat(place.longitude)
                    );

                    return { ...place, geo_distance };
                    });

                    // Sort places based on geo_distance
                    data.sort((a, b) => a.geo_distance - b.geo_distance);


            }
        data.forEach(function(item) {
            var imageUrl = item.images && item.images.length > 0 ? "{{ asset('storage/images/') }}" + '/' + item.images[0].image_name : '';
            var project_url = "{{ route('projects.show', ['boadingId' => ':boadingId']) }}".replace(':boadingId', item.id);
            var category = item.category == 1 ? " For Boys " : item.category == 2 ? "For Girls" : "For Boths";
            var geo_distance = item.geo_distance ? Math.round(item.geo_distance, 2) + ' Km' : '';
            var itemElement = $('<div class="col">\
                <a class="project-url"  href="' + project_url + '">\
                <div class="card h-100 rounded-4 custom-card-2">\
                    <img src="' + imageUrl + '" class="card-img-top img-fluid rounded-top-4" alt="..." height="300">\
                    <div class="card-body">\
                        <span class="card-info-text">' + category + '</span>\
                        <p class="fs-6 card-title boading-title">' + item.name + '</p>\
                        <p class="card-text boad-address">' + item.address + '</p>\
                        <p class="card-text boad-address"><i class="fa-solid fa-money-bill me-2"></i> <span class="fw-bold">Rs.' + item.price + '/monthly</span></p>\
                    </div>\
                    <div class="d-flex justify-content-center">\
                        <div class="border-top border-3 w-100">\
                        </div>\
                    </div>\
                    <div class="card-footer text-muted d-flex justify-content-center bg-light rounded-4">\
                        <div class="bedroom me-2 fs-6 fw-bold">' + item.rooms + ' <i class="fa-solid fa-bed"></i></div>\
                        <div class="bathrooms ms-2 fs-6 fw-bold">' + item.bathroom + ' <i class="fa-solid fa-bath"></i></div>\
                        ' + (geo_distance ? '<div class="bathrooms ms-2 fs-6 fw-bold">' + geo_distance + ' <i class="fa-solid fa-location"></i></div>' : '') + '\
                    </div>\
                </div>\
                </a>\
            </div>').appendTo('#boading_container');
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    })
    scrollTop()
    }fetchData()

    document.getElementById('getLocation').addEventListener('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        } else {
            alert('Geolocation is not supported by your browser.');
        }
    });

    document.getElementById('reset_location').addEventListener('click', function() {
        document.getElementById("lattiude").value = ""
        document.getElementById("longitude").value = ""
        fetchData()
    });

    function scrollTop() {
    var element = document.getElementById('main-container');

    if (element) {
        element.scrollIntoView({
            behavior: 'smooth', // You can use 'auto' or 'smooth' for scrolling behavior
            block: 'start',     // You can use 'start', 'center', or 'end' for vertical alignment
            inline: 'nearest'   // You can use 'start', 'center', or 'end' for horizontal alignment
        });
    }
}

    function successCallback(position) {
        // Get latitude and longitude
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        document.getElementById("lattiude").value = latitude
        document.getElementById("longitude").value = longitude
        fetchData(type=2)
    }

    function errorCallback(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                alert('User denied the request for Geolocation.');
                break;
            case error.POSITION_UNAVAILABLE:
                alert('Location information is unavailable.');
                break;
            case error.TIMEOUT:
                alert('The request to get user location timed out.');
                break;
            case error.UNKNOWN_ERROR:
                alert('An unknown error occurred.');
                break;
        }
    }
</script>

@endsection
