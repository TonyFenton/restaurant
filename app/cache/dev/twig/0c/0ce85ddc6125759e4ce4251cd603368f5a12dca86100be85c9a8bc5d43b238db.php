<?php

/* admin/footer/new.html.twig */
class __TwigTemplate_9ccd356cb80059d69ecfc0e67a1aa5440058307c46521ff4128d4a72782ec5c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/footer/new.html.twig", 1);
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
        $__internal_0e10f06d41073ce2fbda679ab9ff04d6ad35217c86eb2414847b0f90d190a707 = $this->env->getExtension("native_profiler");
        $__internal_0e10f06d41073ce2fbda679ab9ff04d6ad35217c86eb2414847b0f90d190a707->enter($__internal_0e10f06d41073ce2fbda679ab9ff04d6ad35217c86eb2414847b0f90d190a707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e10f06d41073ce2fbda679ab9ff04d6ad35217c86eb2414847b0f90d190a707->leave($__internal_0e10f06d41073ce2fbda679ab9ff04d6ad35217c86eb2414847b0f90d190a707_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a17d6922068551e4c5dc6eb609bae27a9d8c7c8bc7de449c21a3afa1b8f2ed82 = $this->env->getExtension("native_profiler");
        $__internal_a17d6922068551e4c5dc6eb609bae27a9d8c7c8bc7de449c21a3afa1b8f2ed82->enter($__internal_a17d6922068551e4c5dc6eb609bae27a9d8c7c8bc7de449c21a3afa1b8f2ed82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t/
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t/
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_footer_new");
        echo "\">Nowa</a>
";
        
        $__internal_a17d6922068551e4c5dc6eb609bae27a9d8c7c8bc7de449c21a3afa1b8f2ed82->leave($__internal_a17d6922068551e4c5dc6eb609bae27a9d8c7c8bc7de449c21a3afa1b8f2ed82_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f26b5fb884790d2aea4da01b056cd1d2aefb4a6802673132b64430df463d199 = $this->env->getExtension("native_profiler");
        $__internal_9f26b5fb884790d2aea4da01b056cd1d2aefb4a6802673132b64430df463d199->enter($__internal_9f26b5fb884790d2aea4da01b056cd1d2aefb4a6802673132b64430df463d199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h1>Footer creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9f26b5fb884790d2aea4da01b056cd1d2aefb4a6802673132b64430df463d199->leave($__internal_9f26b5fb884790d2aea4da01b056cd1d2aefb4a6802673132b64430df463d199_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer/new.html.twig";
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
/* 	<a href="{{ path('admin_footer_index') }}">Stopki</a>*/
/* 	/*/
/* 	<a href="{{ path('admin_footer_new') }}">Nowa</a>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Footer creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_footer_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
