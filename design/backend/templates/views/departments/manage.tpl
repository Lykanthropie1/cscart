{** departments section **}

{capture name="mainbox"}

    <form action="{""|fn_url}" method="post" id="departments_form" name="departments_form" enctype="multipart/form-data">
        <input type="hidden" name="fake" value="1" />
        {include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id="pagination_contents_departments"}

        {$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

        {$rev=$smarty.request.content_id|default:"pagination_contents_departments"}
        {include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
        {include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}
        {$department_statuses=""|fn_get_default_statuses:true}
        {$has_permission = fn_check_permissions("departments", "update_status", "admin", "POST")}

        {if $departments}
            {capture name="departments_table"}
                <div class="table-responsive-wrapper longtap-selection">
                    <table class="table table-middle table--relative table-responsive">
                        <thead>
                        <tr>
                            <th width="6%" class="left mobile-hide">
                                {include file="common/check_items.tpl"}
                            </th>
                            <th>

                            </th>
                            <th>
                                <a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("name")}{if $search.sort_by === "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                            </th>
                            <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=timestamp&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("creation_date")}{if $search.sort_by === "timestamp"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                            <th width="6%" class="mobile-hide">&nbsp;</th>
                            <th width="10%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by === "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                        </tr>
                        </thead>
                        {foreach from=$departments item=department}
                            <tr class="cm-row-status-{$department.status|lower} cm-longtap-target">
                                {$allow_save=true}
                                {if $allow_save}
                                    {assign var = "no_hide_input" value ="cm-no-hide-input"}
                                {else}
                                    {assign var = "no_hide_input" value =""}
                                {/if}

                                <td width="6%" class="left mobile-hide">
                                    <input type="checkbox" name="department_ids[]" value="{$department.department_id}" class="cm-item {$no_hide_input} cm-item-status-{$department.status|lower}" />
                                </td>

                                <td class="products-list__image">
                                    {include
                                    file="common/image.tpl"
                                    image=$department.main_pair.icon|default
                                    image_id=$department.main_pair.image_id
                                    image_width=$settings.Thumbnails.product_lists_thumbnail_width
                                    image_height=$settings.Thumbnails.product_lists_thumbnail_height
                                    href="departments.update_department?department_id=`$department.department_id`"|fn_url
                                    image_css_class="products-list__image--img"
                                    link_css_class="products-list__image--link"
                                    }
                                </td>

                                <td class="{$no_hide_input}" data-th="{__("name")}">
                                    <a class="row-status" href="{"departments.update_department?department_id=`$department.department_id`"|fn_url}">{$department.department}</a>
                                    {include file="views/companies/components/company_name.tpl" object=$department}
                                </td>
                                <td width="15%" data-th="{__("creation_date")}">
                                    {$department.timestamp|date_format:"`$settings.Appearance.date_format`"}
                                </td>
                                <td width="6%" class="mobile-hide">
                                    {capture name="tools_list"}
                                        <li>{btn type="list" text=__("edit") href="departments.update_department?department_id=`$department.department_id`"}</li>
                                        {if $allow_save}
                                            <li>{btn type="list" class="cm-confirm" text=__("delete") href="departments.delete_department?department_id=`$department.department_id`" method="POST"}</li>
                                        {/if}
                                    {/capture}
                                    <div class="hidden-tools">
                                        {dropdown content=$smarty.capture.tools_list}
                                    </div>
                                </td>
                                <td width="10%" class="right" data-th="{__("status")}">
                                    {include file="common/select_popup.tpl" id=$department.department_id status=$department.status hidden=true object_id_name="department_id" table="departments" popup_additional_class="`$no_hide_input` dropleft"}
                                </td>
                            </tr>
                        {/foreach}
                    </table>
                </div>
            {/capture}

            {include file="common/context_menu_wrapper.tpl"
            form="departments_form"
            object="departments"
            items=$smarty.capture.departments_table
            has_permissions=$has_permission
            }
        {else}
            <p class="no-items">{__("no_data")}</p>
        {/if}

        {include file="common/pagination.tpl" div_id="pagination_contents_departments"}

        {capture name="buttons"}
            {capture name="tools_list"}
                {if $departments}
                    <li>{btn type="delete_selected" dispatch="dispatch[departments.delete_departments]" form="departments_form"}</li>
                {/if}
            {/capture}
            {dropdown content=$smarty.capture.tools_list}
            {include file="buttons/save.tpl" but_name="dispatch[departments.update_departments]" but_role="action" but_target_form="departments_form" but_meta="cm-submit"}
        {/capture}

        {capture name="adv_buttons"}
            {hook name="departments:adv_buttons"}
                {include file="common/tools.tpl" tool_href="departments.add_department" prefix="top" hide_tools="true" title="Добавить отдел" icon="icon-plus"}
            {/hook}
        {/capture}

    </form>

{/capture}

{capture name="sidebar"}
        <div class="sidebar-row">
        <h6>{__("search")}</h6>

    <form name="department_search_form" action="{""|fn_url}" method="get" class="{$form_meta}">

        {capture name="simple_search"}
            <div class="sidebar-field">
                <label for="elm_name">{__("department")}</label>
                <div class="break">
                    <input type="text" name="name" id="elm_name" value="{$search.name}" />
                </div>
            </div>

            <div class="sidebar-field">
                <label for="elm_type">{__("status")}</label>
                {assign var="items_status" value=""|fn_get_default_statuses:true}
                <div class="controls">
                    <select name="status" id="elm_type">
                        <option value="">{__("all")}</option>
                        {foreach from=$items_status key=key item=status}
                            <option value="{$key}" {if $search.status == $key}selected="selected"{/if}>{$status}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
        {/capture}

        {include file="common/advanced_search.tpl" no_adv_link=true simple_search=$smarty.capture.simple_search dispatch='departments.manage' view_type="departments"}

    </form>

{/capture}

{hook name="departments:manage_mainbox_params"}
{$page_title = {__("departments")}}
{$select_languages = true}
{/hook}

{include file="common/mainbox.tpl"
         title=$page_title
         content=$smarty.capture.mainbox
         buttons=$smarty.capture.buttons
         adv_buttons=$smarty.capture.adv_buttons
         select_languages=$select_languages
         sidebar=$smarty.capture.sidebar
}

{** ad section **}