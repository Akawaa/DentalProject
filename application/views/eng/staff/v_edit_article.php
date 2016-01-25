<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Article
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
                <a href="<?= site_url('/Staff_c/articles');?>">
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
        <?php echo form_open('Staff_c/confirmEditArticle') ?>
        <div class="col-lg-8 col-lg-offset-2">
            <h2 class="page-header">To edit an article</h2>

            <input type="hidden" name="id_article" value="<?= $id_article; ?>">

            <div class="form-group">
                <label for="title_article" >Title</label>
                <input type="text" class="form-control" name="title_article" value="<?= set_value('title_article',$article_title);?>">
            </div>
            <?php echo form_error('title_article','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label>Tab</label>
                <select class="form-control" name="tab_article">
                    <?php foreach ($tab as $key=>$value) : ?>
                        <option value="<?php echo $key; ?>" <?php if($key==$id_tab) echo 'selected' ;?>>
                            <?= $value ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php echo form_error('tab_article','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="content_article">Article</label>
                <textarea name="content_article"><?= set_value('content_article',$article_content)?></textarea>
            </div>
            <?php echo form_error('content_article','<small style="color: red;"><i>',"</i></small>");?>
        </div>

        <div class="col-lg-5 col-lg-offset-5">

            <input type="submit" class="btn btn-lg btn-success" style="padding: 10px 55px;" name="sub_new" value="Update">
            <br><br>
        </div>
        <?php echo form_close() ?>
        <!-- FORM -->
