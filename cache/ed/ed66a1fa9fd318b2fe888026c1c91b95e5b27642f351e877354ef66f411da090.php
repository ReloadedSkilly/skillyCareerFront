<?php

/* layout.twig */
class __TwigTemplate_b6b2d4877b324d59f54e0b14a1c709b1a2bd766c740238ae92a74b7a32bc6ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">

<!-- head -->
";
        // line 5
        $this->loadTemplate("partials/head.twig", "layout.twig", 5)->display($context);
        // line 6
        echo "
<body>

<!-- header -->
";
        // line 10
        if ((($context["title"] ?? null) == "home")) {
            // line 11
            echo "    ";
            $this->loadTemplate("partials/header-home.twig", "layout.twig", 11)->display($context);
        } else {
            // line 13
            echo "    ";
            $this->loadTemplate("partials/header.twig", "layout.twig", 13)->display($context);
        }
        // line 15
        echo "
<!-- content -->
";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "
</body>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  56 => 17,  50 => 20,  48 => 17,  44 => 15,  40 => 13,  36 => 11,  34 => 10,  28 => 6,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">

<!-- head -->
{% include 'partials/head.twig' %}

<body>

<!-- header -->
{% if title == 'home' %}
    {% include 'partials/header-home.twig' %}
{% else %}
    {% include 'partials/header.twig' %}
{% endif %}

<!-- content -->
{% block content %}

{% endblock %}

</body>
", "layout.twig", "/Applications/MAMP/htdocs/skillyCareerFront/templates/layout.twig");
    }
}
