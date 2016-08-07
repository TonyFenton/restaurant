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
        $__internal_dbc2d8e78c8c38bd04b7c2472d5c6a0fe038e0b3915e45ebcbb65e9f3028a4f6 = $this->env->getExtension("native_profiler");
        $__internal_dbc2d8e78c8c38bd04b7c2472d5c6a0fe038e0b3915e45ebcbb65e9f3028a4f6->enter($__internal_dbc2d8e78c8c38bd04b7c2472d5c6a0fe038e0b3915e45ebcbb65e9f3028a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc2d8e78c8c38bd04b7c2472d5c6a0fe038e0b3915e45ebcbb65e9f3028a4f6->leave($__internal_dbc2d8e78c8c38bd04b7c2472d5c6a0fe038e0b3915e45ebcbb65e9f3028a4f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1a24b5643db0ab02b48cde372c19cfb093ed874b3fc05aaf96d9060fecf0973 = $this->env->getExtension("native_profiler");
        $__internal_e1a24b5643db0ab02b48cde372c19cfb093ed874b3fc05aaf96d9060fecf0973->enter($__internal_e1a24b5643db0ab02b48cde372c19cfb093ed874b3fc05aaf96d9060fecf0973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e1a24b5643db0ab02b48cde372c19cfb093ed874b3fc05aaf96d9060fecf0973->leave($__internal_e1a24b5643db0ab02b48cde372c19cfb093ed874b3fc05aaf96d9060fecf0973_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4c4b5d368dbf516884d344ed218231824bc5dc02a091458a3775b8e552f4d69 = $this->env->getExtension("native_profiler");
        $__internal_f4c4b5d368dbf516884d344ed218231824bc5dc02a091458a3775b8e552f4d69->enter($__internal_f4c4b5d368dbf516884d344ed218231824bc5dc02a091458a3775b8e552f4d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f4c4b5d368dbf516884d344ed218231824bc5dc02a091458a3775b8e552f4d69->leave($__internal_f4c4b5d368dbf516884d344ed218231824bc5dc02a091458a3775b8e552f4d69_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_beca13175975b468cae754c2a3843f8712bc8cc9fbcf88dd2570dbd2a95d2d48 = $this->env->getExtension("native_profiler");
        $__internal_beca13175975b468cae754c2a3843f8712bc8cc9fbcf88dd2570dbd2a95d2d48->enter($__internal_beca13175975b468cae754c2a3843f8712bc8cc9fbcf88dd2570dbd2a95d2d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_beca13175975b468cae754c2a3843f8712bc8cc9fbcf88dd2570dbd2a95d2d48->leave($__internal_beca13175975b468cae754c2a3843f8712bc8cc9fbcf88dd2570dbd2a95d2d48_prof);

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
