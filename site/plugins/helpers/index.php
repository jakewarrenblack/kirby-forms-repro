<?php

function get_padding_classes($padding_top, $padding_bottom)
{
    $padding_top_value = '';
    $padding_bottom_value = '';

    switch ($padding_top) {
        case 'none':
            $padding_top_value = '';
            break;
        case 'small':
            $padding_top_value = 'var(--space-s)';
            break;
        case 'medium':
            $padding_top_value = 'var(--space-m)';
            break;
        case 'large':
            $padding_top_value = 'var(--space-large)';
            break;
        case 'xlarge':
            $padding_top_value = 'var(--space-xl)';
            break;
    }

    switch ($padding_bottom) {
        case 'none':
            $padding_bottom_value = '';
            break;
        case 'small':
            $padding_bottom_value = 'var(--space-s)';
            break;
        case 'medium':
            $padding_bottom_value = 'var(--space-m)';
            break;
        case 'large':
            $padding_bottom_value = 'var(--space-large)';
            break;
        case 'xlarge':
            $padding_bottom_value = 'var(--space-xl)';
            break;
    }

    return [
        'padding_top' => $padding_top_value,
        'padding_bottom' => $padding_bottom_value
    ];
}
