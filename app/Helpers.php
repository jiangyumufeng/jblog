<?php
if (! function_exists('admin_url')) {
    /**
     * Get admin url.
     *
     * @param  string $uri
     * @return string
     */
    function admin_url($uri)
    {
        return url('/dashboard/' . $uri);
    }
}

