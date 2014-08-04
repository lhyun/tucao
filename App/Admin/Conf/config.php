<?php
	return array(
		'RBAC_SUPERADMIN' => 'admin',
		'ADMIN_AUTH_KEY' => 'superadmin',
		'USER_AUTH_ON' => true,
		'USER_AUTH_TYPE' => 1,
		'USER_AUTH_KEY' => 'uid',
		'NOT_AUTH_MODULE' => 'Index',
		'NOT_AUTH_ACTION' =>'',
		'RBAC_ROLE_TABLE' => 'hd_role',
		'RBAC_USER_TABLE' => 'hd_role_user',
		'RBAC_ACCESS_TABLE' => 'hd_access',
		'RBAC_NODE_TABLE' => 'hd_node',

		'TMPL_PARSE_STRING' => array(
			'__PUBLIC__'=>__ROOT__. '/App/Admin/Public',
		),
		'URL_HTML_SUFFIX' => '',
	);
?>