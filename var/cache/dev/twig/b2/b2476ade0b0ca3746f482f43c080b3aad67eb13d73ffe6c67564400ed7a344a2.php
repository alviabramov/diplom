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
class __TwigTemplate_51eb0454bf15a10e4fa6bbf1011e47235a9474ce571b836bfddfbfad1fa6cf7d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "content/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Новостная лента";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container nav-wrapper\">
        <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" id=\"index-tab\" data-toggle=\"tab\" href=\"#index\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">ГЛАВНОЕ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"world-tab\" data-toggle=\"tab\" href=\"#world\" role=\"tab\" aria-controls=\"world\" aria-selected=\"false\">В МИРЕ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"sport-tab\" data-toggle=\"tab\" href=\"#sport\" role=\"tab\" aria-controls=\"sport\" aria-selected=\"false\">СПОРТ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"auto-tab\" data-toggle=\"tab\" href=\"#auto\" role=\"tab\" aria-controls=\"auto\" aria-selected=\"false\">АВТО</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"gadgets-tab\" data-toggle=\"tab\" href=\"#gadgets\" role=\"tab\" aria-controls=\"gadgets\" aria-selected=\"false\">HI-TECH</a>
            </li>
        </ul>

        <div class=\"tab-content\" id=\"myTabContent\">
            <div class=\"tab-pane fade show active\" id=\"index\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </div>

            <div class=\"tab-pane fade\" id=\"world\" role=\"tabpanel\" aria-labelledby=\"world-tab\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["world"]) || array_key_exists("world", $context) ? $context["world"] : (function () { throw new RuntimeError('Variable "world" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 44), "html", null, true);
            echo "\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </div>

            <div class=\"tab-pane fade\" id=\"sport\" role=\"tabpanel\" aria-labelledby=\"sport-tab\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sport"]) || array_key_exists("sport", $context) ? $context["sport"] : (function () { throw new RuntimeError('Variable "sport" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 54), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 56), "html", null, true);
            echo "\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>

            <div class=\"tab-pane fade\" id=\"auto\" role=\"tabpanel\" aria-labelledby=\"auto-tab\">
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auto"]) || array_key_exists("auto", $context) ? $context["auto"] : (function () { throw new RuntimeError('Variable "auto" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 66), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 67), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 68), "html", null, true);
            echo "\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </div>

            <div class=\"tab-pane fade\" id=\"gadgets\" role=\"tabpanel\" aria-labelledby=\"gadgets-tab\">
                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gadgets"]) || array_key_exists("gadgets", $context) ? $context["gadgets"] : (function () { throw new RuntimeError('Variable "gadgets" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 76
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 78), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 79), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 80), "html", null, true);
            echo "\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  246 => 84,  236 => 80,  232 => 79,  228 => 78,  224 => 76,  220 => 75,  215 => 72,  205 => 68,  201 => 67,  197 => 66,  193 => 64,  189 => 63,  184 => 60,  174 => 56,  170 => 55,  166 => 54,  162 => 52,  158 => 51,  153 => 48,  143 => 44,  139 => 43,  135 => 42,  131 => 40,  127 => 39,  122 => 36,  112 => 32,  108 => 31,  104 => 30,  100 => 28,  96 => 27,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Новостная лента{% endblock %}

{% block body %}
    <div class=\"container nav-wrapper\">
        <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" id=\"index-tab\" data-toggle=\"tab\" href=\"#index\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">ГЛАВНОЕ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"world-tab\" data-toggle=\"tab\" href=\"#world\" role=\"tab\" aria-controls=\"world\" aria-selected=\"false\">В МИРЕ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"sport-tab\" data-toggle=\"tab\" href=\"#sport\" role=\"tab\" aria-controls=\"sport\" aria-selected=\"false\">СПОРТ</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"auto-tab\" data-toggle=\"tab\" href=\"#auto\" role=\"tab\" aria-controls=\"auto\" aria-selected=\"false\">АВТО</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" id=\"gadgets-tab\" data-toggle=\"tab\" href=\"#gadgets\" role=\"tab\" aria-controls=\"gadgets\" aria-selected=\"false\">HI-TECH</a>
            </li>
        </ul>

        <div class=\"tab-content\" id=\"myTabContent\">
            <div class=\"tab-pane fade show active\" id=\"index\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                {% for item in index %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{item.title}}</h5>
                            <p class=\"card-text\">{{ item.description }}</p>
                            <a href=\"{{ item.link }}\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <div class=\"tab-pane fade\" id=\"world\" role=\"tabpanel\" aria-labelledby=\"world-tab\">
                {% for item in world %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{item.title}}</h5>
                            <p class=\"card-text\">{{ item.description }}</p>
                            <a href=\"{{ item.link }}\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <div class=\"tab-pane fade\" id=\"sport\" role=\"tabpanel\" aria-labelledby=\"sport-tab\">
                {% for item in sport %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{item.title}}</h5>
                            <p class=\"card-text\">{{ item.description }}</p>
                            <a href=\"{{ item.link }}\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <div class=\"tab-pane fade\" id=\"auto\" role=\"tabpanel\" aria-labelledby=\"auto-tab\">
                {% for item in auto %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{item.title}}</h5>
                            <p class=\"card-text\">{{ item.description }}</p>
                            <a href=\"{{ item.link }}\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <div class=\"tab-pane fade\" id=\"gadgets\" role=\"tabpanel\" aria-labelledby=\"gadgets-tab\">
                {% for item in gadgets %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{item.title}}</h5>
                            <p class=\"card-text\">{{ item.description }}</p>
                            <a href=\"{{ item.link }}\" class=\"card-link\">Подробнее</a>
                        </div>
                    </div>
                {% endfor %}
            </div>

        </div>
    </div>

{% endblock %}
", "content/index.html.twig", "/app/templates/content/index.html.twig");
    }
}
