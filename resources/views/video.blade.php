@extends('layouts.main')

@section('container')
    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Galeri</p>
                <h1 class="display-5 mb-5">Video</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded">
                        <div>
                            <img class="img-fluid" id="myImg" src="img/service-1.jpg" alt="Snow"
                                style="width:100%;max-width:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded">
                        <div>
                            <img class="img-fluid" id="myImg" src="img/service-2.jpg" alt="Snow"
                                style="width:100%;max-width:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded">
                        <div>
                            <img class="img-fluid" id="myImg" src="img/service-3.jpg" alt="Snow"
                                style="width:100%;max-width:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded">
                        <div>
                            <img class="img-fluid" id="myImg" src="img/service-4.jpg" alt="Snow"
                                style="width:100%;max-width:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded">
                        <div>
                            <img class="img-fluid" id="myImg" src="img/service-5.jpg" alt="Snow"
                                style="width:100%;max-width:300px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded">
                        <div>
                            <img class="img-fluid" id="myImg" src="img/service-6.jpg" alt="Snow"
                                style="width:100%;max-width:300px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
@endsection
