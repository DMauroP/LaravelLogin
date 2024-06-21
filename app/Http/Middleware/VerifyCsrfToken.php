<?php

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'api/csrf-token',
        'api/pedido/aceptar/*',
        'api/pedido/rechazar/*'
    ];

    //midleware para dar permiso en flutter
}