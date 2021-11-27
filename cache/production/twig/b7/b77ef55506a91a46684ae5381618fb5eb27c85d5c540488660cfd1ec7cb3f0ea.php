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

/* memberlist_body.html */
class __TwigTemplate_13429903adcd2f78d2ec85aacc288072465e09ba855c5c8f5608a63bf95e90ee extends \Twig\Template
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
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo ($context["S_FORM_NAME"] ?? null);
            echo "\" data-field-name=\"";
            echo ($context["S_FIELD_NAME"] ?? null);
            echo "\">

";
        } else {
            // line 7
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 8
            echo "\t<div class=\"panel\" id=\"memberlist_search\"";
            if ( !($context["S_SEARCH_USER"] ?? null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t";
            // line 9
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 9)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 10
            echo "\t</div>
\t<form method=\"post\" action=\"";
            // line 11
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">

";
        }
        // line 14
        echo "
\t\t";
        // line 15
        // line 16
        echo "
\t";
        // line 17
        if (($context["S_SHOW_GROUP"] ?? null)) {
            // line 18
            echo "
\t\t";
            // line 19
            // line 20
            echo "
\t\t<h2 class=\"group-title\"";
            // line 21
            if (($context["GROUP_COLOR"] ?? null)) {
                echo " style=\"color:#";
                echo ($context["GROUP_COLOR"] ?? null);
                echo ";\"";
            }
            echo ">";
            echo ($context["GROUP_NAME"] ?? null);
            echo "</h2>
\t\t<div class=\"bg-member\">
\t\t";
            // line 23
            // line 24
            echo "
\t\t";
            // line 25
            if (($context["U_MANAGE"] ?? null)) {
                // line 26
                echo "\t\t\t<p class=\"right responsive-center manage rightside\"><a href=\"";
                echo ($context["U_MANAGE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MANAGE_GROUP");
                echo "</a></p>
\t\t";
            }
            // line 28
            echo "\t\t<p>";
            echo ($context["GROUP_DESC"] ?? null);
            echo " ";
            echo ($context["GROUP_TYPE"] ?? null);
            echo "</p>

\t\t";
            // line 30
            // line 31
            echo "
\t\t<p>
\t\t\t";
            // line 33
            if (($context["AVATAR_IMG"] ?? null)) {
                echo ($context["AVATAR_IMG"] ?? null);
            }
            // line 34
            echo "\t\t\t";
            // line 35
            echo "
\t\t\t";
            // line 36
            if (($context["RANK_IMG"] ?? null)) {
                echo ($context["RANK_IMG"] ?? null);
            }
            // line 37
            echo "\t\t\t";
            if (($context["GROUP_RANK"] ?? null)) {
                // line 38
                echo "\t\t\t\t";
                if ( !($context["RANK_IMG"] ?? null)) {
                    // line 39
                    echo "\t\t\t\t\t";
                    echo ($this->extensions['phpbb\template\twig\extension']->lang("GROUP_RANK") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                    echo "
\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t";
                echo ($context["GROUP_RANK"] ?? null);
                echo "
\t\t\t";
            }
            // line 43
            echo "\t\t\t";
            // line 44
            echo "\t\t</p>
\t</div>
\t";
        } else {
            // line 47
            echo "
\t\t\t";
            // line 48
            // line 49
            echo "
\t\t<h2 class=\"solo\">";
            // line 50
            echo ($context["PAGE_TITLE"] ?? null);
            if (($context["SEARCH_WORDS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <a href=\"";
                echo ($context["U_SEARCH_WORDS"] ?? null);
                echo "\">";
                echo ($context["SEARCH_WORDS"] ?? null);
                echo "</a>";
            }
            echo "</h2>

\t\t<div class=\"action-bar bar-top\">
\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
            // line 54
            if ((($context["U_FIND_MEMBER"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_FIND_MEMBER"] ?? null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_MEMBER_SEARCH");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                echo "</a> &bull; ";
            } elseif (((($context["S_SEARCH_USER"] ?? null) && ($context["U_HIDE_FIND_MEMBER"] ?? null)) &&  !($context["S_IN_SEARCH_POPUP"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_HIDE_FIND_MEMBER"] ?? null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_MEMBER_SEARCH");
                echo "</a> &bull; ";
            }
            // line 55
            echo "\t\t\t\t<strong>
\t\t\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "first_char", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 57
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["first_char"], "U_SORT", [], "any", false, false, false, 57);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["first_char"], "DESC", [], "any", false, false, false, 57);
                echo "</a>&nbsp;
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t</strong>
\t\t\t</div>

\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 63
            echo ($context["TOTAL_USERS"] ?? null);
            echo "
\t\t\t\t";
            // line 64
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 64))) {
                // line 65
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 65)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 66
                echo "\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 69
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 72
        echo "
\t";
        // line 73
        if (((($context["S_LEADERS_SET"] ?? null) ||  !($context["S_SHOW_GROUP"] ?? null)) ||  !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 73)))) {
            // line 74
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"inner\">

\t\t<table class=\"table1 table-mcp-front memberlist\" id=\"memberlist\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\" data-dfn=\"";
            // line 80
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 80)))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEADER");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\"><a href=\"";
            echo ($context["U_SORT_RANK"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo "</a></span><a href=\"";
            echo ($context["U_SORT_USERNAME"] ?? null);
            echo "\">";
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 80)))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEADER");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
            // line 81
            echo ($context["U_SORT_POSTS"] ?? null);
            echo "#memberlist\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
            echo "</a></th>
\t\t\t<th class=\"info\">";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_FIRST_ROW", [], "any", false, false, false, 82)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 82);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
            // line 83
            echo ($context["U_SORT_JOINED"] ?? null);
            echo "#memberlist\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
            echo "</a></th>
\t\t\t";
            // line 84
            if (($context["U_SORT_ACTIVE"] ?? null)) {
                echo "<th class=\"active\"><a href=\"";
                echo ($context["U_SORT_ACTIVE"] ?? null);
                echo "#memberlist\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 85
            echo "
\t\t\t";
            // line 86
            // line 87
            echo "
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 92
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 92));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 93
            echo "\t\t\t";
            if (($context["S_SHOW_GROUP"] ?? null)) {
                // line 94
                echo "\t\t\t\t";
                if (( !twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_GROUP_LEADER", [], "any", false, false, false, 94) &&  !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_MEMBER_HEADER", [], "any", false, false, false, 94))) {
                    // line 95
                    echo "\t\t\t\t";
                    if ((($context["S_LEADERS_SET"] ?? null) && twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_FIRST_ROW", [], "any", false, false, false, 95))) {
                        // line 96
                        echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
                        // line 97
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 100
                    if (($context["S_LEADERS_SET"] ?? null)) {
                        // line 101
                        echo "\t\t</tbody>
\t\t</table>

\t</div>
</div>
";
                    }
                    // line 107
                    echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1 table-mcp-front\">
\t<thead>
\t<tr>
\t";
                    // line 113
                    if ( !($context["S_LEADERS_SET"] ?? null)) {
                        // line 114
                        echo "\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                        echo "\"><span class=\"rank-img\"><a href=\"";
                        echo ($context["U_SORT_RANK"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                        echo "</a></span><a href=\"";
                        echo ($context["U_SORT_USERNAME"] ?? null);
                        echo "\">";
                        if (($context["S_SHOW_GROUP"] ?? null)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
                        // line 115
                        echo ($context["U_SORT_POSTS"] ?? null);
                        echo "#memberlist\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                        echo "</a></th>
\t\t\t<th class=\"info\">";
                        // line 116
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 116)) {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 116);
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
                        // line 117
                        echo ($context["U_SORT_JOINED"] ?? null);
                        echo "#memberlist\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                        echo "</a></th>
\t\t\t";
                        // line 118
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active\"><a href=\"";
                            echo ($context["U_SORT_ACTIVE"] ?? null);
                            echo "#memberlist\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 119
                        echo "
\t\t\t";
                        // line 120
                        // line 121
                        echo "
\t";
                    } elseif (                    // line 122
($context["S_SHOW_GROUP"] ?? null)) {
                        // line 123
                        echo "\t\t<th class=\"name\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th class=\"posts\">";
                        // line 124
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                        echo "</th>
\t\t<th class=\"info\">";
                        // line 125
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["memberrow"], "custom_fields", [], "any", false, false, false, 125));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_FIRST_ROW", [], "any", false, false, false, 125)) {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 125);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t<th class=\"joined\">";
                        // line 126
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                        echo "</th>
\t\t";
                        // line 127
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 128
                        echo "
\t\t\t";
                        // line 129
                        // line 130
                        echo "
\t";
                    }
                    // line 132
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t\t\t";
                    // line 135
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 136
                    echo "\t\t\t\t";
                }
                // line 137
                echo "\t\t\t";
            }
            // line 138
            echo "
