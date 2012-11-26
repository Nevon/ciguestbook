<!doctype html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<h1><a href="<?php echo site_url('guestbook'); ?>">Guestbook</a></h1>
	<span class="errors"><?php echo validation_errors(); ?></span>
	<?php echo $form; ?>
	<?php foreach($posts as $post): ?>
		<article>
			<p><?php echo $post['text']; ?></p>
			<p class="author">Author: <?php echo $post['author']; ?></p>
		</article>
	<?php endforeach; ?>
	<hr>
</body>