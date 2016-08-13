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
        $__internal_0af89f41211b572eefdfa35affe3ad1262900e01d2a9e2fdd22536d7a8c4deac = $this->env->getExtension("native_profiler");
        $__internal_0af89f41211b572eefdfa35affe3ad1262900e01d2a9e2fdd22536d7a8c4deac->enter($__internal_0af89f41211b572eefdfa35affe3ad1262900e01d2a9e2fdd22536d7a8c4deac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0af89f41211b572eefdfa35affe3ad1262900e01d2a9e2fdd22536d7a8c4deac->leave($__internal_0af89f41211b572eefdfa35affe3ad1262900e01d2a9e2fdd22536d7a8c4deac_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9c23d020d066e86a949a0db4a7c03904c21db4ed4eb6ae195e234b5a9a682147 = $this->env->getExtension("native_profiler");
        $__internal_9c23d020d066e86a949a0db4a7c03904c21db4ed4eb6ae195e234b5a9a682147->enter($__internal_9c23d020d066e86a949a0db4a7c03904c21db4ed4eb6ae195e234b5a9a682147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_9c23d020d066e86a949a0db4a7c03904c21db4ed4eb6ae195e234b5a9a682147->leave($__internal_9c23d020d066e86a949a0db4a7c03904c21db4ed4eb6ae195e234b5a9a682147_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_610706d4297ab3188047884d4398c002d713708273ba1e03b72f89eea4e0e6d0 = $this->env->getExtension("native_profiler");
        $__internal_610706d4297ab3188047884d4398c002d713708273ba1e03b72f89eea4e0e6d0->enter($__internal_610706d4297ab3188047884d4398c002d713708273ba1e03b72f89eea4e0e6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_610706d4297ab3188047884d4398c002d713708273ba1e03b72f89eea4e0e6d0->leave($__internal_610706d4297ab3188047884d4398c002d713708273ba1e03b72f89eea4e0e6d0_prof);

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