\t<tr class=\"";
            // line 139
            if ((twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_ROW_COUNT", [], "any", false, false, false, 139) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_INACTIVE", [], "any", false, false, false, 139)) {
                echo " inactive";
            }
            echo "\">
\t\t<td><span class=\"rank-img\">";
            // line 140
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_IMG", [], "any", false, false, false, 140)) {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_IMG", [], "any", false, false, false, 140);
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_TITLE", [], "any", false, false, false, 140);
            }
            echo "</span>";
            if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME", [], "any", false, false, false, 140);
                echo "\" /> ";
            }
            echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME_FULL", [], "any", false, false, false, 140);
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_INACTIVE", [], "any", false, false, false, 140)) {
                echo " (";
                echo $this->extensions['phpbb\template\twig\extension']->lang("INACTIVE");
                echo ")";
            }
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "A_USERNAME", [], "any", false, false, false, 140);
                echo "'); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t<td class=\"posts\">";
            // line 141
            if ((twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 141) && ($context["S_DISPLAY_SEARCH"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "U_SEARCH_USER", [], "any", false, false, false, 141);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 141);
                echo "</a>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 141);
            }
            echo "</td>
\t\t<td class=\"info\">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["memberrow"], "custom_fields", [], "any", false, false, false, 143));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 144
                echo "<div>";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "S_PROFILE_CONTACT", [], "any", false, false, false, 144)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 144);
                    echo "\">";
                }
                echo twig_get_attribute($this->env, $this->source, $context["field"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 144);
                if (twig_get_attribute($this->env, $this->source, $context["field"], "S_PROFILE_CONTACT", [], "any", false, false, false, 144)) {
                    echo "</a>";
                }
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 146
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</td>
\t\t<td>";
            // line 149
            echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "JOINED", [], "any", false, false, false, 149);
            echo "</td>
