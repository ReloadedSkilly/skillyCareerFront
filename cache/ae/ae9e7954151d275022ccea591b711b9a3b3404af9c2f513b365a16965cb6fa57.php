<?php

/* partials/header.twig */
class __TwigTemplate_e687357cfebe51e1157038d15ed3e20cab0b17e28c7aacf7d0257714ad775e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- header -->

<!-- <nav class=\"navbar navbar-inverse\">
<div class=\"container-fluid\">
<div class=\"navbar-header\">
<a class=\"navbar-brand\" href=\"/\">Twig testing</a>
</div>
<ul class=\"nav navbar-nav\">
<li class=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('MyExtension')->activeClass($context, "home"), "html", null, true);
        echo "\"><a href=\"/skillyCareerFront/\">Home</a></li>
<li class=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('MyExtension')->activeClass($context, "presentation"), "html", null, true);
        echo "\"><a href=\"/skillyCareerFront/?p=presentation\">Presentation</a></li>
<li class=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('MyExtension')->activeClass($context, "societe"), "html", null, true);
        echo "\"><a href=\"/skillyCareerFront/?p=company\">Company</a></li>
<li class=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('MyExtension')->activeClass($context, "contact"), "html", null, true);
        echo "\"><a href=\"/skillyCareerFront/?p=contact\">Contact</a></li>
</ul>
</div>
</nav> -->
<header class=\"main-header bg--verydarkblue\">
    <div class=\"container\">
        <div class=\"display-flex align-items--center justify-content--space-between\">
            <!-- logo -->
            <a href=\"/skillyCareerFront/\">
                <img src=\"./assets/img/logo-white.svg\" alt=\"logo\">
            </a>
            <!-- menu -->
            <nav class=\"main-menu\">
                <ul class=\"display-flex\">
                    <li>
                        <a href=\"#\">Mon profil</a>
                    </li>
                    <li>
                        <a href=\"#\">Mes évaluations</a>
                    </li>
                    <li>
                        <a href=\"#\">Mes demandes</a>
                    </li>
                    <li>
                        <button class=\"btn btn-icon\" type=\"button\" name=\"button\">
                            <img src=\"./assets/img/icons/turn_off.svg\" alt=\"turn off button\">
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- header -->

<!-- <nav class=\"navbar navbar-inverse\">
<div class=\"container-fluid\">
<div class=\"navbar-header\">
<a class=\"navbar-brand\" href=\"/\">Twig testing</a>
</div>
<ul class=\"nav navbar-nav\">
<li class=\"{{ activeClass('home') }}\"><a href=\"/skillyCareerFront/\">Home</a></li>
<li class=\"{{ activeClass('presentation') }}\"><a href=\"/skillyCareerFront/?p=presentation\">Presentation</a></li>
<li class=\"{{ activeClass('societe') }}\"><a href=\"/skillyCareerFront/?p=company\">Company</a></li>
<li class=\"{{ activeClass('contact') }}\"><a href=\"/skillyCareerFront/?p=contact\">Contact</a></li>
</ul>
</div>
</nav> -->
<header class=\"main-header bg--verydarkblue\">
    <div class=\"container\">
        <div class=\"display-flex align-items--center justify-content--space-between\">
            <!-- logo -->
            <a href=\"/skillyCareerFront/\">
                <img src=\"./assets/img/logo-white.svg\" alt=\"logo\">
            </a>
            <!-- menu -->
            <nav class=\"main-menu\">
                <ul class=\"display-flex\">
                    <li>
                        <a href=\"#\">Mon profil</a>
                    </li>
                    <li>
                        <a href=\"#\">Mes évaluations</a>
                    </li>
                    <li>
                        <a href=\"#\">Mes demandes</a>
                    </li>
                    <li>
                        <button class=\"btn btn-icon\" type=\"button\" name=\"button\">
                            <img src=\"./assets/img/icons/turn_off.svg\" alt=\"turn off button\">
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
", "partials/header.twig", "/Applications/MAMP/htdocs/skillyCareerFront/templates/partials/header.twig");
    }
}
