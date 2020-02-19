<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */
Route::any('page', function () {
    return View::make('pages.default');
});
