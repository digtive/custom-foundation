                                </div>
                                <!-- end row template   -->
                            
                            </div>
                            <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html -->
                        <footer class="footer d-print-none">
                            <div class="container-fluid clearfix">
                                  <h5 class="d-block text-center text-sm-left d-sm-inline-block text-dark text-light">
                                      Copyright © 2019 Kantor Urusan Agama Kota Pekanbaru.
                                  </h5>
                            </div>
                        </footer>
                        <!-- partial -->
                        </div>
                    <!-- row-offcanvas ends -->
                    </div>
                <!-- page-body-wrapper ends -->
                </div>
                <!-- container-scroller -->
		
            <!-- plugins:js -->
            <script src="<?= site_url()?>assets/node_modules/jquery/dist/jquery.min.js"></script>
            <script src="<?= site_url()?>assets/js/app/uploader.js"></script>
            <script src="<?= site_url()?>assets/node_modules/popper.js/dist/umd/popper.min.js"></script>
            <script src="<?= site_url()?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="<?= site_url()?>assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
            <!-- endinject -->
            
            <!-- Plugin js for this page-->
            <script src="<?= site_url()?>assets/node_modules/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
            <script src="<?= site_url()?>assets/node_modules/chart.js/dist/Chart.min.js"></script>
            <script src="<?= site_url()?>assets/node_modules/raphael/raphael.min.js"></script>
            <script src="<?= site_url()?>assets/node_modules/morris.js/morris.min.js"></script>
            <script src="<?= site_url()?>assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
            <!-- End plugin js for this page-->
            
            <!-- inject:js -->
            <script src="<?= site_url()?>assets/js/off-canvas.js"></script>
            <script src="<?= site_url()?>assets/js/hoverable-collapse.js"></script>
            <script src="<?= site_url()?>assets/js/misc.js"></script>
            <script src="<?= site_url()?>assets/js/settings.js"></script>
            <script src="<?= site_url()?>assets/js/todolist.js"></script>
            <script src="<?= site_url()?>assets/js/app/berkas.js"></script>
            <script src="<?= site_url()?>assets/js/app/dataTables.min.js"></script>
            <script src="<?= site_url()?>assets/js/app/dataTables.bootstrap4.min.js"></script>
            <script src="<?= site_url()?>assets/js/app/jquery.easy-autocomplete.min.js"></script>
            <script src="<?= site_url()?>assets/js/app/berkasHandling.js"></script>
            <script src="<?= site_url()?>assets/js/app/dropify.min.js"></script>
            <!-- endinject -->

            <script type="text/javascript">
                $(document).ready(function () {
                    var idLang = '<?= site_url('assets/js/locale/idDataTables.json')?>';
                    $('#data-table').DataTable({
                        language: {
                            url: idLang
                        }
                    });

                    var alert = setTimeout(function () {
                        $('.alert-box').fadeOut('slow');
                    },2500);
                    
                    $('.dropify').dropify({
                        messages: {
                            'default': 'klik atau seret file kesini',
                            'replace': 'klik atau seret file kesini untuk mengganti file',
                            'remove':  'Ganti',
                            'error':   'Maaf, terjadi kesalahan.'
                        },
                        error: {
                            'fileSize': 'ukuran file melebihi batas ({{ value }} max).',
                            'minWidth': 'perbesar ukuran lebar berkas ({{ value }}}px min).',
                            'maxWidth': 'perkecil ukuran lebar berkas ({{ value }}}px max).',
                            'minHeight': 'perbesar ukuran tinggi berkas ({{ value }}}px min).',
                            'maxHeight': 'perkecil ukuran tinggi berkas ({{ value }}px max).',
                            'imageFormat': 'pilih format berkas lain, hanya diizinkan file ({{ value }} ).'
                        }
                    });
                    
                });
            </script>


            <!-- Custom js for this page-->
            <script src="<?= site_url()?>assets/js/dashboard.js"></script>
            <!-- End custom js for this page-->
		
		</body>
  
</html>
