<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Audi_Loader extends CI_Loader {

    public function template($template_name, $vars = array(), $return = FALSE)
    {
        define("BASE_URL", base_url());
        define("RES_URL", base_url() . "audition_asset/");
        $router =& load_class('Router', 'core');
        $CI =& get_instance();
        /* $vars['user_info'] = $CI->session->userdata('user_info'); */
        $vars['current_page'] = $router->fetch_class();
        $vars['current_action'] = $router->fetch_method();
        if($return):
            $content  = $this->view('client/header', $vars, $return);
            // $content  = $this->view('client/nav', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('client/footer', $vars, $return);
            return $content;
        else:
            $this->view('client/header', $vars);
            // $this->view('client/nav', $vars);
            $this->view($template_name, $vars);
            $this->view('client/footer', $vars);
        endif;
    }

    public function template_admin($template_name, $vars = array(), $return = FALSE)
    {
        define("BASE_URL", base_url());
        define("RES_URL", base_url() . "audition_asset/");
        $router =& load_class('Router', 'core');
        $CI =& get_instance();

        /* $vars['admin_info'] = $CI->session->userdata('admin_info'); */
        $vars['current_page'] = $router->fetch_class();
        $vars['current_action'] = $router->fetch_method();
        
		if($return):
            $content  = $this->view('admin/header', $vars, $return);
            $content  = $this->view('admin/nav', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('admin/footer', $vars, $return);
            return $content;
        else:
            $this->view('admin/header', $vars);
            $this->view('admin/nav', $vars);
            $this->view($template_name, $vars);
            $this->view('admin/footer', $vars);
        endif;
    }
    public function template_admin_login($template_name, $vars = array(), $return = FALSE)
    {
        define("BASE_URL", base_url());
        define("RES_URL", base_url() . "audition_asset/");
        $router =& load_class('Router', 'core');
        $CI =& get_instance();

        /* $vars['admin_info'] = $CI->session->userdata('admin_info'); */
        $vars['current_page'] = $router->fetch_class();
        $vars['current_action'] = $router->fetch_method();
        
		if($return):
            /* $content  = $this->view('admin/header', $vars, $return);
            $content  = $this->view('admin/nav', $vars, $return); */
            $content .= $this->view($template_name, $vars, $return);
            /* $content .= $this->view('admin/footer', $vars, $return); */
            return $content;
        else:
            /* $this->view('admin/header', $vars);
            $this->view('admin/nav', $vars); */
            $this->view($template_name, $vars);
            /* $this->view('admin/footer', $vars); */
        endif;
    }
    public function template_reg($template_name, $vars = array(), $return = FALSE)
    {
        define("BASE_URL", base_url());
        define("RES_URL", base_url() . "audition_asset/");
        $router =& load_class('Router', 'core');
        $CI =& get_instance();

        $vars['admin_info'] = $CI->session->userdata('admin_info');
        $vars['current_page'] = $router->fetch_class();
        $vars['current_action'] = $router->fetch_method();
        
        if($return):
            $content  = $this->view('newClient/header', $vars, $return);
            $content  = $this->view('newClient/nav_reg', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('newClient/footer', $vars, $return);
            return $content;
        else:
            $this->view('newClient/header', $vars);
            $this->view('newClient/nav_reg', $vars);
            $this->view($template_name, $vars);
            $this->view('newClient/footer', $vars);
        endif;
    }
    public function new_template($template_name, $vars = array(), $return = FALSE)
    {
        define("BASE_URL", base_url());
        define("RES_URL", base_url() . "audition_asset/");
        $router =& load_class('Router', 'core');
        $CI =& get_instance();
        /* $vars['user_info'] = $CI->session->userdata('user_info'); */
        $vars['current_page'] = $router->fetch_class();
        $vars['current_action'] = $router->fetch_method();
        if($return):
            $content  = $this->view('newClient/header', $vars, $return);
            $content  = $this->view('newClient/nav', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('newClient/footer', $vars, $return);
            return $content;
        else:
            $this->view('newClient/header', $vars);
            $this->view('newClient/nav', $vars);
            $this->view($template_name, $vars);
            $this->view('newClient/footer', $vars);
        endif;
    }
    public function terms_condition_template($template_name, $vars = array(), $return = FALSE)
    {
        define("BASE_URL", base_url());
        define("RES_URL", base_url() . "audition_asset/");
        $router =& load_class('Router', 'core');
        $CI =& get_instance();
        /* $vars['user_info'] = $CI->session->userdata('user_info'); */
        $vars['current_page'] = $router->fetch_class();
        $vars['current_action'] = $router->fetch_method();
        if($return):
            $content  = $this->view('newClient/header', $vars, $return);
            $content  = $this->view('newClient/nav_terms_condition', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('newClient/footer', $vars, $return);
            return $content;
        else:
            $this->view('newClient/header', $vars);
            $this->view('newClient/nav_terms_condition', $vars);
            $this->view($template_name, $vars);
            $this->view('newClient/footer', $vars);
        endif;
    }
}
?>
