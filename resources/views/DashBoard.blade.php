<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin"
        rel="stylesheet">
    <style>
    @import url(https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin);

    @font-face {
        font-family: "Spoof Trial Thin";
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot");
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot?#iefix")format("embedded-opentype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff2")format("woff2"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff")format("woff"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.ttf")format("truetype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.svg#Spoof Trial Thin")format("svg");
    }

    body {
        font-family: "Spoof Trial Thin";
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        background-color: #ffffff
    }

    main {
        flex: 1;
    }

    footer {
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 10px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .slider-frame {
        overflow: hidden;
        max-width: 100%;
        margin-top: 20px;
    }

    .slide-images {
        display: flex;
        flex-direction: row;
        transition: transform 0.5s ease-in-out;
    }

    .img-container {
        width: 100%;
        /* Adjust the width as needed */
        box-sizing: border-box;
        flex: 0 0 auto;
        text-align: center;
    }

    #pics {
        max-width: 100%;
        /* Set max-width to 100% to ensure it doesn't exceed its container */
        height: auto;
        /* Allow the height to adjust proportionally */
        display: block;
        /* Remove any default inline styles that may affect sizing */
        margin: 0 auto;
    }

    .img-container img {
        width: 75vw;
        /* Make images responsive */
        height: 500px;
        /* Set a fixed height for all images */
        object-fit: cover;
        /* Ensure images cover the container without stretching */
        border: 1px solid #ddd;
        display: inline-block;

    }

    .card {
        transition: transform 0.1s ease-in-out;
    }

    .card:hover {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        transform: scale(1.1);
        /* Adjust the scale factor as needed */
    }

    .images {
        width: 10px;
        height: 10px;
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
        /* Apply the transition to the transform property */
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
        /* Increase the scale on hover */
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layouts.navbar')
    <br>


    <!-- Header Section -->
    <header style="margin-top: 70px">
        <div class="container" id="contents">
            <h1>Top Products</h1>
        </div>
    </header>

    <!-- Dashboard Content -->
    <div class="slider-frame">
        <div class="slide-images">
            <div class="img-container">
                <img src="images/image 1.jpg" alt="Slide 1">
            </div>
            <div class="img-container">
                <img src="{{ URL('images/intel 1.jpg') }}" alt="Slide 2">
            </div>
            <div class="img-container">
                <img src="{{ URL('images/gpu 1.jpg') }}" alt="Slide 3">
            </div>
            <div class="img-container">
                <img src="{{ URL('images/ram.jpg') }}" alt="Slide 4">
            </div>
            <div class="img-container">
                <img src="{{ URL('images/motherboard.png') }}" alt="Slide 5">
            </div>
        </div>
        <br>

        <!--case-->
        <div class="container mt-4">
            <div class="row">
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Chassis</i></h4>
                        <br>
                        <a href="/chassis_category">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>
                @foreach($Case->slice(0,6) as $item)
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="{{url('product_demo/'.$item -> id.'')}}" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="{{ asset($item->photo) }}" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>{{$item -> name}}</i></h5>
                                <p class="card-text">{{$item -> category}}</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱{{$item -> price}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                <!--CPU-->
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Processor</i></h4>
                        <br>
                        <a href="/processor_category">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                @foreach($CPU->slice(0,6) as $cpuitem)
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="{{url('product_demo/'.$cpuitem -> id.'')}}" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="{{ asset($cpuitem->photo) }}" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>{{$cpuitem -> name}}</i></h5>
                                <p class="card-text">{{$cpuitem -> category}}</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱{{$cpuitem -> price}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                <!--Motherboard-->
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="motherboard_category">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                @foreach($Motherboard->slice(0,6) as $mbitem)
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="{{url('product_demo/'.$mbitem -> id.'')}}" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="{{ asset($mbitem->photo) }}" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>{{$mbitem -> name}}</i></h5>
                                <p class="card-text">{{$mbitem -> category}}</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱{{$mbitem -> price}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

               <!--GPU-->
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Graphics Card</i></h4>
                        <br>
                        <a href="gpu_category">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                @foreach($GPU->slice(0,6) as $gpuitem)
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="{{url('product_demo/'.$gpuitem -> id.'')}}" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="{{ asset($gpuitem->photo) }}" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>{{$gpuitem -> name}}</i></h5>
                                <p class="card-text">{{$gpuitem -> category}}</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱{{$gpuitem -> price}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                
                <!--RAM-->
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Ram</i></h4>
                        <br>
                        <a href="ram_category">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                @foreach($RAM->slice(0,6) as $ramitem)
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="{{url('product_demo/'.$ramitem -> id.'')}}" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="{{ asset($ramitem->photo) }}" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>{{$ramitem -> name}}</i></h5>
                                <p class="card-text">{{$ramitem -> category}}</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱{{$ramitem -> price}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                <!--PSU-->
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Power Supply</i></h4>
                        <br>
                        <a href="psu_category">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                @foreach($PSU->slice(0,6) as $psuitem)
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="{{url('product_demo/'.$psuitem -> id.'')}}" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="{{ asset($psuitem->photo) }}" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>{{$psuitem -> name}}</i></h5>
                                <p class="card-text">{{$psuitem -> category}}</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱{{$psuitem -> price}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <!--Storage-->
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Storage</i></h4>
                        <br>
                        <a href="storage_category">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>

                @foreach($Storage->slice(0,6) as $storageitem)
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="{{url('product_demo/'.$storageitem -> id.'')}}" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="{{ asset($storageitem->photo) }}" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>{{$storageitem -> name}}</i></h5>
                                <p class="card-text">{{$storageitem -> category}}</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱{{$storageitem -> price}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                
        <!-- Footer Section -->
        <footer class="bg-black text-light text-center py-2">
            <div class="row">
                <div class="col-md text-left ml-md-2">
                    <p><a href="/terms" class="text-light">Terms and Conditions</a></p>
                </div>
                <div class="col-md text-center">
                    <p>&copy; 2023 Login Page. All rights reserved.</p>
                </div>
                <div class="col-md text-right mr-md-2">
                    <p><a href="https://www.facebook.com/yourpage" class="text-light">Follow us on Facebook</a></p>
                </div>
            </div>
        </footer>

        <!-- ... (Your existing HTML) -->

        <!-- ... (Your existing HTML) -->

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slideContainer = document.querySelector(".slide-images");
            const slideImages = document.querySelector(".slide-images");
            let currentIndex = 0;
            let startX;
            let isSwiping = false;

            function showSlide(index) {
                const translateValue = -index * 100 + "%";
                slideImages.style.transform = "translateX(" + translateValue + ")";
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % 5;
                showSlide(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + 5) % 5; // Ensure positive index
                showSlide(currentIndex);
            }

            function handleStart(event) {
                if (event.type === "touchstart") {
                    startX = event.touches[0].clientX;
                } else {
                    startX = event.clientX;
                }
                isSwiping = true;
                event.preventDefault(); // Prevent default behavior to avoid page scrolling
            }

            function handleMove(event) {
                if (!isSwiping) return;

                const currentX = event.type === "touchmove" ? event.touches[0].clientX : event.clientX;
                const diffX = currentX - startX;

                if (Math.abs(diffX) > 50) { // Adjust the sensitivity as needed
                    if (diffX > 0) {
                        prevSlide();
                    } else {
                        nextSlide();
                    }
                    startX = null;
                    isSwiping = false;
                }
                event.preventDefault(); // Prevent default behavior to avoid page scrolling
            }

            function handleEnd() {
                startX = null;
                isSwiping = false;
            }

            slideContainer.addEventListener("touchstart", handleStart);
            slideContainer.addEventListener("touchmove", handleMove);
            slideContainer.addEventListener("touchend", handleEnd);

            slideContainer.addEventListener("mousedown", handleStart);
            slideContainer.addEventListener("mousemove", handleMove);
            slideContainer.addEventListener("mouseup", handleEnd);

            // Automatic slideshow
            setInterval(nextSlide, 5000);

            // Optional: Pause slideshow on hover
            slideContainer.addEventListener("mouseenter", function() {
                clearInterval(intervalId);
            });

            slideContainer.addEventListener("mouseleave", function() {
                intervalId = setInterval(nextSlide, 5000);
            });
        });
        </script>

        <!-- Bootstrap JS and Popper.js scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>