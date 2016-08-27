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
        $__internal_cf30c489cdfaa87d901814284b82c9e0239c9d00c4866e6d950f729d5fe23bf9 = $this->env->getExtension("native_profiler");
        $__internal_cf30c489cdfaa87d901814284b82c9e0239c9d00c4866e6d950f729d5fe23bf9->enter($__internal_cf30c489cdfaa87d901814284b82c9e0239c9d00c4866e6d950f729d5fe23bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf30c489cdfaa87d901814284b82c9e0239c9d00c4866e6d950f729d5fe23bf9->leave($__internal_cf30c489cdfaa87d901814284b82c9e0239c9d00c4866e6d950f729d5fe23bf9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9180c5064bc87bb75d23a1ef8648babcc11215ca6d2936279cbb00317351f43b = $this->env->getExtension("native_profiler");
        $__internal_9180c5064bc87bb75d23a1ef8648babcc11215ca6d2936279cbb00317351f43b->enter($__internal_9180c5064bc87bb75d23a1ef8648babcc11215ca6d2936279cbb00317351f43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9180c5064bc87bb75d23a1ef8648babcc11215ca6d2936279cbb00317351f43b->leave($__internal_9180c5064bc87bb75d23a1ef8648babcc11215ca6d2936279cbb00317351f43b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_084a8d3f8b414be22f8c55ee1bfe22b9ac8db47b1e5b1e49820d19f57bdbe6a4 = $this->env->getExtension("native_profiler");
        $__internal_084a8d3f8b414be22f8c55ee1bfe22b9ac8db47b1e5b1e49820d19f57bdbe6a4->enter($__internal_084a8d3f8b414be22f8c55ee1bfe22b9ac8db47b1e5b1e49820d19f57bdbe6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_084a8d3f8b414be22f8c55ee1bfe22b9ac8db47b1e5b1e49820d19f57bdbe6a4->leave($__internal_084a8d3f8b414be22f8c55ee1bfe22b9ac8db47b1e5b1e49820d19f57bdbe6a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32281ecd13148d7601713b839937ec5475dca3c41754d1856f603f60968caf04 = $this->env->getExtension("native_profiler");
        $__internal_32281ecd13148d7601713b839937ec5475dca3c41754d1856f603f60968caf04->enter($__internal_32281ecd13148d7601713b839937ec5475dca3c41754d1856f603f60968caf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_32281ecd13148d7601713b839937ec5475dca3c41754d1856f603f60968caf04->leave($__internal_32281ecd13148d7601713b839937ec5475dca3c41754d1856f603f60968caf04_prof);

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
