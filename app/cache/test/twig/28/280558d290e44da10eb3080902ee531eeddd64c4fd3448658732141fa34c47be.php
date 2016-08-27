<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_acaea16757a34f02262eba001d6c4668ec74fbb88272ecafd0b7f40213a557d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_040179a6dffc32134bb26af2b90ef12deb0ed81a462646aaa7f635239b7acf93 = $this->env->getExtension("native_profiler");
        $__internal_040179a6dffc32134bb26af2b90ef12deb0ed81a462646aaa7f635239b7acf93->enter($__internal_040179a6dffc32134bb26af2b90ef12deb0ed81a462646aaa7f635239b7acf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_040179a6dffc32134bb26af2b90ef12deb0ed81a462646aaa7f635239b7acf93->leave($__internal_040179a6dffc32134bb26af2b90ef12deb0ed81a462646aaa7f635239b7acf93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bb7d7b3e7b1f34414dd7c5c410dae9fb4f7efda1fc30f8e928161be03c10559 = $this->env->getExtension("native_profiler");
        $__internal_8bb7d7b3e7b1f34414dd7c5c410dae9fb4f7efda1fc30f8e928161be03c10559->enter($__internal_8bb7d7b3e7b1f34414dd7c5c410dae9fb4f7efda1fc30f8e928161be03c10559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8bb7d7b3e7b1f34414dd7c5c410dae9fb4f7efda1fc30f8e928161be03c10559->leave($__internal_8bb7d7b3e7b1f34414dd7c5c410dae9fb4f7efda1fc30f8e928161be03c10559_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_457725e9822e438bb6bfe90a0d9323c90b7aa65720cdbd33b46d05b98b75295e = $this->env->getExtension("native_profiler");
        $__internal_457725e9822e438bb6bfe90a0d9323c90b7aa65720cdbd33b46d05b98b75295e->enter($__internal_457725e9822e438bb6bfe90a0d9323c90b7aa65720cdbd33b46d05b98b75295e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_457725e9822e438bb6bfe90a0d9323c90b7aa65720cdbd33b46d05b98b75295e->leave($__internal_457725e9822e438bb6bfe90a0d9323c90b7aa65720cdbd33b46d05b98b75295e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_035f11b877d41ac6952123a845337ebfe2c41bf994e6fe86cd5370fa5430fa0a = $this->env->getExtension("native_profiler");
        $__internal_035f11b877d41ac6952123a845337ebfe2c41bf994e6fe86cd5370fa5430fa0a->enter($__internal_035f11b877d41ac6952123a845337ebfe2c41bf994e6fe86cd5370fa5430fa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_035f11b877d41ac6952123a845337ebfe2c41bf994e6fe86cd5370fa5430fa0a->leave($__internal_035f11b877d41ac6952123a845337ebfe2c41bf994e6fe86cd5370fa5430fa0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
