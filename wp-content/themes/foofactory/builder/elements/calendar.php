<article class="<?php echo $vars['class'] ?>  molecule card">
<?php 
debug($vars); 
debug('wip - bower');
$vars['trigger_id'] = rand();

?>
 <div id="calendar<?php echo $vars['trigger_id'] ?>"></div>

</article>
<script type="text/javascript">
    var calendar = $('#calendar'<?php echo $vars['trigger_id']; ?>).calendar({language: 'xx-XX'});
</script>