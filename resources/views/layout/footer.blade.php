<div class="site-footer">
    <div class="container">

        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="widget">
                    <h3>Navigation</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('Give Donation')}}">Donation</a></li>
                        <li><a href="{{route('Give Items')}}">Item</a></li>
                        <li><a href="{{route('Give Services')}}">Service</a></li>
                        <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                        <li><a href="{{route('aboutus')}}">About us</a></li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="widget">
                    <h3>Emergency Cases</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="#">Providing Beds for 50 Needy Families</a></li>
                        <li><a href="#">Providing Seating for a Community Center</a></li>
                        <li><a href="#">Providing Lamps to Light Up Lives</a></li>

                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="widget">
                    <h3>Services</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="{{ route('serviceform', ['id' => 1]) }}">Delivery Volunteer</a></li>
                        <li><a href="{{ route('serviceform', ['id' => 2]) }}">Maintenance Volunteer</a></li>

                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->


            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="widget">
                    <h3>Contact</h3>
                    <address>the university street, Irbid Jordan</address>
                    <ul class="list-unstyled links mb-4">
                        <li><a href="tel://11234567890">+962-772406992</a></li>
                        <li><a href="tel://11234567890">+962-795248653</a></li>

                        <li><a href="mailto:FurnishareWebsite@gmail.com">Furnishare@gmail.com</a></li>
                    </ul>

                    <h3>Connect</h3>
                    <ul class="list-unstyled social">
                        <li><a href="https://www.instagram.com/furni_share/"><span class="icon-instagram"></span></a></li>
                        {{-- <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li> --}}
                    </ul>

                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

        </div> <!-- /.row -->


        <div class="row mt-5">
            <div class="col-12 text-center">
                <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved Furnishare Website. </p>
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.site-footer -->







<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<script src="{{asset('style/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('style/js/tiny-slider.js')}}"></script>
<script src="{{asset('style/js/flatpickr.min.js')}}"></script>
<script src="{{asset('style/js/glightbox.min.js')}}"></script>
<script src="{{asset('style/js/aos.js')}}"></script>
<script src="{{asset('style/js/navbar.js')}}"></script>
<script src="{{asset('style/js/counter.js')}}"></script>
<script src="{{asset('style/js/custom.js')}}"></script>

<script src="{{asset('../assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>

<script src="{{asset('../assets/js/main.js')}}"></script>

<script src="{{asset('../assets/js/pages-account-settings-account.js')}}"></script>


<script src="{{asset('hero/js/jquery.min.js')}}"></script>
    <script src="{{asset('hero/js/popper.js')}}"></script>
    <script src="{{asset('hero/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('hero/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('hero/js/main.js')}}"></script>

    <script>
        function toggleDescription(event, itemId) {
            event.preventDefault(); // Prevent the default behavior (scroll to top)

            var moreText = document.getElementById('more' + itemId);
            var linkText = document.getElementById('link' + itemId);

            if (moreText.style.display === 'none') {
                moreText.style.display = 'inline';
                linkText.innerHTML = 'View Less';
            } else {
                moreText.style.display = 'none';
                linkText.innerHTML = 'View More';
            }
        }
    </script>

    {{-- chat --}}
    @livewireScripts
    <script>

        function scrollDown() {
         document.getElementById('chat').scrollTop =  document.getElementById('chat').scrollHeight
        }

        setInterval(scrollDown, 1000);
    </script>

</body>
</html>
