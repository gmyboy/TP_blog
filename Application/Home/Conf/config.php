<?php
return array (
	    'DB_TYPE' => 'mysql',
		'DB_HOST' => 'qdm176236675.my3w.com',
		'DB_NAME' => 'qdm176236675_db',
		'DB_USER' => 'qdm176236675',
		'DB_PWD' => 'profe13956672835',
	
  //   	'DB_TYPE' => 'mysql',
		// 'DB_HOST' => 'localhost',
		// 'DB_NAME' => 'blog',
		// 'DB_USER' => 'root',
		// 'DB_PWD' => '',

	
		'DB_PORT' => '3306',
		'DB_PREFIX' => 'blog_',
		'TMPL_FILE_DEPR' => '_',//view/Index_index
		'URL_HTML_SUFFIX'=>'',//伪静态，去除访问url的html、php后缀
		//'ACTION_SUFFIX' => 'ACTION'//操作方法后缀
		//	'ACTION_BIND_CLASS' => true//操作方法绑定到类
		'URL_MODEL' => '2',//配置url路由模式

		//图片上传
		'UPLOAD_MAX_SIZE' => 2000000,	//最大上传大小
		'UPLOAD_PATH' => './Uploads/',	//文件上传保存路径
		'UPLOAD_EXTS' => array('jpg', 'jpeg', 'gif', 'png')	//允许上传文件的后缀
);