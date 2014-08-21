<?php

$metadata['__DYNAMIC:1__'] = array(
    'host' => '__DEFAULT__',

    'privatekey' => '{{ simplesamlphp_cert_key }}',
    'certificate' => '{{ simplesamlphp_cert }}',
    'auth' => 'FORGEldap',
    'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
    'authproc' => array(
        100 => array('class' => 'core:AttributeMap', 'name2oid'),
    ),
);
