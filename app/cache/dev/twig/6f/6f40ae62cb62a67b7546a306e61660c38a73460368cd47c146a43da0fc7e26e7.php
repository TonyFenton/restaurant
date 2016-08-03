<?php

/* admin/page/show.html.twig */
class __TwigTemplate_d3d8b5738183f5045dfcb7148174a86ee00da4af595229e43be34d000ad14448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/page/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbfd5e4c1f3d45458fd654aaf273e459c34b5aa1ac2a37d6d38cdc076e43ebc9 = $this->env->getExtension("native_profiler");
        $__internal_dbfd5e4c1f3d45458fd654aaf273e459c34b5aa1ac2a37d6d38cdc076e43ebc9->enter($__internal_dbfd5e4c1f3d45458fd654aaf273e459c34b5aa1ac2a37d6d38cdc076e43ebc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbfd5e4c1f3d45458fd654aaf273e459c34b5aa1ac2a37d6d38cdc076e43ebc9->leave($__internal_dbfd5e4c1f3d45458fd654aaf273e459c34b5aa1ac2a37d6d38cdc076e43ebc9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c888a1eb9b766c3fbc8bdc9c9d988c80393e648ace67a59a748fbaf9f375f0b = $this->env->getExtension("native_profiler");
        $__internal_1c888a1eb9b766c3fbc8bdc9c9d988c80393e648ace67a59a748fbaf9f375f0b->enter($__internal_1c888a1eb9b766c3fbc8bdc9c9d988c80393e648ace67a59a748fbaf9f375f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "picture", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1c888a1eb9b766c3fbc8bdc9c9d988c80393e648ace67a59a748fbaf9f375f0b->leave($__internal_1c888a1eb9b766c3fbc8bdc9c9d988c80393e648ace67a59a748fbaf9f375f0b_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  105 => 43,  99 => 40,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Page</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ page.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Slug</th>*/
/*                 <td>{{ page.slug }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ page.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ page.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Picture</th>*/
/*                 <td>{{ page.picture }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Content</th>*/
/*                 <td>{{ page.content }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_page_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_page_edit', { 'id': page.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
