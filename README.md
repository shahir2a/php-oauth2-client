[![Build Status](https://travis-ci.org/fkooman/php-oauth2-client.svg?branch=master)](https://travis-ci.org/fkooman/php-oauth2-client)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fkooman/php-oauth2-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fkooman/php-oauth2-client/?branch=master)

# Introduction
This is a very simple to use OAuth 2.0 client. It has minimal dependencies.

**NOTE**: if you are not bound to PHP 5.4, you are probably better of using the 
OAuth 2.0 client of the League of Extraordinary Packages! It can be found 
[here](http://oauth2-client.thephpleague.com/).

# Features

* Simplicity
* Works with PHP >= 5.4
* Minimal dependencies;
* Supports OAuth refresh tokens.
* Easy integration with your own application and/or framework;
* Does not enforce a framework on you;
* Only "authorization code" profile support, will not implement anything else;
* Only conforming OAuth 2.0 servers will work, this library will not get out of 
  its way to deal with services that violate the OAuth 2.0 RFC;
* There will be no toggles to shoot yourself in the foot;
* Uses `paragonie/constant_time_encoding` for constant time encoding;
* Uses `paragonie/random_compat` polyfill for CSPRNG;

# API

The API is very simple to use. Below, the API is explained in more detail, see
the `example/` folder for a working example!

# Security

As always, make sure you understand what you are doing! Some resources:

* [The Fast Track to Safe and Secure PHP Sessions](https://paragonie.com/blog/2015/04/fast-track-safe-and-secure-php-sessions)
* [The OAuth 2.0 Authorization Framework](https://tools.ietf.org/html/rfc6749)
* [The OAuth 2.0 Authorization Framework: Bearer Token Usage](https://tools.ietf.org/html/rfc6750)
* [OAuth 2.0 Threat Model and Security Considerations](https://tools.ietf.org/html/rfc6819)
* [securityheaders.io](https://securityheaders.io/)

# License

[MIT](LICENSE).
