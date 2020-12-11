<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* content/index.html.twig */
class __TwigTemplate_47a3ddfc06acf00d2c0726008d711c5a62b515cdb12bd402d5a8cdd674b50fe0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "content/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ContentController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container nav-wrapper\">
        <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" id=\"world-tab\" data-toggle=\"tab\" href=\"#world\" role=\"tab\" aria-controls=\"world\" aria-selected=\"true\">НОВОСТИ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"moscow-tab\" data-toggle=\"tab\" href=\"#moscow\" role=\"tab\" aria-controls=\"moscow\" aria-selected=\"false\">МОСКВА</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"sport-tab\" data-toggle=\"tab\" href=\"#sport\" role=\"tab\" aria-controls=\"sport\" aria-selected=\"false\">СПОРТ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"auto-tab\" data-toggle=\"tab\" href=\"#auto\" role=\"tab\" aria-controls=\"auto\" aria-selected=\"false\">АВТО</a>
            </li>
        </ul>
        <div class=\"tab-content\" id=\"myTabContent\">
            <div class=\"tab-pane fade show active\" id=\"news\" role=\"tabpanel\" aria-labelledby=\"home-tab\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Название карточки</h5>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=\"#\" class=\"card-link\">Ссылка карты</a>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Название карточки</h5>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=\"#\" class=\"card-link\">Ссылка карты</a>
                    </div>
                </div>

                NNNN Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa, delectus dolore dolorum eligendi eveniet facilis ipsa laborum, nulla, perspiciatis porro quos ullam unde veritatis voluptatem! Eos molestias obcaecati quasi?</div>
            <div class=\"tab-pane fade\" id=\"moscow\" role=\"tabpanel\" aria-labelledby=\"moscow-tab\">MMM Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores facere magnam praesentium voluptatum! Atque aut beatae cumque eligendi esse incidunt iure nesciunt ratione repellendus voluptate! Aliquam, aliquid, consequatur?</div>
            <div class=\"tab-pane fade\" id=\"sport\" role=\"tabpanel\" aria-labelledby=\"sport-tab\">SSS Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam, amet aperiam assumenda at consectetur corporis dicta, dolorum ea ex illum officia quaerat quisquam reiciendis sit soluta unde veritatis vitae!</div>
            <div class=\"tab-pane fade\" id=\"auto\" role=\"tabpanel\" aria-labelledby=\"auto-tab\">AAA Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto cupiditate dicta dolores eum expedita id laudantium, nemo nihil nobis optio possimus quaerat quas quo ratione sed velit. Possimus, quo?</div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ContentController!{% endblock %}

{% block body %}
    <div class=\"container nav-wrapper\">
        <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" id=\"world-tab\" data-toggle=\"tab\" href=\"#world\" role=\"tab\" aria-controls=\"world\" aria-selected=\"true\">НОВОСТИ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"moscow-tab\" data-toggle=\"tab\" href=\"#moscow\" role=\"tab\" aria-controls=\"moscow\" aria-selected=\"false\">МОСКВА</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"sport-tab\" data-toggle=\"tab\" href=\"#sport\" role=\"tab\" aria-controls=\"sport\" aria-selected=\"false\">СПОРТ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"auto-tab\" data-toggle=\"tab\" href=\"#auto\" role=\"tab\" aria-controls=\"auto\" aria-selected=\"false\">АВТО</a>
            </li>
        </ul>
        <div class=\"tab-content\" id=\"myTabContent\">
            <div class=\"tab-pane fade show active\" id=\"news\" role=\"tabpanel\" aria-labelledby=\"home-tab\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Название карточки</h5>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=\"#\" class=\"card-link\">Ссылка карты</a>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Название карточки</h5>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href=\"#\" class=\"card-link\">Ссылка карты</a>
                    </div>
                </div>

                NNNN Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa, delectus dolore dolorum eligendi eveniet facilis ipsa laborum, nulla, perspiciatis porro quos ullam unde veritatis voluptatem! Eos molestias obcaecati quasi?</div>
            <div class=\"tab-pane fade\" id=\"moscow\" role=\"tabpanel\" aria-labelledby=\"moscow-tab\">MMM Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores facere magnam praesentium voluptatum! Atque aut beatae cumque eligendi esse incidunt iure nesciunt ratione repellendus voluptate! Aliquam, aliquid, consequatur?</div>
            <div class=\"tab-pane fade\" id=\"sport\" role=\"tabpanel\" aria-labelledby=\"sport-tab\">SSS Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam, amet aperiam assumenda at consectetur corporis dicta, dolorum ea ex illum officia quaerat quisquam reiciendis sit soluta unde veritatis vitae!</div>
            <div class=\"tab-pane fade\" id=\"auto\" role=\"tabpanel\" aria-labelledby=\"auto-tab\">AAA Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto cupiditate dicta dolores eum expedita id laudantium, nemo nihil nobis optio possimus quaerat quas quo ratione sed velit. Possimus, quo?</div>
        </div>
    </div>


{% endblock %}
", "content/index.html.twig", "/app/templates/content/index.html.twig");
    }
}
