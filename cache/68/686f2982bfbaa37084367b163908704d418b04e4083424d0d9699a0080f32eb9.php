<?php

/* home.twig */
class __TwigTemplate_56637daa9fa2f997bf15e89b6c2318032a570e9e38955bb67bb34b2fe43a6783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("layout.twig", "home.twig", 6);
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
        echo "<div class=\"container padding-block--small\">

    <main>

        <!-- welcome message -->

        <div class=\"welcome-content\">

            <div class=\"welcome-wrapper bg--white text-center\">

                <!-- Carousel  -->
                <section class=\"carousel-default welcome-slide\">

                    <div id=\"carousel-default\" class=\"carousel slide\" data-ride=\"carousel\">

                        <!-- slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <div class=\"text-center\">
                                    <img src=\"./assets/img/onboarding1.svg\" alt=\"welcome screen 1\">
                                </div>
                                <h1 class=\"blue font-size--lg\">Pilotez votre carrière</h1>
                                <p>Vinci Talent vous accompagne et vous aide à préparer votre avenir professionnel.</p>
                            </div>
                            <div class=\"item\">
                                <div class=\"text-center\">
                                    <img src=\"./assets/img/onboarding2.svg\" alt=\"welcome screen 1\">
                                </div>
                                <h2 class=\"blue font-size--lg\">Où en êtes vous de vos<br/>compétences dans votre métier ?</h2>
                                <p>Répondez à une courte série de questions sur les compétences que vous utilisez au quotidien.</p>
                            </div>
                            <div class=\"item \">
                                <div class=\"text-center\">
                                    <img src=\"./assets/img/onboarding3.svg\" alt=\"welcome screen 1\">
                                </div>
                                <h2 class=\"blue font-size--lg\">Envie de bouger ?<br/>De vous former ? D’évoluer ?</h2>
                                <p>Nous vous proposerons des formations et des pistes de changement de poste ou de mobilité au sein du groupe Vinci.</p>
                            </div>
                        </div>

                        <!-- dots navigation -->
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carousel-default\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-default\" data-slide-to=\"1\" class=\"\"></li>
                            <li data-target=\"#carousel-default\" data-slide-to=\"2\" class=\"\"></li>
                        </ol>

                    </div>

                </section>

                <a href=\"/skillyCareerFront/?p=welcome\" class=\"btn btn-skilly btn--lg btn-rounded btn-gray\">Suivant</a>

            </div>

        </div>

    </main>

</div>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  28 => 8,  11 => 6,);
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
Page 1 - intro
invision:1.2
#}

{% extends 'layout.twig' %}

{% block content %}
<div class=\"container padding-block--small\">

    <main>

        <!-- welcome message -->

        <div class=\"welcome-content\">

            <div class=\"welcome-wrapper bg--white text-center\">

                <!-- Carousel  -->
                <section class=\"carousel-default welcome-slide\">

                    <div id=\"carousel-default\" class=\"carousel slide\" data-ride=\"carousel\">

                        <!-- slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <div class=\"text-center\">
                                    <img src=\"./assets/img/onboarding1.svg\" alt=\"welcome screen 1\">
                                </div>
                                <h1 class=\"blue font-size--lg\">Pilotez votre carrière</h1>
                                <p>Vinci Talent vous accompagne et vous aide à préparer votre avenir professionnel.</p>
                            </div>
                            <div class=\"item\">
                                <div class=\"text-center\">
                                    <img src=\"./assets/img/onboarding2.svg\" alt=\"welcome screen 1\">
                                </div>
                                <h2 class=\"blue font-size--lg\">Où en êtes vous de vos<br/>compétences dans votre métier ?</h2>
                                <p>Répondez à une courte série de questions sur les compétences que vous utilisez au quotidien.</p>
                            </div>
                            <div class=\"item \">
                                <div class=\"text-center\">
                                    <img src=\"./assets/img/onboarding3.svg\" alt=\"welcome screen 1\">
                                </div>
                                <h2 class=\"blue font-size--lg\">Envie de bouger ?<br/>De vous former ? D’évoluer ?</h2>
                                <p>Nous vous proposerons des formations et des pistes de changement de poste ou de mobilité au sein du groupe Vinci.</p>
                            </div>
                        </div>

                        <!-- dots navigation -->
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carousel-default\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-default\" data-slide-to=\"1\" class=\"\"></li>
                            <li data-target=\"#carousel-default\" data-slide-to=\"2\" class=\"\"></li>
                        </ol>

                    </div>

                </section>

                <a href=\"/skillyCareerFront/?p=welcome\" class=\"btn btn-skilly btn--lg btn-rounded btn-gray\">Suivant</a>

            </div>

        </div>

    </main>

</div>
{% endblock %}
", "home.twig", "/Applications/MAMP/htdocs/skillyCareerFront/templates/home.twig");
    }
}
