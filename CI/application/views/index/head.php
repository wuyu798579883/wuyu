<link href="<?php echo base_url() . 'style/index/' ?>css/common.css" rel="stylesheet" />
</head>	
<body>
	<div id="top">
	</div>
	<div id="header">
		<div class='logo'>
			<a href=""><img src="<?php echo base_url() . 'style/index/images/logo.jpg' ?>" alt=""></a>
		</div>
		<div class='navigation'>
			<a href="<?php echo site_url() .  'index/home/index'?>">首页</a>
			<?php foreach($category as $v): ?>
			<a href="<?php echo site_url('c/' . $v['cid'])?>"><?php echo $v['cname'] ?></a>
			<?php endforeach ?>
		</div>
	</div>