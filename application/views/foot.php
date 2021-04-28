<footer>
	<div class="row">
		<div class="col-md-8">
			<marquee class="footer" onmouseover="stop();" onmouseout="start()">
				<?php
				foreach ($text_jalan as $text) { ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="<?php echo base_url('media/agenda/' . $text->img); ?>" height="20">&nbsp;&nbsp;<?php echo $text->text;
																										} ?>
			</marquee>
		</div>
		<div class="col-md-4">
			<?php
			if (empty($this->session->userdata('level'))) { ?>
				<a class="footer" href="<?php echo site_url('welcome/login/'); ?>">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? '</strong>' : '' ?></a>
				<a class="footer" href="<?php echo site_url('welcome/antrian/'); ?>">Nomer Antrian</a>
			<?php } else { ?>
				<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? '</strong>' : '' ?></p>
			<?php }
			?>
		</div>
	</div>
</footer>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

</body>

</html>