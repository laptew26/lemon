<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('isOwner')) {
    function isOwner($ownerId) {
        return Auth::check() && Auth::user()->id == $ownerId || (Auth::user()->admin ?? 0) == 1;
    }
}
