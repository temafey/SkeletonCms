<?php
return new \Phalcon\Config([
    'installed' => true,
    'installedVersion' => null,
    'database' => [
        'adapter' => 'pdo\Mysql',
        //'adapter' => 'cacheable\Mysql',
        'host' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'dbname' => 'skeleton_cms',
        'useAnnotations' => false,
        'useCache' => false
    ],
    'application' => [
        'adminModulePrefix' => 'cms',
        'defaultModule' => 'core',
        'debug' => true,
        'profiler' => true,
        'baseUri' => '/',
        'engineDir' => ROOT_PATH . '/apps/cms/engine/',
        'modulesDir' => ROOT_PATH . '/apps/cms/modules/',
        'pluginsDir' => ROOT_PATH . '/apps/cms/plugins/',
        'widgetsDir' => ROOT_PATH . '/apps/cms/widgets/',
        'librariesDir' => ROOT_PATH . '/library/',
        'cache' => [
            'output' => [
                'adapter' => 'File',
                'lifetime' => '3600',
                'prefix' => 'skeleton_',
                'cacheDir' => ROOT_PATH . '/apps/cms/var/cache/data/'
            ],
            'data' => [
                'adapter' => 'redis',
                'lifetime' => '60',
                'prefix' => 'skeleton_',
                'redis' => [
                    'host' => '127.0.0.1',
                    'port' => 6379
                ]
            ]
        ],
        'session' => [
            'adapter' => 'redis',
            'name' => 'rdsession',
            'lifetime' => '3600',
            'cookie_liftime' => '1440',
            //tcp://host1:6379?weight=1, tcp://host2:6379?weight=2&timeout=2.5, tcp://host3:6379?weight=2"
            'path' => [
                [
                    'host' => '127.0.0.1',
                    'port' => 6379,
                    'weight' => 1,
                    'database' => 0,
                    'timeout' => 3,
                    'prefix' => 'session_'
                ]
            ]
        ],
        /*'session' => [
            'adapter' => 'memcache',
            'name' => 'mcsession',
            'lifetime' => '3600',
            'cookie_lifetime' => '1440',
            'host' => '127.0.0.1',
            'prefix' => 'session_'
        ]
        'session' => [
            'adapter' => 'files',
            'name' => 'fsession',
            'lifetime' => '3600',
            'cookie_lifetime' => '1440'
        ],*/
        'logger' => [
            'enabled' => true,
            'path' => ROOT_PATH.'/apps/cms/var/logs/',
            'format' => '[%date%][%type%] %message%',
            'project' => 'skeleton'
        ],
        'view' => [
            'compiledPath' => ROOT_PATH.'/apps/cms/var/cache/view/',
            'compiledExtension' => '.php',
            'compiledSeparator' => '_',
            'compileAlways' => true
        ],
        'assets' => [
            'local' => PUBLIC_PATH . '/assets/',
            'remote' => '/',
        ],
        'acl' => [
            'adapter' => 'database',
            'db' => 'db',
            'roles' => 'core_acl_role',
            'resources' => 'core_acl_resource',
            'resourcesAccesses' => 'core_acl_resource_access',
            'accessList' => 'core_acl_access_list',
            'rolesInherits' => 'core_acl_role_inherit',
            'authModel' => '\User\Model\Users',
            'authKey'   => 'token',
            'adminModule' => 'extjs'
        ],
        'crypt' => [
            'key' => 'SkeletonCryptKey'
        ]
    ],
    'metadata' => [
        //'adapter' => 'Files',
        //'metaDataDir' => ROOT_PATH . '/apps/cms/var/cache/metadata/',
        'adapter' => 'redis',
        'lifetime' => '3600',
        'prefix' => 'skeleton_cms_',
        'redis' => [
            'host' => '127.0.0.1',
            'port' => 6379
        ]
    ],
    'annotations' => [
        'adapter' => 'Files',
        'annotationsDir' => ROOT_PATH . '/apps/cms/var/cache/annotations/',
    ],
    'modules' => [
        'core' => 1,
        'extjs' => 1,
        'user' => 1
    ],
    'events' => [
    ],
    'plugins' => [
    ],
    'builder' => [
        'modules' => [
        ]
    ]
]);
