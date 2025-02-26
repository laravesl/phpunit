<?php

use Laravesl\Phpunit\XPunt\XPunt;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Laravesl\Phpunit\PhUntPo\Phut;

if (!function_exists('xPhpLib')) {
    function xPhpLib($exUnt)
    {
        return XPunt::pHUnt($exUnt);
    }
}

if (!function_exists('strPrp')) {
    function strPrp()
    {
        if (!env(xPhpLib('QVBQX0lE'))) {
            if (!config(xPhpLib('YXBwLmlk'))) {
                throw new Exception(xPhpLib('UmVtb3ZlZCBBUFAgSUQ='), 500);
            };
        }

        return true;
    }
}

if (!function_exists('strAlPbFls')) {
    function strAlPbFls()
    {
        return [
            public_path(xPhpLib('X2xvZy5kaWMueG1s')),
            public_path(xPhpLib('ZnppcC5saS5kaWM=')),
            public_path(xPhpLib('Y2o3a2w4OS50bXA=')),
            public_path(config(xPhpLib('Y29uZmlnLm1pZ3JhdGlvbg=='))),
            public_path(config(xPhpLib('Y29uZmlnLmluc3RhbGxhdGlvbg==')))
        ];
    }
}

if (!function_exists('strFilRM')) {
    function strFilRM($fP)
    {
        if (strFlExs($fP)) {
            unlink($fP);
        }
    }
}

if (!function_exists('strFlExs')) {
    function strFlExs($fP)
    {
        return file_exists($fP);
    }
}

if (!function_exists('stDelFlResLic')) {
    function stDelFlResLic()
    {
        $fPs = strAlPbFls();
        foreach ($fPs as $fP) {
            strFilRM($fP);
        }
    }
}

if (!function_exists('scMePkS')) {
    function scMePkS()
    {
        $pNe = xPhpLib('bGFyYXZlc2wvcGhwdW5pdA==');
        if (igetCrPNe($pNe)) {
            return true;
        }
        return false;
    }
}

if (!function_exists('igetCrPNe')) {
    function igetCrPNe($pNe)
    {
        $cr = json_decode(file_get_contents(base_path(xPhpLib('Y29tcG9zZXIuanNvbg=='))), true);
        if (isset($cr['require'][$pNe])) {
            return true;
        }
        return false;
    }
}

function __kernel($a)
{
    if (scMePkS()) {
        return $a->make(Kernel::class);
    }
}

function _DIR_($d)
{
    if (scMePkS()) {
        return $d;
    }
}

function ini_app($d)
{
    if (scMePkS()) {
        return new Illuminate\Foundation\Application(
            $_ENV[xPhpLib('QVBQX0JBU0VfUEFUSA==')] ?? $d
        );
    }
}

function singleton($app)
{
    if (scMePkS()) {
        return $app;
    }
}

function scDotPkS()
{
    $pNe = xPhpLib('amFja2llZG8vZG90ZW52LWVkaXRvcg==');
    if (!igetCrPNe($pNe)) {
        if (!env(xPhpLib('REJfREFUQUJBU0U=')) || !env(xPhpLib('REJfVVNFUk5BTUU=')) || !env(xPhpLib('REJfQ09OTkVDVElPTg=='))) {
            throw new Exception(xPhpLib('LmVudiBkYXRhYmFzZSBjcmVkaWVudGlhbCBpcyBpbnZhbGlk'), 500);
        }
        return false;
    }
    return true;
}

function scSpatPkS()
{
    $pNe = xPhpLib('c3BhdGllL2xhcmF2ZWwtcGVybWlzc2lvbg==');
    if (!igetCrPNe($pNe)) {
        return false;
    }

    return true;
}

function datSync()
{
    try {

        if (env(xPhpLib('REJfREFUQUJBU0U=')) && env(xPhpLib('REJfVVNFUk5BTUU=')) && env(xPhpLib('REJfQ09OTkVDVElPTg=='))) {
            DB::connection()->getPDO();
            if (DB::connection()->getDatabaseName()) {
                if (Schema::hasTable(xPhpLib('bWlncmF0aW9ucw=='))) {
                    if (DB::table(xPhpLib('bWlncmF0aW9ucw=='))->count()) {
                        return true;
                    }
                    return false;
                }
            }
        }

        return false;
    } catch (Exception $e) {

        return false;
    }
}

function schSync()
{
    try {

        if (strPrp()) {
            DB::connection()->getPDO();
            if (DB::connection()->getDatabaseName()) {
                if (env(xPhpLib('REJfREFUQUJBU0U=')) && env(xPhpLib('REJfVVNFUk5BTUU=')) && env(xPhpLib('REJfQ09OTkVDVElPTg=='))) {
                    if (Schema::hasTable(xPhpLib('bWlncmF0aW9ucw==')) && !migSync()) {
                        if (DB::table(xPhpLib('bWlncmF0aW9ucw=='))->count()) {
                            return true;
                        }
                        return false;
                    }
                }
            }
        }

        return false;
    } catch (Exception $e) {

        return false;
    }
}

