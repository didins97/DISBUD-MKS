
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.lettering.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.circleType.js')}}"></script>

    <!-- Custom Scripts -->
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/lightgallery.umd.min.js"></script>
    <script type="text/javascript">
        lightGallery(document.getElementById('galleries'));
    </script>
    </script>
        <script>
        document.querySelectorAll(".item-gallery img").forEach((img) => {
            // Ideally, we would know the image size or aspect ratio beforehand...
            if (img.naturalHeight) {
                setItemRatio.call(img);
            } else {
                img.addEventListener("load", setItemRatio);
            }
        });

        function setItemRatio() {
            this.parentNode.style.setProperty(
                "--ratio",
                this.naturalHeight / this.naturalWidth
            );
        }
    </script>

