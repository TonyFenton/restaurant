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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b527b8573381a69e30fbd8d6bfb74644c5135b7b30b1acfa6bdc6784034d7d6 = $this->env->getExtension("native_profiler");
        $__internal_5b527b8573381a69e30fbd8d6bfb74644c5135b7b30b1acfa6bdc6784034d7d6->enter($__internal_5b527b8573381a69e30fbd8d6bfb74644c5135b7b30b1acfa6bdc6784034d7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b527b8573381a69e30fbd8d6bfb74644c5135b7b30b1acfa6bdc6784034d7d6->leave($__internal_5b527b8573381a69e30fbd8d6bfb74644c5135b7b30b1acfa6bdc6784034d7d6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_580084e5b40d13317d707f3738ebb28eb9b686d4078a5773920c0e68f1bb2272 = $this->env->getExtension("native_profiler");
        $__internal_580084e5b40d13317d707f3738ebb28eb9b686d4078a5773920c0e68f1bb2272->enter($__internal_580084e5b40d13317d707f3738ebb28eb9b686d4078a5773920c0e68f1bb2272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Footer creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_580084e5b40d13317d707f3738ebb28eb9b686d4078a5773920c0e68f1bb2272->leave($__internal_580084e5b40d13317d707f3738ebb28eb9b686d4078a5773920c0e68f1bb2272_prof);

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
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
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
