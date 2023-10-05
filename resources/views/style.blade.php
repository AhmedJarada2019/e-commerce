<?php

$columnCount = $data->product_count_inrow;
$gridTemplateColumns = str_repeat('1fr ', $columnCount);
echo $gridTemplateColumns;

echo "
    .bg-primary,
    .text-primary,
    .btn-primary {
        background-color:  $data->website_color  !important
    }
    .item-price{
        background-color:  $data->prices_background_color!important;
        color:  $data->prices_color  !important
    }
    .content-header-title{
        color:$data->category_text_color_title !important
    }
    .content-header{
        background-color : $data->category_background_color_title
    }
    @media (min-width: 992px) {
  .ecommerce-application .wishlist-items.grid-view {
    grid-template-columns :
    $gridTemplateColumns
     ;
  }
}
    ";
?>
{{-- @dd($gridTemplateColumns) --}}
