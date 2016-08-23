<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_28d26d476c1249a247324f65ba28af4d64b1e19ecb6d814c1d8c112b6733a752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4648e6aad33a09c5d495670a3cfc1cdc6c4a3c6860069f00e960d52f1d4abe64 = $this->env->getExtension("native_profiler");
        $__internal_4648e6aad33a09c5d495670a3cfc1cdc6c4a3c6860069f00e960d52f1d4abe64->enter($__internal_4648e6aad33a09c5d495670a3cfc1cdc6c4a3c6860069f00e960d52f1d4abe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4648e6aad33a09c5d495670a3cfc1cdc6c4a3c6860069f00e960d52f1d4abe64->leave($__internal_4648e6aad33a09c5d495670a3cfc1cdc6c4a3c6860069f00e960d52f1d4abe64_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b295785bcaf0eb3dc14e22e70065b880c0a644e709e836e95bde9460ca107d68 = $this->env->getExtension("native_profiler");
        $__internal_b295785bcaf0eb3dc14e22e70065b880c0a644e709e836e95bde9460ca107d68->enter($__internal_b295785bcaf0eb3dc14e22e70065b880c0a644e709e836e95bde9460ca107d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
\t";
        }
        // line 7
        echo "
\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t<h1>Logowanie</h1>
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t</div>
\t\t<div class=\"checkbox\">
\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t<label for=\"remember_me\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t</div>
\t\t<input type=\"submit\" class=\"btn btn-success login_button\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t<div class=\"text-left\">
\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"btn btn-link btn-xs\">Przypomnij hasło</a>
\t\t</div>
\t</form>

";
        
        $__internal_b295785bcaf0eb3dc14e22e70065b880c0a644e709e836e95bde9460ca107d68->leave($__internal_b295785bcaf0eb3dc14e22e70065b880c0a644e709e836e95bde9460ca107d68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  82 => 21,  77 => 19,  70 => 15,  62 => 12,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* 	{% if error %}*/
/* 		<div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* 	{% endif %}*/
/* */
/* 	<form action="{{ path("fos_user_security_check") }}" method="post">*/
/* 		<h1>Logowanie</h1>*/
/* 			<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 		<div class="form-group">*/
/* 			<input type="text" id="username" class="form-control" name="_username" value="{{ last_username }}" required="required" placeholder="{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}" />*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<input type="password" id="password" class="form-control" name="_password" required="required" placeholder="{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}" />*/
/* 		</div>*/
/* 		<div class="checkbox">*/
/* 			<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 			<label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* 		</div>*/
/* 		<input type="submit" class="btn btn-success login_button" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 		<div class="text-left">*/
/* 			<a href="{{ path('fos_user_resetting_request') }}" class="btn btn-link btn-xs">Przypomnij hasło</a>*/
/* 		</div>*/
/* 	</form>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
