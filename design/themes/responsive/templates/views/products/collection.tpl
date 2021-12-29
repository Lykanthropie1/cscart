<div id="product_features_{$block.block_id}">
    <div class="ty-feature">
        {if $collection_data.main_pair}
            <div class="ty-feature__image">
                {include
                file="common/image.tpl"
                no_ids=true
                images=$collection_data.main_pair
                image_width=$settings.Thumbnails.product_lists_thumbnail_width
                image_height=$settings.Thumbnails.product_lists_thumbnail_height
                lazy_load=true}
            </div>
        {/if}
            <div class="ty-feature__description ty-wysiwyg-content">
                {$collection_data.description nofilter}
            </div>
    </div>

    {if $products}

        {assign var="layouts" value=""|fn_get_products_views:false:0}
        {if $layouts.$selected_layout.template}
            {include file="`$layouts.$selected_layout.template`" columns=$settings.Appearance.columns_in_products_list}
        {/if}

    {else}
        <p class="ty-no-items">{__("text_no_workers")}</p>
    {/if}
    <!--product_features_{$block.block_id}--></div>
{capture name="mainbox_title"}{$collection_data.collection nofilter}{/capture}