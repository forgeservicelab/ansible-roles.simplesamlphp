# SimpleSamlPHP ansible role

Role installs simplesamlphp (https://simplesamlphp.org/) as Identity Provider, and binds it to a LDAP auth source. The LDAP source is configured in template, the whole authsource.php is supplied from template actually.

It works on Ubuntu, apache2 is web server.

To customize, you must edit the templates and think about parameters to pass.

## Usage

```
- role: simplesamlphp
  # SimpleSamlPHP admin password:
  simplesamlphp_admin_password: "{{ simplesamlphp_admin_password }}"
  # password for LDAP binding account
  simplesamlphp_ldap_binder_password: "{{ simplesamlphp_ldap_binder_password }}"
  # Sub-URI where you want to install the web app. If you pass "saml", the app
  # will be at "idp.example.org/saml". If you pass empty string, it will be at
  # root.
  simplesamlphp_suburi: "saml"

```