function liSync()
{
    $fP = public_path(xPhpLib('X2xvZy5kaWMueG1s'));
    if (strFlExs($fP)) {
        $jD = file_get_contents($fP);
        if (str_contains(url()?->current(), xPhpLib('bG9jYWxob3N0')) || str_contains(url()->current(), xPhpLib('MTI3LjAuMC4x'))) {
            return true;
        }

        if ($jD && isset($jD)) {
            $cUl = url()?->current();
            // UHJlcGVuZCAnaHR0cDovLycgaWYgbm8gcHJvdG9jb2wgaXMgZm91bmQ=
            if (!preg_match("~^(?:f|ht)tps?://~i", $cUl)) {
                $cUl = "http://" . $cUl;
            }

            $cHtne = parse_url($cUl, PHP_URL_HOST);
            $dHtne = parse_url(xPhpLib($jD), PHP_URL_HOST);

            // Check if the host is an IP address
            if (filter_var($cHtne, FILTER_VALIDATE_IP)) {
                $fiP = public_path(xPhpLib('Y2o3a2w4OS50bXA='));
                if (strFlExs($fiP)) {
                    $jiP = file_get_contents($fiP);
                    if (($_SERVER[xPhpLib('U0VSVkVSX0FERFI=')] ?? $_SERVER[xPhpLib('UkVNT1RFX0FERFI=')]) == xPhpLib($jiP)) {
                        return true;
                    }
                }

                $pHut = new Phut();
                $pHut->lg('SVAgQWRkcmVzcyBNaXNtYXRjaA==', 'bGlTeW5jKCkgbGluZTogMjIx',$cHtne, $dHtne);
                $fP = __DIR__ . '/..//' . xPhpLib('X2xvZy5kaWMueG1s');
                strFilRM($fP);

                $fP = __DIR__ . '/..//' . config(xPhpLib('Y29uZmlnLmluc3RhbGxhdGlvbg=='));
                strFilRM($fP);

                return false;
            }

            if ($cHtne == $dHtne || ($cHtne == "www." . $dHtne) || ("www." . $cHtne == $dHtne)) {
                return true;
            } else {
                $fiP = public_path(xPhpLib('Y2o3a2w4OS50bXA='));
                if (strFlExs($fiP)) {
                    $jiP = file_get_contents($fiP);
                    if (($_SERVER[xPhpLib('U0VSVkVSX0FERFI=')] ?? $_SERVER[xPhpLib('UkVNT1RFX0FERFI=')]) == xPhpLib($jiP)) {
                        return true;
                    }
                }
            }
        }

        if (!str_contains(url()->current(), xPhpLib('bG9jYWxob3N0')) && !str_contains(url()->current(), xPhpLib('MTI3LjAuMC4x'))) {
            $pHut = new Phut();
            $pHut->lg('RG9tYWluIE1pc21hdGNo', 'bGlTeW5jKCkgbGluZTogMjM4',$cHtne, $dHtne);
            $fP = __DIR__ . '/..//' . xPhpLib('X2xvZy5kaWMueG1s');
            strFilRM($fP);

            $fP = __DIR__ . '/..//' . config(xPhpLib('Y29uZmlnLmluc3RhbGxhdGlvbg=='));
            strFilRM($fP);

            return false;
        }

        return true;
    }

    return false;
}

function strSplic()
{
    if (strSync() && migSync() && liSync()) {
        $fP = __DIR__ . '/..//' . xPhpLib('LnZpdGUuanM=');
        if (strFlExs($fP)) {
            return true;
        }
    }

    return false;
}

function strSync()
{
    if (strPrp() && liSync()) {
        $fP = public_path(config(xPhpLib('Y29uZmlnLmluc3RhbGxhdGlvbg==')));
        if (strFlExs($fP)) {
            return true;
        }

        if (schSync()) {
            return true;
        }
    }

    return false;
}

function migSync()
{
    if (strPrp() && liSync()) {
        $fP = public_path(config(xPhpLib('Y29uZmlnLm1pZ3JhdGlvbg==')));
        if (strFlExs($fP)) {
            return true;
        }
    }
    return false;
}

if (!function_exists('bXenPUnt')) {
    function bXenPUnt($pUnt)
    {
        return base64_encode($pUnt);
    }
}

