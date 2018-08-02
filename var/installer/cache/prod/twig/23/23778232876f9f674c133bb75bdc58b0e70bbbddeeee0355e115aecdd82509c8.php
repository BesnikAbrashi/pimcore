<?php

/* @PimcoreAdminBundle/Admin/Install/check.html.twig */
class __TwigTemplate_54fbf9e00d70b7cc3c1f0f26e7ba70d4b5590577d712c24c15932ef46d9f0c35 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PimcoreAdminBundle/Admin/Install/check.html.twig"));

        // line 1
        if ( !(isset($context["headless"]) || array_key_exists("headless", $context) ? $context["headless"] : (function () { throw new Twig_Error_Runtime('Variable "headless" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"robots\" content=\"noindex, nofollow\" />
</head>
<body>";
        }
        // line 10
        echo "
";
        // line 31
        echo "
";
        // line 32
        $context["s"] = $this;
        // line 33
        echo "
    <style type=\"text/css\">
        body {
            font-family: Arial, Tahoma, Verdana;
            font-size: 12px;
        }

        h2 {
            font-size: 16px;
            margin: 0;
            padding: 0 0 5px 0;
        }

        table {
            border-collapse: collapse;
        }

        a {
            color: #0066cc;
        }

        .legend {
            display: inline-block;
        }

        div.legend {
            padding-left: 20px;
        }

        span.legend {
            line-height: 30px;
            position: relative;
            padding: 0 30px 0 40px;
        }

        .legend img {
            position: absolute;
            top: 0;
            left: 0;
            width:30px;
        }

        table img {
            width:20px;
        }
    </style>

    <table cellpadding=\"20\">
        <tr>
            <td valign=\"top\">
                <h2>PHP</h2>
                <table border=\"1\" cellpadding=\"3\" cellspacing=\"0\">

                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["checksPHP"]) || array_key_exists("checksPHP", $context) ? $context["checksPHP"] : (function () { throw new Twig_Error_Runtime('Variable "checksPHP" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["check"]) {
            // line 87
            echo "                        ";
            echo $context["s"]->macro_check($context["check"]);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['check'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
                </table>
            </td>
            <td valign=\"top\">
                <h2>MySQL</h2>
                <table border=\"1\" cellpadding=\"3\" cellspacing=\"0\">

                    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["checksMySQL"]) || array_key_exists("checksMySQL", $context) ? $context["checksMySQL"] : (function () { throw new Twig_Error_Runtime('Variable "checksMySQL" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["check"]) {
            // line 97
            echo "                        ";
            echo $context["s"]->macro_check($context["check"]);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['check'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
                </table>
            </td>
            <td valign=\"top\">
                <h2>Filesystem</h2>
                <table border=\"1\" cellpadding=\"3\" cellspacing=\"0\">

                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["checksFS"]) || array_key_exists("checksFS", $context) ? $context["checksFS"] : (function () { throw new Twig_Error_Runtime('Variable "checksFS" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["check"]) {
            // line 107
            echo "                        ";
            echo $context["s"]->macro_check($context["check"]);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['check'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
                </table>

                <br />
                <br />

                <h2>CLI Tools &amp; Applications</h2>
                <table border=\"1\" cellpadding=\"3\" cellspacing=\"0\">

                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["checksApps"]) || array_key_exists("checksApps", $context) ? $context["checksApps"] : (function () { throw new Twig_Error_Runtime('Variable "checksApps" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["check"]) {
            // line 119
            echo "                        ";
            echo $context["s"]->macro_check($context["check"]);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['check'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
                </table>
            </td>
        </tr>
    </table>

    <div class=\"legend\">
        <p>
            <b>Explanation:</b>
        </p>
        <p>
            <span class=\"legend\"><img src=\"/pimcore/static6/img/flat-color-icons/ok.svg\" /> Everything ok</span>
            <span class=\"legend\"><img src=\"/pimcore/static6/img/flat-color-icons/warning.svg\" /> Recommended but not required</span>
            <span class=\"legend\"><img src=\"/pimcore/static6/img/flat-color-icons/high_priority.svg\" /> Required</span>
        </p>
    </div>

";
        // line 138
        if ( !(isset($context["headless"]) || array_key_exists("headless", $context) ? $context["headless"] : (function () { throw new Twig_Error_Runtime('Variable "headless" does not exist.', 138, $this->source); })())) {
            // line 139
            echo "</body>
</html>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function macro_check($__check__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "check" => $__check__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            // line 12
            echo "    ";
            $context["icon"] = "high_priority";
            // line 13
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new Twig_Error_Runtime('Variable "check" does not exist.', 13, $this->source); })()), "state", array()) == twig_constant("Pimcore\\Tool\\Requirements\\Check::STATE_OK"))) {
                // line 14
                echo "        ";
                $context["icon"] = "ok";
                // line 15
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new Twig_Error_Runtime('Variable "check" does not exist.', 15, $this->source); })()), "state", array()) == twig_constant("Pimcore\\Tool\\Requirements\\Check::STATE_WARNING"))) {
                // line 16
                echo "        ";
                $context["icon"] = "warning";
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <tr>
        <td>
            ";
            // line 21
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new Twig_Error_Runtime('Variable "check" does not exist.', 21, $this->source); })()), "link", array()))) {
                // line 22
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new Twig_Error_Runtime('Variable "check" does not exist.', 22, $this->source); })()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new Twig_Error_Runtime('Variable "check" does not exist.', 22, $this->source); })()), "name", array()), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 24
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new Twig_Error_Runtime('Variable "check" does not exist.', 24, $this->source); })()), "name", array()), "html", null, true);
                echo "
            ";
            }
            // line 26
            echo "        </td>

        <td><img src=\"/pimcore/static6/img/flat-color-icons/";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 28, $this->source); })()), "html", null, true);
            echo ".svg\" /></td>
    </tr>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@PimcoreAdminBundle/Admin/Install/check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 28,  265 => 26,  259 => 24,  251 => 22,  249 => 21,  244 => 18,  241 => 17,  238 => 16,  235 => 15,  232 => 14,  229 => 13,  226 => 12,  211 => 11,  202 => 139,  200 => 138,  181 => 121,  172 => 119,  168 => 118,  157 => 109,  148 => 107,  144 => 106,  135 => 99,  126 => 97,  122 => 96,  113 => 89,  104 => 87,  100 => 86,  45 => 33,  43 => 32,  40 => 31,  37 => 10,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not headless -%}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"robots\" content=\"noindex, nofollow\" />
