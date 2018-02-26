<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a7b368e541a5a132070ca329b5c3472
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'theluguiant\\PseComposer\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'theluguiant\\PseComposer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'XMLSchema' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.xmlschema.php',
        'nusoap_base' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.nusoap_base.php',
        'nusoap_client' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soapclient.php',
        'nusoap_client_mime' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/nusoapmime.php',
        'nusoap_fault' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soap_fault.php',
        'nusoap_parser' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soap_parser.php',
        'nusoap_server' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soap_server.php',
        'nusoap_server_mime' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/nusoapmime.php',
        'nusoap_wsdlcache' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.wsdlcache.php',
        'nusoap_xmlschema' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.xmlschema.php',
        'nusoapservermime' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/nusoapmime.php',
        'soap_fault' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soap_fault.php',
        'soap_parser' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soap_parser.php',
        'soap_server' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soap_server.php',
        'soap_transport_http' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soap_transport_http.php',
        'soapclient' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soapclient.php',
        'soapclientmime' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/nusoapmime.php',
        'soapval' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.soap_val.php',
        'wsdl' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.wsdl.php',
        'wsdlcache' => __DIR__ . '/..' . '/codecasts/nusoap-php7/lib/class.wsdlcache.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a7b368e541a5a132070ca329b5c3472::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a7b368e541a5a132070ca329b5c3472::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a7b368e541a5a132070ca329b5c3472::$classMap;

        }, null, ClassLoader::class);
    }
}