<?php

/* presentation.twig */
class __TwigTemplate_5f7377d6da105f89547d6b9f385030f63e598da576bb635a7f209d4128917a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("with_sidebar.twig", "presentation.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "with_sidebar.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Presentation</h1>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('MyExtension')->markdownParse("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto asperiores autem blanditiis
        consequuntur doloremque eligendi facere illo illum incidunt ipsam iste itaque labore laborum magnam minima minus
        modi natus nesciunt quaerat qui quidem, reiciendis repudiandae suscipit temporibus vero voluptas voluptates?
        Aliquid architecto asperiores at beatae consequatur consequuntur dolor dolore dolorem dolorum eligendi eos
        explicabo harum itaque iure laborum modi molestias natus non nulla numquam officia placeat quo saepe, sapiente
        sed tempore velit voluptate. Ad aspernatur assumenda debitis deleniti deserunt dignissimos ducimus eos eveniet
        harum illum iste laborum laudantium, libero maiores molestiae nostrum odit omnis pariatur perferendis,
        perspiciatis quaerat quibusdam quod repudiandae similique sit tenetur ullam voluptates! Earum magnam, quia.
        Error illum incidunt itaque? Ab adipisci, aliquam aperiam autem eaque eveniet facere illum ipsa itaque libero,
        necessitatibus odit quasi, ratione sapiente sint vero voluptas. Aliquid autem consequatur doloremque eos id ipsa
        libero mollitia nulla sit veritatis? Quod rem sapiente vel! Ab aliquam aliquid aspernatur atque beatae
        blanditiis consequuntur cum dignissimos, distinctio dolore eligendi error eum excepturi expedita id, impedit
        iste laudantium magnam magni maiores maxime minima placeat quaerat quidem quisquam ratione reiciendis
        reprehenderit repudiandae rerum sapiente sunt tempora temporibus ullam velit veniam voluptatem voluptatum?
        Aliquid aspernatur perferendis quo totam vel.")), "html", null, true);
        // line 19
        echo "
    </p>
";
    }

    public function getTemplateName()
    {
        return "presentation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'with_sidebar.twig' %}

{% block main %}
    <h1>Presentation</h1>
    <p>{{ 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto asperiores autem blanditiis
        consequuntur doloremque eligendi facere illo illum incidunt ipsam iste itaque labore laborum magnam minima minus
        modi natus nesciunt quaerat qui quidem, reiciendis repudiandae suscipit temporibus vero voluptas voluptates?
        Aliquid architecto asperiores at beatae consequatur consequuntur dolor dolore dolorem dolorum eligendi eos
        explicabo harum itaque iure laborum modi molestias natus non nulla numquam officia placeat quo saepe, sapiente
        sed tempore velit voluptate. Ad aspernatur assumenda debitis deleniti deserunt dignissimos ducimus eos eveniet
        harum illum iste laborum laudantium, libero maiores molestiae nostrum odit omnis pariatur perferendis,
        perspiciatis quaerat quibusdam quod repudiandae similique sit tenetur ullam voluptates! Earum magnam, quia.
        Error illum incidunt itaque? Ab adipisci, aliquam aperiam autem eaque eveniet facere illum ipsa itaque libero,
        necessitatibus odit quasi, ratione sapiente sint vero voluptas. Aliquid autem consequatur doloremque eos id ipsa
        libero mollitia nulla sit veritatis? Quod rem sapiente vel! Ab aliquam aliquid aspernatur atque beatae
        blanditiis consequuntur cum dignissimos, distinctio dolore eligendi error eum excepturi expedita id, impedit
        iste laudantium magnam magni maiores maxime minima placeat quaerat quidem quisquam ratione reiciendis
        reprehenderit repudiandae rerum sapiente sunt tempora temporibus ullam velit veniam voluptatem voluptatum?
        Aliquid aspernatur perferendis quo totam vel.' | markdown | striptags }}
    </p>
{% endblock %}", "presentation.twig", "/Applications/MAMP/htdocs/Twig-usage-example/templates/presentation.twig");
    }
}
