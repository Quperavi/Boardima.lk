<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
      <script src="../assets/js/color-modes.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.115.4">
      <title>Boardima.lk</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
      <link rel="stylesheet" href="{{ asset('css/product.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
      <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
      <!-- MDB -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@5.3.0/dist/simplebar.min.css" />
      <script src="https://cdn.jsdelivr.net/npm/simplebar@5.3.0/dist/simplebar.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
      <!-- Custom styles for this template -->
      <link href="product.css" rel="stylesheet">
      <link rel='stylesheet' href='https://unpkg.com/izitoast/dist/css/iziToast.min.css'>
    <link href="https:////cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>

        @include('components.header')
        @yield('content')
        @include('components.footer')

      <script src="https://maps.googleapis.com/maps/api/js?key=" async defer></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
      <script src="https:////cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
      <script src='https://unpkg.com/izitoast/dist/js/iziToast.min.js'></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>
      <script>
        // Initialize the map
        var map = L.map('map').setView([6.8217445,80.0425658], 18);

        // Add a tile layer to the map (you can use any tile provider)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var marker = L.marker([6.8217445,80.0425658]).addTo(map);

        // Add markers or other map elements as needed
      </script>

      <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true, // Infinite loop sliding
                autoplay: true, // Autoplay the carousel
                autoplayTimeout: 3000, // Autoplay interval in milliseconds
                items: 1, // Show navigation buttons
                dots: true // Show navigation dots
            });
        });
    </script>
    <script>
      $(document).ready(function() {
            $('.js-example-basic-single').select2();
            $(".select2-selection__rendered").attr('style', 'line-height: 31px !important');
            $(".select2-container").attr('style', 'height: calc(1em + 1.75rem + 2px) !important;width:100%;');
            $(".select2-selection--single").attr('style', 'height: calc(1em + 1.75rem + 2px) !important;padding:0.375rem 1.125rem');
            $(".select2-selection__arrow").attr('style', 'height: 34px !important;padding:0.975rem 2.125rem')
      });


    </script>
    <script>
         $(".js-range-slider").ionRangeSlider({
        type: "double",
        skin: "round",
        prefix: "Rs." ,
        min: 0,
        max: 30000,
        from: 2000,
        to: 10000,
        grid: true,
        onFinish: function (data) {
            // Callback when the slider is finished
            var minValue = data.from;
            var maxValue = data.to;

            fetchData(minValue, maxValue);
        }
    });
    </script>
    </body>
</html>
