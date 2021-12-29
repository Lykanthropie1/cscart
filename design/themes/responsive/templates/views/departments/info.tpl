<div id="product_features_{$block.block_id}">
    <div class="ty-feature">
        {if $department_data.main_pair}
            <div class="ty-feature__image">
                {include
                file="common/image.tpl"
                no_ids=true
                images=$department_data.main_pair
                image_width=$settings.Thumbnails.product_lists_thumbnail_width
                image_height=$settings.Thumbnails.product_lists_thumbnail_height
                lazy_load=true}
            </div>
        {/if}
            <div class="ty-feature__description ty-wysiwyg-content">
                {$department_data.description nofilter}
            </div>
    </div>

    {if $products}
        {assign var="layouts" value=""|fn_get_products_views:false:0}
        {if $layouts.$selected_layout.template}
            {include file="`$layouts.$selected_layout.template`" columns=$settings.Appearance.columns_in_products_list}
        {/if}
    {else}
        <p class="ty-no-items">{__("text_no_products")}</p>
    {/if}
    <!--product_features_{$block.block_id}--></div>
{capture name="mainbox_title"}{$department_data.department nofilter}{/capture}