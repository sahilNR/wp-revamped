<?php

/*
|--------------------------------------------------------------------------
| Notes - README
|--------------------------------------------------------------------------
|
| You can add as many WordPress constants as you want here. Just make sure
| to add them at the end of the file or at least after the "WordPress
| authentication keys and salts" section.
|
*/

/*
|--------------------------------------------------------------------------
| WordPress authentication keys and salts
|--------------------------------------------------------------------------
|
| @link https://api.wordpress.org/secret-key/1.1/salt/
|
*/
define('AUTH_KEY', '${Jr6i4ms|<K#hm~=1|o>`W;z?Vgz0o4>i1~1vJ|::oB;(H%y=|x[[BX&{ua5{pJ');
define('SECURE_AUTH_KEY', 'awU_rOu--k{x-GkDKG|IAU}z}S?CS{$lc-q*U/|(t710D(8COzd:r-<pcv-]cM^P');
define('LOGGED_IN_KEY', '!D>MumtmhRQd3*C6JLkX~4b7UOa097|v{QU9d_x4;gjHV1|+L0m=(:llPRStH>s-');
define('NONCE_KEY', 'c*:Z*M?NLJ:+-(R-W|ieL+/}d1kuoi-Xeo79twX]XYL%8nnr*`fFu@]C]]?}n^,[');
define('AUTH_SALT', '+1mz1G-$ _$ieZP%^c|AuhZpF![!_Y4)XVB?~A[2Wn?kl|BMGTuIw;?_)y7L8D+ ');
define('SECURE_AUTH_SALT', '0d<[w?I,-aOgpMwIDQ=Q|RAF>9LsZE1HQ?d%u,N^7F}1+UyeC4F0Rj]Pn/0@1)T]');
define('LOGGED_IN_SALT', '=}~|FVuiJTm;v9.a)ZtF`=(X|*QJl25OJcxWmfM !{0`)^DaL3Fcl^6Kh]h]VyTb');
define('NONCE_SALT', '%8(N-|41@(UFE[s|_Ewlo*Cf #-;#9c-GZ^Y=V)k#o{ <,[oVT8<Np.cCO9Hma`Z');

/*
|--------------------------------------------------------------------------
| WordPress database
|--------------------------------------------------------------------------
*/
define('DB_NAME', config('database.connections.mysql.database'));
define('DB_USER', config('database.connections.mysql.username'));
define('DB_PASSWORD', config('database.connections.mysql.password'));
define('DB_HOST', config('database.connections.mysql.host'));
define('DB_CHARSET', config('database.connections.mysql.charset'));
define('DB_COLLATE', config('database.connections.mysql.collation'));

/*
|--------------------------------------------------------------------------
| WordPress URLs
|--------------------------------------------------------------------------
*/
define('WP_HOME', config('app.url'));
define('WP_SITEURL', config('app.wp.url'));
define('WP_CONTENT_URL', WP_HOME . '/' . CONTENT_DIR);

/*
|--------------------------------------------------------------------------
| WordPress debug
|--------------------------------------------------------------------------
*/
define('SAVEQUERIES', config('app.debug'));
define('WP_DEBUG', config('app.debug'));
define('WP_DEBUG_DISPLAY', config('app.debug'));
define('SCRIPT_DEBUG', config('app.debug'));

/*
|--------------------------------------------------------------------------
| WordPress auto-update
|--------------------------------------------------------------------------
*/
define('WP_AUTO_UPDATE_CORE', false);

/*
|--------------------------------------------------------------------------
| WordPress file editor
|--------------------------------------------------------------------------
*/
define('DISALLOW_FILE_EDIT', true);

/*
|--------------------------------------------------------------------------
| WordPress default theme
|--------------------------------------------------------------------------
*/
define('WP_DEFAULT_THEME', 'nativerank');

/*
|--------------------------------------------------------------------------
| Application Text Domain
|--------------------------------------------------------------------------
*/
define('APP_TD', env('APP_TD', 'themosis'));

/*
|--------------------------------------------------------------------------
| JetPack
|--------------------------------------------------------------------------
*/
define('JETPACK_DEV_DEBUG', config('app.debug'));
