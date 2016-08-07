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
        $__internal_2b6e926f9cee722fefe653af1617ca756236b3d4ba011f12fda84376957c6532 = $this->env->getExtension("native_profiler");
        $__internal_2b6e926f9cee722fefe653af1617ca756236b3d4ba011f12fda84376957c6532->enter($__internal_2b6e926f9cee722fefe653af1617ca756236b3d4ba011f12fda84376957c6532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6e926f9cee722fefe653af1617ca756236b3d4ba011f12fda84376957c6532->leave($__internal_2b6e926f9cee722fefe653af1617ca756236b3d4ba011f12fda84376957c6532_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ef7713f27ca0a2a3ad02498d2564758ab9a1eee695d1bfd79efa9b3422b49f1 = $this->env->getExtension("native_profiler");
        $__internal_7ef7713f27ca0a2a3ad02498d2564758ab9a1eee695d1bfd79efa9b3422b49f1->enter($__internal_7ef7713f27ca0a2a3ad02498d2564758ab9a1eee695d1bfd79efa9b3422b49f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_7ef7713f27ca0a2a3ad02498d2564758ab9a1eee695d1bfd79efa9b3422b49f1->leave($__internal_7ef7713f27ca0a2a3ad02498d2564758ab9a1eee695d1bfd79efa9b3422b49f1_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_238673cba5b50d6f6982a0e9cca784bd9e497f92e4192b4e2704211b7268c67d = $this->env->getExtension("native_profiler");
        $__internal_238673cba5b50d6f6982a0e9cca784bd9e497f92e4192b4e2704211b7268c67d->enter($__internal_238673cba5b50d6f6982a0e9cca784bd9e497f92e4192b4e2704211b7268c67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_238673cba5b50d6f6982a0e9cca784bd9e497f92e4192b4e2704211b7268c67d->leave($__internal_238673cba5b50d6f6982a0e9cca784bd9e497f92e4192b4e2704211b7268c67d_prof);

    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_94e461f26a7daa378df431854e45fd0692acd858661e4f63d8df75fae8523614 = $this->env->getExtension("native_profiler");
        $__internal_94e461f26a7daa378df431854e45fd0692acd858661e4f63d8df75fae8523614->enter($__internal_94e461f26a7daa378df431854e45fd0692acd858661e4f63d8df75fae8523614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_94e461f26a7daa378df431854e45fd0692acd858661e4f63d8df75fae8523614->leave($__internal_94e461f26a7daa378df431854e45fd0692acd858661e4f63d8df75fae8523614_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b5d97b04eff715083987ed4c4ce672ce6155009dee9366251707af010331385 = $this->env->getExtension("native_profiler");
        $__internal_7b5d97b04eff715083987ed4c4ce672ce6155009dee9366251707af010331385->enter($__internal_7b5d97b04eff715083987ed4c4ce672ce6155009dee9366251707af010331385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_7b5d97b04eff715083987ed4c4ce672ce6155009dee9366251707af010331385->leave($__internal_7b5d97b04eff715083987ed4c4ce672ce6155009dee9366251707af010331385_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5a49cec90f9a96f168a15ee8e8facc9226eb6245d789f9e46171beb39b06ee6 = $this->env->getExtension("native_profiler");
        $__internal_e5a49cec90f9a96f168a15ee8e8facc9226eb6245d789f9e46171beb39b06ee6->enter($__internal_e5a49cec90f9a96f168a15ee8e8facc9226eb6245d789f9e46171beb39b06ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array(), "any", false, true), "footer", array(), "any", true, true)) {
            // line 33
            echo "\t\t<div id=\"footer\">
\t\t\t";
            // line 34
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "footer", array()), "footer", array());
            echo "
\t\t</div>
\t";
        }
        
        $__internal_e5a49cec90f9a96f168a15ee8e8facc9226eb6245d789f9e46171beb39b06ee6->leave($__internal_e5a49cec90f9a96f168a15ee8e8facc9226eb6245d789f9e46171beb39b06ee6_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3522ed4cab2b3c9ef4491d25c01b74abe482f2cf69b553087fc9878f3d050be = $this->env->getExtension("native_profiler");
        $__internal_b3522ed4cab2b3c9ef4491d25c01b74abe482f2cf69b553087fc9878f3d050be->enter($__internal_b3522ed4cab2b3c9ef4491d25c01b74abe482f2cf69b553087fc9878f3d050be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b3522ed4cab2b3c9ef4491d25c01b74abe482f2cf69b553087fc9878f3d050be->leave($__internal_b3522ed4cab2b3c9ef4491d25c01b74abe482f2cf69b553087fc9878f3d050be_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fdbe9f17a99ade865fd587e1475b871c22085ce7d19b14a3d9b35c791750b32 = $this->env->getExtension("native_profiler");
        $__internal_4fdbe9f17a99ade865fd587e1475b871c22085ce7d19b14a3d9b35c791750b32->enter($__internal_4fdbe9f17a99ade865fd587e1475b871c22085ce7d19b14a3d9b35c791750b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4fdbe9f17a99ade865fd587e1475b871c22085ce7d19b14a3d9b35c791750b32->leave($__internal_4fdbe9f17a99ade865fd587e1475b871c22085ce7d19b14a3d9b35c791750b32_prof);

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
        return array (  167 => 39,  156 => 30,  145 => 34,  142 => 33,  140 => 32,  137 => 31,  135 => 30,  129 => 27,  125 => 26,  120 => 24,  116 => 23,  113 => 22,  107 => 21,  98 => 18,  93 => 17,  87 => 16,  76 => 13,  65 => 9,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/* 	{% if page.footer.footer is defined %}*/
/* 		<div id="footer">*/
/* 			{{ page.footer.footer | raw}}*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
