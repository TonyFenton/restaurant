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
        $__internal_7adb87c53751ae07800d4bd52420e66cce9343d09d313a8f41483cc69e88b4d6 = $this->env->getExtension("native_profiler");
        $__internal_7adb87c53751ae07800d4bd52420e66cce9343d09d313a8f41483cc69e88b4d6->enter($__internal_7adb87c53751ae07800d4bd52420e66cce9343d09d313a8f41483cc69e88b4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7adb87c53751ae07800d4bd52420e66cce9343d09d313a8f41483cc69e88b4d6->leave($__internal_7adb87c53751ae07800d4bd52420e66cce9343d09d313a8f41483cc69e88b4d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8596ce8610ce06332a4a4d264d04e8faa52b274fa907ad4413f11370d53e8772 = $this->env->getExtension("native_profiler");
        $__internal_8596ce8610ce06332a4a4d264d04e8faa52b274fa907ad4413f11370d53e8772->enter($__internal_8596ce8610ce06332a4a4d264d04e8faa52b274fa907ad4413f11370d53e8772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8596ce8610ce06332a4a4d264d04e8faa52b274fa907ad4413f11370d53e8772->leave($__internal_8596ce8610ce06332a4a4d264d04e8faa52b274fa907ad4413f11370d53e8772_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0b127d7485e6add172edecb6424e5ddad7c72cc494553e8de461650f7e57ebc = $this->env->getExtension("native_profiler");
        $__internal_b0b127d7485e6add172edecb6424e5ddad7c72cc494553e8de461650f7e57ebc->enter($__internal_b0b127d7485e6add172edecb6424e5ddad7c72cc494553e8de461650f7e57ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0b127d7485e6add172edecb6424e5ddad7c72cc494553e8de461650f7e57ebc->leave($__internal_b0b127d7485e6add172edecb6424e5ddad7c72cc494553e8de461650f7e57ebc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c6ea26c7cc32255862197edb2d0b5af5bd2d203214ebe4405cb44f4bd4c1539 = $this->env->getExtension("native_profiler");
        $__internal_9c6ea26c7cc32255862197edb2d0b5af5bd2d203214ebe4405cb44f4bd4c1539->enter($__internal_9c6ea26c7cc32255862197edb2d0b5af5bd2d203214ebe4405cb44f4bd4c1539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9c6ea26c7cc32255862197edb2d0b5af5bd2d203214ebe4405cb44f4bd4c1539->leave($__internal_9c6ea26c7cc32255862197edb2d0b5af5bd2d203214ebe4405cb44f4bd4c1539_prof);

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
