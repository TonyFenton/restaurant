<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b0b22989f25b3d274da5c6f643bf2e0f1910685fe48906c60f3720daad2ae99d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28c182c9ead90226fbcc1358e36f5b5adaf462370736781ee4200066361ef273 = $this->env->getExtension("native_profiler");
        $__internal_28c182c9ead90226fbcc1358e36f5b5adaf462370736781ee4200066361ef273->enter($__internal_28c182c9ead90226fbcc1358e36f5b5adaf462370736781ee4200066361ef273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28c182c9ead90226fbcc1358e36f5b5adaf462370736781ee4200066361ef273->leave($__internal_28c182c9ead90226fbcc1358e36f5b5adaf462370736781ee4200066361ef273_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d784e080e42a1ea4dd794725397a7f2e1c712c266b8adaccfb152585fb07fafe = $this->env->getExtension("native_profiler");
        $__internal_d784e080e42a1ea4dd794725397a7f2e1c712c266b8adaccfb152585fb07fafe->enter($__internal_d784e080e42a1ea4dd794725397a7f2e1c712c266b8adaccfb152585fb07fafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/fosuser/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_d784e080e42a1ea4dd794725397a7f2e1c712c266b8adaccfb152585fb07fafe->leave($__internal_d784e080e42a1ea4dd794725397a7f2e1c712c266b8adaccfb152585fb07fafe_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7f3f8fcab658890ede19e7c3e2c545df1379d3026131e88157bdcfaf56675d1 = $this->env->getExtension("native_profiler");
        $__internal_d7f3f8fcab658890ede19e7c3e2c545df1379d3026131e88157bdcfaf56675d1->enter($__internal_d7f3f8fcab658890ede19e7c3e2c545df1379d3026131e88157bdcfaf56675d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
\t\t<div class=\"panel panel-default\" id=\"form-login\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 19
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "\t\t\t</div>
\t\t</div>\t
";
        
        $__internal_d7f3f8fcab658890ede19e7c3e2c545df1379d3026131e88157bdcfaf56675d1->leave($__internal_d7f3f8fcab658890ede19e7c3e2c545df1379d3026131e88157bdcfaf56675d1_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c02266bdc6a3dde51736464f720839f320219262617db785bdfec4bfc644b82b = $this->env->getExtension("native_profiler");
        $__internal_c02266bdc6a3dde51736464f720839f320219262617db785bdfec4bfc644b82b->enter($__internal_c02266bdc6a3dde51736464f720839f320219262617db785bdfec4bfc644b82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "\t\t\t\t";
        
        $__internal_c02266bdc6a3dde51736464f720839f320219262617db785bdfec4bfc644b82b->leave($__internal_c02266bdc6a3dde51736464f720839f320219262617db785bdfec4bfc644b82b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 20,  108 => 19,  99 => 21,  97 => 19,  92 => 16,  86 => 15,  77 => 12,  72 => 11,  67 => 10,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/fosuser/style.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for type, messages in app.session.flashBag.all %}*/
/*         {% for message in messages %}*/
/* 			<div class="{{ type }}">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/* 		{% endfor %}*/
/*     {% endfor %}*/
/* */
/* 		<div class="panel panel-default" id="form-login">*/
/* 			<div class="panel-body">*/
/* 				{% block fos_user_content %}*/
/* 				{% endblock fos_user_content %}*/
/* 			</div>*/
/* 		</div>	*/
/* {% endblock %}*/
