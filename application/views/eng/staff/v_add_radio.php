
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

    <!-- FORM -->
    <?php echo form_open_multipart('Staff_c/confirmAddRadio/'.$id_patient);?>
    <div class="col-xs-6 col-xs-offset-3">
        <h2 class="page-header">Add Radio</h2>

        <div class="form-group">
            <label for="name_radio">Title</label>
            <input type="text" class="form-control" name="name_radio" value="<?= set_value('name_radio');?>">
        </div>
        <?php echo form_error('name_radio','<small style="color: red;"><i>',"</i></small>");?>

        <div class="form-group">
            <label for="comment_radio" >Comment</label>
            <textarea class="form-control" name="comment_radio" value="<?= set_value('comment_radio');?>"></textarea>
        </div>
        <?php echo form_error('comment_radio','<small style="color: red;"><i>',"</i></small>");?>

        <div class="form-group">
            <label for="img_radio" >Radio</label>
            <input type="file" name="img_radio" size="20">
        </div>
        <small style="color: red;"><i><?php echo $error;?></i></small>
        <br>

    </div>


    <div class="col-xs-4 col-xs-offset-3">
        <input type="submit" class="btn btn-xs btn-success" style="padding: 10px 55px;" name="sub_new" value="Confirm">
    </div>
    <div class="col-xs-3">
        <a href="<?= site_url('/Staff_c/patientFile/'.$id_patient);?>" class="btn btn-xs btn-danger" style="padding: 10px 55px;" name="sub_new">Cancel</a>
    </div>
    </form>
    <!-- FORM -->
</div>