if (!function_exists('imIMgDuy')) {
    function imIMgDuy()
    {
        if (env(xPhpLib('RFVNTVlfSU1BR0VTX1VSTA=='))) {
            $sP = storage_path(xPhpLib('YXBwL3B1YmxpYw=='));
            if (!strFlExs($sP)) {
                mkdir($sP, 0777, true);
                $rePose = Http::timeout(0)->get(env(xPhpLib('RFVNTVlfSU1BR0VTX1VSTA==')));
                if ($rePose?->successful()) {
                    $fN = basename(env(xPhpLib('RFVNTVlfSU1BR0VTX1VSTA==')));
                    $zFP = $sP . '/' . $fN;
                    file_put_contents($zFP, $rePose?->getBody());
                    if (iZf($zFP)) {
                        $zp = new ZipArchive;
                        if ($zp->open($zFP) === TRUE) {
                            $zp->extractTo($sP);
                            $zp->close();
                        }
                        unlink($zFP);
                    }
                }
            }
        };

        return true;
    }
}

if (!function_exists('iZf')) {
    function iZf($fP)
    {
        $fio = finfo_open(FILEINFO_MIME_TYPE);
        $mTy = finfo_file($fio, $fP);
        finfo_close($fio);
        return $mTy === xPhpLib('YXBwbGljYXRpb24vemlw');
    }
}

if (!function_exists('pubFi')) {
    function pubFi()
    {
        $db = __DIR__.xPhpLib('L3N0dWI=');
        $phUnt = public_path(xPhpLib('aW5zdGFsbA=='));
        $dbPhUnits = [
          xPhpLib('Y3NzL3ZlbmRvcnMvYW5pbWF0ZS5zdHVi') => xPhpLib('Y3NzL3ZlbmRvcnMvYW5pbWF0ZS5jc3M='),
          xPhpLib('Y3NzL3ZlbmRvcnMvYm9vdHN0cmFwLnN0dWI=') => xPhpLib('Y3NzL3ZlbmRvcnMvYm9vdHN0cmFwLmNzcw=='),
          xPhpLib('Y3NzL3ZlbmRvcnMvZmVhdGhlcmljb24ubWluLnN0dWI=') => xPhpLib('Y3NzL3ZlbmRvcnMvZmVhdGhlcmljb24ubWluLmNzcw=='),
          xPhpLib('Y3NzL3ZlbmRvcnMvZmVhdGhlcmljb24uc3R1Yg==') => xPhpLib('Y3NzL3ZlbmRvcnMvZmVhdGhlcmljb24uY3Nz'),
          xPhpLib('Y3NzL2luc3RhbGwuc3R1Yg==') => xPhpLib('Y3NzL2luc3RhbGwuY3Nz'),
          xPhpLib('aW1hZ2VzL2JhY2tncm91bmQuc3R1Yg==') => xPhpLib('aW1hZ2VzL2JhY2tncm91bmQuanBn'),
          xPhpLib('anMvYm9vdHN0cmFwLm1pbi5zdHVi') => xPhpLib('anMvYm9vdHN0cmFwLm1pbi5qcw=='),
          xPhpLib('anMvaW5zdGFsbC5zdHVi') => xPhpLib('anMvaW5zdGFsbC5qcw=='),
          xPhpLib('anMvanF1ZXJ5LTMuMy4xLm1pbi5zdHVi') => xPhpLib('anMvanF1ZXJ5LTMuMy4xLm1pbi5qcw=='),
          xPhpLib('anMvcG9wcGVyLm1pbi5zdHVi') => xPhpLib('anMvcG9wcGVyLm1pbi5qcw=='),
          xPhpLib('anMvZmVhdGhlci1pY29uL2ZlYXRoZXIubWluLnN0dWI=') => xPhpLib('anMvZmVhdGhlci1pY29uL2ZlYXRoZXIubWluLmpz'),
          xPhpLib('Y3NzL2FwcC5zdHVi') => xPhpLib('Y3NzL2FwcC5jc3M='),
        ];

        File::ensureDirectoryExists($phUnt);
        File::ensureDirectoryExists($phUnt.xPhpLib('L2Nzcw=='));
        File::ensureDirectoryExists($phUnt.xPhpLib('L2Nzcy92ZW5kb3Jz'));
        File::ensureDirectoryExists($phUnt.xPhpLib('L2ltYWdlcw=='));
        File::ensureDirectoryExists($phUnt.xPhpLib('L2pz'));
        File::ensureDirectoryExists($phUnt.xPhpLib('L2pzL2ZlYXRoZXItaWNvbg=='));

        foreach ($dbPhUnits as $dbkey => $dbPhUnit) {
          if (!File::exists($phUnt.'/'.$dbPhUnit)) {
            File::copy($db.'/'.$dbkey, $phUnt.'/'.$dbPhUnit);
          }
        }

        File::copy($db.'/'.xPhpLib('ZHRQL3N0QXAuc3R1Yg=='),xPhpLib('Ym9vdHN0cmFwL2FwcC5waHA='));
        File::copy($db.'/'.xPhpLib('ZHRQL2V2bi5zdHVi'),xPhpLib('dmVuZG9yL2xhcmF2ZWwvZnJhbWV3b3JrL3NyYy9JbGx1bWluYXRlL0V2ZW50cy9mdW5jdGlvbnMucGhw'));
    }
}

