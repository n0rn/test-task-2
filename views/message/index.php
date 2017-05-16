<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <?php foreach ($messages as $message):?>
	<div class="message">
		<h3 class="name"><?php echo $message['name']; ?></h3>
		<p class="email"><?php echo $message['email']; ?></p>
		<p class="time"><?php echo $message['date']; ?></p>
	</div>
    <?php endforeach;?>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
