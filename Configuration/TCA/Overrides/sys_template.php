<?php

/*
 * TYPO3 Extension "AWS Start Screen"
 *
 * Author: Michael Schams <schams.net>
 * https://t3rrific.com/typo3-on-aws/
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
