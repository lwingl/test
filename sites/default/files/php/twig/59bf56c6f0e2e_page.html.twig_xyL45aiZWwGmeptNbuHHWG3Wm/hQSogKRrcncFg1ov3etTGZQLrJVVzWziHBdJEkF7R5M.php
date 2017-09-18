<?php

/* themes/d8w3css/templates/layout/page.html.twig */
class __TwigTemplate_e4ffdf705f43ceddd62649dacd75761b457b7f5b95b4af07a6e22d017a077828 extends Twig_Template
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
        $tags = array("if" => 57);
        $filters = array("t" => 59);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
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

        // line 57
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu_vertical", array())) {
            // line 58
            echo "  <!-- Start: Main Navigation - Vertical -->
  <div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-card-2 w3-theme ";
            // line 59
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_primary_menu"]) ? $context["color_primary_menu"] : null), "html", null, true));
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Main Navigation")));
            echo "\" >
    <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
      <i id=\"close-nav\" class=\"close-nav fa fa-bars w3-button w3-bar-block w3-xlarge w3-theme ";
            // line 61
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_primary_menu"]) ? $context["color_primary_menu"] : null), "html", null, true));
            echo "\"></i>
        ";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu_vertical", array()), "html", null, true));
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Vertical -->
";
        }
        // line 67
        echo "<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-row w3-text-theme ";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_page_wrapper"]) ? $context["color_page_wrapper"] : null), "html", null, true));
        echo " \">
  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-theme-l4 ";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_header"]) ? $context["color_header"] : null), "html", null, true));
        echo "\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
    <div id=\"header-inner\" class=\"d8-fade w3-container header-inner ";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
        echo "\">
      ";
        // line 72
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu_vertical", array())) {
            // line 73
            echo "        <div id=\"open-nav-inner\" class=\"open-nav-inner w3-opacity w3-hover-opacity-off w3-left fa fa-bars w3-button w3-left-align w3-xxlarge w3-theme ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_primary_menu"]) ? $context["color_primary_menu"] : null), "html", null, true));
            echo "\"></div>
      ";
        }
        // line 75
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 76
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
      ";
        }
        // line 78
        echo "    </div>
  </header>
  <!-- End: Header -->
  ";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 82
            echo "  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"main-navigation-wrapper w3-card-2 w3-theme ";
            // line 83
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_primary_menu"]) ? $context["color_primary_menu"] : null), "html", null, true));
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Main Navigation")));
            echo "\" >
    <div id=\"main-navigation-inner-h\" class=\"d8-fade w3-row main-navigation-inner-h ";
            // line 84
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
            echo "\">
        <i class=\"mobile-nav fa fa-bars w3-hide-large w3-button w3-block w3-right-align w3-xxlarge w3-theme ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_primary_menu"]) ? $context["color_primary_menu"] : null), "html", null, true));
            echo "\"></i>
        ";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  ";
        }
        // line 91
        echo "  ";
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_text", array()))) {
            // line 92
            echo "    <!-- Start: Welcome Text -->
    <div id=\"welcome-text\" class=\"w3-theme-l5 ";
            // line 93
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_welcome_text"]) ? $context["color_welcome_text"] : null), "html", null, true));
            echo "\">
      <div id=\"welcome-text-inner\" class=\"d8-fade w3-row welcome-text-inner ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
            echo "\">
        ";
            // line 95
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_text", array()), "html", null, true));
            echo "
      </div>
    </div>
    <!-- End: Welcome Text -->
  ";
        }
        // line 100
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 101
            echo "    <!-- Start: Highlighted -->
    <div id=\"highlighted\" class=\"w3-theme-l2 ";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_highlighted"]) ? $context["color_highlighted"] : null), "html", null, true));
            echo "\">
      <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner ";
            // line 103
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
            echo "\">
        ";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
      </div>
    </div>
    <!-- End: Highlighted -->
  ";
        }
        // line 109
        echo "  ";
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 110
            echo "    ";
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_third", array()))) {
                // line 111
                echo "      <!-- Start: Top Container -->
      <div id=\"top-container\" class=\"w3-theme-l4 ";
                // line 112
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_top_container"]) ? $context["color_top_container"] : null), "html", null, true));
                echo "\">
        <div id=\"top-container-inner\" class=\"w3-row-padding w3-padding-large top-container-inner ";
                // line 113
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
                echo "\">

          ";
                // line 115
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_first", array())) {
                    // line 116
                    echo "            <!-- Start: Top container first region -->
            <div class=\"";
                    // line 117
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_w3css"]) ? $context["top_w3css"] : null), "html", null, true));
                    echo " top-region first-top\" >
              <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l5 ";
                    // line 118
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_top_first"]) ? $context["color_top_first"] : null), "html", null, true));
                    echo "\">
               ";
                    // line 119
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_first", array()), "html", null, true));
                    echo "
              </div>
            </div>
            <!-- End: Top Container First -->
          ";
                }
                // line 124
                echo "          ";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second", array())) {
                    // line 125
                    echo "            <!-- Start: Top Container Second  -->
            <div class=\"";
                    // line 126
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_w3css"]) ? $context["top_w3css"] : null), "html", null, true));
                    echo " top-region second-top\">
              <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l5 ";
                    // line 127
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_top_second"]) ? $context["color_top_second"] : null), "html", null, true));
                    echo "\">
               ";
                    // line 128
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_second", array()), "html", null, true));
                    echo "
              </div>
            </div>
            <!-- End: Top Container Second -->
          ";
                }
                // line 133
                echo "          ";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_third", array())) {
                    // line 134
                    echo "          <!-- Start: Top Container Third -->
          <div class=\"";
                    // line 135
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_third_class"]) ? $context["top_third_class"] : null), "html", null, true));
                    echo " top-region third-top\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l5 ";
                    // line 136
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_top_third"]) ? $context["color_top_third"] : null), "html", null, true));
                    echo "\">
              ";
                    // line 137
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_third", array()), "html", null, true));
                    echo "
            </div>
          </div>
          <!-- End: Top Container Third -->
          ";
                }
                // line 142
                echo "        </div>
      </div>
      <!-- End: Top container -->
    ";
            }
            // line 146
            echo "  ";
        }
        // line 147
        echo "  ";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 148
            echo "    <!-- Start: Page Title -->
    <div id=\"page-title\" class=\"w3-theme-d5 ";
            // line 149
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_page_title"]) ? $context["color_page_title"] : null), "html", null, true));
            echo "\">
      <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner ";
            // line 150
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
            echo "\">
        ";
            // line 151
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
    <!-- End: Page Title -- >
  ";
        }
        // line 156
        echo "  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-theme-l5 ";
        // line 157
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_main"]) ? $context["color_main"] : null), "html", null, true));
        echo "\">
    <div id=\"main-container-inner\" class=\"w3-container main-container-inner ";
        // line 158
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
        echo "\">
      ";
        // line 159
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array())) {
            // line 160
            echo "        <!-- Breadcrumb -->
        <div class=\"";
            // line 161
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_breadcrumb"]) ? $context["color_breadcrumb"] : null), "html", null, true));
            echo "\">
          ";
            // line 162
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
        </div>
        <!-- End: Breadcrumb -->
      ";
        }
        // line 166
        echo "      <!-- Start Main Container  -->
      <div class=\"w3-row-padding\">
        ";
        // line 168
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 169
            echo "          <!-- Start Left SideBar -->
          <div class =\"";
            // line 170
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " main-region first-sidebar\">
            <div class=\"d8-fade w3-card-2 w3-round w3-sidebar-first w3-mobile ";
            // line 171
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_sidebar_first"]) ? $context["color_sidebar_first"] : null), "html", null, true));
            echo "\">
              ";
            // line 172
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
            </div>
          </div>
          <!-- End: Left SideBar -->
        ";
        }
        // line 177
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 178
            echo "          <!-- Start: Main Content -->
          <div class=\"";
            // line 179
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_w3css"]) ? $context["content_w3css"] : null), "html", null, true));
            echo " main-region w3css-content\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile  ";
            // line 180
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_content"]) ? $context["color_content"] : null), "html", null, true));
            echo "\">
              ";
            // line 181
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
            </div>
          </div>
          <!-- End: Main Content -->
        ";
        }
        // line 186
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 187
            echo "          <!-- Start: Right SideBar -->
          <div class=\"";
            // line 188
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo " main-region second-sidebar\">
            <div class=\"d8-fade w3-card-2 w3-round w3-sidebar-second w3-mobile ";
            // line 189
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_sidebar_second"]) ? $context["color_sidebar_second"] : null), "html", null, true));
            echo "\">
              ";
            // line 190
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
            </div>
          </div>
          <!-- End: Right SideBar -->
        ";
        }
        // line 195
        echo "      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->
  ";
        // line 200
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 201
            echo "    ";
            if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()))) {
                // line 202
                echo "      <!-- Start: Bottom -->
      <div id=\"bottom-container\" class=\"w3-theme-l2 ";
                // line 203
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_bottom_container"]) ? $context["color_bottom_container"] : null), "html", null, true));
                echo "\">
        <div id=\"bottom-container-inner\" class=\"w3-row-padding w3-padding-large bottom-container-inner ";
                // line 204
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
                echo "\">
            ";
                // line 205
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                    // line 206
                    echo "              <!-- Start: Bottom First -->
              <div class=\"";
                    // line 207
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_w3css"]) ? $context["bottom_w3css"] : null), "html", null, true));
                    echo " bottom-region first-bottom\">
                <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 ";
                    // line 208
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_bottom_first"]) ? $context["color_bottom_first"] : null), "html", null, true));
                    echo "\">
                  ";
                    // line 209
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                    echo "
                </div>
              </div>
              <!-- End: Bottom First -->
            ";
                }
                // line 214
                echo "            ";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                    // line 215
                    echo "              <!-- Start: Bottom Second -->
              <div class=\"";
                    // line 216
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_w3css"]) ? $context["bottom_w3css"] : null), "html", null, true));
                    echo " bottom-region second-bottom\">
                <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 ";
                    // line 217
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_bottom_second"]) ? $context["color_bottom_second"] : null), "html", null, true));
                    echo "\">
                  ";
                    // line 218
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                    echo "
                </div>
              </div>
              <!-- End: Bottom Second -->
            ";
                }
                // line 223
                echo "            ";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                    // line 224
                    echo "              <!-- Start: Bottom Third  -->
              <div class=\"";
                    // line 225
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_w3css"]) ? $context["bottom_w3css"] : null), "html", null, true));
                    echo " bottom-region third-bottom\">
                <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 ";
                    // line 226
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_bottom_third"]) ? $context["color_bottom_third"] : null), "html", null, true));
                    echo "\">
                  ";
                    // line 227
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                    echo "
                </div>
              </div>
              <!-- End: Bottom Third -->
            ";
                }
                // line 232
                echo "            ";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                    // line 233
                    echo "              <!-- Start: Bottom Forth  -->
              <div class =\"";
                    // line 234
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_w3css"]) ? $context["bottom_w3css"] : null), "html", null, true));
                    echo " bottom-region forth-bottom\">
                <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 ";
                    // line 235
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_bottom_forth"]) ? $context["color_bottom_forth"] : null), "html", null, true));
                    echo "\">
                  ";
                    // line 236
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                    echo "
                </div>
              </div>
              <!-- End: Bottom Forth -->
            ";
                }
                // line 241
                echo "        </div>
      </div>
      <!-- End: Bottom -->
    ";
            }
            // line 245
            echo "  ";
        }
        // line 246
        echo "  ";
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()))) {
            // line 247
            echo "    <!-- start: Footer -->
    <div id=\"footer-container\" class=\"w3-theme-d3 ";
            // line 248
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_footer_container"]) ? $context["color_footer_container"] : null), "html", null, true));
            echo "\">
      <div id=\"footer-container-inner\" class=\"w3-row-padding w3-padding-large footer-container-inner ";
            // line 249
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
            echo "\">

        ";
            // line 251
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 252
                echo "          <!-- Start: Footer First  -->
          <div class=\"";
                // line 253
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_w3css"]) ? $context["footer_w3css"] : null), "html", null, true));
                echo " footer-region first-footer\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 ";
                // line 254
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_footer_first"]) ? $context["color_footer_first"] : null), "html", null, true));
                echo "\">
              ";
                // line 255
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          </div>
          <!-- End: Footer First -->
        ";
            }
            // line 260
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 261
                echo "          <!-- Start: Footer Second Region -->
          <div class=\"";
                // line 262
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_w3css"]) ? $context["footer_w3css"] : null), "html", null, true));
                echo " footer-region second-footer\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l5 ";
                // line 263
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_footer_second"]) ? $context["color_footer_second"] : null), "html", null, true));
                echo "\">
              ";
                // line 264
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          </div>
        <!-- End: Footer Second -->
        ";
            }
            // line 269
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 270
                echo "          <!-- Start: Footer Third -->
          <div class=\"";
                // line 271
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_third_class"]) ? $context["footer_third_class"] : null), "html", null, true));
                echo " footer-region third-footer\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 ";
                // line 272
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_footer_third"]) ? $context["color_footer_third"] : null), "html", null, true));
                echo "\">
              ";
                // line 273
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          </div>
          <!-- End: Footer Third -->
        ";
            }
            // line 278
            echo "      </div>
    </div>
    <!-- End: Footer -->
  ";
        }
        // line 282
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 283
            echo "    <!-- Start: Footer Menu -->
    <div id=\"footer-menu\" class=\"w3-card-2 w3-theme-d4 ";
            // line 284
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_footer_menu"]) ? $context["color_footer_menu"] : null), "html", null, true));
            echo "\">
      <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner ";
            // line 285
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
            echo "\">
        ";
            // line 286
            if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
                // line 287
                echo "          <!-- Start: Social Media -->
          <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
            ";
                // line 289
                if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                    // line 290
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 292
                echo "            ";
                if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                    // line 293
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 295
                echo "            ";
                if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                    // line 296
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 298
                echo "            ";
                if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                    // line 299
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 301
                echo "            ";
                if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                    // line 302
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 304
                echo "            ";
                if ((isset($context["instagram_url"]) ? $context["instagram_url"] : null)) {
                    // line 305
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["instagram_url"]) ? $context["instagram_url"] : null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
            ";
                }
                // line 307
                echo "            ";
                if ((isset($context["youtube_url"]) ? $context["youtube_url"] : null)) {
                    // line 308
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["youtube_url"]) ? $context["youtube_url"] : null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
            ";
                }
                // line 310
                echo "            ";
                if ((isset($context["drupal_url"]) ? $context["drupal_url"] : null)) {
                    // line 311
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["drupal_url"]) ? $context["drupal_url"] : null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-drupal\"></i></a>
            ";
                }
                // line 313
                echo "            ";
                if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                    // line 314
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 316
                echo "          </div>
          <!-- End: Social Media -->
        ";
            }
            // line 319
            echo "        <!-- Start: Bottom Menu -->
        <div class=\"d8-fade w3-container w3-center w3-mobile\">
          ";
            // line 321
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        <!-- End: Bottom Menu -->
      </div>
    </div>
    <!-- End: Footer Menu -->
  ";
        }
        // line 328
        echo "  ";
        if (((isset($context["copyright_text"]) ? $context["copyright_text"] : null) || (isset($context["show_credit_link"]) ? $context["show_credit_link"] : null))) {
            // line 329
            echo "    <!-- Start: Copyright -->
    <div id=\"copyright\" class=\"w3-theme-d5 ";
            // line 330
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_copyright"]) ? $context["color_copyright"] : null), "html", null, true));
            echo "\">
      <div id=\"copyright-inner\" class=\"w3-row copyright-inner ";
            // line 331
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website_width"]) ? $context["website_width"] : null), "html", null, true));
            echo "\">
        ";
            // line 332
            if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
                // line 333
                echo "          <!-- Start: Copyright -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">";
                // line 335
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_text"]) ? $context["copyright_text"] : null), "html", null, true));
                echo "</p>
          </div>
          <!-- End: Copyright -->
        ";
            }
            // line 339
            echo "        ";
            if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
                // line 340
                echo "          <!-- Start: Credit Link -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Designed by: <a href=\"http://www.flashwebcenter.com\" title=\"Flash Web Center LLC\" target=\"_blank\">Flash Web Center LLC</a></p>
          </div>
          <!-- End: Credit Link -->
        ";
            }
            // line 346
            echo "      </div>
    </div>
    <!-- End: Copyright -->
  ";
        }
        // line 350
        echo "</div>
