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
        $__internal_de239de83ebc78a709cc7b995da2e6292007754ef47d849dfb924a3cc98042f8 = $this->env->getExtension("native_profiler");
        $__internal_de239de83ebc78a709cc7b995da2e6292007754ef47d849dfb924a3cc98042f8->enter($__internal_de239de83ebc78a709cc7b995da2e6292007754ef47d849dfb924a3cc98042f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de239de83ebc78a709cc7b995da2e6292007754ef47d849dfb924a3cc98042f8->leave($__internal_de239de83ebc78a709cc7b995da2e6292007754ef47d849dfb924a3cc98042f8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0eb798523dd94b652a27b06fc291c703d01fdb828d09246e262face053f3547a = $this->env->getExtension("native_profiler");
        $__internal_0eb798523dd94b652a27b06fc291c703d01fdb828d09246e262face053f3547a->enter($__internal_0eb798523dd94b652a27b06fc291c703d01fdb828d09246e262face053f3547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/fosuser/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_0eb798523dd94b652a27b06fc291c703d01fdb828d09246e262face053f3547a->leave($__internal_0eb798523dd94b652a27b06fc291c703d01fdb828d09246e262face053f3547a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a522ced9a42b37239694a02009970c513d1220b2c2ee7ff2de0be67fceb449b = $this->env->getExtension("native_profiler");
        $__internal_7a522ced9a42b37239694a02009970c513d1220b2c2ee7ff2de0be67fceb449b->enter($__internal_7a522ced9a42b37239694a02009970c513d1220b2c2ee7ff2de0be67fceb449b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a522ced9a42b37239694a02009970c513d1220b2c2ee7ff2de0be67fceb449b->leave($__internal_7a522ced9a42b37239694a02009970c513d1220b2c2ee7ff2de0be67fceb449b_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_363529c7e1dc210f23b8a2d54d1089926707ce00ea937dd02e29782ea94241f1 = $this->env->getExtension("native_profiler");
        $__internal_363529c7e1dc210f23b8a2d54d1089926707ce00ea937dd02e29782ea94241f1->enter($__internal_363529c7e1dc210f23b8a2d54d1089926707ce00ea937dd02e29782ea94241f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "\t\t\t\t";
        
        $__internal_363529c7e1dc210f23b8a2d54d1089926707ce00ea937dd02e29782ea94241f1->leave($__internal_363529c7e1dc210f23b8a2d54d1089926707ce00ea937dd02e29782ea94241f1_prof);

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