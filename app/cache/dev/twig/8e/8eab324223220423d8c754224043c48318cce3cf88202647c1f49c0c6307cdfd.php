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
        $__internal_89911bd729b9e9fd99916a0f0901c5fbf43b9a597b7a216c6ad5faa19b11ed4a = $this->env->getExtension("native_profiler");
        $__internal_89911bd729b9e9fd99916a0f0901c5fbf43b9a597b7a216c6ad5faa19b11ed4a->enter($__internal_89911bd729b9e9fd99916a0f0901c5fbf43b9a597b7a216c6ad5faa19b11ed4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89911bd729b9e9fd99916a0f0901c5fbf43b9a597b7a216c6ad5faa19b11ed4a->leave($__internal_89911bd729b9e9fd99916a0f0901c5fbf43b9a597b7a216c6ad5faa19b11ed4a_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_81559dc03d17ccdfd287b50b4718a46c391104545a5b294723e941e5ac629abe = $this->env->getExtension("native_profiler");
        $__internal_81559dc03d17ccdfd287b50b4718a46c391104545a5b294723e941e5ac629abe->enter($__internal_81559dc03d17ccdfd287b50b4718a46c391104545a5b294723e941e5ac629abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_81559dc03d17ccdfd287b50b4718a46c391104545a5b294723e941e5ac629abe->leave($__internal_81559dc03d17ccdfd287b50b4718a46c391104545a5b294723e941e5ac629abe_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_09bfbd8258d7c7b4872b4295eed1f5830e16acce9b1dd111948c6a56d760b445 = $this->env->getExtension("native_profiler");
        $__internal_09bfbd8258d7c7b4872b4295eed1f5830e16acce9b1dd111948c6a56d760b445->enter($__internal_09bfbd8258d7c7b4872b4295eed1f5830e16acce9b1dd111948c6a56d760b445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_09bfbd8258d7c7b4872b4295eed1f5830e16acce9b1dd111948c6a56d760b445->leave($__internal_09bfbd8258d7c7b4872b4295eed1f5830e16acce9b1dd111948c6a56d760b445_prof);

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
