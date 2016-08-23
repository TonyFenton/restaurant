<?php

/* admin/user/index.html.twig */
class __TwigTemplate_c221acbed5ff35e07dd579cd3597c9f186d31a6647344b1588f3b385d0274fee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/user/index.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29e8228f5c7bbbed312e9866b1717711004b2a54163bd2d62bfacd0e25e631bb = $this->env->getExtension("native_profiler");
        $__internal_29e8228f5c7bbbed312e9866b1717711004b2a54163bd2d62bfacd0e25e631bb->enter($__internal_29e8228f5c7bbbed312e9866b1717711004b2a54163bd2d62bfacd0e25e631bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e8228f5c7bbbed312e9866b1717711004b2a54163bd2d62bfacd0e25e631bb->leave($__internal_29e8228f5c7bbbed312e9866b1717711004b2a54163bd2d62bfacd0e25e631bb_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9622668cc4e6c81bc5da0f8314ca5e9d0e108e13b0bf136e58eacb15c695d098 = $this->env->getExtension("native_profiler");
        $__internal_9622668cc4e6c81bc5da0f8314ca5e9d0e108e13b0bf136e58eacb15c695d098->enter($__internal_9622668cc4e6c81bc5da0f8314ca5e9d0e108e13b0bf136e58eacb15c695d098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_default_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tUżytkownicy
\t\t</li>
\t</ol>
";
        
        $__internal_9622668cc4e6c81bc5da0f8314ca5e9d0e108e13b0bf136e58eacb15c695d098->leave($__internal_9622668cc4e6c81bc5da0f8314ca5e9d0e108e13b0bf136e58eacb15c695d098_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_6750096daa6b325d83b818ffade1a07b51098e171a5ad5b5cbaa3116d91dc35f = $this->env->getExtension("native_profiler");
        $__internal_6750096daa6b325d83b818ffade1a07b51098e171a5ad5b5cbaa3116d91dc35f->enter($__internal_6750096daa6b325d83b818ffade1a07b51098e171a5ad5b5cbaa3116d91dc35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6750096daa6b325d83b818ffade1a07b51098e171a5ad5b5cbaa3116d91dc35f->leave($__internal_6750096daa6b325d83b818ffade1a07b51098e171a5ad5b5cbaa3116d91dc35f_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/index.html.twig";
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
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_default_dashboard') }}">Panel</a>*/
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
/* */
