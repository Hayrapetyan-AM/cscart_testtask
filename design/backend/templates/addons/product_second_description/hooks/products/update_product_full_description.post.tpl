
    <div class="control-group">
        {component name="configurable_page.field" entity="products" tab="detailed" section="information" field="product_second_description]"}
            <div class="control-group cm-no-hide-input">
                <label class="control-label" for="elm_product_product_second_descr">{__("product_second_description")}:</label>
                <div class="controls">
                    <div class="input-group {$input_append_wysiwyg_if_shared_product}">
                        {$is_block_manager_available = $runtime.company_id || ("MULTIVENDOR"|fn_allowed_for)}
                        <textarea id="elm_product_product_second_descr"
                                  name="product_data[product_second_description]"
                                  cols="55"
                                  rows="8"
                                  class="cm-wysiwyg input-large"
                                  data-ca-is-block-manager-enabled="{fn_check_view_permissions("block_manager.block_selection", "GET")|intval}"
                                  data-ca-is-block-manager-available="{$is_block_manager_available}"
                        >{$product_data.second_description}</textarea>
                        {include file="components/append_language.tpl"
                        hide_inputs=$hide_inputs_if_shared_product
                        simple_tooltip=true
                        }
                        {include file="buttons/update_for_all.tpl"
                        display=$show_update_for_all
                        object_id="product_second_description"
                        name="update_all_vendors[product_second_description]"
                        component="products.product_second_description"
                        hide_inputs=$hide_inputs_if_shared_product
                        append=true
                        }
                    </div>
                    {if $view_uri}
                        {include
                        file="buttons/button.tpl"
                        but_href="customization.update_mode?type=live_editor&status=enable&frontend_url={$view_uri|urlencode}{if "ULTIMATE"|fn_allowed_for}&switch_company_id={$product_data.company_id}{/if}"
                        but_text=__("edit_content_on_site")
                        but_role="action"
                        but_meta="btn-small btn-live-edit cm-post"
                        but_target="_blank"
                        }
                    {/if}
                </div>
            </div>
        {/component}
    </div>
