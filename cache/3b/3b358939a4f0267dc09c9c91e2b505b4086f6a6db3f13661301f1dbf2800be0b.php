<?php

/* welcome.twig */
class __TwigTemplate_3ba79ddcdc0ab3cbd69b6d0c51aedc8e1be8e8962369baaa79f580373c8cbf86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("layout.twig", "welcome.twig", 6);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"container padding-block--md\">

    <main>

        <!-- title -->
        <div class=\"title-section darkblue text-center\">
            <h1 class=\"text-uppercase font-size--lg font-weight--bold\">Bienvenue sur vinci talent</h1>
            <h2 class=\"font-size--normal font-weight--md\">La plateforme pour piloter votre carrière</h2>
        </div>

        <!-- user infos -->
        <div class=\"padding-block--md\">

            <div class=\"profil-card bg--white display-flex align-items--center\">

                <img src=\"./assets/img/profil.svg\" alt=\"profil user\">

                <div class=\"profil-info\">

                    <h3 class=\"blue font-size--md\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "lastname", array()), "html", null, true);
        echo "</h3>

                    <select class=\"custom-select\" name=\"selectjob\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 32
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["jobs"] ?? null), "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["jobs"] ?? null), "title", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </select>
                    <div class=\"d-block\">
                        <button class=\"btn btn-reset darkgray text-underline\" type=\"button\" name=\"button\">Je signale une erreur</button>
                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

<script type=\"text/javascript\">

    jQuery(document).ready(function(\$){

        // select 2
        \$('.custom-select').select2({
            placeholder: \"Votre métier\",
            allowClear: true,
            width: '350px'
        });

    });

</script>

";
    }

    public function getTemplateName()
    {
        return "welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 34,  64 => 32,  60 => 31,  52 => 28,  31 => 9,  28 => 8,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Page 2 - welcome user
invision:2.1
#}

{% extends 'layout.twig' %}

{% block content %}
<div class=\"container padding-block--md\">

    <main>

        <!-- title -->
        <div class=\"title-section darkblue text-center\">
            <h1 class=\"text-uppercase font-size--lg font-weight--bold\">Bienvenue sur vinci talent</h1>
            <h2 class=\"font-size--normal font-weight--md\">La plateforme pour piloter votre carrière</h2>
        </div>

        <!-- user infos -->
        <div class=\"padding-block--md\">

            <div class=\"profil-card bg--white display-flex align-items--center\">

                <img src=\"./assets/img/profil.svg\" alt=\"profil user\">

                <div class=\"profil-info\">

                    <h3 class=\"blue font-size--md\">{{user.firstname}} {{user.lastname}}</h3>

                    <select class=\"custom-select\" name=\"selectjob\">
                        {% for job in jobs %}
                        <option value=\"{{jobs.title}}\">{{jobs.title}}</option>
                        {% endfor %}
                    </select>
                    <div class=\"d-block\">
                        <button class=\"btn btn-reset darkgray text-underline\" type=\"button\" name=\"button\">Je signale une erreur</button>
                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

<script type=\"text/javascript\">

    jQuery(document).ready(function(\$){

        // select 2
        \$('.custom-select').select2({
            placeholder: \"Votre métier\",
            allowClear: true,
            width: '350px'
        });

    });

</script>

{% endblock %}
", "welcome.twig", "/Applications/MAMP/htdocs/skillyCareerFront/templates/welcome.twig");
    }
}
