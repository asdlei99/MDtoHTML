<!DOCTYPE html>
<html lang="zh-cmn-Hans" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>MDtoHTML</title>
	<meta name="generator" content="EverEdit" />
	<meta name="author" content="" />
	<meta name="keywords" content="MDtoHTML,markdown" />
	<meta name="description" content="MDtoHTML快速将Markdown文件转换为HTML" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.bootcss.com/highlight.js/9.12.0/styles/github.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://libs.xiaoz.top/layui-v2.2.5/layui/css/layui.css">
	<link rel="stylesheet" href="static/style.css">
</head>
<body>
	<div id="container" class = "layui-bg-gray">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-lg8 layui-col-sm12 layui-col-xs12 layui-col-md12 layui-col-md-offset2">
					<div class="md-html">
						<?php echo $html; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<p>&copy;2018 本文档使用 <a href="https://markdown.win/" target = "_blank">MDtoHTML</a> 构建 | The author <a href="https://www.xiaoz.me/" target = "_blank" title = "小z博客">xiaoz</a></p>
	</div>
	<script src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>