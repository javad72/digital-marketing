import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
			'resources/client-assets/css/vendor/bootstrap.min.css',
            'resources/client-assets/css/vendor/font-awesome.css',
            'resources/client-assets/css/vendor/slick.css',
            'resources/client-assets/css/vendor/slick-theme.css',
            'resources/client-assets/css/vendor/sal.css',
            'resources/client-assets/css/vendor/magnific-popup.css',
            'resources/client-assets/css/vendor/green-audio-player.min.css',
            'resources/client-assets/css/vendor/odometer-theme-default.css',
            'resources/client-assets/css/app.css',

			'resources/client-assets/js/vendor/jquery-3.6.0.min.js',
			'resources/client-assets/js/vendor/bootstrap.min.js',
			'resources/client-assets/js/vendor/isotope.pkgd.min.js',
			'resources/client-assets/js/vendor/imagesloaded.pkgd.min.js',
			'resources/client-assets/js/vendor/odometer.min.js',
			'resources/client-assets/js/vendor/jquery-appear.js',
			'resources/client-assets/js/vendor/slick.min.js',
			// 'resources/client-assets/js/vendor/sal.js',
			'resources/client-assets/js/vendor/jquery.magnific-popup.min.js',
			'resources/client-assets/js/vendor/js.cookie.js',
			// 'resources/client-assets/js/vendor/jquery.style.switcher.js',
			'resources/client-assets/js/vendor/jquery.countdown.min.js',
			'resources/client-assets/js/vendor/tilt.js',
			'resources/client-assets/js/vendor/green-audio-player.min.js',
			'resources/client-assets/js/vendor/jquery.nav.js',
			'resources/client-assets/js/app.js',
			],
            refresh: true,
        }),
    ],
});
