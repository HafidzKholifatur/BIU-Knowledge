<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'ceklogin' => \App\Filters\LoginFilter::class,
		'admin'    => \App\Filters\AdminFilter::class
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	// public $globals = [
	// 	'before' => [
	// 		// 'honeypot',
	// 		'csrf' => [
	// 			'except' => ['berita/uploadGambar', 'berita/deleteGambar', 'berita/listGambar']
	// 		],
	// 		'ceklogin' => [
	// 			'except' => ['/', '/search/*', '/tentang', '/kontak', '/homepage/(:segment)', '/tentang', '/kategoriberita/*', 'dashboard', 'auth']
	// 		]
	// 	],
	// 	'after'  => [
	// 		'toolbar',
	// 		'ceklogin'
	// 		// 'honeypot',
	// 	],
	// ];

	public $globals = [
		'before' => [
			// 'honeypot',
			'csrf' => [
				'except' => ['berita/uploadGambar', 'berita/deleteGambar', 'berita/listGambar']
			],
			'ceklogin' => [
				'except' => ['/', '/search/*', 'auth/', 'auth/login', 'dashboard', '/tentang', '/kontak', 'homepage/*', '/homepage/(:segment)', 'download', '/tentang', '/kategoriberita/*', 'listberita', 'download/*', 'view', 'view/*']
			]
		],
		'after'  => [
			'toolbar',
			'ceklogin',
			// 'honeypot'
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [
		'admin' => [
			'before' => ['user'], // akses khusus owner
			'after' => ['pemasok', 'pelanggan', 'kategori', 'unit', 'item', 'stok/*'] // akses khusus owner dan admin (kasir dilarang)
		]
	];
}
