[cgi-fix-pathinfo-issue](https://serverfault.com/questions/627903/is-the-php-option-cgi-fix-pathinfo-really-dangerous-with-nginx-php-fpm)


; cgi.fix_pathinfo provides *real* PATH_INFO/PATH_TRANSLATED support for CGI.  PHP's
; previous behaviour was to set PATH_TRANSLATED to SCRIPT_FILENAME, and to not grok
; what PATH_INFO is.  For more information on PATH_INFO, see the cgi specs.  Setting
; this to 1 will cause PHP CGI to fix its paths to conform to the spec.  A setting
; of zero causes PHP to behave as before.  Default is 1.  You should fix your scripts
; to use SCRIPT_FILENAME rather than PATH_TRANSLATED.
; http://php.net/cgi.fix-pathinfo
cgi.fix_pathinfo=0


cgi.fix_pathinfo boolean
Provides real PATH_INFO/ PATH_TRANSLATED support for CGI. PHP's previous behaviour was to set PATH_TRANSLATED to SCRIPT_FILENAME, and to not grok what PATH_INFO is. For more information on PATH_INFO, see the CGI specs. Setting this to 1 will cause PHP CGI to fix its paths to conform to the spec. A setting of zero causes PHP to behave as before. It is turned on by default. You should fix your scripts to use SCRIPT_FILENAME rather than PATH_TRANSLATED.


----

> php-fpm.d/www.conf

; Limits the extensions of the main script FPM will allow to parse. This can
; prevent configuration mistakes on the web server side. You should only limit
; FPM to .php extensions to prevent malicious users to use other extensions to
; execute php code.
; Note: set an empty value to allow all extensions.
; Default Value: .php
;security.limit_extensions = .php .php3 .php4 .php5 .php7



----

[root@VM_0_6_centos etc]# sudo systemctl start php-fpm
[root@VM_0_6_centos etc]# service php-fpm status
Redirecting to /bin/systemctl status php-fpm.service
● php-fpm.service - The PHP FastCGI Process Manager
   Loaded: loaded (/usr/lib/systemd/system/php-fpm.service; disabled; vendor preset: disabled)
   Active: active (running) since Tue 2020-03-24 15:17:30 CST; 14s ago
 Main PID: 31538 (php-fpm)
   Status: "Processes active: 0, idle: 5, Requests: 0, slow: 0, Traffic: 0req/sec"
   CGroup: /system.slice/php-fpm.service
           ├─31538 php-fpm: master process (/etc/php-fpm.conf)
           ├─31539 php-fpm: pool www
           ├─31540 php-fpm: pool www
           ├─31541 php-fpm: pool www
           ├─31542 php-fpm: pool www
           └─31543 php-fpm: pool www

Mar 24 15:17:30 VM_0_6_centos systemd[1]: Starting The PHP FastCGI Process Manager...
Mar 24 15:17:30 VM_0_6_centos systemd[1]: Started The PHP FastCGI Process Manager.