\t\t";
            // line 150
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "<td>";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "LAST_ACTIVE", [], "any", false, false, false, 150);
                echo "&nbsp;</td>";
            }
            // line 151
            echo "
\t\t";
            // line 152
            // line 153
            echo "
\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 156
            echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"";
            // line 157
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "\t</tbody>
\t</table>

\t</div>
</div>

";
        // line 166
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
            // line 167
            echo "<fieldset class=\"display-actions\">
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 168
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_MARKED");
            echo "\" class=\"button2\" />
\t<div><a href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 169
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 172
        echo "
";
        // line 173
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 174
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 175
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">
";
        }
        // line 177
        echo "
";
        // line 178
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
            // line 179
            echo "<fieldset class=\"display-options\">
\t<label for=\"sk\">";
            // line 180
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_SORT_METHOD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo ($context["S_MODE_SELECT"] ?? null);
            echo "</select></label>
\t<label for=\"sd\">";
            // line 181
            echo $this->extensions['phpbb\template\twig\extension']->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo ($context["S_ORDER_SELECT"] ?? null);
            echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 182
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" class=\"button2\" />
</fieldset>
";
        }
        // line 185
        echo "
</form>

<div class=\"action-bar bar-bottom\">
\t<div class=\"pagination\">
\t\t";
        // line 190
        echo ($context["TOTAL_USERS"] ?? null);
        echo "
\t\t";
        // line 191
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 191))) {
            // line 192
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 192)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 193
            echo "\t\t";
        } else {
            // line 194
            echo "\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t";
        }
        // line 196
        echo "\t</div>
</div>


";
        // line 200
        // line 201
        echo "
";
        // line 202
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 203
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 203)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 205
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 205)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 206
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 206)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  837 => 206,  824 => 205,  810 => 203,  808 => 202,  805 => 201,  804 => 200,  798 => 196,  792 => 194,  789 => 193,  776 => 192,  774 => 191,  770 => 190,  763 => 185,  757 => 182,  751 => 181,  744 => 180,  741 => 179,  739 => 178,  736 => 177,  731 => 175,  728 => 174,  726 => 173,  723 => 172,  715 => 169,  711 => 168,  708 => 167,  706 => 166,  698 => 160,  683 => 157,  680 => 156,  673 => 153,  672 => 152,  669 => 151,  663 => 150,  659 => 149,  656 => 148,  650 => 146,  635 => 144,  630 => 143,  616 => 141,  589 => 140,  578 => 139,  575 => 138,  572 => 137,  569 => 136,  566 => 135,  561 => 132,  557 => 130,  556 => 129,  553 => 128,  547 => 127,  543 => 126,  528 => 125,  524 => 124,  519 => 123,  517 => 122,  514 => 121,  513 => 120,  510 => 119,  502 => 118,  496 => 117,  460 => 116,  454 => 115,  435 => 114,  433 => 113,  425 => 107,  417 => 101,  415 => 100,  405 => 97,  402 => 96,  399 => 95,  396 => 94,  393 => 93,  387 => 92,  380 => 87,  379 => 86,  376 => 85,  368 => 84,  362 => 83,  347 => 82,  341 => 81,  319 => 80,  311 => 74,  309 => 73,  306 => 72,  301 => 69,  295 => 67,  292 => 66,  279 => 65,  277 => 64,  273 => 63,  267 => 59,  256 => 57,  252 => 56,  249 => 55,  231 => 54,  216 => 50,  213 => 49,  212 => 48,  209 => 47,  204 => 44,  202 => 43,  196 => 41,  190 => 39,  187 => 38,  184 => 37,  180 => 36,  177 => 35,  175 => 34,  171 => 33,  167 => 31,  166 => 30,  158 => 28,  150 => 26,  148 => 25,  145 => 24,  144 => 23,  133 => 21,  130 => 20,  129 => 19,  126 => 18,  124 => 17,  121 => 16,  120 => 15,  117 => 14,  111 => 11,  108 => 10,  96 => 9,  89 => 8,  76 => 7,  65 => 4,  52 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_body.html", "");
    }
}
