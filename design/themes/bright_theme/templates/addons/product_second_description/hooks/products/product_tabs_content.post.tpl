{hook name="products:product_tabs_content"}

{assign var="second_description" value=$product.product_second_description}

{if $second_description}
    <div class="ty-tabs__content" id="product_second_description_tab_content">
        <p>{$second_description}</p>
    </div>
{/if}

{/hook}
