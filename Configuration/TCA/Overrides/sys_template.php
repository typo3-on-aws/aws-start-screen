<?php

/*
 * This file is part of the TYPO3 CMS Extension "TYPO3-on-AWS Start Screen"
 * Extension author: Michael Schams <schams.net>
 *
 * Project: https://t3rrific.com/typo3-on-aws/
 * Sources: https://github.com/typo3-on-aws/aws_dashboard_widgets
 *
 * For copyright and license information, please read the LICENSE.txt
 * file distributed with this source code.
 */

defined('TYPO3') or die();

/**
 * Extension key
 */
$extensionKey = 'aws_start_screen';

/**
 * Add default TypoScript (constants and setup)
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	$extensionKey,
	'Configuration/TypoScript',
	//'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:typoscript_setup_name',
	'AWS Start Screen'
);
