<?php

if (! function_exists('active_link')) {
    function active_link($url, $return = 'active') {
        if (is_array($url)) {
            foreach ($url as $u) {
                $u = site_url() . $u;
                if (current_url() == $u) return $return;
            }
        }
        $url = site_url($url);
        return current_url() == $url ? $return : null;
    }
}
