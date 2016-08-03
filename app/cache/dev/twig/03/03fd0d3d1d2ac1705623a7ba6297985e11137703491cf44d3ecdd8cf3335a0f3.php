<?php

/* admin/layout.html.twig */
class __TwigTemplate_aa49a84dc2d8051467d6f768b2cb4f8d32ebf8365ef18bf0a853c9ddc4ef1ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "admin/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c5d7d25bf47a5c07edb4586d7da9d8a2ee6b81f36c2364b7e2533a0f021cd23 = $this->env->getExtension("native_profiler");
        $__internal_8c5d7d25bf47a5c07edb4586d7da9d8a2ee6b81f36c2364b7e2533a0f021cd23->enter($__internal_8c5d7d25bf47a5c07edb4586d7da9d8a2ee6b81f36c2364b7e2533a0f021cd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c5d7d25bf47a5c07edb4586d7da9d8a2ee6b81f36c2364b7e2533a0f021cd23->leave($__internal_8c5d7d25bf47a5c07edb4586d7da9d8a2ee6b81f36c2364b7e2533a0f021cd23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63a1b90d1f3e43cb9a642f86a22949476e88fd8f64a8e6acde67f909a12e2b2a = $this->env->getExtension("native_profiler");
        $__internal_63a1b90d1f3e43cb9a642f86a22949476e88fd8f64a8e6acde67f909a12e2b2a->enter($__internal_63a1b90d1f3e43cb9a642f86a22949476e88fd8f64a8e6acde67f909a12e2b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_63a1b90d1f3e43cb9a642f86a22949476e88fd8f64a8e6acde67f909a12e2b2a->leave($__internal_63a1b90d1f3e43cb9a642f86a22949476e88fd8f64a8e6acde67f909a12e2b2a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56fc9753da38a6bd578498c434fe1bc7b6ac5b64a65776440b225ca10816020b = $this->env->getExtension("native_profiler");
        $__internal_56fc9753da38a6bd578498c434fe1bc7b6ac5b64a65776440b225ca10816020b->enter($__internal_56fc9753da38a6bd578498c434fe1bc7b6ac5b64a65776440b225ca10816020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_56fc9753da38a6bd578498c434fe1bc7b6ac5b64a65776440b225ca10816020b->leave($__internal_56fc9753da38a6bd578498c434fe1bc7b6ac5b64a65776440b225ca10816020b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b49fce4d4b69f9d074e436764ca924dfb7887947e6428bd830f7f6dc48ca8f = $this->env->getExtension("native_profiler");
        $__internal_27b49fce4d4b69f9d074e436764ca924dfb7887947e6428bd830f7f6dc48ca8f->enter($__internal_27b49fce4d4b69f9d074e436764ca924dfb7887947e6428bd830f7f6dc48ca8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div id=\"wrapper\">
\t\t<div id=\"header\">
\t\t\t<h1>Najlepsiejszy CMS</h1>
\t\t</div>
\t\t<div id=\"nav\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a></li>
\t\t\t\t<li><a href=\"#\">Wyloguj</a></li>
\t\t\t</ul>
\t\t</div>
\t\t<div id=\"content\">
\t\t\t";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "\t\t</div>
\t\t<div id=\"footer\">
\t\t</div>
\t</div>
";
        
        $__internal_27b49fce4d4b69f9d074e436764ca924dfb7887947e6428bd830f7f6dc48ca8f->leave($__internal_27b49fce4d4b69f9d074e436764ca924dfb7887947e6428bd830f7f6dc48ca8f_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_734c7290b473a8310a7583a940eb11db14fe8b73b398fa4f3027270be1f9b63c = $this->env->getExtension("native_profiler");
        $__internal_734c7290b473a8310a7583a940eb11db14fe8b73b398fa4f3027270be1f9b63c->enter($__internal_734c7290b473a8310a7583a940eb11db14fe8b73b398fa4f3027270be1f9b63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "content";
        
        $__internal_734c7290b473a8310a7583a940eb11db14fe8b73b398fa4f3027270be1f9b63c->leave($__internal_734c7290b473a8310a7583a940eb11db14fe8b73b398fa4f3027270be1f9b63c_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc721d85bd80af1208ec77b782eed4bcc3a08a87ad0e7d12fc158d6643f786a4 = $this->env->getExtension("native_profiler");
        $__internal_fc721d85bd80af1208ec77b782eed4bcc3a08a87ad0e7d12fc158d6643f786a4->enter($__internal_fc721d85bd80af1208ec77b782eed4bcc3a08a87ad0e7d12fc158d6643f786a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fc721d85bd80af1208ec77b782eed4bcc3a08a87ad0e7d12fc158d6643f786a4->leave($__internal_fc721d85bd80af1208ec77b782eed4bcc3a08a87ad0e7d12fc158d6643f786a4_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  104 => 23,  93 => 24,  91 => 23,  83 => 18,  75 => 12,  69 => 11,  60 => 8,  55 => 7,  49 => 6,  38 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/cms.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="wrapper">*/
/* 		<div id="header">*/
/* 			<h1>Najlepsiejszy CMS</h1>*/
/* 		</div>*/
/* 		<div id="nav">*/
/* 			<ul>*/
/* 				<li><a href="{{ path('admin_page_index') }}">Strony</a></li>*/
/* 				<li><a href="#">Wyloguj</a></li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		<div id="content">*/
/* 			{% block content %}content{% endblock %}*/
/* 		</div>*/
/* 		<div id="footer">*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
