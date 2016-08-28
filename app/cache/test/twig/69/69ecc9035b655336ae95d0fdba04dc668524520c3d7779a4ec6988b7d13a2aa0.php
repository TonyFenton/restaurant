<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e68038c507d06d5b2e0097d6d876ed61a2db01b9acd6d6fbab5d6ee3ccf847a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5b037ced54a15c5078b180f21b0e567b434155856e8c1b26b615b93069faeac = $this->env->getExtension("native_profiler");
        $__internal_d5b037ced54a15c5078b180f21b0e567b434155856e8c1b26b615b93069faeac->enter($__internal_d5b037ced54a15c5078b180f21b0e567b434155856e8c1b26b615b93069faeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5b037ced54a15c5078b180f21b0e567b434155856e8c1b26b615b93069faeac->leave($__internal_d5b037ced54a15c5078b180f21b0e567b434155856e8c1b26b615b93069faeac_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b0bfb2503e60449ef5dc6a2c71e1b90e2a78811bdfe4475a8bfbdbf7ad2bcd6b = $this->env->getExtension("native_profiler");
        $__internal_b0bfb2503e60449ef5dc6a2c71e1b90e2a78811bdfe4475a8bfbdbf7ad2bcd6b->enter($__internal_b0bfb2503e60449ef5dc6a2c71e1b90e2a78811bdfe4475a8bfbdbf7ad2bcd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">użytkownicy</a>
\t\t</li>\t\t
\t\t<li class=\"active\">
\t\t\tRejestracja
\t\t</li>
\t</ol>
";
        
        $__internal_b0bfb2503e60449ef5dc6a2c71e1b90e2a78811bdfe4475a8bfbdbf7ad2bcd6b->leave($__internal_b0bfb2503e60449ef5dc6a2c71e1b90e2a78811bdfe4475a8bfbdbf7ad2bcd6b_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_32a8c9e07cc56d18ec0ccd0c98b22b0a0b22f98f1574130ae1c97cb1aef4b5e6 = $this->env->getExtension("native_profiler");
        $__internal_32a8c9e07cc56d18ec0ccd0c98b22b0a0b22f98f1574130ae1c97cb1aef4b5e6->enter($__internal_32a8c9e07cc56d18ec0ccd0c98b22b0a0b22f98f1574130ae1c97cb1aef4b5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 18)->display($context);
        
        $__internal_32a8c9e07cc56d18ec0ccd0c98b22b0a0b22f98f1574130ae1c97cb1aef4b5e6->leave($__internal_32a8c9e07cc56d18ec0ccd0c98b22b0a0b22f98f1574130ae1c97cb1aef4b5e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  65 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "admin_layout.html.twig" %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('user_index') }}">użytkownicy</a>*/
/* 		</li>		*/
/* 		<li class="active">*/
/* 			Rejestracja*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock content %}*/
