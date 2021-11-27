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

/* index_body.html */
class __TwigTemplate_5a4b2a433fbfd404496eed73c2c7b153928a16e5d918a8a3d42aa9c3d6fd2483 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "

";
        // line 4
        // line 5
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 6
            echo "\t<div class=\"action-bar mark-read-index compact\">
\t\t<a href=\"";
            // line 7
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 10
        // line 11
        echo "
";
        // line 12
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 12)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 13
        echo "
";
        // line 14
        // line 15
        echo "
";
        // line 16
        // line 17
        echo "
<div class=\"tabs-container tab-stat-block\">
";
        // line 19
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 20
            echo "\t";
            $value = "quick-login";
            $context['definition']->set('SHOW_PANEL', $value);
        } else {
            // line 22
            echo "\t";
            $value = "online-list";
            $context['definition']->set('SHOW_PANEL', $value);
        }
        // line 24
        echo "\t<div id=\"tabs-index\" class=\"tabs-index sub-panels\" data-show-panel=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_PANEL", [], "any", false, false, false, 24);
        echo "\" role=\"tablist\">
\t\t<ul>
\t\t";
        // line 26
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 27
            echo "\t\t<li id=\"quick-login-tab\" class=\"tab-index\"><a href=\"#tabs\" class=\"hvr-sweep-to-right\" data-subpanel=\"quick-login\" role=\"tab\" aria-controls=\"quick-login\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a></li>";
        }
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            echo "<li id=\"online-list-tab\" class=\"tab-index\"><a href=\"#tabs\" class=\"hvr-sweep-to-right\" data-subpanel=\"online-list\" role=\"tab\" aria-controls=\"online-list\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            echo "</a></li>";
        }
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            echo "<li id=\"bithday-list-tab\" class=\"tab-index\"><a href=\"#tabs\" class=\"hvr-sweep-to-right\" data-subpanel=\"bithday-list\" role=\"tab\" aria-controls=\"bithday-list\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</a></li>";
        }
        if (($context["NEWEST_USER"] ?? null)) {
            echo "<li id=\"statistics-tab\" class=\"tab-index\"><a href=\"#tabs\" class=\"hvr-sweep-to-right\" data-subpanel=\"statistics\" role=\"tab\" aria-controls=\"statistics\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</a></li>";
        }
        // line 28
        echo "\t\t</ul>
\t</div>
</div>

";
        // line 32
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 33
            echo "<fieldset id=\"quick-login\" class=\"fields2 tab-stat-block\" role=\"tabpanel\">
    <div class=\"panel bg3\">
\t\t<form method=\"post\" action=\"";
            // line 35
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace-tab\">
\t\t\t<fieldset class=\"quick-login\">
\t\t\t\t<label for=\"username\"><span>";
            // line 37
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
\t\t\t\t<label for=\"password\"><span>";
            // line 38
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t\t";
            // line 39
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 40
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 42
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 43
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 45
            echo "\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 46
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t";
            // line 47
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "

\t\t\t</fieldset>
\t\t</form>
\t</div>
</fieldset>
";
        }
        // line 54
        echo "
";
        // line 55
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 56
            echo "<fieldset id=\"online-list\" class=\"fields2 tab-stat-block\" role=\"tabpanel\">
    <div class=\"panel bg3\">
\t\t\t<div class=\"stat-block online-list-tab\">
\t\t\t";
            // line 59
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 60
            echo "\t\t\t<p>";
            // line 61
            echo "\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
\t\t\t";
            // line 62
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 63
                echo "\t\t\t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t";
                // line 64
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 65
                echo "\t\t\t";
            }
            // line 66
            echo "\t\t\t";
            // line 67
            echo "\t\t\t</p>
\t\t\t</div>
\t</div>
</fieldset>
";
        }
        // line 72
        echo "
";
        // line 73
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 74
            echo "<fieldset id=\"bithday-list\" class=\"fields2 tab-stat-block\" role=\"tabpanel\">
    <div class=\"panel bg3\">
\t\t\t<div class=\"stat-block birthday-list\">
\t\t\t<h3>";
            // line 77
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
\t\t\t<p>
\t\t\t";
            // line 79
            // line 80
            echo "\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 80))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 80);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 80) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 80);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 80)) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BIRTHDAYS");
            }
            // line 81
            echo "\t\t\t";
            // line 82
            echo "\t\t\t</p>
\t\t\t</div>
\t</div>
</fieldset>
";
        }
        // line 87
        echo "
";
        // line 88
        if (($context["NEWEST_USER"] ?? null)) {
            // line 89
            echo "<fieldset id=\"statistics\" class=\"fields2 tab-stat-block\" role=\"tabpanel\">
    \t<div class=\"panel bg3\">
\t\t\t<div class=\"stat-block statistics\">
\t\t\t<h3>";
            // line 92
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
\t\t\t<p>
\t\t\t";
            // line 94
            // line 95
            echo "\t\t\t";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
\t\t\t";
            // line 96
            // line 97
            echo "\t\t\t</p>
\t\t</div>
\t\t</div>
</fieldset>
";
        }
        // line 102
        // line 103
        echo "
";
        // line 104
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 104)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 104,  352 => 103,  351 => 102,  344 => 97,  343 => 96,  332 => 95,  331 => 94,  326 => 92,  321 => 89,  319 => 88,  316 => 87,  309 => 82,  307 => 81,  281 => 80,  280 => 79,  275 => 77,  270 => 74,  268 => 73,  265 => 72,  258 => 67,  256 => 66,  253 => 65,  244 => 64,  239 => 63,  237 => 62,  228 => 61,  226 => 60,  214 => 59,  209 => 56,  207 => 55,  204 => 54,  194 => 47,  190 => 46,  185 => 45,  179 => 43,  176 => 42,  168 => 40,  166 => 39,  159 => 38,  152 => 37,  147 => 35,  143 => 33,  141 => 32,  135 => 28,  115 => 27,  113 => 26,  107 => 24,  102 => 22,  97 => 20,  95 => 19,  91 => 17,  90 => 16,  87 => 15,  86 => 14,  83 => 13,  71 => 12,  68 => 11,  67 => 10,  59 => 7,  56 => 6,  54 => 5,  53 => 4,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
