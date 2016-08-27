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
        $__internal_2d3236afaa09d47a891f64ac76aa2a4d41e103f3d5d983807a3573a6b31aa062 = $this->env->getExtension("native_profiler");
        $__internal_2d3236afaa09d47a891f64ac76aa2a4d41e103f3d5d983807a3573a6b31aa062->enter($__internal_2d3236afaa09d47a891f64ac76aa2a4d41e103f3d5d983807a3573a6b31aa062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d3236afaa09d47a891f64ac76aa2a4d41e103f3d5d983807a3573a6b31aa062->leave($__internal_2d3236afaa09d47a891f64ac76aa2a4d41e103f3d5d983807a3573a6b31aa062_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c9afe7d1bfff600e431e388ede149725fdf6e5d2944b2b41ae42e97ea758842 = $this->env->getExtension("native_profiler");
        $__internal_4c9afe7d1bfff600e431e388ede149725fdf6e5d2944b2b41ae42e97ea758842->enter($__internal_4c9afe7d1bfff600e431e388ede149725fdf6e5d2944b2b41ae42e97ea758842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c9afe7d1bfff600e431e388ede149725fdf6e5d2944b2b41ae42e97ea758842->leave($__internal_4c9afe7d1bfff600e431e388ede149725fdf6e5d2944b2b41ae42e97ea758842_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c171a66f9edc3dd47c8c2e63b51003e6f7a903e7cf830435446d014854e8f22 = $this->env->getExtension("native_profiler");
        $__internal_0c171a66f9edc3dd47c8c2e63b51003e6f7a903e7cf830435446d014854e8f22->enter($__internal_0c171a66f9edc3dd47c8c2e63b51003e6f7a903e7cf830435446d014854e8f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c171a66f9edc3dd47c8c2e63b51003e6f7a903e7cf830435446d014854e8f22->leave($__internal_0c171a66f9edc3dd47c8c2e63b51003e6f7a903e7cf830435446d014854e8f22_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dff48b0be905250a6d4e0ab48ee9d4679f07b3cf306af8d7a9bd5997e7eb566 = $this->env->getExtension("native_profiler");
        $__internal_8dff48b0be905250a6d4e0ab48ee9d4679f07b3cf306af8d7a9bd5997e7eb566->enter($__internal_8dff48b0be905250a6d4e0ab48ee9d4679f07b3cf306af8d7a9bd5997e7eb566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8dff48b0be905250a6d4e0ab48ee9d4679f07b3cf306af8d7a9bd5997e7eb566->leave($__internal_8dff48b0be905250a6d4e0ab48ee9d4679f07b3cf306af8d7a9bd5997e7eb566_prof);

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
