<?php

class MY_Router extends CI_Router {

    protected function _parse_routes()
    {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['_method'])) {
            $old_server_method = $_SERVER['REQUEST_METHOD'];
            $_SERVER['REQUEST_METHOD'] = strtoupper($_POST['_method']);
        }
        try {
            foreach ($this->uri->segments as $segment) {
                if (preg_match('/_controller$/', $segment)) {
                    show_404();
                }
            }
            parent::_parse_routes();
        } finally {
            if (isset($old_server_method)) {
                $_SERVER['REQUEST_METHOD'] = $old_server_method;
            }
        }
    }
}
