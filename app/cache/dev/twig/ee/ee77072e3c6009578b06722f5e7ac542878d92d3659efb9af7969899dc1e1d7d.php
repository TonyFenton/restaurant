<?php

/* default/layout.html.twig */
class __TwigTemplate_dde4393721147b2835ffdf23dea410fa3e664f191306566ab39fef85c2f21a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d68f4f826db643be430f46b4fbe7a09b8734a1e01fc4114f5dc524f59394de2 = $this->env->getExtension("native_profiler");
        $__internal_5d68f4f826db643be430f46b4fbe7a09b8734a1e01fc4114f5dc524f59394de2->enter($__internal_5d68f4f826db643be430f46b4fbe7a09b8734a1e01fc4114f5dc524f59394de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d68f4f826db643be430f46b4fbe7a09b8734a1e01fc4114f5dc524f59394de2->leave($__internal_5d68f4f826db643be430f46b4fbe7a09b8734a1e01fc4114f5dc524f59394de2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45c296cdacf2f2fcae81d40d8f934b8763aa6f1efa34806b211c9a2bf718a3d0 = $this->env->getExtension("native_profiler");
        $__internal_45c296cdacf2f2fcae81d40d8f934b8763aa6f1efa34806b211c9a2bf718a3d0->enter($__internal_45c296cdacf2f2fcae81d40d8f934b8763aa6f1efa34806b211c9a2bf718a3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_45c296cdacf2f2fcae81d40d8f934b8763aa6f1efa34806b211c9a2bf718a3d0->leave($__internal_45c296cdacf2f2fcae81d40d8f934b8763aa6f1efa34806b211c9a2bf718a3d0_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_4f80f6e93b07952b557701ad1f6e02e71053ae57c8d618f27ed0226c4cd5792f = $this->env->getExtension("native_profiler");
        $__internal_4f80f6e93b07952b557701ad1f6e02e71053ae57c8d618f27ed0226c4cd5792f->enter($__internal_4f80f6e93b07952b557701ad1f6e02e71053ae57c8d618f27ed0226c4cd5792f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_4f80f6e93b07952b557701ad1f6e02e71053ae57c8d618f27ed0226c4cd5792f->leave($__internal_4f80f6e93b07952b557701ad1f6e02e71053ae57c8d618f27ed0226c4cd5792f_prof);

    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_ae8ad096def5f3066e21d89fa1b7a1b8ce681524b60afa1d8010f4574ea63c4a = $this->env->getExtension("native_profiler");
        $__internal_ae8ad096def5f3066e21d89fa1b7a1b8ce681524b60afa1d8010f4574ea63c4a->enter($__internal_ae8ad096def5f3066e21d89fa1b7a1b8ce681524b60afa1d8010f4574ea63c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_ae8ad096def5f3066e21d89fa1b7a1b8ce681524b60afa1d8010f4574ea63c4a->leave($__internal_ae8ad096def5f3066e21d89fa1b7a1b8ce681524b60afa1d8010f4574ea63c4a_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9379d22c2dc3dbecf0c743c6cbc6f81b68bf1243aa018436c06e5c6dc5bd5ffa = $this->env->getExtension("native_profiler");
        $__internal_9379d22c2dc3dbecf0c743c6cbc6f81b68bf1243aa018436c06e5c6dc5bd5ffa->enter($__internal_9379d22c2dc3dbecf0c743c6cbc6f81b68bf1243aa018436c06e5c6dc5bd5ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_9379d22c2dc3dbecf0c743c6cbc6f81b68bf1243aa018436c06e5c6dc5bd5ffa->leave($__internal_9379d22c2dc3dbecf0c743c6cbc6f81b68bf1243aa018436c06e5c6dc5bd5ffa_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcefba04350f968868f8e464c1fd4e88daa69e67bfc5c72510eae0594c0b1fa6 = $this->env->getExtension("native_profiler");
        $__internal_bcefba04350f968868f8e464c1fd4e88daa69e67bfc5c72510eae0594c0b1fa6->enter($__internal_bcefba04350f968868f8e464c1fd4e88daa69e67bfc5c72510eae0594c0b1fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t<div id=\"header\">
\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("mainPage");
        echo "\">
\t\t\t<img id=\"logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t</a>
\t\t";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:mainMenu", array("currentPage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()))));
        echo "
\t\t<img id=\"picture\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "picture", array()))), "html", null, true);
        echo "\" alt=\"\"/>
\t</div>
\t<div id=\"content\">
\t\t";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "\t</div>
\t<div id=\"footer\">
\t\t";
        // line 33
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "footer", array()), "footer", array());
        echo "
\t</div>
";
        
        $__internal_bcefba04350f968868f8e464c1fd4e88daa69e67bfc5c72510eae0594c0b1fa6->leave($__internal_bcefba04350f968868f8e464c1fd4e88daa69e67bfc5c72510eae0594c0b1fa6_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e01ac85d444a3e72c097b17ab70291421257248214a3b8aab79d82c7db17916 = $this->env->getExtension("native_profiler");
        $__internal_2e01ac85d444a3e72c097b17ab70291421257248214a3b8aab79d82c7db17916->enter($__internal_2e01ac85d444a3e72c097b17ab70291421257248214a3b8aab79d82c7db17916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2e01ac85d444a3e72c097b17ab70291421257248214a3b8aab79d82c7db17916->leave($__internal_2e01ac85d444a3e72c097b17ab70291421257248214a3b8aab79d82c7db17916_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38f2799482c7c9fbfb4e8522f2580141e02123e8bf0489763454572b2bb378ba = $this->env->getExtension("native_profiler");
        $__internal_38f2799482c7c9fbfb4e8522f2580141e02123e8bf0489763454572b2bb378ba->enter($__internal_38f2799482c7c9fbfb4e8522f2580141e02123e8bf0489763454572b2bb378ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38f2799482c7c9fbfb4e8522f2580141e02123e8bf0489763454572b2bb378ba->leave($__internal_38f2799482c7c9fbfb4e8522f2580141e02123e8bf0489763454572b2bb378ba_prof);

    }

    public function getTemplateName()
    {
        return "default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 37,  151 => 30,  141 => 33,  137 => 31,  135 => 30,  129 => 27,  125 => 26,  120 => 24,  116 => 23,  113 => 22,  107 => 21,  98 => 18,  93 => 17,  87 => 16,  76 => 13,  65 => 9,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* 	{{ page.title }}*/
/* {% endblock %}*/
/* */
/* {% block description %}*/
/* 	{% if page.description.description is defined %}*/
/* 		{{ page.description.description }}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block keywords %}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/style.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="header">*/
/* 		<a href="{{ path('mainPage') }}">*/
/* 			<img id="logo" src="{{asset('images/logo.png')}}" alt=""/>*/
/* 		</a>*/
/* 		{{ render(controller('AppBundle:Default:mainMenu', {"currentPage": page.slug })) }}*/
/* 		<img id="picture" src="{{asset('images/' ~ page.picture )}}" alt=""/>*/
/* 	</div>*/
/* 	<div id="content">*/
/* 		{% block content %}{% endblock %}*/
/* 	</div>*/
/* 	<div id="footer">*/
/* 		{{ page.footer.footer | raw}}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
