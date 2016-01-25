<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Articles
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
                <a href="<?=site_url('/Staff_c/newArticle/')?>">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">New</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-list fa-fw"></i> List of articles
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <div class="dataTable_wrapper" >

                            <table class="table table-bordered table-striped" id="dataTables-articles">
                                <thead>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Tab</th>
                                <th>Date of publication</th>
                                <th>Author</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </thead>
                                <tbody>
                                <?php foreach($articles as $r) :?>
                                    <tr>
                                        <td><?= $r->article_title ?></td>
                                        <td><?= word_limiter($r->article_content,5) ?> <i class="fa fa-search-plus" style="cursor: pointer" data-toggle="modal" data-target="#ModalArticle_<?= $r->id_article ;?>"></i></td>
                                        <td><?= $r->tab_name ?></td>
                                        <td><?= date("d-m-Y",strtotime($r->article_date)); ?></td>
                                        <td><?= $r->staff_surname.' '.strtoupper($r->staff_name) ?></td>
                                        <td class="text-center"><a href="<?=site_url('/Staff_c/editArticle/'.$r->id_article);?>"><i class="fa fa-2x fa-pencil"></i></a></td>
                                        <td class="text-center"><a href="<?=site_url('/Staff_c/deleteArticle/'.$r->id_article);?>" onclick="return confirm('Do you want delete this article ?');"><i class="fa fa-2x fa-trash"></i></a></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>

                            <?php foreach($articles as $r) :?>
                                <div class="modal fade" id="ModalArticle_<?= $r->id_article; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel"><?= $r->article_title;?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <?= $r->article_content ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            <?php endforeach;?>

                        </div>
                    </div>
            </div>
       </div>

