<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后盾网文章管理系统</title>
<link href="<?php echo base_url() . 'style/index/' ?>css/category.css" rel="stylesheet" />
<?php $this->load->view('index/head') ?>
<div id="main">
		<div class='news'>

			<?php foreach($article as $v): ?>
			<div class='newsList'>
				<div class='newsImage'>
					<a href="<?php echo site_url('a/' . $v['aid']) ?>"><img src="<?php echo base_url() . 'uploads/' . $v['thumb'] ?>"/></a>
				</div>
				<div class='newsContent'>
					<h3><a href="<?php echo site_url('a/' . $v['aid']) ?>"><?php echo $v['title'] ?></a></h3>
					<p><?php echo $v['info'] ?></p>
					<a href="<?php echo site_url('a/' . $v['aid']) ?>" class='more'>更多>></a>
				</div>
			</div>
			<?php endforeach ?>

		</div>
		<?php $this->load->view('index/right') ?>
	</div>

		<?php $this->load->view('index/foot') ?>
</body>
</html>