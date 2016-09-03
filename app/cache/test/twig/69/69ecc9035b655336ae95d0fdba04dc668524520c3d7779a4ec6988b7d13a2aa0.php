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
        $__internal_6fd023b585d62286076379b46861275bf763f9166dab2ebf4734afa2c73b9c27 = $this->env->getExtension("native_profiler");
        $__internal_6fd023b585d62286076379b46861275bf763f9166dab2ebf4734afa2c73b9c27->enter($__internal_6fd023b585d62286076379b46861275bf763f9166dab2ebf4734afa2c73b9c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd023b585d62286076379b46861275bf763f9166dab2ebf4734afa2c73b9c27->leave($__internal_6fd023b585d62286076379b46861275bf763f9166dab2ebf4734afa2c73b9c27_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_0e8491330f00f576ebab1d4f0fac78ab7a52449cc9460592dab25f5b7f7d7b28 = $this->env->getExtension("native_profiler");
        $__internal_0e8491330f00f576ebab1d4f0fac78ab7a52449cc9460592dab25f5b7f7d7b28->enter($__internal_0e8491330f00f576ebab1d4f0fac78ab7a52449cc9460592dab25f5b7f7d7b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_0e8491330f00f576ebab1d4f0fac78ab7a52449cc9460592dab25f5b7f7d7b28->leave($__internal_0e8491330f00f576ebab1d4f0fac78ab7a52449cc9460592dab25f5b7f7d7b28_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa75b1c593a2268c646aaaa7661a8f4e82fc3f05417f27d634a32ee5a2b66037 = $this->env->getExtension("native_profiler");
        $__internal_fa75b1c593a2268c646aaaa7661a8f4e82fc3f05417f27d634a32ee5a2b66037->enter($__internal_fa75b1c593a2268c646aaaa7661a8f4e82fc3f05417f27d634a32ee5a2b66037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 18)->display($context);
        
        $__internal_fa75b1c593a2268c646aaaa7661a8f4e82fc3f05417f27d634a32ee5a2b66037->leave($__internal_fa75b1c593a2268c646aaaa7661a8f4e82fc3f05417f27d634a32ee5a2b66037_prof);

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
