<?
add_filter('acf/blocks/wrap_frontend_innerblocks', 'acf_should_wrap_innerblocks', 10, 2);
function acf_should_wrap_innerblocks($wrap, $name)
{
    if ($name == 'lb/step-list' || $name == 'lb/step-list-item' || $name == 'lb/step-list-item-title') {
        return false;
    }

    return true;
}