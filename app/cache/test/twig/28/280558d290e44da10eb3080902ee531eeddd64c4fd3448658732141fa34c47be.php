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
        $__internal_8fe30660238ebae08c9bb06a6c190709f5689e4783f519cd6c69fdb88716e8cf = $this->env->getExtension("native_profiler");
        $__internal_8fe30660238ebae08c9bb06a6c190709f5689e4783f519cd6c69fdb88716e8cf->enter($__internal_8fe30660238ebae08c9bb06a6c190709f5689e4783f519cd6c69fdb88716e8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fe30660238ebae08c9bb06a6c190709f5689e4783f519cd6c69fdb88716e8cf->leave($__internal_8fe30660238ebae08c9bb06a6c190709f5689e4783f519cd6c69fdb88716e8cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c23723a4c0c305ff537470b44a2aea60718dabbe272524b010bc23cb1d91cc1 = $this->env->getExtension("native_profiler");
        $__internal_3c23723a4c0c305ff537470b44a2aea60718dabbe272524b010bc23cb1d91cc1->enter($__internal_3c23723a4c0c305ff537470b44a2aea60718dabbe272524b010bc23cb1d91cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c23723a4c0c305ff537470b44a2aea60718dabbe272524b010bc23cb1d91cc1->leave($__internal_3c23723a4c0c305ff537470b44a2aea60718dabbe272524b010bc23cb1d91cc1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a149698169191e34fe546069aeefe75542d8f058e3cefd2d6b32ad6ea92639a = $this->env->getExtension("native_profiler");
        $__internal_0a149698169191e34fe546069aeefe75542d8f058e3cefd2d6b32ad6ea92639a->enter($__internal_0a149698169191e34fe546069aeefe75542d8f058e3cefd2d6b32ad6ea92639a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0a149698169191e34fe546069aeefe75542d8f058e3cefd2d6b32ad6ea92639a->leave($__internal_0a149698169191e34fe546069aeefe75542d8f058e3cefd2d6b32ad6ea92639a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a268293244d92494de2d3082a6c2119fee88ab825df47fa131b80bed4776fae6 = $this->env->getExtension("native_profiler");
        $__internal_a268293244d92494de2d3082a6c2119fee88ab825df47fa131b80bed4776fae6->enter($__internal_a268293244d92494de2d3082a6c2119fee88ab825df47fa131b80bed4776fae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a268293244d92494de2d3082a6c2119fee88ab825df47fa131b80bed4776fae6->leave($__internal_a268293244d92494de2d3082a6c2119fee88ab825df47fa131b80bed4776fae6_prof);

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
