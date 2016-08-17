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
        $__internal_10e6013e90d3e9f3f0bd1fc34573e68e40d787bae2840d4223801a725a625b08 = $this->env->getExtension("native_profiler");
        $__internal_10e6013e90d3e9f3f0bd1fc34573e68e40d787bae2840d4223801a725a625b08->enter($__internal_10e6013e90d3e9f3f0bd1fc34573e68e40d787bae2840d4223801a725a625b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e6013e90d3e9f3f0bd1fc34573e68e40d787bae2840d4223801a725a625b08->leave($__internal_10e6013e90d3e9f3f0bd1fc34573e68e40d787bae2840d4223801a725a625b08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f14821c2fd7e0b2889456bd9b79716d5c01c3c957db9c7a51a50911f6f0b7d3a = $this->env->getExtension("native_profiler");
        $__internal_f14821c2fd7e0b2889456bd9b79716d5c01c3c957db9c7a51a50911f6f0b7d3a->enter($__internal_f14821c2fd7e0b2889456bd9b79716d5c01c3c957db9c7a51a50911f6f0b7d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f14821c2fd7e0b2889456bd9b79716d5c01c3c957db9c7a51a50911f6f0b7d3a->leave($__internal_f14821c2fd7e0b2889456bd9b79716d5c01c3c957db9c7a51a50911f6f0b7d3a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1589664cd15471e7da21f76d15d9679d2c981b2b9fda1ec6f1eab3b615e6a11f = $this->env->getExtension("native_profiler");
        $__internal_1589664cd15471e7da21f76d15d9679d2c981b2b9fda1ec6f1eab3b615e6a11f->enter($__internal_1589664cd15471e7da21f76d15d9679d2c981b2b9fda1ec6f1eab3b615e6a11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1589664cd15471e7da21f76d15d9679d2c981b2b9fda1ec6f1eab3b615e6a11f->leave($__internal_1589664cd15471e7da21f76d15d9679d2c981b2b9fda1ec6f1eab3b615e6a11f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4773209c75739e516a40e644f5241e8ad90f0b6d97bbaaa9f3eb60da1b4a2eb0 = $this->env->getExtension("native_profiler");
        $__internal_4773209c75739e516a40e644f5241e8ad90f0b6d97bbaaa9f3eb60da1b4a2eb0->enter($__internal_4773209c75739e516a40e644f5241e8ad90f0b6d97bbaaa9f3eb60da1b4a2eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4773209c75739e516a40e644f5241e8ad90f0b6d97bbaaa9f3eb60da1b4a2eb0->leave($__internal_4773209c75739e516a40e644f5241e8ad90f0b6d97bbaaa9f3eb60da1b4a2eb0_prof);

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
