<?php
namespace Lsw\MemcacheBundle\Cache;

$extension = new \ReflectionExtension('memcached');
if ($extension->getVersion()=='1.0.2') {
    interface MemcacheInterface {
        public function get( $key, $cache_cb = null, &$cas_token = null );
        public function getByKey( $server_key, $key, $cache_cb = null, &$cas_token = null );
        public function getMulti( array $keys, &$cas_tokens = null, $flags = 0 );
        public function getMultiByKey( $server_key, array $keys, &$cas_tokens = null, $flags = 0 );
        public function getDelayed( array $keys, $with_cas = null, $value_cb = null );
        public function getDelayedByKey( $server_key, array $keys, $with_cas = null, $value_cb = null );
        public function fetch( );
        public function fetchAll( );
        public function set( $key, $value, $expiration = 0 );
        public function setByKey( $server_key, $key, $value, $expiration = 0 );
        public function setMulti( array $items, $expiration = 0 );
        public function setMultiByKey( $server_key, array $items, $expiration = 0 );
        public function cas( $token, $key, $value, $expiration = 0 );
        public function casByKey( $token, $server_key, $key, $value, $expiration = 0 );
        public function add( $key, $value, $expiration = 0 );
        public function addByKey( $server_key, $key, $value, $expiration = 0 );
        public function append( $key, $value, $expiration = 0 );
        public function appendByKey( $server_key, $key, $value, $expiration = 0 );
        public function prepend( $key, $value, $expiration = 0 );
        public function prependByKey( $server_key, $key, $value, $expiration = 0 );
        public function replace( $key, $value, $expiration = 0 );
        public function replaceByKey( $serve_key, $key, $value, $expiration = 0 );
        public function delete( $key, $time = 0 );
        public function deleteByKey( $server_key, $key, $time = 0 );
        public function increment( $key, $offset = 1);
        public function decrement( $key, $offset = 1);
        public function getOption( $option );
        public function setOption( $option, $value );
        public function addServer( $host, $port,  $weight = 0 );
        public function addServers( array $servers );
        public function getServerList( );
        public function getServerByKey( $server_key );
        public function flush( $delay = 0 );
        public function getStats( );
        public function getResultCode( );
        public function getResultMessage( );
    }
} else if ($extension->getVersion()=='2.0.1') {
    interface MemcacheInterface {
        public function get( $key, $cache_cb = null, &$cas_token = null );
        public function getByKey( $server_key, $key, $cache_cb = null, &$cas_token = null );
        public function getMulti( array $keys, &$cas_tokens = null, $flags = null );
        public function getMultiByKey( $server_key, array $keys, &$cas_tokens = null, $flags = null );
        public function getDelayed( array $keys, $with_cas = null, $value_cb = null );
        public function getDelayedByKey( $server_key, array $keys, $with_cas = null, $value_cb = null );
        public function fetch( );
        public function fetchAll( );
        public function set( $key, $value, $expiration = 0 );
        public function touch( $key, $expiration = 0 );
        public function touchbyKey( $server_key, $key, $expiration = 0 );
        public function setByKey( $server_key, $key, $value, $expiration = 0 );
        public function setMulti( array $items, $expiration = 0 );
        public function setMultiByKey( $server_key, array $items, $expiration = 0 );
        public function cas( $token, $key, $value, $expiration = 0 );
        public function casByKey( $token, $server_key, $key, $value, $expiration = 0 );
        public function add( $key, $value, $expiration = 0 );
        public function addByKey( $server_key, $key, $value, $expiration = 0 );
        public function append( $key, $value, $expiration = 0 );
        public function appendByKey( $server_key, $key, $value, $expiration = 0 );
        public function prepend( $key, $value, $expiration = 0 );
        public function prependByKey( $server_key, $key, $value, $expiration = 0 );
        public function replace( $key, $value, $expiration = 0 );
        public function replaceByKey( $server_key, $key, $value, $expiration = 0 );
        public function delete( $key, $time = 0 );
        public function deleteByKey( $server_key, $key, $time = 0 );
        public function deleteMulti( $keys, $expiration = 0 );
        public function deleteMultiByKey( $server_key, $keys, $expiration = 0 );
        public function increment( $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function incrementByKey( $server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function decrement( $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function decrementByKey( $server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function getOption( $option );
        public function setOption( $option, $value );
        public function setOptions( $options );
        public function addServer( $host, $port,  $weight = 0 );
        public function addServers( array $servers );
        public function getServerList( );
        public function getServerByKey( $server_key );
        public function flush( $delay = 0 );
        public function getStats( );
        public function getVersion( );
        public function getResultCode( );
        public function getResultMessage( );
        public function isPersistent( );
        public function isPristine( );
    }
} else if ($extension->getVersion()=='2.1.0') {
    interface MemcacheInterface {
        public function get( $key, $cache_cb = null, &$cas_token = null );
        public function getByKey( $server_key, $key, $cache_cb = null, &$cas_token = null );
        public function getMulti( array $keys, &$cas_tokens = null, $flags = null );
        public function getMultiByKey( $server_key, array $keys, &$cas_tokens = null, $flags = null );
        public function getDelayed( array $keys, $with_cas = null, $value_cb = null );
        public function getDelayedByKey( $server_key, array $keys, $with_cas = null, $value_cb = null );
        public function fetch( );
        public function fetchAll( );
        public function set( $key, $value, $expiration = 0 );
        public function touch( $key, $expiration = 0 );
        public function touchbyKey( $server_key, $key, $expiration = 0 );
        public function setByKey( $server_key, $key, $value, $expiration = 0 );
        public function setMulti( array $items, $expiration = 0 );
        public function setMultiByKey( $server_key, array $items, $expiration = 0 );
        public function cas( $token, $key, $value, $expiration = 0 );
        public function casByKey( $token, $server_key, $key, $value, $expiration = 0 );
        public function add( $key, $value, $expiration = 0 );
        public function addByKey( $server_key, $key, $value, $expiration = 0 );
        public function append( $key, $value, $expiration = 0 );
        public function appendByKey( $server_key, $key, $value, $expiration = 0 );
        public function prepend( $key, $value, $expiration = 0 );
        public function prependByKey( $server_key, $key, $value, $expiration = 0 );
        public function replace( $key, $value, $expiration = 0 );
        public function replaceByKey( $server_key, $key, $value, $expiration = 0 );
        public function delete( $key, $time = 0 );
        public function deleteByKey( $server_key, $key, $time = 0 );
        public function deleteMulti( $keys, $expiration = 0 );
        public function deleteMultiByKey( $server_key, $keys, $expiration = 0 );
        public function increment( $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function incrementByKey( $server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function decrement( $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function decrementByKey( $server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function getOption( $option );
        public function setOption( $option, $value );
        public function setOptions( $options );
        public function addServer( $host, $port,  $weight = 0 );
        public function addServers( array $servers );
        public function getServerList( );
        public function getServerByKey( $server_key );
        public function flush( $delay = 0 );
        public function getStats( );
        public function getVersion( );
        public function getResultCode( );
        public function getResultMessage( );
        public function isPersistent( );
        public function isPristine( );
    }
} else if ($extension->getVersion()=='2.2.0') {
    interface MemcacheInterface {
        public function get( $key, $cache_cb = null, &$cas_token = null, &$udf_flags = null );
        public function getByKey( $server_key, $key, $cache_cb = null, &$cas_token = null, &$udf_flags = null );
        public function getMulti( array $keys, &$cas_tokens = null, $flags = null, &$udf_flags = null );
        public function getMultiByKey( $server_key, array $keys, &$cas_tokens = null, $flags = null, &$udf_flags = null );
        public function getDelayed( array $keys, $with_cas = null, $value_cb = null );
        public function getDelayedByKey( $server_key, array $keys, $with_cas = null, $value_cb = null );
        public function fetch( );
        public function fetchAll( );
        public function set( $key, $value, $expiration = 0, $udf_flags = 0 );
        public function touch( $key, $expiration = 0 );
        public function touchbyKey( $server_key, $key, $expiration = 0 );
        public function setByKey( $server_key, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function setMulti( array $items, $expiration = 0, $udf_flags = 0 );
        public function setMultiByKey( $server_key, array $items, $expiration = 0, $udf_flags = 0 );
        public function cas( $token, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function casByKey( $token, $server_key, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function add( $key, $value, $expiration = 0, $udf_flags = 0 );
        public function addByKey( $server_key, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function append( $key, $value, $expiration = 0 );
        public function appendByKey( $server_key, $key, $value, $expiration = 0 );
        public function prepend( $key, $value, $expiration = 0 );
        public function prependByKey( $server_key, $key, $value, $expiration = 0 );
        public function replace( $key, $value, $expiration = 0, $udf_flags = 0 );
        public function replaceByKey( $server_key, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function delete( $key, $time = 0 );
        public function deleteByKey( $server_key, $key, $time = 0 );
        public function deleteMulti( $keys, $expiration = 0 );
        public function deleteMultiByKey( $server_key, $keys, $expiration = 0 );
        public function increment( $key, $offset = 1, $initial_value = 0, $expiry = 0);
        public function incrementByKey( $server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function decrement( $key, $offset = 1, $initial_value = 0, $expiry = 0);
        public function decrementByKey( $server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function getOption( $option );
        public function setOption( $option, $value );
        public function setOptions( $options );
        public function setBucket( $host_map, $forward_map, $replicas );
        public function addServer( $host, $port,  $weight = 0 );
        public function addServers( array $servers );
        public function getServerList( );
        public function getServerByKey( $server_key );
        public function getLastErrorMessage( );
        public function getLastErrorCode( );
        public function getLastErrorErrno( );
        public function getLastDisconnectedServer( );
        public function flush( $delay = 0 );
        public function getStats( );
        public function getVersion( );
        public function getResultCode( );
        public function getResultMessage( );
        public function isPersistent( );
        public function isPristine( );
        public function setSaslAuthData( $username, $password );
    }
} else if ($extension->getVersion()=='2.2.0b1') {
    interface MemcacheInterface {
        public function get( $key, $cache_cb = null, &$cas_token = null, &$udf_flags = null );
        public function getByKey( $server_key, $key, $cache_cb = null, &$cas_token = null, &$udf_flags = null );
        public function getMulti( array $keys, &$cas_tokens = null, $flags = null, &$udf_flags = null );
        public function getMultiByKey( $server_key, array $keys, &$cas_tokens = null, $flags = null, &$udf_flags = null );
        public function getDelayed( array $keys, $with_cas = null, $value_cb = null );
        public function getDelayedByKey( $server_key, array $keys, $with_cas = null, $value_cb = null );
        public function fetch( );
        public function fetchAll( );
        public function set( $key, $value, $expiration = 0, $udf_flags = 0 );
        public function touch( $key, $expiration = 0 );
        public function touchbyKey( $server_key, $key, $expiration = 0 );
        public function setByKey( $server_key, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function setMulti( array $items, $expiration = 0, $udf_flags = 0 );
        public function setMultiByKey( $server_key, array $items, $expiration = 0, $udf_flags = 0 );
        public function cas( $token, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function casByKey( $token, $server_key, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function add( $key, $value, $expiration = 0, $udf_flags = 0 );
        public function addByKey( $server_key, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function append( $key, $value, $expiration = 0 );
        public function appendByKey( $server_key, $key, $value, $expiration = 0 );
        public function prepend( $key, $value, $expiration = 0 );
        public function prependByKey( $server_key, $key, $value, $expiration = 0 );
        public function replace( $key, $value, $expiration = 0, $udf_flags = 0 );
        public function replaceByKey( $server_key, $key, $value, $expiration = 0, $udf_flags = 0 );
        public function delete( $key, $time = 0 );
        public function deleteByKey( $server_key, $key, $time = 0 );
        public function deleteMulti( $keys, $expiration = 0 );
        public function deleteMultiByKey( $server_key, $keys, $expiration = 0 );
        public function increment( $key, $offset = 1, $initial_value = 0, $expiry = 0);
        public function incrementByKey( $server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function decrement( $key, $offset = 1, $initial_value = 0, $expiry = 0);
        public function decrementByKey( $server_key, $key, $offset = 1, $initial_value = 0, $expiry = 0 );
        public function getOption( $option );
        public function setOption( $option, $value );
        public function setOptions( $options );
        public function setBucket( $host_map, $forward_map, $replicas );
        public function addServer( $host, $port,  $weight = 0 );
        public function addServers( array $servers );
        public function getServerList( );
        public function getServerByKey( $server_key );
        public function getLastErrorMessage( );
        public function getLastErrorCode( );
        public function getLastErrorErrno( );
        public function getLastDisconnectedServer( );
        public function flush( $delay = 0 );
        public function getStats( );
        public function getVersion( );
        public function getResultCode( );
        public function getResultMessage( );
        public function isPersistent( );
        public function isPristine( );
        public function setSaslAuthData( $username, $password );
    }
} else {
    throw new \Exception('LswMemcacheBundle does not support version '.$extension->getVersion().' of the memcached extension.');
}
