<?php

/* admin/page/edit.html.twig */
class __TwigTemplate_a39ec2eebe703d557756e808a0fbfe97275e9fb2c5e4950ce85311521418ba9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/page/edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_851f03a9f6d706d34f59571fbeaca2787e0eeb60c486b4b5fd47bc17b009fdf0 = $this->env->getExtension("native_profiler");
        $__internal_851f03a9f6d706d34f59571fbeaca2787e0eeb60c486b4b5fd47bc17b009fdf0->enter($__internal_851f03a9f6d706d34f59571fbeaca2787e0eeb60c486b4b5fd47bc17b009fdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_851f03a9f6d706d34f59571fbeaca2787e0eeb60c486b4b5fd47bc17b009fdf0->leave($__internal_851f03a9f6d706d34f59571fbeaca2787e0eeb60c486b4b5fd47bc17b009fdf0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f5282f211ba7ce1ff1b8b6810ddc2796d4c068c7671be3a0998d634978b04560 = $this->env->getExtension("native_profiler");
        $__internal_f5282f211ba7ce1ff1b8b6810ddc2796d4c068c7671be3a0998d634978b04560->enter($__internal_f5282f211ba7ce1ff1b8b6810ddc2796d4c068c7671be3a0998d634978b04560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Page edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f5282f211ba7ce1ff1b8b6810ddc2796d4c068c7671be3a0998d634978b04560->leave($__internal_f5282f211ba7ce1ff1b8b6810ddc2796d4c068c7671be3a0998d634978b04560_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Page edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_page_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
