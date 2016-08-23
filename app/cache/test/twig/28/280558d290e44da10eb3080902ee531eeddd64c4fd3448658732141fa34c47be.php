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
        $__internal_e1bb578c0703afe3136cb046ef3aaad5a7aa00effc511ce45bb289496cd4474b = $this->env->getExtension("native_profiler");
        $__internal_e1bb578c0703afe3136cb046ef3aaad5a7aa00effc511ce45bb289496cd4474b->enter($__internal_e1bb578c0703afe3136cb046ef3aaad5a7aa00effc511ce45bb289496cd4474b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1bb578c0703afe3136cb046ef3aaad5a7aa00effc511ce45bb289496cd4474b->leave($__internal_e1bb578c0703afe3136cb046ef3aaad5a7aa00effc511ce45bb289496cd4474b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9f07175e45f4a00c720adf2f5ef4aff4b7006e14ef1d020922f6c709b808fa6 = $this->env->getExtension("native_profiler");
        $__internal_e9f07175e45f4a00c720adf2f5ef4aff4b7006e14ef1d020922f6c709b808fa6->enter($__internal_e9f07175e45f4a00c720adf2f5ef4aff4b7006e14ef1d020922f6c709b808fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e9f07175e45f4a00c720adf2f5ef4aff4b7006e14ef1d020922f6c709b808fa6->leave($__internal_e9f07175e45f4a00c720adf2f5ef4aff4b7006e14ef1d020922f6c709b808fa6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5968696c978b9808af97e951965d4e6e0e4f09965e0a94e41ccb840a21e6552d = $this->env->getExtension("native_profiler");
        $__internal_5968696c978b9808af97e951965d4e6e0e4f09965e0a94e41ccb840a21e6552d->enter($__internal_5968696c978b9808af97e951965d4e6e0e4f09965e0a94e41ccb840a21e6552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5968696c978b9808af97e951965d4e6e0e4f09965e0a94e41ccb840a21e6552d->leave($__internal_5968696c978b9808af97e951965d4e6e0e4f09965e0a94e41ccb840a21e6552d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_80a89d62f271146cf9220dd772642db99421aadd5534fdcea3166ba6aa0ebc75 = $this->env->getExtension("native_profiler");
        $__internal_80a89d62f271146cf9220dd772642db99421aadd5534fdcea3166ba6aa0ebc75->enter($__internal_80a89d62f271146cf9220dd772642db99421aadd5534fdcea3166ba6aa0ebc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_80a89d62f271146cf9220dd772642db99421aadd5534fdcea3166ba6aa0ebc75->leave($__internal_80a89d62f271146cf9220dd772642db99421aadd5534fdcea3166ba6aa0ebc75_prof);

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
