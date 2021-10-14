</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> | PBP Blog</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success" href="/authpenulis/logout">Logout</a>
            </div>
        </div>
    </div>
</div>

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

<!-- Adapter jquery ckeditor -->
<!--<script src="/assets/vendor/ckeditor4/ckeditor.js" type="text/javascript"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/ckeditor.js"
        integrity="sha512-bGYUkjDyyOMGm3ASzq3zRaWZ4CONNH1wAYMFch/Z0ASZrsg722SeRsX0FPPRZjTuJrqIMbB9fvY0LEMzyHeyeQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script src="/assets/vendor/ckeditor4/adapters/jquery.js" type="text/javascript"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/adapters/jquery.min.js"
        integrity="sha512-68YYxSqLZKmETqtWgUchCnPNjxsqIwpjSyb71jgo5BFlB9px5G+LD+MK2VxZEZIBXwoLqPaSD3FHJvRPWemM7w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- DataTable -->
<!--<script src="/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script src="/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"
        integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- IMPLEMENTATION OF JAVASCRIPT -->
<script type="text/javascript">
    const textflashData = $('.flash-data').data('text');
    const titleflashData = $('.flash-data').data('title');
    const iconflashData = $('.flash-data').data('icon');

    $(document).ready(function () {
        $('#post').DataTable({});
        $('#komentar').DataTable({});
        $('#texteditor').ckeditor();
    });

    if (textflashData && titleflashData && iconflashData) {
        Swal.fire({
            title: titleflashData,
            text: textflashData,
            icon: iconflashData
        });
    }
    $('.tombol-hapus').on('click', function (e) {
        e.preventDefault();
        const textflashData = $(this).data('text');
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data ' + textflashData + ' ini akan dihapus',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        });
    });

    function previewImg() {
        const gambar = document.querySelector('#file_gambar');
        const label_gambar = document.querySelector('.custom-file-label');
        const preview_gambar = document.querySelector('.img-preview');

        label_gambar.textContent = gambar.files[0].name;
        const file_gambar = new FileReader();
        file_gambar.readAsDataURL(gambar.files[0]);

        file_gambar.onload = function (e) {
            preview_gambar.src = e.target.result;
        }
    }
</script>

</body>

</html>