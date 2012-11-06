<?php echo HTML::script('js/site/timer.js') ?>
<script type="text/javascript">
$(function() {
	new Site.Timer('.timer');
});
</script>
<div class="timer span6">
	<header class="clearfix">
		<div class="left pull-left">
			<form>
				<h4 class="pull-left">Starting Hour: </h4>
				<input type="text" name="start" class="start-hour input pull-left" />
				<p  class="pull-left">in 24-hour time</p>
			<form>
		</div>
		<div class="pull-right">
			<span class="time input pull-right"></span>
			<p class="date pull-right"></p>
		</div>
	</header>
	<table class="bubbles striped">
		<thead>
			<th class="info">
				Click to fill in tasks and bubbles
			</th>
			<?php for ($j=0; $j<12; $j++): ?>
				<th class="<?php echo $j % 2 ? 'even' : 'odd' ?>">
					<div class="nowrap clearfix">
						<span class="hour start"></span>
						<i class="square"></i>
						<i class="square"></i>
						<i class="square"></i>
						<i class="square"></i>
						<span class="hour end"></span>
					</div>
				</th>
			<?php endfor ?>
		</thead>
		<tbody>
		<?php for ($i=0; $i<10; $i++): ?>
			<tr>
				<td class="info">
					<input type="text" name="task-<?php echo $i ?>" class="start-hour input pull-left" />
				</td>
				<?php for ($j=0; $j<12; $j++): ?>
					<td class="<?php echo $j % 2 ? 'even' : 'odd' ?>">
						<div class="nowrap clearfix">
							<i class="bubble sprite"></i>
							<i class="bubble sprite"></i>
							<i class="bubble sprite"></i>
							<i class="bubble sprite"></i>
						</div>
					</td>
				<?php endfor ?>
			</tr>
		<?php endfor ?>
		</tbody>
	</table>
	<footer>
		<div class="row-fluid">
			<div class="span3">
			 <input type="checkbox" name="chime" /><label>Chime Every 15 Min</label>
		</div>
	</footer>
</div>

<script type="text/html">

</script>