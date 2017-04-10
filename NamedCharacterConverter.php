<?php
/**
 * This file is part of the Pcabreus Projects.
 *
 * (c) Pedro Carlos Abreu <pcabreus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pcabreus\Utils\Html;

/**
 * Class NamedCharacterConverter
 * @package Pcabreus\Utils\Traits
 *
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
class NamedCharacterConverter
{
    public static function characters()
    {
        return array(
            '&gt;' => '>',
            '&lt;' => '<',
            '&amp;' => '&',
            '&quot;' => '"',
            '&nbsp;' => ' ',
            '&aacute;' => 'á',
            '&eacute;' => 'é',
            '&iacute;' => 'í',
            '&oacute;' => 'ó',
            '&uacute;' => 'ú',
            '&ntilde;' => 'ñ',
            '&Aacute;' => 'Á',
            '&Eacute;' => 'É',
            '&Iacute;' => 'Í',
            '&Oacute;' => 'Ó',
            '&Uacute;' => 'Ú',
            '&Ntilde;' => 'Ñ',
            '&uuml;' => 'ü',
            '&Uuml;' => 'Ü',
            '&iquest;' => '¿',
        );
    }

    /**
     * Display a named character
     *
     * @param $name
     * @return string
     */
    public static function display($name)
    {
        if (isset(self::characters()[$name])) {
            return self::characters()[$name];
        }

        return $name;
    }

    public static function convert($html)
    {
        return str_replace(array_keys(self::characters()), array_values(self::characters()), $html);
    }
} 