<?php

/* themes/d8w3css/templates/navigation/menu.html.twig */
class __TwigTemplate_a77f525097a315b9e740f9083b62862f6f809a231ddd5ef8cef5e2984cd78a41 extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 27, "set" => 30, "if" => 39, "for" => 45);
        $filters = array("clean_class" => 31);
        $functions = array("link" => 68);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'set', 'if', 'for'),
                array('clean_class'),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 21
        $context["menus"] = $this;
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, (isset($context["menu_name"]) ? $context["menu_name"] : null))));
        echo "
";
    }

    // line 27
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            echo "  ";
            $context["menus"] = $this;
            // line 29
            echo "  ";
            // line 30
            $context["menu_classes"] = array(0 => ("ul-parent ul-parent-" . \Drupal\Component\Utility\Html::getClass(            // line 31
(isset($context["menu_name"]) ? $context["menu_name"] : null))));
            // line 34
            echo "  ";
            // line 35
            $context["submenu_classes"] = array(0 => ("ul-child ul-child-" . \Drupal\Component\Utility\Html::getClass(            // line 36
(isset($context["menu_name"]) ? $context["menu_name"] : null))));
            // line 39
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 40
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 41
                    echo "      <ul ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["menu_classes"]) ? $context["menu_classes"] : null)), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 43
                    echo "      <ul ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["menu_classes"]) ? $context["menu_classes"] : null)), "method"), "addClass", array(0 => (isset($context["submenu_classes"]) ? $context["submenu_classes"] : null)), "method"), "html", null, true));
                    echo ">
    ";
                }
                // line 45
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "      ";
                    // line 47
                    $context["item_classes"] = array(0 => ("li-item li-item-" . \Drupal\Component\Utility\Html::getClass(                    // line 48
(isset($context["menu_name"]) ? $context["menu_name"] : null))), 1 => (($this->getAttribute(                    // line 49
$context["item"], "is_expanded", array())) ? ("li-expanded") : ("")), 2 => ((($this->getAttribute(                    // line 50
$context["item"], "is_expanded", array()) && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0))) ? ("li-parent") : ("")), 3 => (($this->getAttribute(                    // line 51
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 54
                    echo "     ";
                    if ((((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 55
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">
        <a href=\"#\" class=\"w3-button tMenu toggle-parent\">";
                        // line 56
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"fa fa-chevron-down dropdown-arrow\"></span></a>
      ";
                    } elseif (((                    // line 57
(isset($context["menu_level"]) ? $context["menu_level"] : null) != 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 58
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">
        <a href=\"#\" class=\"w3-button tMenu toggle-child\">";
                        // line 59
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"fa fa-arrow-right right-arrow\"></span><span class=\" fa fa-chevron-down dropdown-arrow\"></span></a>
      ";
                    } else {
                        // line 61
                        echo "      ";
                        // line 62
                        $context["link_classes"] = array(0 => ("w3-button li-link li-link-" . \Drupal\Component\Utility\Html::getClass(                        // line 63
(isset($context["menu_name"]) ? $context["menu_name"] : null))));
                        // line 66
                        echo "      <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">
        ";
                        // line 67
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute(                        // line 69
$context["item"], "title", array()), $this->getAttribute(                        // line 70
$context["item"], "url", array()), $this->getAttribute($this->getAttribute($this->getAttribute(                        // line 71
$context["item"], "attributes", array()), "removeClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "addClass", array(0 => (isset($context["link_classes"]) ? $context["link_classes"] : null)), "method")), "html", null, true));
                        // line 73
                        echo "
      ";
                    }
                    // line 75
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 76
                        echo "          ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1), (isset($context["menu_name"]) ? $context["menu_name"] : null))));
                        echo "
      ";
                    }
                    // line 78
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/d8w3css/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 80,  162 => 78,  156 => 76,  153 => 75,  149 => 73,  147 => 71,  146 => 70,  145 => 69,  144 => 67,  139 => 66,  137 => 63,  136 => 62,  134 => 61,  129 => 59,  124 => 58,  122 => 57,  118 => 56,  113 => 55,  110 => 54,  108 => 51,  107 => 50,  106 => 49,  105 => 48,  104 => 47,  102 => 46,  97 => 45,  91 => 43,  85 => 41,  82 => 40,  79 => 39,  77 => 36,  76 => 35,  74 => 34,  72 => 31,  71 => 30,  69 => 29,  66 => 28,  51 => 27,  45 => 26,  43 => 21,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}
{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0, menu_name) }}
{% macro menu_links(items, attributes, menu_level, menu_name) %}
  {% import _self as menus %}
  {%
    set menu_classes = [
      'ul-parent ul-parent-' ~ menu_name|clean_class,
    ]
  %}
  {%
    set submenu_classes = [
      'ul-child ul-child-' ~ menu_name|clean_class,
    ]
  %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul {{ attributes.addClass(menu_classes) }}>
    {% else %}
      <ul {{ attributes.removeClass(menu_classes).addClass(submenu_classes) }}>
    {% endif %}
    {% for item in items %}
      {%
        set item_classes = [
          'li-item li-item-' ~ menu_name|clean_class,
          item.is_expanded? 'li-expanded',
          item.is_expanded and menu_level == 0 ? 'li-parent',
          item.in_active_trail ? 'active',
        ]
      %}
     {% if menu_level == 0 and item.is_expanded %}
        <li{{ item.attributes.addClass(item_classes) }}>
        <a href=\"#\" class=\"w3-button tMenu toggle-parent\">{{ item.title }} <span class=\"fa fa-chevron-down dropdown-arrow\"></span></a>
      {% elseif menu_level != 0 and item.is_expanded %}
        <li{{ item.attributes.addClass(item_classes) }}>
        <a href=\"#\" class=\"w3-button tMenu toggle-child\">{{ item.title }} <span class=\"fa fa-arrow-right right-arrow\"></span><span class=\" fa fa-chevron-down dropdown-arrow\"></span></a>
      {% else %}
      {%
        set link_classes = [
          'w3-button li-link li-link-' ~ menu_name|clean_class,
        ]
      %}
      <li{{ item.attributes.addClass(item_classes) }}>
        {{
          link(
            item.title,
            item.url,
            item.attributes.removeClass(item_classes).addClass(link_classes)
          )
        }}
      {% endif %}
      {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1, menu_name) }}
      {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
";
    }
}
