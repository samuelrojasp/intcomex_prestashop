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
        $this->name = 'intcomex_import';
        $this->tab = 'dashboard';
        $this->version = '1.0.0';
        $this->author = 'Samuel Rojas P.';

        parent::__construct();
        $this->displayName = 'Intcomex Import';
        $this->description = 'Con este módulo importamos productos desde la tienda intcomex por categorías y mantenemos sus precios actualizados.';
        $this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
    }
}
