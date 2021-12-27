{** collections section **}

{capture name="mainbox"}

    <form action="{""|fn_url}" method="post" id="departments_form" name="departments_form" enctype="multipart/form-data">
        <input type="hidden" name="fake" value="1" />
        {include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id="pagination_contents_departments"}

        {$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

        {$rev=$smarty.request.content_id|default:"pagination_contents_departments"}
        {include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
        {include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}
        {$collection_statuses=""|fn_get_default_statuses:true}
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
                                <a class="cm-ajax" href="{"`$c_url`&sort_by=position&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("position")}{if $search.sort_by === "position"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
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

                                <td>
                                    <input type="text" name="departments_data[{$department.department_id}][position]" value="{$department.position}" size="3" class="input-micro input-hidden">
                                </td>

                                <td class="{$no_hide_input}" data-th="{__("name")}">
                                    <a class="row-status" href="{"profiles.update_department?collection_id=`$department.department_id`"|fn_url}">{$department.department}</a>
                                    {include file="views/companies/components/company_name.tpl" object=$department}
                                </td>
                                <td width="15%" data-th="{__("creation_date")}">
                                    {$department.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}
                                </td>
                                <td width="6%" class="mobile-hide">
                                    {capture name="tools_list"}
                                        <li>{btn type="list" text=__("edit") href="profiles.update_department?department_id=`$collection.collection_id`"}</li>
                                        {if $allow_save}
                                            <li>{btn type="list" class="cm-confirm" text=__("delete") href="profiles.delete_department?department_id=`$department.department_id`" method="POST"}</li>
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
                {if $collections}
                    <li>{btn type="delete_selected" dispatch="dispatch[profiles.delete_departments]" form="departments_form"}</li>
                {/if}
            {/capture}
            {dropdown content=$smarty.capture.tools_list}
            {include file="buttons/save.tpl" but_name="dispatch[profiles.update_departments]" but_role="action" but_target_form="departments_form" but_meta="cm-submit"}
        {/capture}

        {capture name="adv_buttons"}
            {hook name="departments:adv_buttons"}
                {include file="common/tools.tpl" tool_href="profiles.add_department" prefix="top" hide_tools="true" title="Добавить отдел" icon="icon-plus"}
            {/hook}
        {/capture}

    </form>

{/capture}



{hook name="collections:manage_mainbox_params"}
{$page_title = "Отделы"}
{$select_languages = true}
{/hook}

{include file="common/mainbox.tpl"
         title=$page_title
         content=$smarty.capture.mainbox
         buttons=$smarty.capture.buttons
         adv_buttons=$smarty.capture.adv_buttons
         select_languages=$select_languages}

{** ad section **}