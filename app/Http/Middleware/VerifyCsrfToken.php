<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     */
    protected $addHttpCookie = true;

    protected $except = [
        //Blogs
        'http://localhost:8000/admin/blog/store',
        'http://localhost:8000/admin/blog/update/*',
        'http://localhost:8000/admin/blog/delete/*',

        //Category
        'http://localhost:8000/admin/category/store',
        'http://localhost:8000/admin/category/update/*',
        'http://localhost:8000/admin/category/delete/*',

        //Portfolio
        'http://localhost:8000/admin/portfolio/store',
        'http://localhost:8000/admin/portfolio/update/*',
        'http://localhost:8000/admin/portfolio/delete/*',
    ];
}
