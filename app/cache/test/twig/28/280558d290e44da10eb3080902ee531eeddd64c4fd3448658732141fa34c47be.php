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
        $__internal_5e1dd79bec68bad2a1e7bf3eec5b3dc65a26562435ba2c122569752dfbc31206 = $this->env->getExtension("native_profiler");
        $__internal_5e1dd79bec68bad2a1e7bf3eec5b3dc65a26562435ba2c122569752dfbc31206->enter($__internal_5e1dd79bec68bad2a1e7bf3eec5b3dc65a26562435ba2c122569752dfbc31206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e1dd79bec68bad2a1e7bf3eec5b3dc65a26562435ba2c122569752dfbc31206->leave($__internal_5e1dd79bec68bad2a1e7bf3eec5b3dc65a26562435ba2c122569752dfbc31206_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e18a8641d8d75658ebede0e4108dad03b98abd122c18f49d146355efcd65cab = $this->env->getExtension("native_profiler");
        $__internal_1e18a8641d8d75658ebede0e4108dad03b98abd122c18f49d146355efcd65cab->enter($__internal_1e18a8641d8d75658ebede0e4108dad03b98abd122c18f49d146355efcd65cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e18a8641d8d75658ebede0e4108dad03b98abd122c18f49d146355efcd65cab->leave($__internal_1e18a8641d8d75658ebede0e4108dad03b98abd122c18f49d146355efcd65cab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_079cb58d252d4106c45629ea35e4224abd8509b2eed7193bd699ac5385da029b = $this->env->getExtension("native_profiler");
        $__internal_079cb58d252d4106c45629ea35e4224abd8509b2eed7193bd699ac5385da029b->enter($__internal_079cb58d252d4106c45629ea35e4224abd8509b2eed7193bd699ac5385da029b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_079cb58d252d4106c45629ea35e4224abd8509b2eed7193bd699ac5385da029b->leave($__internal_079cb58d252d4106c45629ea35e4224abd8509b2eed7193bd699ac5385da029b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02e81c7d349aa02dfb34427d83dde9a370538b4e2effe246621fcd681bcf62e7 = $this->env->getExtension("native_profiler");
        $__internal_02e81c7d349aa02dfb34427d83dde9a370538b4e2effe246621fcd681bcf62e7->enter($__internal_02e81c7d349aa02dfb34427d83dde9a370538b4e2effe246621fcd681bcf62e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_02e81c7d349aa02dfb34427d83dde9a370538b4e2effe246621fcd681bcf62e7->leave($__internal_02e81c7d349aa02dfb34427d83dde9a370538b4e2effe246621fcd681bcf62e7_prof);

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
