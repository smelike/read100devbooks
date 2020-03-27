nginx: [emerg] bind() to 0.0.0.0:80 failed (98: Address already in use)

> 查看所有启动的进程

ps -e 

>  #2

ps -aux 


>  #3

netstat -ltunp


2020/03/25 16:00:56 [error] 23436#0: *15 FastCGI sent in stderr: "Primary script unknown" while reading response header from upstream, client: 127.0.0.1, server: _, request: "POST /api/users/login HTTP/1.0", upstream: "fastcgi://127.0.0.1:9000", host: "127.0.0.1:8080", referrer: "http://backend.huaxiabaihuo.com.cn/login"

[error] 24732#0: *9 FastCGI sent in stderr: "Primary script unknown" while reading response header
----

 nginx: [emerg] bind() to 0.0.0.0:9000 failed (98: Address already in use)