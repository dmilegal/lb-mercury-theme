# Wordpress Docker Template

WordPress template for local development and production.

#### Requirements:

- docker: ^20.10.12
- docker compose: ^2.2.3
- node: ^16.13.2

**for Windows:**

- Git Bash or Ubuntu subsystem

## How Use

1.  Склонировать репозиторий.
2.  Инициализацировать гит сабмодули:
    ```
    git submodule init
    git submodule update
    ```
3.  Создать секреты в папке `/secrets` с настройками для разработки:

    `wp_db_host.txt`

    ```
    db
    ```

    `wp_db_name.txt`

    ```
    devdb
    ```

    `wp_db_password.txt`

    ```
    devpass
    ```

    `wp_db_root_password.txt`

    ```
    devpass
    ```

    `wp_db_user.txt`

    ```
    devuser
    ```

4.  Создать файл `config/dev/.env` с настройками для разработки:

    ```
    #WORDPRESS_XDEBUG_MODE=develop,debug
    WORDPRESS_AUTH_KEY='?RI2=0naMsRmV`{H$A,Wq*(4E6{.-H;_f;wC6KGY|cARAnrnCR*Mhsp|S2udup,3'
    WORDPRESS_SECURE_AUTH_KEY='9VH72 oBdKW`5hy2X.4@&9Yws3e@Pni{seC8uwr2z4aSM}}ZXE{Yc>ky^Dnr@v.8'
    WORDPRESS_LOGGED_IN_KEY='c?RHH<7awDI+V14&/M(`+vny>`O}blyf5zVe&rT[fi-(o7o/ bR)?ieW]31qQd(1'
    WORDPRESS_NONCE_KEY=']:DDK-6<ZfZu^4>=m$U w36-3a&w:Y$_R*SK=H$xL@a(|Acp-+}y(^*L9,e@S%s)'
    WORDPRESS_AUTH_SALT='= A~ml@ri~0IKnp,7]W(9@g)0B;o;VF>g!mdFOfx~ lKOO}ZFMRK?qi-E_JPbyn~'
    WORDPRESS_SECURE_AUTH_SALT='i<02+`myw(F,bz[(C%V7ad!?W~mm{)7bv^7R-U/_Tb:MVgISNnk^TB(f|N5@]+D-'
    WORDPRESS_LOGGED_IN_SALT='!08iUE |@y[2S{QhOU~@(L#,w[BB,R|gg1/RuI^.cAz1[<Hzg9T/OKGei-dO<FBq'
    WORDPRESS_NONCE_SALT='hVY@grVjOF2HVaf%ewb|IC=:y]o`^ {?jf@n,.n34?D$wviM(5205n,ur*JxFmlT'
    WORDPRESS_CONFIG_EXTRA="
    define( 'MULTISITE', true );
    define( 'SUBDOMAIN_INSTALL', false );
    define( 'DOMAIN_CURRENT_SITE', 'localhost' );
    define( 'PATH_CURRENT_SITE', '/' );
    define( 'SITE_ID_CURRENT_SITE', 1 );
    define( 'BLOG_ID_CURRENT_SITE', 1 );
    define( 'WP_DEBUG_LOG', true );
    define( 'WP_DEBUG_DISPLAY', false );
    define('FS_METHOD', 'direct');
    @ini_set( 'display_errors', 0 );"
    ```

    Обратите внимание, что эти настройки для мультисайта.

5.  Запустите контейнер dev:

    ```
    ./run.sh -d
    ```

    Другие команды:

    Run prod container:

        ./run.sh -p

    More info about commands:

        ./run.sh -h

6.  Мигрируйте дб. Phpmyadmin доступна по адресу http://localhost:8000.
7.  Опционально мигрируйте медиа файлы.

### Общие подсказки

Если у вас возникли проблемы с доступностью создания/сохранения файлов или каталогов на локальной машине, используйте следующую команду

```
sudo chmod -R a+rwX .
```

Ее можно применить и к файлу `run.sh`:

```
sudo chmod a+rwX run.sh
```

---

Если у вас windows, то рекомендуется работать из ubuntu subsystem.
