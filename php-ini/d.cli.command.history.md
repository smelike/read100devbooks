
[root@VM_0_6_centos ~]# yum install wget
Loaded plugins: fastestmirror, langpacks
Repository epel is listed more than once in the configuration
Loading mirror speeds from cached hostfile
 * remi-php73: mirror.innosol.asia
 * remi-safe: mirror.innosol.asia
Package wget-1.14-18.el7_6.1.x86_64 already installed and latest version
Nothing to do
[root@VM_0_6_centos ~]# wget http://repo.mysql.com/mysql-community-release-el7-5.noarch.rpm
--2020-03-25 18:41:04--  http://repo.mysql.com/mysql-community-release-el7-5.noarch.rpm
Resolving repo.mysql.com (repo.mysql.com)... 104.71.49.54
Connecting to repo.mysql.com (repo.mysql.com)|104.71.49.54|:80... connected.
HTTP request sent, awaiting response... 200 OK
Length: 6140 (6.0K) [application/x-redhat-package-manager]
Saving to: ‘mysql-community-release-el7-5.noarch.rpm’

100%[===========================================================================================================>] 6,140       5.32KB/s   in 1.1s

2020-03-25 18:41:06 (5.32 KB/s) - ‘mysql-community-release-el7-5.noarch.rpm’ saved [6140/6140]

[root@VM_0_6_centos ~]# ls
mysql-community-release-el7-5.noarch.rpm
[root@VM_0_6_centos ~]# sudo rpm -ivh mysql-community-release-el7-5.noarch.rpm
Preparing...                          ################################# [100%]
Updating / installing...
   1:mysql-community-release-el7-5    ################################# [100%]
[root@VM_0_6_centos ~]# yum update
Loaded plugins: fastestmirror, langpacks
Repository epel is listed more than once in the configuration
Loading mirror speeds from cached hostfile
 * remi-php73: mirrors.tuna.tsinghua.edu.cn
 * remi-safe: mirrors.tuna.tsinghua.edu.cn
mysql-connectors-community                                                                                                    | 2.5 kB  00:00:00
mysql-tools-community                                                                                                         | 2.5 kB  00:00:00
mysql56-community                                                                                                             | 2.5 kB  00:00:01
(1/3): mysql-tools-community/x86_64/primary_db                                                                                |  69 kB  00:00:01
(2/3): mysql56-community/x86_64/primary_db                                                                                    | 250 kB  00:00:03
(3/3): mysql-connectors-community/x86_64/primary_db                                                                           |  53 kB  00:00:10
Resolving Dependencies
--> Running transaction check
---> Package mariadb-libs.x86_64 1:5.5.64-1.el7 will be obsoleted
---> Package mysql-community-libs.x86_64 0:5.6.47-2.el7 will be obsoleting
--> Processing Dependency: mysql-community-common(x86-64) >= 5.6.10 for package: mysql-community-libs-5.6.47-2.el7.x86_64
--> Running transaction check
---> Package mysql-community-common.x86_64 0:5.6.47-2.el7 will be installed
--> Finished Dependency Resolution

Dependencies Resolved

=====================================================================================================================================================
 Package                                    Arch                       Version                           Repository                             Size
=====================================================================================================================================================
Installing:
 mysql-community-libs                       x86_64                     5.6.47-2.el7                      mysql56-community                     4.1 M
     replacing  mariadb-libs.x86_64 1:5.5.64-1.el7
Installing for dependencies:
 mysql-community-common                     x86_64                     5.6.47-2.el7                      mysql56-community                     289 k

Transaction Summary
=====================================================================================================================================================
Install  1 Package (+1 Dependent package)

Total download size: 4.3 M
Is this ok [y/d/N]: y
Downloading packages:
warning: /var/cache/yum/x86_64/7/mysql56-community/packages/mysql-community-libs-5.6.47-2.el7.x86_64.rpm: Header V3 DSA/SHA1 Signature, key ID 5072e1f5: NOKEY
Public key for mysql-community-libs-5.6.47-2.el7.x86_64.rpm is not installed
(1/2): mysql-community-libs-5.6.47-2.el7.x86_64.rpm                                                                           | 4.1 MB  00:00:18
mysql-community-common-5.6.47- FAILED
http://repo.mysql.com/yum/mysql-5.6-community/el/7/x86_64/mysql-community-common-5.6.47-2.el7.x86_64.rpm: [Errno 12] Timeout on http://repo.mysql.com/yum/mysql-5.6-community/el/7/x86_64/mysql-community-common-5.6.47-2.el7.x86_64.rpm: (28, 'Connection timed out after 30001 milliseconds')
Trying other mirror.
mysql-community-common-5.6.47- FAILED
http://repo.mysql.com/yum/mysql-5.6-community/el/7/x86_64/mysql-community-common-5.6.47-2.el7.x86_64.rpm: [Errno 12] Timeout on http://repo.mysql.com/yum/mysql-5.6-community/el/7/x86_64/mysql-community-common-5.6.47-2.el7.x86_64.rpm: (28, 'Connection timed out after 30001 milliseconds')
Trying other mirror.
(2/2): mysql-community-common-5.6.47-2.el7.x86_64.rpm                                                                         | 289 kB  00:00:11
-----------------------------------------------------------------------------------------------------------------------------------------------------
Total                                                                                                                 62 kB/s | 4.3 MB  00:01:11
Retrieving key from file:/etc/pki/rpm-gpg/RPM-GPG-KEY-mysql
Importing GPG key 0x5072E1F5:
 Userid     : "MySQL Release Engineering <mysql-build@oss.oracle.com>"
 Fingerprint: a4a9 4068 76fc bd3c 4567 70c8 8c71 8d3b 5072 e1f5
 Package    : mysql-community-release-el7-5.noarch (installed)
 From       : file:/etc/pki/rpm-gpg/RPM-GPG-KEY-mysql
 
 