</head>
<body>
{%- endif %}

{% macro check(check) %}
    {% set icon = 'high_priority' %}
    {% if check.state == constant('\\Pimcore\\\\Tool\\\\Requirements\\\\Check::STATE_OK') %}
        {% set icon = 'ok' %}
    {% elseif check.state == constant('\\Pimcore\\\\Tool\\\\Requirements\\\\Check::STATE_WARNING') %}
        {% set icon = 'warning' %}
    {% endif %}

    <tr>
        <td>
            {% if check.link is not empty %}
                <a href=\"{{ check.link }}\" target=\"_blank\">{{ check.name }}</a>
            {% else %}
                {{ check.name }}
            {% endif %}
        </td>

        <td><img src=\"/pimcore/static6/img/flat-color-icons/{{ icon }}.svg\" /></td>
    </tr>
{% endmacro %}

{% import _self as s %}

    <style type=\"text/css\">
        body {
            font-family: Arial, Tahoma, Verdana;
            font-size: 12px;
        }

        h2 {
            font-size: 16px;
            margin: 0;
            padding: 0 0 5px 0;
        }

        table {
            border-collapse: collapse;
        }

        a {
            color: #0066cc;
        }

        .legend {
            display: inline-block;
        }

        div.legend {
            padding-left: 20px;
        }

        span.legend {
            line-height: 30px;
            position: relative;
            padding: 0 30px 0 40px;
        }

        .legend img {
            position: absolute;
            top: 0;
            left: 0;
            width:30px;
        }

        table img {
            width:20px;
        }
    </style>

    <table cellpadding=\"20\">
        <tr>
            <td valign=\"top\">
                <h2>PHP</h2>
                <table border=\"1\" cellpadding=\"3\" cellspacing=\"0\">

                    {% for check in checksPHP %}
                        {{ s.check(check) }}
                    {% endfor %}

                </table>
            </td>
            <td valign=\"top\">
                <h2>MySQL</h2>
                <table border=\"1\" cellpadding=\"3\" cellspacing=\"0\">

                    {% for check in checksMySQL %}
                        {{ s.check(check) }}
                    {% endfor %}

                </table>
            </td>
            <td valign=\"top\">
                <h2>Filesystem</h2>
                <table border=\"1\" cellpadding=\"3\" cellspacing=\"0\">

                    {% for check in checksFS %}
                        {{ s.check(check) }}
                    {% endfor %}

                </table>

                <br />
                <br />

                <h2>CLI Tools &amp; Applications</h2>
                <table border=\"1\" cellpadding=\"3\" cellspacing=\"0\">

                    {% for check in checksApps %}
                        {{ s.check(check) }}
                    {% endfor %}

                </table>
            </td>
        </tr>
    </table>

    <div class=\"legend\">
        <p>
            <b>Explanation:</b>
        </p>
        <p>
            <span class=\"legend\"><img src=\"/pimcore/static6/img/flat-color-icons/ok.svg\" /> Everything ok</span>
            <span class=\"legend\"><img src=\"/pimcore/static6/img/flat-color-icons/warning.svg\" /> Recommended but not required</span>
            <span class=\"legend\"><img src=\"/pimcore/static6/img/flat-color-icons/high_priority.svg\" /> Required</span>
        </p>
    </div>

{% if not headless -%}
</body>
</html>
{%- endif %}
", "@PimcoreAdminBundle/Admin/Install/check.html.twig", "/var/www/html/pimcore/pimcore/lib/Pimcore/Bundle/AdminBundle/Resources/views/Admin/Install/check.html.twig");
    }
}
