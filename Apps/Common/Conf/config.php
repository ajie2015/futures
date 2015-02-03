<?php
define('DEFAULT_THEME','bootstrap');	//default,nt,media,bootstrap
define('__PUBLIC__',SITE_PATH.'/Public');
return array(
	/** apps应用下面有home模块和admin模块
		本文件为两模块公共配置文件，私有配置进入模块下配置
		一个模块对应多个主题
		样式、图片、js文件按主题存放在Public目录下
		common目录为公共样式目录，下面不设模块
		最终目录名称为css、js、image均为小写
	*/

	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE' =>true,
	
	 //默认模块
	'DEFAULT_MODULE'     => 'Home',
	'URL_MODEL'          => '2', //URL模式
	
	//默认主题
	'DEFAULT_THEME' => DEFAULT_THEME,
	
	//布局
	'LAYOUT_ON'=>true,
	'LAYOUT_NAME'=>'layout',
	
	//路径替换
    'TMPL_PARSE_STRING'  =>	array(
		//'__PUBLIC__' => __ROOT__.'/Public', 							// 更改默认的/Public 替换规则
		'__JS__'     => __ROOT__.'/Public/'.DEFAULT_THEME.'/js', 		// 增加新的js路径替换规则
		'__CSS__'     => __ROOT__.'/Public/'.DEFAULT_THEME.'/css', 		// 增加新的css路径替换规则
		'__IMAGE__'     => __ROOT__.'/Public/'.DEFAULT_THEME.'/image', 	// 增加新的image路径替换规则
		'__ASSETS__'     => __ROOT__.'/Public/'.DEFAULT_THEME.'/assets', 	// 增加新的image路径替换规则
		'__FONTS__'     => __ROOT__.'/Public/'.DEFAULT_THEME.'/fonts', 	// 增加新的image路径替换规则
		'__UPLOAD__' => __ROOT__.'/Public/uploads', 					// 增加新的上传路径替换规则)
	),
	
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'futures',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '321714',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'lj_',    // 数据库表前缀
    

);