----



[root@VM_0_6_centos ~]# ls
mysql-community-release-el7-5.noarch.rpm
[root@VM_0_6_centos ~]# sudo rpm -ivh mysql-community-release-el7-5.noarch.rpm
Preparing...                          ################################# [100%]
Updating / installing...
   1:mysql-community-release-el7-5    ################################# [100%]
[root@VM_0_6_centos ~]# yum update
Loaded plugins: fastestmirror, langpacks
Repository epel is listed more than once in the configuration
Loading mirror speeds from cached hostfile
 * remi-php73: mirrors.tuna.tsinghua.edu.cn
 * remi-safe: mirrors.tuna.tsinghua.edu.cn
mysql-connectors-community                                                                                                    | 2.5 kB  00:00:00
mysql-tools-community                                                                                                         | 2.5 kB  00:00:00
mysql56-community                                                                                                             | 2.5 kB  00:00:01
(1/3): mysql-tools-community/x86_64/primary_db                                                                                |  69 kB  00:00:01
(2/3): mysql56-community/x86_64/primary_db                                                                                    | 250 kB  00:00:03
(3/3): mysql-connectors-community/x86_64/primary_db                                                                           |  53 kB  00:00:10
Resolving Dependencies
--> Running transaction check
---> Package mariadb-libs.x86_64 1:5.5.64-1.el7 will be obsoleted
---> Package mysql-community-libs.x86_64 0:5.6.47-2.el7 will be obsoleting
--> Processing Dependency: mysql-community-common(x86-64) >= 5.6.10 for package: mysql-community-libs-5.6.47-2.el7.x86_64
--> Running transaction check
---> Package mysql-community-common.x86_64 0:5.6.47-2.el7 will be installed
--> Finished Dependency Resolution

Dependencies Resolved

=====================================================================================================================================================
 Package                                    Arch                       Version                           Repository                             Size
=====================================================================================================================================================
Installing:
 mysql-community-libs                       x86_64                     5.6.47-2.el7                      mysql56-community                     4.1 M
     replacing  mariadb-libs.x86_64 1:5.5.64-1.el7
Installing for dependencies:
 mysql-community-common                     x86_64                     5.6.47-2.el7                      mysql56-community                     289 k

Transaction Summary
=====================================================================================================================================================
Install  1 Package (+1 Dependent package)

Total download size: 4.3 M
Is this ok [y/d/N]: y
Downloading packages:
warning: /var/cache/yum/x86_64/7/mysql56-community/packages/mysql-community-libs-5.6.47-2.el7.x86_64.rpm: Header V3 DSA/SHA1 Signature, key ID 5072e1f5: NOKEY
Public key for mysql-community-libs-5.6.47-2.el7.x86_64.rpm is not installed
(1/2): mysql-community-libs-5.6.47-2.el7.x86_64.rpm                                                                           | 4.1 MB  00:00:18
mysql-community-common-5.6.47- FAILED
http://repo.mysql.com/yum/mysql-5.6-community/el/7/x86_64/mysql-community-common-5.6.47-2.el7.x86_64.rpm: [Errno 12] Timeout on http://repo.mysql.com/yum/mysql-5.6-community/el/7/x86_64/mysql-community-common-5.6.47-2.el7.x86_64.rpm: (28, 'Connection timed out after 30001 milliseconds')
Trying other mirror.
mysql-community-common-5.6.47- FAILED
http://repo.mysql.com/yum/mysql-5.6-community/el/7/x86_64/mysql-community-common-5.6.47-2.el7.x86_64.rpm: [Errno 12] Timeout on http://repo.mysql.com/yum/mysql-5.6-community/el/7/x86_64/mysql-community-common-5.6.47-2.el7.x86_64.rpm: (28, 'Connection timed out after 30001 milliseconds')
Trying other mirror.
(2/2): mysql-community-common-5.6.47-2.el7.x86_64.rpm                                                                         | 289 kB  00:00:11
-----------------------------------------------------------------------------------------------------------------------------------------------------
Total                                                                                                                 62 kB/s | 4.3 MB  00:01:11
Retrieving key from file:/etc/pki/rpm-gpg/RPM-GPG-KEY-mysql
Importing GPG key 0x5072E1F5:
 Userid     : "MySQL Release Engineering <mysql-build@oss.oracle.com>"
 Fingerprint: a4a9 4068 76fc bd3c 4567 70c8 8c71 8d3b 5072 e1f5
 Package    : mysql-community-release-el7-5.noarch (installed)
 From       : file:/etc/pki/rpm-gpg/RPM-GPG-KEY-mysql
Is this ok [y/N]: y
Running transaction check
Running transaction test
Transaction test succeeded
Running transaction
Warning: RPMDB altered outside of yum.
  Installing : mysql-community-common-5.6.47-2.el7.x86_64                                                                                        1/3
  Installing : mysql-community-libs-5.6.47-2.el7.x86_64                                                                                          2/3
  Erasing    : 1:mariadb-libs-5.5.64-1.el7.x86_64                                                                                                3/3
  Verifying  : mysql-community-common-5.6.47-2.el7.x86_64                                                                                        1/3
  Verifying  : mysql-community-libs-5.6.47-2.el7.x86_64                                                                                          2/3
  Verifying  : 1:mariadb-libs-5.5.64-1.el7.x86_64                                                                                                3/3

Installed:
  mysql-community-libs.x86_64 0:5.6.47-2.el7

Dependency Installed:
  mysql-community-common.x86_64 0:5.6.47-2.el7

Replaced:
  mariadb-libs.x86_64 1:5.5.64-1.el7

Complete!

