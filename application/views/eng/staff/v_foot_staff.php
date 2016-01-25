<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.js"></script>
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
    var dateObject;
    var controller = 'Ajax_c';
    var base_url = '<?php echo site_url();?>';

    $(function() {
        $( "#datepicker" ).datepicker({
            numberOfMonths: 2,

            onSelect: function()
            {

                dateObject = $(this).datepicker('getDate');

                $.ajax({
                        'url': base_url + '/' + controller + '/get_appointment/',
                        'type': 'POST', //the way you want to send data to your URL

                        'data': {'date': dateObject},

                        'success': function (data) { //probably this request will return anything, it'll be put in var "data"
                            var container = $('#appointment'); //jquery selector (get element by id)
                            if (data) {
                                container.html(data);
                            }
                        }
                });
            }
        });

        if(document.getElementById('datepicker')!=null){

            dateObject = new Date();

            $.ajax({
                'url': base_url + '/' + controller + '/get_appointment/',
                'type': 'POST', //the way you want to send data to your URL

                'data': {'date': dateObject},

                'success': function (data) { //probably this request will return anything, it'll be put in var "data"
                    var container = $('#appointment'); //jquery selector (get element by id)
                    if (data) {
                        container.html(data);
                    }
                }
            });
        }
    });

    //MAP JAW
    $(function() {
        $('.jaw').maphilight();
    });

    //VIEW TABLE PATIENT
    $(document).ready(function() {
        $('#dataTables-patients').DataTable({
            responsive: true
        });
    });

    //VIEW TABLE STAFF
    $(document).ready(function() {
        $('#dataTables-staff').DataTable({
            responsive: true
        });
    });

    //VIEW TABLE APPOINTMENT
    $(document).ready(function() {
        $('#dataTables-appointment').DataTable({
            responsive: true

        });
    });

    //VIEW TABLE TYPE OF TREATMENT
    $(document).ready(function() {
        $('#dataTables-type').DataTable({
            responsive: true

        });
    });

    //VIEW TABLE TREATMENT
    $(document).ready(function() {
        $('#dataTables-treatment').DataTable({
            responsive: true

        });
    });

    //VIEW TABLE ARTICLE
    $(document).ready(function() {
        $('#dataTables-articles').DataTable({
            responsive: true

        });
    });


    $('.tooltip_action').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    });



    //AJAX MAP TOOTH
    function load_job_done(idPatient,idTooth){
        $.ajax({
            'url' : base_url + '/' + controller + '/get_job_done/' + idPatient + '/' + idTooth,
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

    //AJAX UNIFINISHED JOBS
    function load_unfinished_job(idPatient){
        $.ajax({
            'url' : base_url + '/' + controller + '/getUnfinishedJob/'+ idPatient,
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

    //AJAX JOBS LAST APPOINTMENT
    function load_all_jobs(idPatient){
        $.ajax({
            'url' : base_url + '/' + controller + '/getAllJobs/'+ idPatient,
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


    //AJAX EDIT INVOICE
    function edit_invoice(idInvoice,idPatient){
        var tabJob = document.getElementsByClassName("JobDone");
        var tabJobChecked = [];
        var tabJobUnchecked = [];

        for(var i=0;i<tabJob.length;i++){
            if(tabJob[i].checked == true){
                tabJobChecked.push(tabJob[i].value);
            }else{
                tabJobUnchecked.push(tabJob[i].value);
            }
        }

        if(tabJobChecked==""){
            element = document.getElementById('error');
            element.innerHTML = '<small style="color: red;"><i>You must check at least one job done</i></small>';
        }else{
            $.ajax({
                'url' : base_url + '/' + controller + '/confirmEditInvoice',
                'type' : 'POST', //the way you want to send data to your URL

                'data' : {'jobChecked':tabJobChecked,'jobUnchecked':tabJobUnchecked,'idPatient':idPatient,'idInvoice':idInvoice} ,

                'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                    document.location.replace(data);
                }
            });
        }


    }

    //SLIDER RADIO
    jQuery(document).ready(function ($) {
        var options = {
            $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
            $Loop: 0,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1

            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 5, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                $Loop: 2,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                $AutoCenter: 3,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                $SpacingX: 4,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                $SpacingY: 4,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                $DisplayPieces: 4,                              //[Optional] Number of pieces to display, default value is 1
                $ParkingPosition: 0,                            //[Optional] The offset position to park thumbnail
                $Orientation: 2,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                $DisableDrag: false                             //[Optional] Disable drag or not, default value is false
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                var sliderWidth = parentWidth;

                //keep the slider width no more than 810
                sliderWidth = Math.min(sliderWidth, 810);

                jssor_slider1.$ScaleWidth(sliderWidth);
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });


</script>

<!-- /#page-wrapper -->
</div>

</body>

</html>
