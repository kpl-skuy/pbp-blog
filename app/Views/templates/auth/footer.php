<!-- Bootstrap core JavaScript-->
<!--<script src="/assets/js/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--<script src="/assets/js/bootstrap.bundle.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"
        integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Custom scripts for all pages-->
<!--<script src="/assets/js/sb-admin-2.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/js/sb-admin-2.min.js"
        integrity="sha512-+QnjQxxaOpoJ+AAeNgvVatHiUWEDbvHja9l46BHhmzvP0blLTXC4LsvwDVeNhGgqqGQYBQLFhdKFyjzPX6HGmw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    const href = $('.flash-data').data('href');

    if (textflashData && titleflashData && iconflashData && href) {
        Swal.fire({
            title: titleflashData,
            text: textflashData,
            icon: iconflashData,
            confirmButtonText: 'Lanjutkan'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        });
    } else if (textflashData && titleflashData && iconflashData) {
        Swal.fire({
            title: titleflashData,
            text: textflashData,
            icon: iconflashData
        });
    }
</script>


</body>

</html>