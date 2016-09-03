<?php

/* default/main_page.html.twig */
class __TwigTemplate_ead3a018b9d9b409462630083ceaf3c7135f43533d9714c5eb70e3df4706a247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_layout.html.twig", "default/main_page.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afd0872078ce80d3d70fe7ca6324e9398007870b13dbda90f5c898ea69a88206 = $this->env->getExtension("native_profiler");
        $__internal_afd0872078ce80d3d70fe7ca6324e9398007870b13dbda90f5c898ea69a88206->enter($__internal_afd0872078ce80d3d70fe7ca6324e9398007870b13dbda90f5c898ea69a88206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afd0872078ce80d3d70fe7ca6324e9398007870b13dbda90f5c898ea69a88206->leave($__internal_afd0872078ce80d3d70fe7ca6324e9398007870b13dbda90f5c898ea69a88206_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_12f9586c45c4944b3e8d17fd2f58de839701c66af9e49bb436d2f20280f9ae99 = $this->env->getExtension("native_profiler");
        $__internal_12f9586c45c4944b3e8d17fd2f58de839701c66af9e49bb436d2f20280f9ae99->enter($__internal_12f9586c45c4944b3e8d17fd2f58de839701c66af9e49bb436d2f20280f9ae99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t\t\t";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_12f9586c45c4944b3e8d17fd2f58de839701c66af9e49bb436d2f20280f9ae99->leave($__internal_12f9586c45c4944b3e8d17fd2f58de839701c66af9e49bb436d2f20280f9ae99_prof);

    }

    public function getTemplateName()
    {
        return "default/main_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'default_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="row">*/
/* 		<div class="col-xs-12">*/
/* 			<h1>{{page.name}}</h1>*/
/* 			{{page.content | raw}}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
