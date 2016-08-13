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
        $__internal_18f643727e6fbe6978f27f926f9949fefb893e14fe3c3e33e26df1c828493141 = $this->env->getExtension("native_profiler");
        $__internal_18f643727e6fbe6978f27f926f9949fefb893e14fe3c3e33e26df1c828493141->enter($__internal_18f643727e6fbe6978f27f926f9949fefb893e14fe3c3e33e26df1c828493141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18f643727e6fbe6978f27f926f9949fefb893e14fe3c3e33e26df1c828493141->leave($__internal_18f643727e6fbe6978f27f926f9949fefb893e14fe3c3e33e26df1c828493141_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4782d52ebd9924443e233154d057596288007a3c7fa240336b820e8e52dacee0 = $this->env->getExtension("native_profiler");
        $__internal_4782d52ebd9924443e233154d057596288007a3c7fa240336b820e8e52dacee0->enter($__internal_4782d52ebd9924443e233154d057596288007a3c7fa240336b820e8e52dacee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4782d52ebd9924443e233154d057596288007a3c7fa240336b820e8e52dacee0->leave($__internal_4782d52ebd9924443e233154d057596288007a3c7fa240336b820e8e52dacee0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aec90388ad48a49921e5f2c20be1ae2f50202ac5cf179ff1f93f0dddd7a3cd5d = $this->env->getExtension("native_profiler");
        $__internal_aec90388ad48a49921e5f2c20be1ae2f50202ac5cf179ff1f93f0dddd7a3cd5d->enter($__internal_aec90388ad48a49921e5f2c20be1ae2f50202ac5cf179ff1f93f0dddd7a3cd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aec90388ad48a49921e5f2c20be1ae2f50202ac5cf179ff1f93f0dddd7a3cd5d->leave($__internal_aec90388ad48a49921e5f2c20be1ae2f50202ac5cf179ff1f93f0dddd7a3cd5d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0cb10ab42a31ede8399bbe2061fc19d863656d88b1e4b95eef84894b927fb6e = $this->env->getExtension("native_profiler");
        $__internal_d0cb10ab42a31ede8399bbe2061fc19d863656d88b1e4b95eef84894b927fb6e->enter($__internal_d0cb10ab42a31ede8399bbe2061fc19d863656d88b1e4b95eef84894b927fb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d0cb10ab42a31ede8399bbe2061fc19d863656d88b1e4b95eef84894b927fb6e->leave($__internal_d0cb10ab42a31ede8399bbe2061fc19d863656d88b1e4b95eef84894b927fb6e_prof);

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
