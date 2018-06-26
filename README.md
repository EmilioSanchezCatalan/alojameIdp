SimpleSAMLphp
=============
[![Build Status](https://travis-ci.org/simplesamlphp/simplesamlphp.svg?branch=master)](https://travis-ci.org/simplesamlphp/simplesamlphp)
[![Coverage Status](https://img.shields.io/coveralls/simplesamlphp/simplesamlphp.svg)](https://coveralls.io/r/simplesamlphp/simplesamlphp)

This is the official repository of the SimpleSAMLphp software.

* [SimpleSAMLphp homepage](https://simplesamlphp.org)
* [SimpleSAMLphp Downloads](https://simplesamlphp.org/download)

Please, [contribute](CONTRIBUTING.md)!

# SimpleSAML IDP
<VirtualHost *:80>
        ServerName idp.simplesaml.local
        DocumentRoot "/opt/lampp/htdocs/simplesamlIdp/www"
        SetEnv SIMPLESAMLPHP_CONFIG_DIR "/opt/lampp/htdocs/simplesamlIdp/config"
        Alias /simplesaml "/opt/lampp/htdocs/simplesamlIdp/www"
</VirtualHost>


