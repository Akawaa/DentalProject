<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    New Article
                </h1>

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
                <a href="<?= site_url('/Staff_c/gallery');?>">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-reply fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Back</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- FORM -->
        <?php echo form_open_multipart('Staff_c/confirmAddPhoto') ?>
        <div class="col-lg-8 col-lg-offset-2">
            <h2 class="page-header">To add a photo in the gallery</h2>

            <div class="form-group">
                <label for="title_photo" >Title</label>
                <input type="text" class="form-control" name="title_photo" value="<?= set_value('title_photo');?>">
            </div>
            <?php echo form_error('title_photo','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="caption_photo">Caption</label>
                <input type="text" class="form-control" name="caption_photo" value="<?= set_value('title_photo');?>">
            </div>
            <?php echo form_error('caption_photo','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="img_photo" >Radio</label>
                <input type="file" name="img_photo" size="20">
            </div>
            <small style="color: red;"><i><?php echo $error;?></i></small>
        </div>

        <div class="col-lg-5 col-lg-offset-5">

            <input type="submit" class="btn btn-lg btn-success" style="padding: 10px 55px;" name="sub_new" value="Confirm">
            <br><br>
        </div>
        <?php echo form_close() ?>
        <!-- FORM -->
