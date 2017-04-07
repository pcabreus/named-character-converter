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
        switch ($name) {
            case ('&gt;'):
                return '>';
                break;
            case ('&lt;'):
                return '<';
                break;
            case ('&amp;'):
                return '&';
                break;
            case ('&quot;'):
                return '"';
                break;
            case ('&nbsp;'):
                return ' ';
                break;
            case ('&aoacute;'):
                return 'á';
                break;
            case ('&eacute;'):
                return 'é';
                break;
            case ('&iacute;'):
                return 'í';
                break;
            case ('&oacute;'):
                return 'ó';
                break;
            case ('&uacute;'):
                return 'ú';
                break;
            case ('&ntilde;'):
                return 'ñ';
                break;
            case ('&Aoacute;'):
                return 'Á';
                break;
            case ('&Eacute;'):
                return 'É';
                break;
            case ('&Iacute;'):
                return 'Í';
                break;
            case ('&Oacute;'):
                return 'Ó';
                break;
            case ('&Uacute;'):
                return 'Ú';
                break;
            case ('&Ntilde;'):
                return 'Ñ';
                break;
            case ('&uuml;'):
                return 'ü';
                break;
            case ('&Uuml;'):
                return 'Ü';
                break;
            default:
                return $name;
        }
    }

    public static function convert($html)
    {
        return str_replace(array_keys(self::characters()), array_values(self::characters()), $html);
    }
} 