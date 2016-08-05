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
        $__internal_cf07b576da2ffa3c89847ee40dd21e30e8f71a22398a7d65172812369e6e02f4 = $this->env->getExtension("native_profiler");
        $__internal_cf07b576da2ffa3c89847ee40dd21e30e8f71a22398a7d65172812369e6e02f4->enter($__internal_cf07b576da2ffa3c89847ee40dd21e30e8f71a22398a7d65172812369e6e02f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf07b576da2ffa3c89847ee40dd21e30e8f71a22398a7d65172812369e6e02f4->leave($__internal_cf07b576da2ffa3c89847ee40dd21e30e8f71a22398a7d65172812369e6e02f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_795f84b2350d453ef52293857ceb8fe040cf22b4d371fb442023846bf353df57 = $this->env->getExtension("native_profiler");
        $__internal_795f84b2350d453ef52293857ceb8fe040cf22b4d371fb442023846bf353df57->enter($__internal_795f84b2350d453ef52293857ceb8fe040cf22b4d371fb442023846bf353df57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_795f84b2350d453ef52293857ceb8fe040cf22b4d371fb442023846bf353df57->leave($__internal_795f84b2350d453ef52293857ceb8fe040cf22b4d371fb442023846bf353df57_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_1ca5867fa08d42f570a24f9387e3dc7a4b2aad03e197c0ed20a98d843d7ce6ad = $this->env->getExtension("native_profiler");
        $__internal_1ca5867fa08d42f570a24f9387e3dc7a4b2aad03e197c0ed20a98d843d7ce6ad->enter($__internal_1ca5867fa08d42f570a24f9387e3dc7a4b2aad03e197c0ed20a98d843d7ce6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_1ca5867fa08d42f570a24f9387e3dc7a4b2aad03e197c0ed20a98d843d7ce6ad->leave($__internal_1ca5867fa08d42f570a24f9387e3dc7a4b2aad03e197c0ed20a98d843d7ce6ad_prof);

    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_5554120b326b37d19bbaf4a48c1562323900909746fd843d5492d5144a57a6b5 = $this->env->getExtension("native_profiler");
        $__internal_5554120b326b37d19bbaf4a48c1562323900909746fd843d5492d5144a57a6b5->enter($__internal_5554120b326b37d19bbaf4a48c1562323900909746fd843d5492d5144a57a6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_5554120b326b37d19bbaf4a48c1562323900909746fd843d5492d5144a57a6b5->leave($__internal_5554120b326b37d19bbaf4a48c1562323900909746fd843d5492d5144a57a6b5_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_365ec49b51e6e9083c1b7f1feaefed45e4e1e229f06cef1761383b7c6ca1f835 = $this->env->getExtension("native_profiler");
        $__internal_365ec49b51e6e9083c1b7f1feaefed45e4e1e229f06cef1761383b7c6ca1f835->enter($__internal_365ec49b51e6e9083c1b7f1feaefed45e4e1e229f06cef1761383b7c6ca1f835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_365ec49b51e6e9083c1b7f1feaefed45e4e1e229f06cef1761383b7c6ca1f835->leave($__internal_365ec49b51e6e9083c1b7f1feaefed45e4e1e229f06cef1761383b7c6ca1f835_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_adc475ed55f229d320f6fe843767b914d07d0513a48b2988427f197157e366a6 = $this->env->getExtension("native_profiler");
        $__internal_adc475ed55f229d320f6fe843767b914d07d0513a48b2988427f197157e366a6->enter($__internal_adc475ed55f229d320f6fe843767b914d07d0513a48b2988427f197157e366a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_adc475ed55f229d320f6fe843767b914d07d0513a48b2988427f197157e366a6->leave($__internal_adc475ed55f229d320f6fe843767b914d07d0513a48b2988427f197157e366a6_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c5efff24db6f459c4b9c7dbf8f094d01541c66a7e581a1357f69ac26580f642 = $this->env->getExtension("native_profiler");
        $__internal_5c5efff24db6f459c4b9c7dbf8f094d01541c66a7e581a1357f69ac26580f642->enter($__internal_5c5efff24db6f459c4b9c7dbf8f094d01541c66a7e581a1357f69ac26580f642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5c5efff24db6f459c4b9c7dbf8f094d01541c66a7e581a1357f69ac26580f642->leave($__internal_5c5efff24db6f459c4b9c7dbf8f094d01541c66a7e581a1357f69ac26580f642_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8abd6a00e2bf3f00ed3a247f51e55caad1ae96f70a275d63c829e8a498e350b0 = $this->env->getExtension("native_profiler");
        $__internal_8abd6a00e2bf3f00ed3a247f51e55caad1ae96f70a275d63c829e8a498e350b0->enter($__internal_8abd6a00e2bf3f00ed3a247f51e55caad1ae96f70a275d63c829e8a498e350b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8abd6a00e2bf3f00ed3a247f51e55caad1ae96f70a275d63c829e8a498e350b0->leave($__internal_8abd6a00e2bf3f00ed3a247f51e55caad1ae96f70a275d63c829e8a498e350b0_prof);

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
