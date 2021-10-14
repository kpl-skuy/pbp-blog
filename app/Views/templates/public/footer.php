<footer class="bg-191 color-ash pt-10 pb-0 text-center center-sm-text">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 mb-30">
                <div class="card">
                    <div class="dplay-tbl">
                        <div class="dplay-tbl-cell">


                            <p class="color-ash mt-25">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script>
                                All rights reserved | Project PBP Website Dinamis Mini Project</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>

                        </div><!-- dplay-tbl-cell -->
                    </div><!-- dplay-tbl -->
                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->

        </div><!-- row -->
    </div><!-- container -->
</footer>

<!-- SCIPTS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.8/swiper-bundle.min.js"
        integrity="sha512-TEY9MppoX49BydDCCSsdqDUihEAEdO2S2En3WRjPoM+4wBkLtE7HKJ/Xt34c46/XM0Qxf6+F5caDMejengSDdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--<script src="/assets/js/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--<script src="/assets/js/bootstrap.bundle.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.bundle.min.js"
        integrity="sha512-iceXjjbmB2rwoX93Ka6HAHP+B76IY1z0o3h+N1PeDtRSsyeetU3/0QKJqGyPJcX63zysNehggFwMC/bi7dvMig=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Custom scripts for all pages-->
<!--<script src="/assets/js/sb-admin-2.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/js/sb-admin-2.min.js"
        integrity="sha512-+QnjQxxaOpoJ+AAeNgvVatHiUWEDbvHja9l46BHhmzvP0blLTXC4LsvwDVeNhGgqqGQYBQLFhdKFyjzPX6HGmw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="/assets/js/scripts.js"></script>

<!-- OPTIONAL SCRIPT -->
<!--<script src="/assets/js/sweetalert2.all.min.js" type="text/javascript"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.7/sweetalert2.all.min.js"
        integrity="sha512-9pHOlHzq8S2AfFyGid7MXe6OUElUIxL2/CRho3gm1KffHLa6zOJHtw+Oxp6E+KM+44TGRv1xy5AYFC/QUiloNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- IMPLEMENTATION OF JAVASCRIPT -->
<script type="text/javascript">
    const textflashData = $('.flash-data').data('text');
    const titleflashData = $('.flash-data').data('title');
    const iconflashData = $('.flash-data').data('icon');

    if (textflashData && titleflashData && iconflashData) {
        Swal.fire({
            title: titleflashData,
            text: textflashData,
            icon: iconflashData
        });
    }
</script>

</body>

</html>