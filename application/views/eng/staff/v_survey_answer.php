<!-- #page-wrapper -->
<div id="page-wrapper">

    <!-- .row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Survey</h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- .row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-clock-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <?php date_default_timezone_set('Europe/London');?>
                            <div class="huge hour" id="hour"></div>
                            <div class="day" id="day"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-lg-offset-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $patient->numberPatient.'/'.$patientTotal->numberPatientTotal; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- .row -->
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    How do you know our dental office ?
                </div>
                <div class="panel-body">
                    <div id="donut-question1"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    How do you make your appointments ?
                </div>
                <div class="panel-body">
                    <div id="donut-question2"></div>
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    On a scale from 0 to 5, how much do you rate the easiness to make an appointment ?
                </div>
                <div class="panel-body">
                    <div id="donut-question3"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    On a scale from 0 to 5, how much do you rate the quality of your welcome ?
                </div>
                <div class="panel-body">
                    <div id="donut-question4"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    On a scale from 0 to 5, how much do you rate the friendliness of our staff ?
                </div>
                <div class="panel-body">
                    <div id="donut-question5"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    On a scale from 0 to 5, how much do you rate the cleanness of the examination rooms ?
                </div>
                <div class="panel-body">
                    <div id="donut-question6"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    On a scale from 0 to 5, how much do you rate experience of our staff ?
                </div>
                <div class="panel-body">
                    <div id="donut-question7"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    On a scale from 0 to 5, how much do you rate globally your appointment(s) ?
                </div>
                <div class="panel-body">
                    <div id="donut-question8"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    On a scale from 0 to 5, how much do you rate accessibility/ergonomic of our web site ?
                </div>
                <div class="panel-body">
                    <div id="donut-question9"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Do you have additional remarks ?
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-hover table-striped table-bordered" id="dataTables-remarks">
                            <thead>
                                <tr>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($q10 as $r): ?>
                                <tr>
                                    <td><?= $r->survey_answer10; ?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- jQuery -->
<script src="<?php echo base_url();?>assets/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>assets/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url();?>assets/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>assets/js/sb-admin-2.js"></script>

<script src="<?php echo base_url();?>assets/raphael/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/morrisjs/morris.min.js"></script>

<script>

    //VIEW TABLE REMARKS
    $(document).ready(function() {
        $('#dataTables-remarks').DataTable({
            responsive: true
        });
    });

//DONUT QUESTION 1
Morris.Donut({
element: 'donut-question1',
data: [
{label: "Friend", value: <?php $a1q1=($q1a1->q1a1/$patient->numberPatient)*100; echo round($a1q1,0); ?>},
{label: "Family", value: <?php $a2q1=($q1a2->q1a2/$patient->numberPatient)*100; echo round($a2q1,0); ?>},
{label: "Internet", value: <?php $a3q1=($q1a3->q1a3/$patient->numberPatient)*100; echo round($a3q1,0); ?>},
{label: "Advertisement", value: <?php $a4q1=($q1a4->q1a4/$patient->numberPatient)*100; echo round($a4q1,0); ?>},
{label: "Other", value: <?php $a5q1=($q1a5->q1a5/$patient->numberPatient)*100; echo round($a5q1,0); ?>}
],formatter: function (x) { return x + "%"}
});

//DONUT QUESTION 2
Morris.Donut({
element: 'donut-question2',
data: [
{label: "Phone", value: <?php $a1q2=($q2a1->q2a1/$patient->numberPatient)*100; echo round($a1q2,0); ?>},
{label: "Into dental office", value: <?php $a2q2=($q2a2->q2a2/$patient->numberPatient)*100; echo round($a2q2,0); ?>}
],formatter: function (x) { return x + "%"}
});

