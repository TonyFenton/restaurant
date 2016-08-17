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
        $__internal_ad5d820754fad84fc05f897c57a333bb591ce5cb25b6fa6d3cc5414524a4d555 = $this->env->getExtension("native_profiler");
        $__internal_ad5d820754fad84fc05f897c57a333bb591ce5cb25b6fa6d3cc5414524a4d555->enter($__internal_ad5d820754fad84fc05f897c57a333bb591ce5cb25b6fa6d3cc5414524a4d555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5d820754fad84fc05f897c57a333bb591ce5cb25b6fa6d3cc5414524a4d555->leave($__internal_ad5d820754fad84fc05f897c57a333bb591ce5cb25b6fa6d3cc5414524a4d555_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20c45480f2076be2c7817af925ff74a7c8bd7929cdec16013a47dcc43f093326 = $this->env->getExtension("native_profiler");
        $__internal_20c45480f2076be2c7817af925ff74a7c8bd7929cdec16013a47dcc43f093326->enter($__internal_20c45480f2076be2c7817af925ff74a7c8bd7929cdec16013a47dcc43f093326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20c45480f2076be2c7817af925ff74a7c8bd7929cdec16013a47dcc43f093326->leave($__internal_20c45480f2076be2c7817af925ff74a7c8bd7929cdec16013a47dcc43f093326_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b38a39233140b6fc0514d5fe38bc994480b14db290d445e29fd4e650c2f2bf7 = $this->env->getExtension("native_profiler");
        $__internal_6b38a39233140b6fc0514d5fe38bc994480b14db290d445e29fd4e650c2f2bf7->enter($__internal_6b38a39233140b6fc0514d5fe38bc994480b14db290d445e29fd4e650c2f2bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b38a39233140b6fc0514d5fe38bc994480b14db290d445e29fd4e650c2f2bf7->leave($__internal_6b38a39233140b6fc0514d5fe38bc994480b14db290d445e29fd4e650c2f2bf7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0476498ac7e1188b7f04dbe3dc0c34c1cc2961cf586f0a746824041074ad70e = $this->env->getExtension("native_profiler");
        $__internal_e0476498ac7e1188b7f04dbe3dc0c34c1cc2961cf586f0a746824041074ad70e->enter($__internal_e0476498ac7e1188b7f04dbe3dc0c34c1cc2961cf586f0a746824041074ad70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e0476498ac7e1188b7f04dbe3dc0c34c1cc2961cf586f0a746824041074ad70e->leave($__internal_e0476498ac7e1188b7f04dbe3dc0c34c1cc2961cf586f0a746824041074ad70e_prof);

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
