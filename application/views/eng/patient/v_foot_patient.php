<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.maphilight.js"></script>


<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>assets/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url();?>assets/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>assets/js/sb-admin-2.js"></script>

<script>

    //MAP JAW
    $(function() {
        $('.jaw').maphilight();
    });

    //VIEW TABLE APPOINTMENTS
    $(document).ready(function() {
        $('#dataTables-appointments').DataTable({
            responsive: true
        });
    });

    //VIEW TABLE INVOICES
    $(document).ready(function() {
        $('#dataTables-invoices').DataTable({
            responsive: true
        });
    });
    var controller = 'Ajax_c';
    var base_url = '<?php echo site_url();?>';

    //AJAX MAP TOOTH
    function load_job_done(idPatient,idTooth){
        $.ajax({
            'url' : base_url + '/' + controller + '/get_job_done_patient/' + idPatient + '/' + idTooth,
            'type' : 'POST', //the way you want to send data to your URL

            'data' : {} ,

            'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                var container = $('#table_job_done'); //jquery selector (get element by id)
                if(data){
                    container.html(data);
                }
            }
        });
    }
</script>

<!-- /#page-wrapper -->
</div>

</body>

</html>