//DONUT QUESTION 3
Morris.Donut({
element: 'donut-question3',
data: [
{label: "Not satisfactory at all", value: <?php $a1q3=($q3a1->q3a1/$patient->numberPatient)*100; echo round($a1q3,0); ?>},
{label: "Very unsatisfactory", value: <?php $a2q3=($q3a2->q3a2/$patient->numberPatient)*100; echo round($a2q3,0); ?>},
{label: "Unsatisfactory", value: <?php $a3q3=($q3a3->q3a3/$patient->numberPatient)*100; echo round($a3q3,0); ?>},
{label: "Moderatly satisfactory", value: <?php $a4q3=($q3a4->q3a4/$patient->numberPatient)*100; echo round($a4q3,0); ?>},
{label: "Satisfactory", value: <?php $a5q3=($q3a5->q3a5/$patient->numberPatient)*100; echo round($a5q3,0); ?>},
{label: "Hightly satisfactory", value: <?php $a6q3=($q3a6->q3a6/$patient->numberPatient)*100; echo round($a6q3,0);  ?>}
],formatter: function (x) { return x + "%"}
});

//DONUT QUESTION 4
Morris.Donut({
element: 'donut-question4',
data: [
{label: "Not satisfactory at all", value: <?php $a1q4=($q4a1->q4a1/$patient->numberPatient)*100; echo round($a1q4,0); ?>},
{label: "Very unsatisfactory", value: <?php $a2q4=($q4a2->q4a2/$patient->numberPatient)*100; echo round($a2q4,0); ?>},
{label: "Unsatisfactory", value: <?php $a3q4=($q4a3->q4a3/$patient->numberPatient)*100;echo round($a3q4,0); ?>},
{label: "Moderatly satisfactory", value: <?php $a4q4=( $q4a4->q4a4/$patient->numberPatient)*100;echo round($a4q4,0); ?>},
{label: "Satisfactory", value: <?php $a5q4=($q4a5->q4a5/$patient->numberPatient)*100;echo round($a5q4,0); ?>},
{label: "Hightly satisfactory", value: <?php $a6q4=($q4a6->q4a6/$patient->numberPatient)*100;echo round($a6q4,0); ?>}
],formatter: function (x) { return x + "%"}
});

//DONUT QUESTION 5
Morris.Donut({
element: 'donut-question5',
data: [
{label: "Not satisfactory at all", value: <?php $a1q5=($q5a1->q5a1/$patient->numberPatient)*100;echo round($a1q5,0); ?>},
{label: "Very unsatisfactory", value: <?php $a2q5=($q5a2->q5a2/$patient->numberPatient)*100;echo round($a2q5,0); ?>},
{label: "Unsatisfactory", value: <?php $a3q5=($q5a3->q5a3/$patient->numberPatient)*100;echo round($a3q5,0); ?>},
{label: "Moderatly satisfactory", value: <?php $a4q5=($q5a4->q5a4/$patient->numberPatient)*100;echo round($a4q5,0); ?>},
{label: "Satisfactory", value: <?php $a5q5=($q5a5->q5a5/$patient->numberPatient)*100;echo round($a5q5,0); ?>},
{label: "Hightly satisfactory", value: <?php $a6q5=($q5a6->q5a6/$patient->numberPatient)*100;echo round($a6q5,0); ?>}
],formatter: function (x) { return x + "%"}
});

//DONUT QUESTION 6
Morris.Donut({
element: 'donut-question6',
data: [
{label: "Not satisfactory at all", value: <?php $a1q6=($q6a1->q6a1/$patient->numberPatient)*100;echo round($a1q6,0); ?>},
{label: "Very unsatisfactory", value: <?php $a2q6=($q6a2->q6a2/$patient->numberPatient)*100;echo round($a2q6,0); ?>},
{label: "Unsatisfactory", value: <?php $a3q6=($q6a3->q6a3/$patient->numberPatient)*100;echo round($a3q6,0); ?>},
{label: "Moderatly satisfactory", value: <?php $a4q6=($q6a4->q6a4/$patient->numberPatient)*100;echo round($a4q6,0); ?>},
{label: "Satisfactory", value: <?php $a5q6=($q6a5->q6a5/$patient->numberPatient)*100;echo round($a5q6,0); ?>},
{label: "Hightly satisfactory", value: <?php $a6q6=($q6a6->q6a6/$patient->numberPatient)*100;echo round($a6q6,0); ?>}
],formatter: function (x) { return x + "%"}
});

