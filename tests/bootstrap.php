<?php
/**
 * Magento code generator
 *
 * PHP version 5.3
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category  Tests
 * @package   Core
 * @author    Daniel Kocherga <dan.kocherga@gmail.com>
 * @copyright 2013 Daniel Kocherga (dan.kocherga@gmail.com)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/dankocherga/MTool
 */
$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$root = dirname(__DIR__);
$loader->registerNamespace('Core', "{$root}/core");
$loader->registerNamespace('Bundle', "{$root}/bundle");
$loader->registerNamespace('Client\ZFConsole\Bundle', "{$root}/client/zfconsole/bundle");
$loader->register();
