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
                'hostname' => 'ldaps://ldapproxy.forgeservicelab.fi',
                'enable_tls' => TRUE,
                'debug' => TRUE,
                'timeout' => 0,
                'referrals' => TRUE,
                'attributes' => NULL,
                'dnpattern' => 'cn=%username%,ou=people,dc=forgeservicelab,dc=fi',
                'search.enable' => FALSE,
                'search.base' => 'ou=people,dc=example,dc=org',
                'search.attributes' => array('uid', 'mail'),
                'search.username' => NULL,
                'search.password' => NULL,
                'priv.read' => TRUE,
                'priv.username' => 'cn=authenticator,ou=services,dc=forgeservicelab,dc=fi',
                'priv.password' => '{{ simplesamlphp_ldap_binder_password }}',

        ),

);
