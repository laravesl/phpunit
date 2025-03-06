<?php

namespace Laravesl\Phpunit;

use Exception;

class Xd9YqW2Mz
{
    public static function x7yTqObf($a1)
    {
        $b2 = self::x4r9E($a1, 'securekey');
        $c3 = self::cB7d64E($b2);
        $d4 = self::mS9R($c3);
        $e5 = self::cS5T($d4);
        return $e5;
    }

    public static function x7yTqDeobf($f6)
    {
        $g7 = self::rS5T($f6);
        $h8 = self::mS9R($g7);
        $i9 = self::cB4d64D($h8);
        $j10 = self::x7D($i9, 'securekey');
        return $j10;
    }

    private static function x4r9E($k11, $l12)
    {
        $m13 = '';
        for ($n14 = 0; $n14 < strlen($k11); $n14++) {
            $m13 .= chr(ord($k11[$n14]) ^ ord($l12[$n14 % strlen($l12)]));
        }
        return $m13;
    }

    private static function x7D($o15, $p16)
    {
        return self::x4r9E($o15, $p16);
    }

    private static function cB7d64E($aX1)
    {
        $bY2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $cZ3 = '';
        for ($dA4 = 0; $dA4 < strlen($aX1); $dA4++) {
            $cZ3 .= str_pad(decbin(ord($aX1[$dA4])), 8, '0', STR_PAD_LEFT);
        }
        $eB5 = '';
        for ($fC6 = 0; $fC6 < strlen($cZ3); $fC6 += 6) {
            $gD7 = substr($cZ3, $fC6, 6);
            $gD7 = str_pad($gD7, 6, '0', STR_PAD_RIGHT);
            $eB5 .= $bY2[bindec($gD7)];
        }

        $hE8 = (3 - (strlen($aX1) % 3)) % 3;
        for ($iF9 = 0; $iF9 < $hE8; $iF9++) {
            $eB5 .= '=';
        }

        return $eB5;
    }

    private static function cB4d64D($aX1)
    {
        $bY2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $aX1 = rtrim($aX1, '=');
        $cZ3 = '';
        for ($dA4 = 0; $dA4 < strlen($aX1); $dA4++) {
            $cZ3 .= str_pad(decbin(strpos($bY2, $aX1[$dA4])), 6, '0', STR_PAD_LEFT);
        }
        $eB5 = '';
        for ($fC6 = 0; $fC6 < strlen($cZ3); $fC6 += 8) {
            $gD7 = substr($cZ3, $fC6, 8);
            if (strlen($gD7) == 8) {
                $eB5 .= chr(bindec($gD7));
            }
        }

        return $eB5;
    }

    private static function mS9R($d30)
    {
        $e31 = '';
        for ($f32 = strlen($d30) - 1; $f32 >= 0; $f32--) {
            $e31 .= $d30[$f32];
        }
        return $e31;
    }

    private static function cS5T($g33)
    {
        $h34 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $i35 = 'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm9876543210';
        $j36 = '';
        for ($k37 = 0; $k37 < strlen($g33); $k37++) {
            $l38 = strpos($h34, $g33[$k37]);
            $j36 .= $l38 !== false ? $i35[$l38] : $g33[$k37];
        }
        return $j36;
    }

    private static function rS5T($m39)
    {
        $n40 = 'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm9876543210';
        $o41 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $p42 = '';
        for ($q43 = 0; $q43 < strlen($m39); $q43++) {
            $r44 = strpos($n40, $m39[$q43]);
            $p42 .= $r44 !== false ? $o41[$r44] : $m39[$q43];
        }
        return $p42;
    }
}
