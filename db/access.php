<?php

$capabilities = array(
    'format/progresstopics:viewprogress' => array(
        'riskbitmask' => RISK_SPAM,
        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW
        )
    ),
);