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

## Работа с проектом

1.  Все рабочие файлы css и js находятся здесь `wp/wp-content/themes/mercury-child/frontend/src`. Запуск dev сборки:
    ```
    npm run start
    ```
    При пуше в основную ветку запустится пайплайн на сборку prod. Поэтому не надо запускать prod сборку каждый раз, при пуше изменений в файлах css и js.
2.  Папка `frontend` разбита на 6 частей:

    `admin` - стили и скрипты для админки

    `frontend` - стили и скрипты для фронтенда

    `blocks` - стили и скрипты для гутенберг блоков. Они грузятся и на фронт и в гутенберг редактор.

    `editor` - стили и скрипты для гутенберг редактора

    `main` - стили и скрипты только для фронтенда. Например футер и хедер.

    `shared` - стили и скрипты которые можно подключить в любую часть выше. Они не загружаются на фронт и гутенберг редактор отдельно. По сути это утилиты для разных частей.

3.  Все гутенберг блоки работают через acf. Регистрация и создание проходит тут `wp/wp-content/themes/mercury-child/blocks`, а стили и скрипты создавать тут `wp/wp-content/themes/mercury-child/frontend/src/blocks`.
4.  Все шаблоны пишутся тут `wp/wp-content/themes/mercury-child/theme-parts`. Они устроены по системе Atomic design:

    `atoms` - самые базовые элементы страницы или блоков.

    `molecules` - компоненты страницы или блоков. Могут состоять из атомов.

    `cells` - более сложные компоненты страницы или блоков. Могут состоять из молекул и атомов.

    `organs` - сложные части страницы или блоков состоящие из множетсва компонентов. Могут состоять из молекул, клеток и атомов.

    `organisms` - сложные структурные части страницы или блоков состоящие из множетсва компонентов. Могут состоять из молекул, клеток, атомов и органов.

    **Важно!** Иерархия импорта строго сверху вниз. Например для органа можно импортировать молекулы, клетки и атомы. А для клетки можно импортировать молекул и атомы. Но нельзя импортировать орган в орган или клектку в молекулу.

    ***

    `templates` - шаблоны страницы в терминах wp.

    `archive` - шаблоны архива в терминах wp.

## Работа с git

1.  Все задачи надо выполнять в отдельной ветке. Ветки должны именоваться id задачи из jira. Например id задачи `WP-100` в jira будет соответствовать ветке `WP-100`.
2.  Работаем исключительно с `merge`. Никаких `rebase`.
3.  Ветка `dev-test-1` создана исключительно для тестового сайта. В ней проводятся тесты и она же подключена на теестовый сайт.
4.  Ветка `redisign` основная для `aces` и `lb-mercury-theme`.
5.  Работать с собственными плагинами можно из этого репозитория т.к. они подключены как git сабмодули. И для действуют те же правила.

## Работа со стилями

1.  Все базовые стилистические параметры темы находятся в файле `wp/wp-content/themes/mercury-child/theme.json`. В нем задана цветовая схема (`palette`), шрифты (`fontFamilies`), размеры шрифтов (`fontSizes`), семейства шрифтов (`fontFamilies`), спейсинги (`spacingScale`), размеры пробелов (`spacingSizes`) и т.д. Это стандартный функционал wp, поэтому эти цвета, шрифты и т.д. появятся в гутенберг редакторе. Все параметры имеют свои css переменные и их можно увидеть в отладчике браузера. Например css переменной `--wp--preset--font-size--display-xl` соответсвует параметр из `theme.json`:
    ```
     "typography": {
            "defaultFontSizes": false,
            "customFontSize": false,
            "fontSizes": [
                ...
                {
                    "name": "Display xl",
                    "slug": "display-xl",
                    "size": "3.75rem"
                },
                ...
            ]
     }
    ```
    Также все базовые параметры равны своим базовым значениям в figma.
2.  Все базовые css переменнве проксируются через функциональные css переменные. Они задаются тут `wp/wp-content/themes/mercury-child/frontend/src/shared/styles/base/_variables.scss`. Это сделано для того, чтобы свести влияение базовых переменных на разные части сайта к минимуму.
3.  У конмпонентов и блоков есть свои css переменные. Знчения которых равняются значениям функциональных переменных или (изредка) значениям базовых переменных.
4.  Все файлы scss mixins находятся в папке `wp/wp-content/themes/mercury-child/frontend/src/shared/styles/mixins`. В основном используются только эти миксины: `get-text-styles`, `line-height-by-name`, `media-breakpoint-down`, `media-breakpoint-up`, `make-container-max-width`. Все примеры использования можно посмотреть в стилях блоков. Для примера рассмотрим один их них.

    ```scss
    // обратите внимание как импортируюся миксины и как они используются
    @use '@/shared/styles/abstracts/colors';
    @use '@/shared/styles/mixins/container';
    @use '@/shared/styles/mixins/font';
    @use '@/shared/styles/mixins/breakpoints';

    // Это блок определяет собственные переменные для конкретного блока.
    :root,
    // класс .editor-styles-wrapper используется для того чтобы в гутенберг редакторе были применены css переменные.
    .editor-styles-wrapper {
      // как видим собственные переменные ссылаются на функциональнее переменные или базовые переменные.
      --lb-contact-info-section-background-color: var(--lb-color-surface-high);
      --lb-contact-info-section-email-color: var(--lb-color-action-text-default);
      --lb-contact-info-section-alt-color: var(--lb-color-text-strong);
      --lb-contact-info-section-desc-color: var(--lb-color-on-surface-lowest);
      --lb-contact-info-section-map-background-color: var(--lb-color-surface-max);
    }

    .lb-contact-info-section {
      // здесь просто используются базовые переменные и это нормально
      padding: var(--wp--preset--spacing--160) 0 var(--wp--preset--spacing--280);
      // а здесь переменная уже самого блока
      background-color: var(--lb-contact-info-section-background-color);

      // миксин для @media запроса.
      @include breakpoints.media-breakpoint-down(xs) {
        padding: var(--wp--preset--spacing--160) 0;
      }

      &__container {
        // Этот миксин установит max-width равный contentSize в файле theme.json. И отцентрирует себя по центру на странице. Но также этот миксин может принимать параметры для разных размеров.
        @include container.make-container-max-width();
      }

      // ...

      &__email {
        flex-grow: 1;
        &-link {
          &#{&} {
            font-weight: 500;
            text-decoration: none;
            color: var(--lb-contact-info-section-email-color);
          }
        }
        &-desc {
          display: block;
          margin-top: var(--wp--preset--spacing--60);
          // Это миксин сразу установит font-size и line-height в зависимости от переданного первого параметра.
          // Второй параметр по дефолту true и это значит что размер шрифта будет зависит от размера экрана, т.е.
          // если у этого размера шрифта есть @media запросы для маленьких и больших экранов, то они будут применены.
          // В данном примере второй параметр false и это значит что размер шрифта неизменен на любом размере экрана, а @media не будут применяться.
          @include font.get-text-styles('text-sm', false);
          color: var(--lb-contact-info-section-desc-color);
        }
      }
    }
    ```

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

---

Помните что End of Line у вас должен быть LF, а не CRLF.
