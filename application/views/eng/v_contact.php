<div class="col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1">

    <h1 style="font-family: Open;">Opening Hours</h1>

    <table width="84%" cellpadding="0" cellspacing="0" style="color:grey;" class="table table-striped">
        <?php foreach($day as $r) : ?>
            <tr>
                <td height="20" valign="top" width="73%"><strong><?= $r->day ;?></strong></td>
                <td align="left" valign="top" width="27%"><?php if($r->beginning_day!=null){ echo date("H:i",strtotime($r->beginning_day)).''.$r->beginning.' - '.date("H:i",strtotime($r->end_day)).''.$r->end;}else{echo "Close";} ?> </td>
            </tr>
        <?php endforeach;?>
    </table>

        <?php foreach($articles as $r):?>
            <h1 style="font-family: Open"><?= $r->article_title ?></h1>
            <?= $r->article_content; ?>
        <?php endforeach;?>

</div>