<!-- End: Page Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/d8w3css/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 350,  751 => 346,  743 => 340,  740 => 339,  733 => 335,  729 => 333,  727 => 332,  723 => 331,  719 => 330,  716 => 329,  713 => 328,  703 => 321,  699 => 319,  694 => 316,  688 => 314,  685 => 313,  679 => 311,  676 => 310,  670 => 308,  667 => 307,  661 => 305,  658 => 304,  652 => 302,  649 => 301,  643 => 299,  640 => 298,  634 => 296,  631 => 295,  625 => 293,  622 => 292,  616 => 290,  614 => 289,  610 => 287,  608 => 286,  604 => 285,  600 => 284,  597 => 283,  594 => 282,  588 => 278,  580 => 273,  576 => 272,  572 => 271,  569 => 270,  566 => 269,  558 => 264,  554 => 263,  550 => 262,  547 => 261,  544 => 260,  536 => 255,  532 => 254,  528 => 253,  525 => 252,  523 => 251,  518 => 249,  514 => 248,  511 => 247,  508 => 246,  505 => 245,  499 => 241,  491 => 236,  487 => 235,  483 => 234,  480 => 233,  477 => 232,  469 => 227,  465 => 226,  461 => 225,  458 => 224,  455 => 223,  447 => 218,  443 => 217,  439 => 216,  436 => 215,  433 => 214,  425 => 209,  421 => 208,  417 => 207,  414 => 206,  412 => 205,  408 => 204,  404 => 203,  401 => 202,  398 => 201,  396 => 200,  389 => 195,  381 => 190,  377 => 189,  373 => 188,  370 => 187,  367 => 186,  359 => 181,  355 => 180,  351 => 179,  348 => 178,  345 => 177,  337 => 172,  333 => 171,  329 => 170,  326 => 169,  324 => 168,  320 => 166,  313 => 162,  309 => 161,  306 => 160,  304 => 159,  300 => 158,  296 => 157,  293 => 156,  285 => 151,  281 => 150,  277 => 149,  274 => 148,  271 => 147,  268 => 146,  262 => 142,  254 => 137,  250 => 136,  246 => 135,  243 => 134,  240 => 133,  232 => 128,  228 => 127,  224 => 126,  221 => 125,  218 => 124,  210 => 119,  206 => 118,  202 => 117,  199 => 116,  197 => 115,  192 => 113,  188 => 112,  185 => 111,  182 => 110,  179 => 109,  171 => 104,  167 => 103,  163 => 102,  160 => 101,  157 => 100,  149 => 95,  145 => 94,  141 => 93,  138 => 92,  135 => 91,  127 => 86,  123 => 85,  119 => 84,  113 => 83,  110 => 82,  108 => 81,  103 => 78,  97 => 76,  94 => 75,  88 => 73,  86 => 72,  82 => 71,  76 => 70,  71 => 68,  68 => 67,  60 => 62,  56 => 61,  49 => 59,  46 => 58,  43 => 57,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.primary_menu_vertical: Items for the Side Navigation region.
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the Navigation region.
 * - page.welcome_text: Items for welcome message.
 * - page.top_first: Items for top first region.
 * - page.top_second: Items for top second region.
 * - page.top_third: Items for top third region.
 * - page.highlighted: Items for the highlighted region.
 * - page.page_title: Used by Current page Title.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.bottom_first: Items for the bottom first region.
 * - page.bottom_second: Items for the bottom Second region.
 * - page.bottom_third: Items for the bottom third region.
 * - page.bottom_forth: Items for the bottom forth region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_menu: Items for the footer bottom region.
 * - page.auto_hidden_block: Hide items in this region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
  {% if page.primary_menu_vertical %}
  <!-- Start: Main Navigation - Vertical -->
  <div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-card-2 w3-theme {{ color_primary_menu }}\" role=\"navigation\" aria-label=\"{{ 'Main Navigation'|t }}\" >
    <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
      <i id=\"close-nav\" class=\"close-nav fa fa-bars w3-button w3-bar-block w3-xlarge w3-theme {{ color_primary_menu }}\"></i>
        {{ page.primary_menu_vertical }}
    </div>
  </div>
  <!-- End: Main Navigation - Vertical -->
{% endif %}
<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-row w3-text-theme {{ color_page_wrapper }} \">
  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-theme-l4 {{ color_header }}\" role=\"banner\" aria-label=\"{{ 'Site header'|t }}\">
    <div id=\"header-inner\" class=\"d8-fade w3-container header-inner {{ website_width }}\">
      {% if page.primary_menu_vertical %}
        <div id=\"open-nav-inner\" class=\"open-nav-inner w3-opacity w3-hover-opacity-off w3-left fa fa-bars w3-button w3-left-align w3-xxlarge w3-theme {{ color_primary_menu }}\"></div>
      {% endif %}
      {% if page.header %}
        {{ page.header }}
      {% endif %}
    </div>
  </header>
  <!-- End: Header -->
  {% if page.primary_menu %}
  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"main-navigation-wrapper w3-card-2 w3-theme {{ color_primary_menu }}\" role=\"navigation\" aria-label=\"{{ 'Main Navigation'|t }}\" >
    <div id=\"main-navigation-inner-h\" class=\"d8-fade w3-row main-navigation-inner-h {{ website_width }}\">
        <i class=\"mobile-nav fa fa-bars w3-hide-large w3-button w3-block w3-right-align w3-xxlarge w3-theme {{ color_primary_menu }}\"></i>
        {{ page.primary_menu }}
    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  {% endif %}
  {% if is_front and page.welcome_text %}
    <!-- Start: Welcome Text -->
    <div id=\"welcome-text\" class=\"w3-theme-l5 {{ color_welcome_text }}\">
      <div id=\"welcome-text-inner\" class=\"d8-fade w3-row welcome-text-inner {{ website_width }}\">
        {{ page.welcome_text }}
      </div>
    </div>
    <!-- End: Welcome Text -->
  {% endif %}
  {% if page.highlighted %}
    <!-- Start: Highlighted -->
    <div id=\"highlighted\" class=\"w3-theme-l2 {{ color_highlighted}}\">
      <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner {{ website_width }}\">
        {{ page.highlighted }}
      </div>
    </div>
    <!-- End: Highlighted -->
  {% endif %}
  {% if is_front %}
    {% if page.top_first or page.top_second or page.top_third %}
      <!-- Start: Top Container -->
      <div id=\"top-container\" class=\"w3-theme-l4 {{ color_top_container }}\">
        <div id=\"top-container-inner\" class=\"w3-row-padding w3-padding-large top-container-inner {{ website_width }}\">

          {% if page.top_first %}
            <!-- Start: Top container first region -->
            <div class=\"{{ top_w3css }} top-region first-top\" >
              <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l5 {{ color_top_first}}\">
               {{ page.top_first }}
              </div>
            </div>
            <!-- End: Top Container First -->
          {% endif %}
          {% if page.top_second %}
            <!-- Start: Top Container Second  -->
            <div class=\"{{ top_w3css }} top-region second-top\">
              <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l5 {{ color_top_second }}\">
               {{ page.top_second }}
              </div>
            </div>
            <!-- End: Top Container Second -->
          {% endif %}
          {% if page.top_third %}
          <!-- Start: Top Container Third -->
          <div class=\"{{ top_third_class }} top-region third-top\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l5 {{ color_top_third }}\">
              {{ page.top_third }}
            </div>
          </div>
          <!-- End: Top Container Third -->
          {% endif %}
        </div>
      </div>
      <!-- End: Top container -->
    {% endif %}
  {% endif %}
  {% if page.page_title and not is_front %}
    <!-- Start: Page Title -->
    <div id=\"page-title\" class=\"w3-theme-d5 {{ color_page_title }}\">
      <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner {{ website_width }}\">
        {{ page.page_title }}
      </div>
    </div>
    <!-- End: Page Title -- >
  {% endif %}
  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-theme-l5 {{ color_main }}\">
    <div id=\"main-container-inner\" class=\"w3-container main-container-inner {{ website_width }}\">
      {% if page.breadcrumb %}
        <!-- Breadcrumb -->
        <div class=\"{{ color_breadcrumb }}\">
          {{ page.breadcrumb }}
        </div>
        <!-- End: Breadcrumb -->
      {% endif %}
      <!-- Start Main Container  -->
      <div class=\"w3-row-padding\">
        {% if page.sidebar_first %}
          <!-- Start Left SideBar -->
          <div class =\"{{ sidebarfirst }} main-region first-sidebar\">
            <div class=\"d8-fade w3-card-2 w3-round w3-sidebar-first w3-mobile {{ color_sidebar_first }}\">
              {{ page.sidebar_first }}
            </div>
          </div>
          <!-- End: Left SideBar -->
        {% endif %}
        {% if page.content %}
          <!-- Start: Main Content -->
          <div class=\"{{ content_w3css }} main-region w3css-content\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile  {{ color_content }}\">
              {{ page.content }}
            </div>
          </div>
          <!-- End: Main Content -->
        {% endif %}
        {% if page.sidebar_second %}
          <!-- Start: Right SideBar -->
          <div class=\"{{ sidebarsecond }} main-region second-sidebar\">
            <div class=\"d8-fade w3-card-2 w3-round w3-sidebar-second w3-mobile {{ color_sidebar_second }}\">
              {{ page.sidebar_second }}
            </div>
          </div>
          <!-- End: Right SideBar -->
        {% endif %}
      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->
  {% if is_front %}
    {% if page.bottom_first or page.bottom_second or page.bottom_third or page.bottom_forth %}
      <!-- Start: Bottom -->
      <div id=\"bottom-container\" class=\"w3-theme-l2 {{ color_bottom_container }}\">
        <div id=\"bottom-container-inner\" class=\"w3-row-padding w3-padding-large bottom-container-inner {{ website_width }}\">
            {% if page.bottom_first %}
              <!-- Start: Bottom First -->
              <div class=\"{{ bottom_w3css }} bottom-region first-bottom\">
                <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 {{ color_bottom_first }}\">
                  {{ page.bottom_first }}
                </div>
              </div>
              <!-- End: Bottom First -->
            {% endif %}
            {% if page.bottom_second %}
              <!-- Start: Bottom Second -->
              <div class=\"{{ bottom_w3css }} bottom-region second-bottom\">
                <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 {{ color_bottom_second }}\">
                  {{ page.bottom_second }}
                </div>
              </div>
              <!-- End: Bottom Second -->
            {% endif %}
            {% if page.bottom_third %}
              <!-- Start: Bottom Third  -->
              <div class=\"{{ bottom_w3css }} bottom-region third-bottom\">
                <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 {{ color_bottom_third }}\">
                  {{ page.bottom_third }}
                </div>
              </div>
              <!-- End: Bottom Third -->
            {% endif %}
            {% if page.bottom_forth %}
              <!-- Start: Bottom Forth  -->
              <div class =\"{{ bottom_w3css }} bottom-region forth-bottom\">
                <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 {{ color_bottom_forth }}\">
                  {{ page.bottom_forth }}
                </div>
              </div>
              <!-- End: Bottom Forth -->
            {% endif %}
        </div>
      </div>
      <!-- End: Bottom -->
    {% endif %}
  {% endif %}
  {% if page.footer_first or page.footer_second or page.footer_third %}
    <!-- start: Footer -->
    <div id=\"footer-container\" class=\"w3-theme-d3 {{ color_footer_container }}\">
      <div id=\"footer-container-inner\" class=\"w3-row-padding w3-padding-large footer-container-inner {{ website_width }}\">

        {% if page.footer_first %}
          <!-- Start: Footer First  -->
          <div class=\"{{ footer_w3css }} footer-region first-footer\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 {{ color_footer_first }}\">
              {{ page.footer_first }}
            </div>
          </div>
          <!-- End: Footer First -->
        {% endif %}
        {% if page.footer_second %}
          <!-- Start: Footer Second Region -->
          <div class=\"{{ footer_w3css }} footer-region second-footer\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l5 {{ color_footer_second }}\">
              {{ page.footer_second }}
            </div>
          </div>
        <!-- End: Footer Second -->
        {% endif %}
        {% if page.footer_third %}
          <!-- Start: Footer Third -->
          <div class=\"{{ footer_third_class }} footer-region third-footer\">
            <div class=\"d8-fade w3-card-2 w3-round w3-mobile w3-theme-l4 {{ color_footer_third }}\">
              {{ page.footer_third }}
            </div>
          </div>
          <!-- End: Footer Third -->
        {% endif %}
      </div>
    </div>
    <!-- End: Footer -->
  {% endif %}
  {% if page.footer_menu %}
    <!-- Start: Footer Menu -->
    <div id=\"footer-menu\" class=\"w3-card-2 w3-theme-d4 {{ color_footer_menu }}\">
      <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner {{ website_width }}\">
        {% if show_social_icon %}
          <!-- Start: Social Media -->
          <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
            {% if facebook_url %}
              <a href=\"{{ facebook_url }}\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            {% endif %}
            {% if twitter_url %}
              <a href=\"{{ twitter_url }}\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            {% endif %}
            {% if pinterest_url %}
              <a href=\"{{ pinterest_url }}\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
            {% endif %}
            {% if google_plus_url %}
              <a href=\"{{ google_plus_url }}\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            {% endif %}
            {% if linkedin_url %}
              <a href=\"{{ linkedin_url }}\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            {% endif %}
            {% if instagram_url %}
              <a href=\"{{ instagram_url }}\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
            {% endif %}
            {% if youtube_url %}
              <a href=\"{{ youtube_url }}\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
            {% endif %}
            {% if drupal_url %}
              <a href=\"{{ drupal_url }}\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-drupal\"></i></a>
            {% endif %}
            {% if rss_url %}
              <a href=\"{{ rss_url }}\" class=\"w3-opacity w3-hover-opacity w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            {% endif %}
          </div>
          <!-- End: Social Media -->
        {% endif %}
        <!-- Start: Bottom Menu -->
        <div class=\"d8-fade w3-container w3-center w3-mobile\">
          {{ page.footer_menu }}
        </div>
        <!-- End: Bottom Menu -->
      </div>
    </div>
    <!-- End: Footer Menu -->
  {% endif %}
  {% if copyright_text or show_credit_link %}
    <!-- Start: Copyright -->
    <div id=\"copyright\" class=\"w3-theme-d5 {{ color_copyright }}\">
      <div id=\"copyright-inner\" class=\"w3-row copyright-inner {{ website_width }}\">
        {% if copyright_text %}
          <!-- Start: Copyright -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">{{copyright_text}}</p>
          </div>
          <!-- End: Copyright -->
        {% endif %}
        {% if show_credit_link %}
          <!-- Start: Credit Link -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Designed by: <a href=\"http://www.flashwebcenter.com\" title=\"Flash Web Center LLC\" target=\"_blank\">Flash Web Center LLC</a></p>
          </div>
          <!-- End: Credit Link -->
        {% endif %}
      </div>
    </div>
    <!-- End: Copyright -->
  {% endif %}
</div>
<!-- End: Page Wrapper -->
";
    }
}
