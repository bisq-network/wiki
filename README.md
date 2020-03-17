# Bisq Wiki

Basic installation of MediaWiki with some customizations added for Bisq.
See `INSTALL` file for installation instructions.

## Daily backup system

If you are the Wiki Operator, you should implement off-site daily backups of both the MySQL database dump and the webroot:

```
@reboot keybase fs ls /keybase >/dev/null 2>&1
@reboot screen -dmS kbfsfuse kbfsfuse /keybase
34 13 * * * find /backup -mtime +20 -name \*.bz2 -exec rm -f {} \;
37 13 * * * mysqldump --all-databases --triggers --routines --events | bzip2 > /backup/bisq-wiki-`date +\%Y-\%m-\%d-\%H\%M`.sql.bz2
37 13 * * * cd /usr/local/www && tar jcf /backup/bisq-wiki-`date +\%Y-\%m-\%d-\%H\%M`.tar.bz2 .
0 14 * * * rsync -a /backup/bisq-wiki-\* /keybase/private/bisqwiki/backup/
```

Also add a crontab for `www` user to generate sitemap hourly:
```
39 * * * * (cd /usr/local/www && php maintenance/generateSitemap.xml bisq.wiki) >/dev/null 2>&1
```

