<?php
 namespace Doctrine\DBAL\Driver\SQLAnywhere; use Doctrine\DBAL\DBALException; use Doctrine\DBAL\Driver\AbstractSQLAnywhereDriver; class Driver extends AbstractSQLAnywhereDriver { public function connect(array $params, $username = null, $password = null, array $driverOptions = array()) { try { return new SQLAnywhereConnection( $this->buildDsn( isset($params['host']) ? $params['host'] : null, isset($params['port']) ? $params['port'] : null, isset($params['server']) ? $params['server'] : null, isset($params['dbname']) ? $params['dbname'] : null, $username, $password, $driverOptions ), isset($params['persistent']) ? $params['persistent'] : false ); } catch (SQLAnywhereException $e) { throw DBALException::driverException($this, $e); } } public function getName() { return 'sqlanywhere'; } private function buildDsn($host, $port, $server, $dbname, $username = null, $password = null, array $driverOptions = array()) { $host = $host ?: 'localhost'; $port = $port ?: 2638; if (! empty($server)) { $server = ';ServerName=' . $server; } return 'HOST=' . $host . ':' . $port . $server . ';DBN=' . $dbname . ';UID=' . $username . ';PWD=' . $password . ';' . implode( ';', array_map(function ($key, $value) { return $key . '=' . $value; }, array_keys($driverOptions), $driverOptions) ); } } 