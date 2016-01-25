
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- .row -->
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                <?= $patient_surname ?> <?= strtoupper($patient_name); ?>
            </h1>

        </div>
    </div>
    <!-- /.row -->

    <!-- MAP -->
      <div class="col-xs-6 col-xs-offset-3">
        <h2 class="page-header">New Treatment</h2>
        <div class="col-xs-offset-2">
        <img class="jaw" src="<?= base_url();?>assets/images/permanent_number_chart.jpg" usemap="#jaw" >
            <map id="jaw" name="jaw">
                <?php foreach($tooth_file as $r):?>
                    <area <?php if($r->tooth_extracted==1):?>data-maphilight='{"stroke":false,"fillColor":"0000000","alwaysOn":true ,"fillOpacity":0.6}' <?php else : ?>href="<?= site_url('/Staff_c/newJobDone/'.$r->id_tooth.'/'.$id_patient);?>" <?php endif;?> shape="poly" title="Tooth <?= $r->id_tooth?>" coords="<?= $r->tooth_coordinates?>"/>
                <?php endforeach;?>
            </map>
        </div>
    </div>


    <!-- MAP -->

    <div class="col-xs-4 col-xs-offset-5">
        <br>
        <a href="<?= site_url('/Staff_c/patientFile/'.$id_patient);?>" class="btn btn-xs btn-danger" style="padding: 10px 55px;" name="sub_new">Cancel</a>
    </div>

