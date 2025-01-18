

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Boardima.lk', 'Boardima.lk') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet"  href="{{ asset('css/owner.css')}}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uppy/3.14.1/uppy.css" integrity="sha512-bWtvEIUUTEPtIU/xZtiRSQ/4qrSJ0xZ5R1aiwIe8LZVsliaCJg/lJon5+NoXqsgQbyWU87qLSVjmPP/BNV17eg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://unpkg.com/izitoast/dist/css/iziToast.min.css'>
    <link href="https:////cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Scripts -->
    <style>
        .active{
            background-color: #5bccf0;
        }
    </style>

<style>
        #map {
            height: 400px;
            width: 100%;
        }
        #searchBox {
            margin: 10px;
            width: 300px;
            height: 30px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important;">
                <div class="item logo">
                    <img class="bi" width="24" height="24" src={{ asset('assest/img/logo.png') }}>
                    {{-- <img class="bi" width="24" height="24" src={{ asset('assest/img/logo.png') }}/><img class="bi" width="24" height="24" src={{ asset('assest/img/logo.png') }} style="display: none" /> --}}
                </div>
                <div class="ui accordion">
                  <div class="content {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a class="item" href="dashboard ">Add Boading
                                  </a>
                  </div>
                  <div class="content {{ request()->routeIs('manageBoading') ? 'active' : '' }}">
                    <a class="item" href="manageBoading">Manage Boading
                                  </a>
                  </div>
                </div>
                <div class="ui dropdown item displaynone">
                  <z>Dashboard</z>
                  <i class="icon demo-icon heart icon-heart"></i>

                  <div class="menu">
                    <div class="header">
                      Main
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="dashboard">Add Boading</a>
                    <a class="item" href="dashboard">Manage Boading</a>
                  </div>
                </div>
              </div>
              <div class="pusher">
                <div class="ui menu asd borderless" style="border-radius: 0!important; border: 0; margin-left: 260px; -webkit-transition-duration: 0.1s;">
                  <a class="item openbtn">
                    <i class="icon content"></i>
                  </a>
                  <a class="item" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                  </a>
                  <div class="right menu">
                    <ul class="navbar-nav ms-auto item">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                    </ul>
                  </div>
                </div>
                <div class="asd " style="border-radius: 0!important; border: 0; margin-left: 260px;margin-right: 10px; -webkit-transition-duration: 0.1s;">

                  @yield('content')
                  
                </div>

              </div>
            {{-- <div class="asd w-100" style="border-radius: 0!important; border: 0; margin-left: 260px;margin-right: 260px; -webkit-transition-duration: 0.1s;">

            </div> --}}
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uppy/3.14.1/uppy.min.js" integrity="sha512-AeHJEmHa2QgUfr0rcPmvfPhtJc/B0jjrhQ0X3sHuhfIWYt4/rdjnVmXt9D6IOa+lcdamC2sargeT5XjXCCxX+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/admin/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.js'></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyAIDlJ-s0V2EWKGY9Sk3Spj92IaagO-Kgs"></script>
    <script src="https://rawgit.com/Logicify/jquery-locationpicker-plugin/master/dist/locationpicker.jquery.js"></script>
    <script  src="{{ asset('js/owner.js')}}"></script>
    <script src="https:////cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src='https://unpkg.com/izitoast/dist/js/iziToast.min.js'></script>
    <script>
        let map, marker;

        function initMap() {
            // Initialize the map
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 37.7749, lng: -122.4194 }, // Default center (San Francisco)
                zoom: 13,
            });

            // Initialize the search box
            const searchBox = new google.maps.places.Autocomplete(
                document.getElementById("searchBox")
            );

            // Add a marker to the map
            marker = new google.maps.Marker({
                map: map,
                draggable: true, // Optional: Make the marker draggable
            });

            // Listen for the place changed event on the search box
            searchBox.addListener("place_changed", () => {
                const place = searchBox.getPlace();

                if (!place.geometry || !place.geometry.location) {
                    alert("No location found for the input.");
                    return;
                }

                // Set the map center and marker position to the selected place
                map.setCenter(place.geometry.location);
                map.setZoom(15); // Optional: Adjust zoom level
                marker.setPosition(place.geometry.location);
            });
        }

        // Initialize the map once the script is loaded
        window.onload = initMap;
    </script>
    <script>
        $(document).ready(function() {
              $('.js-example-basic-single').select2();
              $(".select2-selection__rendered").attr('style', 'line-height: 31px !important');
              $(".select2-container").attr('style', 'height: calc(1em + 1.75rem + 2px) !important;width:100%;');
              $(".select2-selection--single").attr('style', 'height: calc(1em + 1.75rem + 2px) !important;padding:0.375rem 1.125rem');
              $(".select2-selection__arrow").attr('style', 'height: 34px !important;padding:0.975rem 2.125rem')
        });


        // location picker before adding a new boarding
        function locationPick() {
            $('#us3').locationpicker({
                location: {
                    latitude: 6.8220629,
                    longitude: 80.0398979
                },
                radius: 0,
                inputBinding: {
                    latitudeInput: $('#us3-lat'),
                    longitudeInput: $('#us3-lon'),
                    radiusInput: $('#us3-radius'),
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {

                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                }

            });

        } 
        locationPick();

      </script>
      <script>
        const uppy =new Uppy.Uppy({ autoProceed: false , restrictions: {
                    maxFileSize: 2 * 1024 * 1024, // Set the maximum number of files allowed,
                    allowedFileTypes: ['image/*']
                    }})
                uppy.use(Uppy.Dashboard, { target: '#drag-drop-area', inline: true, height: 450, width:'100%',hideUploadButton:true })
    </script>
    <script>

        function addBoading(){
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            const files = uppy.getFiles();
            let formData = new FormData();
            var checkedFeatures = $('input[name="features"]:checked');
            var checkedFeatures = $('input[name="features"]:checked');

            checkedFeatures.each(function(index, feature) {
                formData.append('features[]', $(this).val());
            });

            formData.append('title', $('#title').val())
            files.forEach((file, index) => {
                formData.append('images[]', file.data);
            });
            formData.append('city', $('#city').val())
            formData.append('slots', $('#slots').val())
            formData.append('category', $('#category').val())
            formData.append('type', $('#type').val())
            formData.append('distance', $('#distance').val())
            formData.append('address', $('#address').val())
            formData.append('latitude', $('#us3-lat').val())
            formData.append('longitude', $('#us3-lon').val())
            formData.append('price', $('#price').val())
            formData.append('area', $('#area').val())
            formData.append('bathroom', $('input[name="bathroom"]:checked').val())
            formData.append('rooms', $('input[name="rooms"]:checked').val())
            formData.append('description', $('#description').val())
            $.ajax({
                url: '/api/boading/add',  // Replace with your API endpoint
                method: 'POST',             // Adjust the HTTP method as needed
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(data) {
                    if (data.status == "true" || data.status == true) {
                        iziToast.success({ title: 'success', message: data.message });
                        $('#boadingaddForm').trigger('reset');
                        uppy.getFiles().forEach(file => uppy.removeFile(file.id));
                    } else {
                        iziToast.error({ title: 'Error', message: data.error });

                    };
                },
                error: function(xhr, status, error) {
                    iziToast.error({ title: 'Error', message: error });
                }
            });
        }

    </script>
<script>

</script>
</body>
</html>
