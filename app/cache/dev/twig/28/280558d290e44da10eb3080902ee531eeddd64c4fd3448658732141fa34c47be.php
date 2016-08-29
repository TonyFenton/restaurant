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
        $__internal_6e3c542cf4f2d4310c391ff827fddd0eac319b1c070d4fec7f33ea3381ded21a = $this->env->getExtension("native_profiler");
        $__internal_6e3c542cf4f2d4310c391ff827fddd0eac319b1c070d4fec7f33ea3381ded21a->enter($__internal_6e3c542cf4f2d4310c391ff827fddd0eac319b1c070d4fec7f33ea3381ded21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3c542cf4f2d4310c391ff827fddd0eac319b1c070d4fec7f33ea3381ded21a->leave($__internal_6e3c542cf4f2d4310c391ff827fddd0eac319b1c070d4fec7f33ea3381ded21a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_841f696c2c99ef9913c4193c5230db0c0f69c61cebbefc34b8272ba1a14ef957 = $this->env->getExtension("native_profiler");
        $__internal_841f696c2c99ef9913c4193c5230db0c0f69c61cebbefc34b8272ba1a14ef957->enter($__internal_841f696c2c99ef9913c4193c5230db0c0f69c61cebbefc34b8272ba1a14ef957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_841f696c2c99ef9913c4193c5230db0c0f69c61cebbefc34b8272ba1a14ef957->leave($__internal_841f696c2c99ef9913c4193c5230db0c0f69c61cebbefc34b8272ba1a14ef957_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c35632016a1a5344f58b728293cb532b5237efcb4a01ad6c2f23e7bb9a8eef0 = $this->env->getExtension("native_profiler");
        $__internal_2c35632016a1a5344f58b728293cb532b5237efcb4a01ad6c2f23e7bb9a8eef0->enter($__internal_2c35632016a1a5344f58b728293cb532b5237efcb4a01ad6c2f23e7bb9a8eef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c35632016a1a5344f58b728293cb532b5237efcb4a01ad6c2f23e7bb9a8eef0->leave($__internal_2c35632016a1a5344f58b728293cb532b5237efcb4a01ad6c2f23e7bb9a8eef0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c633544fc0dc7213acbfe8b3173c197753f1ee349a10392f956a003c7c646606 = $this->env->getExtension("native_profiler");
        $__internal_c633544fc0dc7213acbfe8b3173c197753f1ee349a10392f956a003c7c646606->enter($__internal_c633544fc0dc7213acbfe8b3173c197753f1ee349a10392f956a003c7c646606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c633544fc0dc7213acbfe8b3173c197753f1ee349a10392f956a003c7c646606->leave($__internal_c633544fc0dc7213acbfe8b3173c197753f1ee349a10392f956a003c7c646606_prof);

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
