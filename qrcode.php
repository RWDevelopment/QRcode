<?php

/**
 *
 * Flextype ................
 *
 * @author .................
 * @link ....................
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\{Event\Event};

//
// Shortcode: [qrcode]your data[/qrcode]
//
Event::addListener('onShortcodesInitialized', function () {
	
    Content::shortcode()->addHandler('qrcode', function(ShortcodeInterface $s) {

        $cht = "qr";

		//QRcode border
		//default no border
		$border = '';
		if ($s->getParameter('border')) {
            $border = $s->getParameter('border');
        }
		
		//QRcode size in pixels
		//default size 60x60
        $size = "60x60";
		if ($s->getParameter('size')) {
            $size = $s->getParameter('size').'x'.$s->getParameter('size');
        }

        $chl = urlencode($s->getContent());
        $choe = "UTF-8";
        $qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $size . '&chl=' . $chl . '&choe=' . $choe;

        return'<img src="'.$qrcode.'" class="'.$border.'"/>';
		 	
    });
	
});
