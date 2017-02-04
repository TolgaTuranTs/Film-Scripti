<?php defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunamamaktadır'); ?>
        <!-- Footer Alanı -->
        <footer class="footer text-right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        Admin Template : Uplon / PHP Coder : Tolga TURAN
                        <div style="float:right">
                            tolgaturants@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--#Footer Alanı -->


    </div> <!-- container -->

</div> <!-- End wrapper -->


    <!-- jQuery  -->
    <script src="<?php echo base_url('public/admin/'); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>js/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="<?php echo base_url('public/admin/'); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>js/waves.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>js/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>plugins/switchery/switchery.min.js"></script>
    <!--Morris Chart-->
    <script src="<?php echo base_url('public/admin/'); ?>plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>plugins/raphael/raphael-min.js"></script>
    <!-- Counter Up  -->
    <script src="<?php echo base_url('public/admin/'); ?>plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Etiket İnputu -->
    <script src="<?php echo base_url('public/admin/'); ?>plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
    <!-- Data Table -->
    <script src="<?php echo base_url('public/admin/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Ck Editör -->
    <script src="<?php echo base_url('public/admin/'); ?>plugins/ckeditor/ckeditor.js"></script>
    <!-- App js -->
    <script src="<?php echo base_url('public/admin/'); ?>js/jquery.core.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>js/jquery.app.js"></script>
    <!-- Page specific js -->
    <script src="<?php echo base_url('public/admin/'); ?>pages/jquery.dashboard.js"></script>
    <!-- Film Alternatif textarea Ekleme -->
    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 3; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div><label for="exampleInputEmail1">Alternatif İframe / Embed Kodu Ekle </label><textarea name="link[]" id="" style="width:100%;border:1px solid #ddd;border-radius:5px" rows="5"></textarea></fieldset><a href="" class="remove_field">Alternatifi Sil</a></div>'); //add input box
                }
            });
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script>


</body>
</html>
