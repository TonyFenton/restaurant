<?php

/* admin/page/new.html.twig */
class __TwigTemplate_bb5c114a30818109df4e380218aae19f75dfcf7e04d598b00a441df8ed4299b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/page/new.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ba342b9dc1432bd52ab7aac672a82fcb33bf2fb9b4ddbb72aef2afa4e2b865b = $this->env->getExtension("native_profiler");
        $__internal_2ba342b9dc1432bd52ab7aac672a82fcb33bf2fb9b4ddbb72aef2afa4e2b865b->enter($__internal_2ba342b9dc1432bd52ab7aac672a82fcb33bf2fb9b4ddbb72aef2afa4e2b865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ba342b9dc1432bd52ab7aac672a82fcb33bf2fb9b4ddbb72aef2afa4e2b865b->leave($__internal_2ba342b9dc1432bd52ab7aac672a82fcb33bf2fb9b4ddbb72aef2afa4e2b865b_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_0a4e11d2fcef3f31c16179fd1ec86e3cd1b8afce9df0229c3307997019b2d1e3 = $this->env->getExtension("native_profiler");
        $__internal_0a4e11d2fcef3f31c16179fd1ec86e3cd1b8afce9df0229c3307997019b2d1e3->enter($__internal_0a4e11d2fcef3f31c16179fd1ec86e3cd1b8afce9df0229c3307997019b2d1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t/
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_page_new");
        echo "\">Nowa</a>
";
        
        $__internal_0a4e11d2fcef3f31c16179fd1ec86e3cd1b8afce9df0229c3307997019b2d1e3->leave($__internal_0a4e11d2fcef3f31c16179fd1ec86e3cd1b8afce9df0229c3307997019b2d1e3_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7a061297cdb1e3c51cd939ef0f476c042971440019c43ba35da6b0efa83a93a = $this->env->getExtension("native_profiler");
        $__internal_b7a061297cdb1e3c51cd939ef0f476c042971440019c43ba35da6b0efa83a93a->enter($__internal_b7a061297cdb1e3c51cd939ef0f476c042971440019c43ba35da6b0efa83a93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h1>Page creation</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b7a061297cdb1e3c51cd939ef0f476c042971440019c43ba35da6b0efa83a93a->leave($__internal_b7a061297cdb1e3c51cd939ef0f476c042971440019c43ba35da6b0efa83a93a_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  77 => 16,  72 => 14,  68 => 13,  64 => 11,  58 => 10,  49 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	/*/
/* 	<a href="{{ path('admin_page_index') }}">Strony</a>*/
/* 	/*/
/* 	<a href="{{ path('admin_page_new') }}">Nowa</a>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Page creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_page_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
