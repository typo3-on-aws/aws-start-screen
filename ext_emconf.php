<?php

/*
 * TYPO3 Extension "AWS Start Screen"
 *
 * Author: Michael Schams <schams.net>
 * https://t3rrific.com/typo3-on-aws/
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'AWS Start Screen',
    'description' => 'TYPO3 site package that provides a simple start screen with basic information about the TYPO3-on-AWS instance.',
    'category' => 'fe',
    'author' => 'Michael Schams <schams.net>',
    'author_email' => '',
    'author_company' => 'schams.net',
    'version' => '12.0.0',
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
