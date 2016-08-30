<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_302e940aee1c2a3d53401050d796ba2af6bab9839519e08d8489010514ea720c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 5
            echo "\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
\t";
        }
        // line 7
        echo "\t
\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t<h1>Logowanie</h1>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
\t
";
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
        return array (  78 => 23,  73 => 21,  68 => 19,  61 => 15,  53 => 12,  48 => 10,  43 => 8,  40 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* 	{% if error %}*/
/* 		<div class="alert alert-danger">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	<form action="{{ path("fos_user_security_check") }}" method="post">*/
/* 		<h1>Logowanie</h1>*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
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
/* 	*/
/* {% endblock fos_user_content %}*/
