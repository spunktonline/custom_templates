<?php

return array(
	'label' => array(
		'de' => array(
			'Mitarbeiter',
			'Eine Liste von Personen mit Foto, Name, E-Mail und Social-Media-Links',
		),
		'en' => array(
			'Staff',
			'A list of employees with picture, name email and social media links',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'standardFields' => array('headline', 'cssID'),
	'fields' => array(
		'members' => array(
			'label' => array(
				'de' => array(
					'Personen',
					'Fügen Sie eine beliebige Anzahl an Mitarbeitern ein.',
				),
				'en' => array(
					'Members',
					'Add any number of employees.',
				),
			),
			'elementLabel' => array(
				'de' => 'Mitarbeiter %s',
				'en' => 'Employee %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'image' => array(
					'label' => array(
						'de' => array('Profilbild', ''),
						'en' => array('Profile picture', ''),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'jpg,jpeg,png,gif,svg',
					),
				),
				'name' => array(
					'label' => array(
						'de' => array('Name', 'Vor- und Nachname des Mitarbeiters'),
						'en' => array('Name', 'First and last name of employee'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'email' => array(
					'label' => array(
						'de' => array('E-Mail', 'E-Mail-Addresse des Mitarbeiters'),
						'en' => array('Email', 'Email address of employee'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'socials' => array(
					'label' => array(
						'de' => array(
							'Social-Media-Profile',
							'Fügen Sie eine beliebige Anzahl an Social-Media-Profilen ein.',
						),
						'en' => array(
							'Social media profiles',
							'Add any number of social media profiles.',
						),
					),
					'elementLabel' => array(
						'de' => '%s. Social-Media-Profil',
						'en' => '%s. social media profile',
					),
					'inputType' => 'list',
					'fields' => array(
						'platform' => array(
							'label' => array(
								'de' => array('Social-Media-Plattform', ''),
								'en' => array('Social media platform', ''),
							),
							'inputType' => 'select',
							'options' => array(
								'facebook' => 'Facebook',
								'twitter' => 'Twitter',
								'gplus' => 'Google+',
								'xing' => 'Xing',
								'pinterest' => 'Pinterest',
								'linkedin' => 'LinkedIn',
							),
							'eval' => array('tl_class' => 'w50'),
						),
						'url' => array(
							'label' => array(
								'de' => array('Link', 'URL zur Profilseite auf der Social-Media-Plattform'),
								'en' => array('Link', 'URL of the social media profile'),
							),
							'inputType' => 'text',
							'eval' => array('tl_class' => 'w50'),
						),
					),
				),
			),
		),
	),
);
