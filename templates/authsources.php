<?php

// this authsources.conf is workign for 1.12. It might need updates for
// different versions

$config = array(

        // This is a authentication source which handles admin authentication.
        'admin' => array(
                'core:AdminPassword',
        ),

        'FORGEldap' => array(
                'ldap:LDAP',
                'hostname' => 'ldaps://localhost',
                'enable_tls' => TRUE,
                'debug' => TRUE,
                'timeout' => 0,
                'referrals' => TRUE,
                'attributes' => NULL,
                'dnpattern' => 'cn=%username%,ou=accounts,dc=forgeservicelab,dc=fi',
                'search.enable' => FALSE,
                'search.base' => 'ou=accounts,dc=example,dc=org',
                'search.attributes' => array('uid', 'mail'),
                'search.username' => NULL,
                'search.password' => NULL,
                'priv.read' => TRUE,
                'priv.username' => 'cn=binder,ou=accounts,dc=forgeservicelab,dc=fi',
                'priv.password' => '{{ simplesamlphp_ldap_binder_password }}',

        ),

);
