

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= admin_public_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?= admin_public_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?= admin_public_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= admin_public_url('dist/js/adminlte.js')?>"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= admin_public_url('plugins/jquery-mousewheel/jquery.mousewheel.js')?>"></script>
<script src="<?= admin_public_url('plugins/raphael/raphael.min.js')?>"></script>
<script src="<?= admin_public_url('plugins/jquery-mapael/jquery.mapael.min.js')?>"></script>
<script src="<?= admin_public_url('plugins/jquery-mapael/maps/usa_states.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?= admin_public_url('plugins/chart.js/Chart.min.js')?>"></script>

<?php if (route(1) == 'settings'):?>
    <!-- Summernote -->
    <script src="<?= admin_public_url('plugins/summernote/summernote-bs4.min.js')?>"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote({
                'height' : 200,
            })
        })
    </script>
<?php endif;?>

<?php if (route(1) == 'add-menu'):?>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .container {
            margin: 150px auto;
        }

        body {
            background-color: #fafafa;
        }

        ol.example li.placeholder:before {
            position: absolute;
        }

        .list-group-item > div {
            margin-bottom: 5px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
    <script src="<?= admin_public_url('dist/menu/jquery-menu-editor.js'); ?>"></script>
    <script type="text/javascript" src="<?= admin_public_url('dist/menu/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js'); ?>"></script>
    <script>
        jQuery(document).ready(function () {
            // icon picker options
            var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};
            // sortable list options
            var sortableListOptions = {
                placeholderCss: {'background-color': "#cccccc"}
            };

            var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions});
            editor.setForm($('#frmEdit'));
            editor.setUpdateButton($('#btnUpdate'));

            $('#btnOutput').on('click', function () {

                var str = editor.getString();
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/cms/admin/add-menu',
                    data: {'data': str},
                    success: function (msg) {
                        console.log(msg)
                    }
                })

               $("#out").text(str);
            });

            $("#btnUpdate").click(function () {
                editor.update();
            });

            $('#btnAdd').click(function () {
                editor.add();
            });
        });
    </script>
<?php endif;?>


<!-- AdminLTE for demo purposes -->
<script src="<?= admin_public_url('dist/js/demo.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= admin_public_url('dist/js/pages/dashboard2.js')?>"></script>
</body>
</html>