<?php

namespace Laravesl\Phpunit\PhUntPr;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\ServiceProvider;
use Laravesl\Phpunit\Xd9YqW2Mz;

class PhUntEn extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('phXml', function ($exUnt) {
            return xPhpLib($exUnt);
        });

        Blade::directive('xoB1203', function ($v4783) {
            list($templateName, $encryptedKey, $data) = array_pad(explode(',', $v4783 . ',', 3), 3, '[]');
            return "<?php echo \Laravesl\Phpunit\Ex9t::xR7zT6P({$templateName}, $encryptedKey, $data); ?>";
        });
    }
}
