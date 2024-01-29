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

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3-on-AWS Start Screen',
    'description' => 'TYPO3 site package that provides a simple start screen with basic information about the TYPO3-on-AWS instance.',
    'category' => 'fe',
    'author' => 'Michael Schams <schams.net>',
    'author_email' => '',
    'author_company' => 'schams.net',
    'version' => '13.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
            'fluid_styled_content' => '13.0.0-13.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ]
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];
