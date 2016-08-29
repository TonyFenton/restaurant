<?php

/* user/index.html.twig */
class __TwigTemplate_f78b38e707796989c36b8d696625666db819068c931174a8e7c03c9778af2d84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "user/index.html.twig", 1);
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
        $__internal_ef9456a556d2c858be9221ba20c9778fb1582a8da5c9cf7425752664a9632f95 = $this->env->getExtension("native_profiler");
        $__internal_ef9456a556d2c858be9221ba20c9778fb1582a8da5c9cf7425752664a9632f95->enter($__internal_ef9456a556d2c858be9221ba20c9778fb1582a8da5c9cf7425752664a9632f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef9456a556d2c858be9221ba20c9778fb1582a8da5c9cf7425752664a9632f95->leave($__internal_ef9456a556d2c858be9221ba20c9778fb1582a8da5c9cf7425752664a9632f95_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_da4513b68d117b0079fb4566faf172cb99d37d546b311cf47a33e8864f41507c = $this->env->getExtension("native_profiler");
        $__internal_da4513b68d117b0079fb4566faf172cb99d37d546b311cf47a33e8864f41507c->enter($__internal_da4513b68d117b0079fb4566faf172cb99d37d546b311cf47a33e8864f41507c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tUżytkownicy
\t\t</li>
\t</ol>
";
        
        $__internal_da4513b68d117b0079fb4566faf172cb99d37d546b311cf47a33e8864f41507c->leave($__internal_da4513b68d117b0079fb4566faf172cb99d37d546b311cf47a33e8864f41507c_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_d4630573dcc32c8cce036c03e20d6e0f3fca537d23dc3ea855bf7840e3582a95 = $this->env->getExtension("native_profiler");
        $__internal_d4630573dcc32c8cce036c03e20d6e0f3fca537d23dc3ea855bf7840e3582a95->enter($__internal_d4630573dcc32c8cce036c03e20d6e0f3fca537d23dc3ea855bf7840e3582a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                echo "\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert alert-info\" role=\"alert\">
                ";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\" id=\"heading\">
\t\t\t<h1>Użytkownicy</h1>
\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" role=\"button\">Dodaj nowego</a>
\t\t</div>
\t\t<table class=\"table table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nazwa</th>
\t\t\t\t\t<th>E-mail</th>
\t\t\t\t\t<th>Akcje</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"action-buttons\">
\t\t\t\t\t\t";
            // line 41
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:User:renderDeleteForm", array("id" => $this->getAttribute($context["user"], "id", array()))));
            echo "
\t\t\t\t\t\t";
            // line 42
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:User:renderEnabledForm", array("id" => $this->getAttribute($context["user"], "id", array()))));
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_d4630573dcc32c8cce036c03e20d6e0f3fca537d23dc3ea855bf7840e3582a95->leave($__internal_d4630573dcc32c8cce036c03e20d6e0f3fca537d23dc3ea855bf7840e3582a95_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 46,  134 => 42,  130 => 41,  125 => 39,  121 => 38,  118 => 37,  114 => 36,  100 => 25,  95 => 22,  89 => 21,  80 => 18,  75 => 17,  70 => 16,  65 => 15,  59 => 14,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin_layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li class="active">*/
/* 			Użytkownicy*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% for type, messages in app.session.flashBag.all %}*/
/*         {% for message in messages %}*/
/* 			<div class="{{ type }} alert alert-info" role="alert">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/* 		{% endfor %}*/
/*     {% endfor %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading" id="heading">*/
/* 			<h1>Użytkownicy</h1>*/
/* 			<a class="btn btn-success" href="{{ path('fos_user_registration_register') }}" role="button">Dodaj nowego</a>*/
/* 		</div>*/
/* 		<table class="table table-striped table-hover">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th>Nazwa</th>*/
/* 					<th>E-mail</th>*/
/* 					<th>Akcje</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			{% for user in users %}*/
/* 				<tr>*/
/* 					<td>{{ user.username }}</td>*/
/* 					<td>{{ user.email }}</td>*/
/* 					<td class="action-buttons">*/
/* 						{{ render(controller('AppBundle:User:renderDeleteForm', {"id": user.id })) }}*/
/* 						{{ render(controller('AppBundle:User:renderEnabledForm', {"id": user.id })) }}*/
/* 					</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* {% endblock %}*/