//DONUT QUESTION 7
Morris.Donut({
element: 'donut-question7',
data: [
{label: "Not satisfactory at all", value: <?php $a1q7=($q7a1->q7a1/$patient->numberPatient)*100;echo round($a1q7,0); ?>},
{label: "Very unsatisfactory", value: <?php $a2q7=($q7a2->q7a2/$patient->numberPatient)*100;echo round($a2q7,0); ?>},
{label: "Unsatisfactory", value: <?php $a3q7=($q7a3->q7a3/$patient->numberPatient)*100; echo round($a3q7,0);?>},
{label: "Moderatly satisfactory", value: <?php $a4q7=($q7a4->q7a4/$patient->numberPatient)*100;echo round($a4q7,0); ?>},
{label: "Satisfactory", value: <?php $a5q7=($q7a5->q7a5/$patient->numberPatient)*100;echo round($a5q7,0); ?>},
{label: "Hightly satisfactory", value: <?php $a6q7=($q7a6->q7a6/$patient->numberPatient)*100;echo round($a6q7,0); ?>}
],formatter: function (x) { return x + "%"}
});

//DONUT QUESTION 8
Morris.Donut({
element: 'donut-question8',
data: [
{label: "Not satisfactory at all", value: <?php $a1q8=($q8a1->q8a1/$patient->numberPatient)*100;echo round($a1q8,0);  ?>},
{label: "Very unsatisfactory", value: <?php $a2q8=($q8a2->q8a2/$patient->numberPatient)*100;echo round($a2q8,0);  ?>},
{label: "Unsatisfactory", value: <?php $a3q8=($q8a3->q8a3/$patient->numberPatient)*100;echo round($a3q8,0); ?>},
{label: "Moderatly satisfactory", value: <?php $a4q8=($q8a4->q8a4/$patient->numberPatient)*100;echo round($a4q8,0); ?>},
{label: "Satisfactory", value: <?php $a5q8=($q8a5->q8a5/$patient->numberPatient)*100; echo round($a5q8,0); ?>},
{label: "Hightly satisfactory", value: <?php $a6q8=($q8a6->q8a6/$patient->numberPatient)*100; echo round($a6q8,0); ?>}
], formatter: function (x) { return x + "%"}
});

//DONUT QUESTION 9
Morris.Donut({
element: 'donut-question9',
data: [
{label: "Not satisfactory at all", value: <?php $a1q9=($q9a1->q9a1/$patient->numberPatient)*100;echo round($a1q9,0);  ?>},
{label: "Very unsatisfactory", value: <?php $a2q9=($q9a2->q9a2/$patient->numberPatient)*100;echo round($a2q9,0);  ?>},
{label: "Unsatisfactory", value: <?php $a3q9=($q9a3->q9a3/$patient->numberPatient)*100; echo round($a3q9,0); ?>},
{label: "Moderatly satisfactory", value: <?php $a4q9=($q9a4->q9a4/$patient->numberPatient)*100;echo round($a4q9,0);  ?>},
{label: "Satisfactory", value: <?php $a5q9=($q9a5->q9a5/$patient->numberPatient)*100; echo round($a5q9,0);?>},
{label: "Hightly satisfactory", value: <?php $a6q9=($q9a6->q9a6/$patient->numberPatient)*100;echo round($a6q9,0);  ?>}
],formatter: function (x) { return x + "%"}
});
</script>

<!-- /#page-wrapper -->
</div>

</body>

</html>
