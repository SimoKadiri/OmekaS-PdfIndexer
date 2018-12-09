<?php
	return array(
		'contollers' => array(
			'invokables' => array(
				'KeywordsCloud\Controller\KeywordsCloud' => 'KeywordsCloud\Controller\KeywordsCloudController',
			),
		),
		'view_manager' => array(
			'template_path_stack' => array(,
			'cloud' => __DIR__ . '/../view'
			),	
		),
	);
?>