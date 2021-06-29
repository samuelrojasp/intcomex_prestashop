<?php
/**
 * @author    Samuel Rojas <samuel.rojasp@gmail.com>
 * @copyright 2021 Samuel Rojas P.
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class intcomeximport extends Module
{
    public function __construct()
    {
        $this->name = 'intcomeximport';
        $this->version = '1.0.0';
        $this->author = 'Samuel Rojas P.';
        $this->need_instance = 0;

        parent::__construct();
        $this->displayName = 'Intcomex Import';
        $this->description = 'Con este módulo importamos productos desde la tienda intcomex por categorías y mantenemos sus precios actualizados.';
        $this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && $this->installIntcomexCatalogTable();
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->uninstallIntcomexCatalogTable();
    }

    private function installIntcomexCatalogTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `' . pSQL(_DB_PREFIX_) . 'catalogo_intcomex`(
                `id` int(6) NOT NULL AUTO_INCREMENT,
                `catid` VARCHAR(20) NOT NULL,
                `sku` VARCHAR(30) NOT NULL,
                `description` LONGTEXT NOT NULL,
                `length` VARCHAR(10) NOT NULL,
                `width` VARCHAR(10) NOT NULL,
                `height` VARCHAR(10) NOT NULL,
                `volume` VARCHAR(10) NOT NULL,
                `weight` VARCHAR(100) NOT NULL,
                `manufacturer` VARCHAR(20) NOT NULL,
                `manufaccturerdesc` VARCHAR(100) NOT NULL,
                `stock` VARCHAR(10) NULL,
                `price` VARCHAR(10) NULL,
                PRIMARY KEY(`id`)
            ) ENGINE=' . pSQL(_MYSQL_ENGINE_) . ' default CHARSET=utf8';
        return Db::getInstance()->execute($sql);
    }

    private function uninstallIntcomexCatalogTable()
    {
        $sql = 'DROP TABLE IF EXISTS ' . pSQL(_DB_PREFIX_) . 'catalogo_intcomex';
        return Db::getInstance()->execute($sql);
    }
}
