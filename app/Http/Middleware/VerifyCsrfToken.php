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
        'http://localhost:8000/blog/store',
        'http://localhost:8000/blog/update/*',
        'http://localhost:8000/blog/delete/*',

        //Category
        'http://localhost:8000/category/store',
        'http://localhost:8000/category/update/*',
        'http://localhost:8000/category/delete/*',

        //Portfolio
        'http://localhost:8000/portfolio/store',
        'http://localhost:8000/portfolio/update/*',
        'http://localhost:8000/portfolio/delete/*',
    ];
}
