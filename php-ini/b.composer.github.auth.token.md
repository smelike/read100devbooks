Composer install 后出现一些错误提示 ask a GitHub OAuth token


Cloning failed using an ssh key for authentication, enter your GitHub credentials to access private repos
Head to https://github.com/settings/tokens/new?scopes=repo&description=Composer+on+VM_0_6_centos+2020-03-24+0758
to retrieve a token. It will be stored in "/root/.config/composer/auth.json" for future use by Composer.
Token (hidden):
Invalid token provided.
You can also add it manually later by using "composer config --global --auth github-oauth.github.com <token>"

  [RuntimeException]
  Failed to clone https://github.com/bestiejs/punycode.js.git, git was not found, check that it is installed and in your PATH env.
  sh: git: command not found install [--prefer-source] [--prefer-dist] [--dry-run] [--dev] [--no-dev] [--no-custom-installers] [--no-autoloader] [--no-scripts] [--no-progress] [--no-suggest] [-v|vv|vvv|--verbose] [-o|--optimize-autoloader] [-a|--classmap-authoritative] [--apcu-autoloader] [--ignore-platform-reqs] [--] [<packages>]...


```
[root@VM_0_6_centos yii2-back]# composer config --global --auth github-oauth.github.com Jamesxu@@
Do not run Composer as root/super user! See https://getcomposer.org/root for details
[root@VM_0_6_centos yii2-back]# composer install


  [UnexpectedValueException]
  Your github oauth token for github.com contains invalid characters: "Jamesxu@@"
```
---------

```
[root@VM_0_6_centos yii2-back]# composer config --global --auth github-oauth.github.com

  [UnexpectedValueException]
  Your github oauth token for github.com contains invalid characters: "Jamesxu@@"


  [UnexpectedValueException]
  Your github oauth token for github.com contains invalid characters: "Jamesxu@@"

```

You should not put api.github.com as the key but github.com. So:

{
    "http-basic": {},
    "github-oauth": {
        "github.com": "__TOKEN__"}
}
Edit the file manually or run:

composer config -g --unset github-oauth.api.github.com
composer config -g github-oauth.github.com __TOKEN__


----

Composer Update Fails due to Github Authorization

----


An existing OAuth token for Composer is present and will be reused

Could not fetch https://api.github.com/authorizations, enter your GitHub credentials to go over the API >rate limit
The credentials will be swapped for an OAuth token stored in /Users/[USER]/.composer/auth.json, your >password will not be stored
To revoke access to this token you can visit https://github.com/settings/applications

----

https://github.com/composer/composer/blob/master/doc/articles/troubleshooting.md#api-rate-limit-and-oauth-tokens