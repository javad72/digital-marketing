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

            //     admin assets
                // 'resources/css/app.css',
                // 'resources/js/app.js',
            "resources/assets/admin/vendors/popper/popper.min.js",
            "resources/assets/admin/vendors/bootstrap/bootstrap.min.js",
            // "resources/assets/admin/vendors/anchorjs/anchor.min.js",
            // "resources/assets/admin/vendors/is/is.min.js",
            "resources/assets/admin/vendors/echarts/echarts.min.js",
            "resources/assets/admin/vendors/fontawesome/all.min.js",
            "resources/assets/admin/vendors/lodash/lodash.min.js",
            // "../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll",
            "resources/assets/admin/vendors/list.js/list.min.js",
            // "resources/assets/admin/js/theme.js",
            "resources/assets/admin/js/config.js",
            "resources/assets/admin/vendors/simplebar/simplebar.min.js",

            "resources/assets/admin/vendors/simplebar/simplebar.min.css",
            "resources/assets/admin/css/theme-rtl.min.css",
            "resources/assets/admin/css/theme.min.css",
            // "resources/assets/admin/css/user-rtl.min.css",
            "resources/assets/admin/css/user.min.css",
			],
            refresh: true,
        }),
    ],
});
