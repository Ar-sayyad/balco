<script src="<?php echo base_url();?>piadmin/js/lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/bootstrap/js/popper.min.js"></script>

<script src="<?php echo base_url();?>piadmin/js/jquery-3.3.1.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>piadmin/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>piadmin/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>piadmin/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>piadmin/js/sidebarmenu.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/sweetalert/sweetalert.min.js"></script>

<script src="<?php echo base_url();?>piadmin/js/amcharts.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/chart-amchart/serial.js"></script>
 <script src="<?php echo base_url();?>piadmin/js/lib/chart-amchart/black.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/chart-amchart/light.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/chart-amchart/ammap.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/chart-amchart/pie.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/chart-amchart/gauge.js"></script>
<script src="<?php echo base_url();?>piadmin/js/custom.min.js"></script>    
<script src="<?php echo base_url();?>piadmin/js/lib/datatables/datatables.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>piadmin/js/lib/datatables/datatables-init.js"></script>
<script src="<?php echo base_url();?>piadmin/js/app.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>piadmin/js/notifications/js/lobibox.min.js"></script>
  <script src="<?php echo base_url();?>piadmin/js/notifications/js/notifications.min.js"></script>
  <script src="<?php echo base_url();?>piadmin/js/notifications/js/notification-custom-script.js"></script>
  
<script type="text/javascript">
    var button = document.querySelector('#fullscreen');
    button.addEventListener('click', fullscreen);
//    document.addEventListener('keydown', function (e) {
//        console.log('key press' + e.keyCode);
//    });
    // detect enter or exit fullscreen mode
    document.addEventListener('webkitfullscreenchange', fullscreenChange);
    document.addEventListener('mozfullscreenchange', fullscreenChange);
    document.addEventListener('fullscreenchange', fullscreenChange);
    document.addEventListener('MSFullscreenChange', fullscreenChange);

    function fullscreen() {
        // check if fullscreen mode is available
        if (document.fullscreenEnabled ||
          document.webkitFullscreenEnabled ||
          document.mozFullScreenEnabled ||
          document.msFullscreenEnabled) {

            // which element will be fullscreen
            var iframe = document.querySelector('#frame');
            // Do fullscreen
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.webkitRequestFullscreen) {
                iframe.webkitRequestFullscreen();
            } else if (iframe.mozRequestFullScreen) {
                iframe.mozRequestFullScreen();
            } else if (iframe.msRequestFullscreen) {
                iframe.msRequestFullscreen();
            }
        }
        else {
            document.querySelector('.error').innerHTML = 'Your browser is not supported';
        }
    }

    function fullscreenChange() {
        if (document.fullscreenEnabled ||
             document.webkitIsFullScreen ||
             document.mozFullScreen ||
             document.msFullscreenElement) {
            console.log('enter fullscreen');
        }
        else {
            console.log('exit fullscreen');
        }
        // force to reload iframe once to prevent the iframe source didn't care about trying to resize the window
        // comment this line and you will see
        var iframe = document.querySelector('iframe');
        iframe.src = iframe.src;
    }
</script>
