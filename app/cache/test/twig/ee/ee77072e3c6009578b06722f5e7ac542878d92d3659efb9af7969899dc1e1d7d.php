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
        $__internal_aa108d985111e24d34d06cbcee8a0a4f517fb9bcac4c41bcb2ec496341d661bc = $this->env->getExtension("native_profiler");
        $__internal_aa108d985111e24d34d06cbcee8a0a4f517fb9bcac4c41bcb2ec496341d661bc->enter($__internal_aa108d985111e24d34d06cbcee8a0a4f517fb9bcac4c41bcb2ec496341d661bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa108d985111e24d34d06cbcee8a0a4f517fb9bcac4c41bcb2ec496341d661bc->leave($__internal_aa108d985111e24d34d06cbcee8a0a4f517fb9bcac4c41bcb2ec496341d661bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d9994ecafb4366486a103a6553117e4733eae3b16910f69bbfb28e40bb89e37 = $this->env->getExtension("native_profiler");
        $__internal_5d9994ecafb4366486a103a6553117e4733eae3b16910f69bbfb28e40bb89e37->enter($__internal_5d9994ecafb4366486a103a6553117e4733eae3b16910f69bbfb28e40bb89e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_5d9994ecafb4366486a103a6553117e4733eae3b16910f69bbfb28e40bb89e37->leave($__internal_5d9994ecafb4366486a103a6553117e4733eae3b16910f69bbfb28e40bb89e37_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_7f358530fba79a13d0c81c647ddb005f5f580a99cceaf9ff26e9276b52137ea2 = $this->env->getExtension("native_profiler");
        $__internal_7f358530fba79a13d0c81c647ddb005f5f580a99cceaf9ff26e9276b52137ea2->enter($__internal_7f358530fba79a13d0c81c647ddb005f5f580a99cceaf9ff26e9276b52137ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_7f358530fba79a13d0c81c647ddb005f5f580a99cceaf9ff26e9276b52137ea2->leave($__internal_7f358530fba79a13d0c81c647ddb005f5f580a99cceaf9ff26e9276b52137ea2_prof);

    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_c151102ac34ec1198057638f339fb6a9c9f12673f10b47dd3e9d358a8c6309b3 = $this->env->getExtension("native_profiler");
        $__internal_c151102ac34ec1198057638f339fb6a9c9f12673f10b47dd3e9d358a8c6309b3->enter($__internal_c151102ac34ec1198057638f339fb6a9c9f12673f10b47dd3e9d358a8c6309b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_c151102ac34ec1198057638f339fb6a9c9f12673f10b47dd3e9d358a8c6309b3->leave($__internal_c151102ac34ec1198057638f339fb6a9c9f12673f10b47dd3e9d358a8c6309b3_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7262f6a1fbd3a53054aa69b61c026d720e9e482f0f1af738d37f4a9b3462bd3 = $this->env->getExtension("native_profiler");
        $__internal_f7262f6a1fbd3a53054aa69b61c026d720e9e482f0f1af738d37f4a9b3462bd3->enter($__internal_f7262f6a1fbd3a53054aa69b61c026d720e9e482f0f1af738d37f4a9b3462bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_f7262f6a1fbd3a53054aa69b61c026d720e9e482f0f1af738d37f4a9b3462bd3->leave($__internal_f7262f6a1fbd3a53054aa69b61c026d720e9e482f0f1af738d37f4a9b3462bd3_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_753e8675262d7d623d33097f9eb69a99eeec4be48c2c2893e7d32dee31bcc439 = $this->env->getExtension("native_profiler");
        $__internal_753e8675262d7d623d33097f9eb69a99eeec4be48c2c2893e7d32dee31bcc439->enter($__internal_753e8675262d7d623d33097f9eb69a99eeec4be48c2c2893e7d32dee31bcc439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_753e8675262d7d623d33097f9eb69a99eeec4be48c2c2893e7d32dee31bcc439->leave($__internal_753e8675262d7d623d33097f9eb69a99eeec4be48c2c2893e7d32dee31bcc439_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_6efcb353454df00d0b1957ebcfc59dd48d29a2a9572702410b8d274030426405 = $this->env->getExtension("native_profiler");
        $__internal_6efcb353454df00d0b1957ebcfc59dd48d29a2a9572702410b8d274030426405->enter($__internal_6efcb353454df00d0b1957ebcfc59dd48d29a2a9572702410b8d274030426405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6efcb353454df00d0b1957ebcfc59dd48d29a2a9572702410b8d274030426405->leave($__internal_6efcb353454df00d0b1957ebcfc59dd48d29a2a9572702410b8d274030426405_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_481f4488e0aaf5a2b6f7540d9533dc5729a9142ecd8797515d7d1661f645f707 = $this->env->getExtension("native_profiler");
        $__internal_481f4488e0aaf5a2b6f7540d9533dc5729a9142ecd8797515d7d1661f645f707->enter($__internal_481f4488e0aaf5a2b6f7540d9533dc5729a9142ecd8797515d7d1661f645f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_481f4488e0aaf5a2b6f7540d9533dc5729a9142ecd8797515d7d1661f645f707->leave($__internal_481f4488e0aaf5a2b6f7540d9533dc5729a9142ecd8797515d7d1661f645f707_prof);

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
