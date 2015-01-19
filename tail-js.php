<script src="<?=DOKU_TPL?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var jQNew = $.noConflict(true);
</script>
<script src="<?=DOKU_TPL?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=DOKU_TPL?>js/sorttable.js" type="text/javascript"></script>
<script src="<?=DOKU_TPL?>js/script.js" type="text/javascript"></script>
<?php
// omit ga script code if tracking id is not set
// Google Analytics: Set this in your template settings.
// doku.php/start?do=admin&page=config#config___tpl____starter-bootstrap____google_analytics -->
if(!empty(tpl_getConf('google_analytics'))) {

?>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', '<?=tpl_getConf('google_analytics');?>', 'auto');
ga('send', 'pageview');
</script>

<?php } ?>
