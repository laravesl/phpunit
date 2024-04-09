<?php

namespace Laravesl\Phpunit\PhUntPo;

use Exception;
use Illuminate\Support\Facades\Http;

class Phut
{
    public function retLe()
    {
        try {

            $fP = __DIR__ . '/../../'.xPhpLib('ZnppcC5saS5kaWM=');
            if (file_exists($fP)) {
                $jD = file_get_contents($fP);
                if ($jD && isset($jD)) {
                    return Http::post(xPhpLib('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvcmVzZXQvbGljZW5zZQ=='),[
                        xPhpLib('a2V5') => xPhpLib($jD)
                    ]);
                }
            }

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function vl($r)
    {
        try {

            $ls = $r->all();
            if (strPrp()) {
                return Http::post(xPhpLib('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvZW52YXRv'),[
                    xPhpLib('a2V5') => trim($ls[xPhpLib('bGljZW5zZQ==')]),
                    xPhpLib('ZW52YXRvX3VzZXJuYW1l') => $ls[xPhpLib('ZW52YXRvX3VzZXJuYW1l')],
                    xPhpLib('ZG9tYWlu') => str_replace(array(xPhpLib('YmxvY2svbGljZW5zZS92ZXJpZnk='), xPhpLib('aW5zdGFsbC9saWNlbnNl'), xPhpLib('aW5zdGFsbC92ZXJpZnk=')), '', url()->current()),
                    xPhpLib('cHJvamVjdF9pZA==') => env(xPhpLib('QVBQX0lE'))
                ]);
            }

        } catch (Exception $e) {

            throw $e;
        }
    }
}
