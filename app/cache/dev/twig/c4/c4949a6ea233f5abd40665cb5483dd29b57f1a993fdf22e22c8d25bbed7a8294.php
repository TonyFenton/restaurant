<?php

/* default/parent_page.html.twig */
class __TwigTemplate_947fc60d5a0b34be1acd6b34fd62858e785ca112ce86bfcb26fca80285c6755d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", "default/parent_page.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_925c050061a6fea62319de0e0e605b83ab1bf0470f4a1ecd1006853dacf1bc3b = $this->env->getExtension("native_profiler");
        $__internal_925c050061a6fea62319de0e0e605b83ab1bf0470f4a1ecd1006853dacf1bc3b->enter($__internal_925c050061a6fea62319de0e0e605b83ab1bf0470f4a1ecd1006853dacf1bc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/parent_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925c050061a6fea62319de0e0e605b83ab1bf0470f4a1ecd1006853dacf1bc3b->leave($__internal_925c050061a6fea62319de0e0e605b83ab1bf0470f4a1ecd1006853dacf1bc3b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5de6214045343a958900115f757a4b6988151a95370bbd8df3fca76d88de1b4f = $this->env->getExtension("native_profiler");
        $__internal_5de6214045343a958900115f757a4b6988151a95370bbd8df3fca76d88de1b4f->enter($__internal_5de6214045343a958900115f757a4b6988151a95370bbd8df3fca76d88de1b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/pageWith-style.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" media=\"(max-width: 640px)\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/pageWith-style-max640px.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_5de6214045343a958900115f757a4b6988151a95370bbd8df3fca76d88de1b4f->leave($__internal_5de6214045343a958900115f757a4b6988151a95370bbd8df3fca76d88de1b4f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_2083ca47ccadcc9504ba65f7b26c370906a3c54bd71edadfad9db5c221ec3c63 = $this->env->getExtension("native_profiler");
        $__internal_2083ca47ccadcc9504ba65f7b26c370906a3c54bd71edadfad9db5c221ec3c63->enter($__internal_2083ca47ccadcc9504ba65f7b26c370906a3c54bd71edadfad9db5c221ec3c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t<div id=\"secondaryNav\">
\t\t<ul id=\"secondaryMenu\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 14
            echo "\t\t\t\t<li><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childPage", array("parent" => $this->getAttribute($this->getAttribute($context["link"], "parent", array()), "slug", array()), "slug" => $this->getAttribute($context["link"], "slug", array()))), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</ul>
\t</div>
\t<div id=\"article\">
\t\t";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
\t</div>
\t<div style=\"clear: both\"></div>
";
        
        $__internal_2083ca47ccadcc9504ba65f7b26c370906a3c54bd71edadfad9db5c221ec3c63->leave($__internal_2083ca47ccadcc9504ba65f7b26c370906a3c54bd71edadfad9db5c221ec3c63_prof);

    }

    public function getTemplateName()
    {
        return "default/parent_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  87 => 16,  76 => 14,  72 => 13,  65 => 10,  59 => 9,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'default/layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	 {{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="{{asset('css/pageWith-style.css')}}">*/
/* 	<link rel="stylesheet" media="(max-width: 640px)" href="{{asset('css/pageWith-style-max640px.css')}}" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<h1>{{page.name}}</h1>*/
/* 	<div id="secondaryNav">*/
/* 		<ul id="secondaryMenu">*/
/* 			{% for link in page.children %}*/
/* 				<li><a href=" {{ path('childPage', { 'parent': link.parent.slug, 'slug': link.slug }) }} ">{{ link.name }}</a></li>*/
/* 			{% endfor%}*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div id="article">*/
/* 		{{page.content | raw}}*/
/* 	</div>*/
/* 	<div style="clear: both"></div>*/
/* {% endblock %}*/
/* */
/* */
