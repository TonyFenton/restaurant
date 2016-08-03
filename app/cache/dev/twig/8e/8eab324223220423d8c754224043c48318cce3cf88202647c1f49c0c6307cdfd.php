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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ea9502fc752481fa79697a93a42a3087cb04e8168dfc3ff8a9726d058ca0d4d = $this->env->getExtension("native_profiler");
        $__internal_2ea9502fc752481fa79697a93a42a3087cb04e8168dfc3ff8a9726d058ca0d4d->enter($__internal_2ea9502fc752481fa79697a93a42a3087cb04e8168dfc3ff8a9726d058ca0d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea9502fc752481fa79697a93a42a3087cb04e8168dfc3ff8a9726d058ca0d4d->leave($__internal_2ea9502fc752481fa79697a93a42a3087cb04e8168dfc3ff8a9726d058ca0d4d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2983c191fbf49faac5dd4f4c1b4a8aae16f16322d1a0ac853790f36620bf53af = $this->env->getExtension("native_profiler");
        $__internal_2983c191fbf49faac5dd4f4c1b4a8aae16f16322d1a0ac853790f36620bf53af->enter($__internal_2983c191fbf49faac5dd4f4c1b4a8aae16f16322d1a0ac853790f36620bf53af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Page creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2983c191fbf49faac5dd4f4c1b4a8aae16f16322d1a0ac853790f36620bf53af->leave($__internal_2983c191fbf49faac5dd4f4c1b4a8aae16f16322d1a0ac853790f36620bf53af_prof);

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
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
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
